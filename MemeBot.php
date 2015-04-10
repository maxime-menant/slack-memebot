<?php

require_once 'MemeBot/Memeable.php';
require_once 'MemeBot/MemeClass.php';
require_once 'MemeBot/Meme.php';

$meme = new MemeBot\MemeClass;

// Get Request
$trigger = trim($_POST['trigger_word']);
$text    = trim(substr($_POST['text'], strlen($trigger) + 1));

if($text == '') {
	sendResponse("One does not simply <text> - Lord of the Rings Boromir\nY U NO <text> - Y U NO Guy\nI don't always <text> but when i do <text> - The Most Interesting man in the World\nNot sure if <text> or <text> - Futurama Fry\nBrace yourselves <text> - Brace Yourselves X is Coming (Imminent Ned, Game of Thrones)\nYo dawg <text> so <text> - Yo Dawg Heard You (Xzibit)\n<text> that would be great - Bill Lumbergh from Office Space\nWhat if I told you <text> - Matrix Morpheus");
}


$returned_meme = $meme->generateMeme($text);

slack($returned_meme);
sendResponse($returned_meme);

exit;


/**
 * Send JSON Response
 *
 * @param $response
 */
function sendResponse($response)
{
    header('Content-Type: application/json');
    die(json_encode(array(
        'text' => "<".$response.">",
        'unfurl_links' => true
    )));
}

// (string) $message - message to be passed to Slack
// (string) $room - room in which to write the message, too
// (string) $icon - You can set up custom emoji icons to use with each message
public static function slack($message) {
  $data = "payload=" . json_encode(array(
          "text" =>  urlencode("<."$message.">"),
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

