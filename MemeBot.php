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
    <text>, <text> everywhere - buzz leclair Everywhere
    <text> [is|are|was|were] too damn high - Too damn high
    Nobody have time for <text> - Aint nobody have time for that
    <text> | <text> determine(s)/prove(s) that was a lie
    <text> and you should feel bad - You should feel bad Zoidberg
    <text> and (at this point) I'am too afraid to ask - Afraid to ask Andy
    You <text>, and you <text> everybody gets <text> - You get an X, and you get an X. Everybody gets an X
    Flip <text> | <text> - Flip the table
    <text> shut up and take my money - Shut up and take my money
    Back in my day <text> - Grumpy old man
    <text> and it's gone - South Park Banker Guy
    Am I the only one around here <text> - The Big Lebowski
    <text> nobody bats an eye <text> everyone loses their minds - Heath Ledger Joker
    you have more of that|them <text> - Ya'll got any more of
    <text> (optional) you underestimate my power - Anakin You underestimate my power
    <text> you are the MVP - Kevin Durant You da real MVP
    <text> (optional) Im not mad - I am not even mad, it's amazing
    On en a gros - On en a gros gif
    Mind blown - Mind blown gif
    crash - Crash gif
    wtf - What the fuck gif Colbert
    magic - magic gif Shia
    ");
}


$returned_meme = $meme->generateMeme($text);

if ($returned_meme != '') {
  slack($returned_meme, $user, $channel);
  sendResponse("/meme ".$text);
} else {
  sendResponse("Meme Generation Failed, try again: /meme ".$text);
}

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
  die($response);
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

