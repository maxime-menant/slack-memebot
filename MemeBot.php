<?php

require_once 'MemeBot/Memeable.php';
require_once 'MemeBot/MemeClass.php';
require_once 'MemeBot/Meme.php';

$meme = new MemeBot\MemeClass;

// Get Request
$trigger = trim($_POST['trigger_word']);
$text    = trim($_POST['text']);
$channel = trim($_POST['channel_id']);
$user    = trim($_POST['user_name']);

if($text == '') {
	sendHtmlResponse(
    "Available memes:
    One does not simply <text> - Lord of the Rings Boromir
    Y U NO <text> - Y U NO Guy
    I don't always <text> but when i do <text> - The Most Interesting man in the World
    Not sure if <text> or <text> - Futurama Fry
    Brace yourselves <text> - Brace Yourselves X is Coming (Imminent Ned, Game of Thrones)
    Yo dawg <text> so <text> - Yo Dawg Heard You (Xzibit)
    <text> that would be great - Bill Lumbergh from Office Space
    What if I told you <text> - Matrix Morpheus
    <text> all the <text> - X all the Y
    <text> everywhere - buzz leclair Everywhere
    <text> too damn high - Too damn high
    ");
}


$returned_meme = $meme->generateMeme($text);

slack($returned_meme, $user, $channel);
sendResponse($text);

exit;

/**
 * Send JSON Response
 *
 * @param $response
 */
function sendResponse($response)
{
    //header('Content-Type: application/json');
    // die(json_encode(array(
    //     'text' => "<".$response.">",
    //     'unfurl_links' => true
    // )));
  header("HTTP/1.1 200 OK");
  die("/meme ".$response);
}

function sendHtmlResponse($response)
{
  die($response);
}

// (string) $message - message to be passed to Slack
// (string) $room - room in which to write the message, too
// (string) $icon - You can set up custom emoji icons to use with each message
function slack($message, $username, $channel) {
  $data = "payload=" . json_encode(array(
          "text" =>  urlencode("<".$message.">"),
          "username" => $username,
          "channel"  => $channel
      ));

  // You can get your webhook endpoint from your Slack settings
  $ch = curl_init("https://hooks.slack.com/services/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");
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);

  return $result;
}

