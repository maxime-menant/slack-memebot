<?php namespace Memebot;

class MemeClass implements Memeable
{

	public function matchMeme($text) {

		$final_text = array(
			"text0" => '',
			"text1" => '',
			"template_id" => '',
            "isMeme" => true
		);

		// This is going to be a mess but we have no choice

		// Y U NO?!
		if (preg_match('/(y u no) (.+)/i',$text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61527';

			return $final_text;
		}

		// I don't always
		if (preg_match('/(i don\'?t always .*) (but when i do,? .*)/i',$text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61532';

			return $final_text;
		}

		// One does not simply
		if(preg_match('/(one does not simply) (.*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61579';

			return $final_text;
		}

		// Not sure if FRY
		if(preg_match('/(not sure if .*) (or .*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61520';

			return $final_text;
		}

		// Brace Yourselves
		if(preg_match('/(brace yoursel[^\s]+) (.*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61546';

			return $final_text;
		}

		// Lumberg
		if(preg_match('/(.*) (that would be great|that?d be great)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '563423';

			return $final_text;
		}

		// Yo dawg
		if(preg_match('/(yo dawg .*) (so .*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '101716';

			return $final_text;
		}

		// Yo dawg
		if(preg_match('/(what if i told you) (.*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '100947';

			return $final_text;
		}

		// Aint nobody have time for that
    if (preg_match('/(nobody have time for) (.*)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[2];
        $final_text['text1'] = 'Ain\'t nobody have time for that';
        $final_text['template_id'] = '442575';

        return $final_text;
    }

		// X all the Y
		if (preg_match('/(.* all the .*)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['template_id'] = '61533';

			return $final_text;
		}

		// Buzz - bitches, bitches everywhere
		if (preg_match('/(.*,) (.* everywhere)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '347390';

			return $final_text;
		}

		// Too damn high
		if (preg_match('/(.*) ((is|are|was|were) too damn high)/i', $text, $matches) === 1) {

			$final_text['text0'] = $matches[1];
			$final_text['text1'] = $matches[2];
			$final_text['template_id'] = '61580';

			return $final_text;
		}

		// That's was a lie
    if (preg_match('/(.*) \| (.* (determines?|proves?) that was a lie)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '444501';

        return $final_text;
    }

    // You should feel bad
    if (preg_match('/(.*) (and you should feel bad)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '35747';

        return $final_text;
    }

		// Too afraid to ask
    if (preg_match('/(.*) (and (at this point)? i(\s|\')?am too afraid to ask)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = "and at this point I\'am too afraid to ask";
        $final_text['template_id'] = '24557067';

        return $final_text;
    }


    // Shut up and take my money
    if (preg_match('/(.*) (shut up and take my money)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '176908';

        return $final_text;
    }


    // You get an X and you get an X
    if (preg_match('/(you .*, and you .*) (everybody gets? .*)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '852675';

        return $final_text;
    }


		// Flip the table
    if (preg_match('/flip (.*) \| (.*)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '1380694';

        return $final_text;
    }

    // back in my day
    if (preg_match('/(back in my day) (.*)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '718432';

        return $final_text;
    }

    // And it's gone
    if (preg_match('/(.*) (a+n+d+ it\'?s gone)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '766986';

        return $final_text;
    }

    // am i the only one around here
    if (preg_match('/(am i the only one around here) (.*)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '259680';

        return $final_text;
    }


    // nobody bats an eye <text> everyone loses their minds - Heath Ledger Joker
    if (preg_match('/(.* bats an eye) (.* loses their minds?)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = $matches[2];
        $final_text['template_id'] = '1790995';

        return $final_text;
    }

    // Ya'll got anymore of that
    if (preg_match('/(you have more of (that|them)) (.*)/i', $text, $matches) === 1) {

       $final_text['text0'] = "Ya\'ll got anymore of " . $matches[2];
       $final_text['text1'] = $matches[3];
       $final_text['template_id'] = '13424299';

       return $final_text;
    }

    // anakin - don't underestimate my power
    if (preg_match('/(.*) (you underestimate my power)/i', $text, $matches) === 1) {

       $final_text['text0'] = $matches[1];
       $final_text['text1'] = "You underestimate my power";
       $final_text['template_id'] = '284353';

       return $final_text;
    }


    // You the real MVP
    if (preg_match('/(.*) (you are the mvp)/i', $text, $matches) === 1) {

       $final_text['text0'] = $matches[1];
       $final_text['text1'] = "You the real MVP";
       $final_text['template_id'] = '15878567';

       return $final_text;
    }

    // anakin - don't underestimate my power
    if (preg_match('/(you underestimate my power)/i', $text, $matches) === 1) {

        $final_text['text0'] = "";
        $final_text['text1'] = "You underestimate my power";
        $final_text['template_id'] = '284353';

        return $final_text;
    }

            // I am not even mad, it's amazing
    if (preg_match('/(.*) (I(\'?| )am|I\'?m not mad)/i', $text, $matches) === 1) {

        $final_text['text0'] = $matches[1];
        $final_text['text1'] = "I'm not even mad, it's amazing";
        $final_text['template_id'] = '10893056';

        return $final_text;
    }

    // I am not even mad, it's amazing
    if (preg_match('/(I(\'?| )am|I\'?m not mad)/i', $text, $matches) === 1) {

        $final_text['text0'] = "";
        $final_text['text1'] = "I'm not even mad, it's amazing";
        $final_text['template_id'] = '10893056';

        return $final_text;
    }

    // On en a gros
    if (preg_match('/on en a gros/i', $text, $matches) === 1) {

        $final_text['text0'] = "https://33.media.tumblr.com/c6d5045fd55e6e5db4657e9e59faaae3/tumblr_n5o5n0mqqg1tc3kh4o1_500.gif";
        $final_text['isMeme'] = false;

        return $final_text;
    }

	}

	public function generateMeme($text)
	{
		$args = $this->matchMeme($text);

        if ($args['isMeme'] == true) {
            $url = 'https://api.imgflip.com/caption_image?template_id=' . urlencode($args['template_id']) . '&username=intellimeme&password=intellimeme&text0=' . rawurlencode($args['text0']) . '&text1=' . rawurlencode($args['text1']). '';

            $response = $this->sendRequest($url);
            return $response->data->url;
        } else {
            $url = $args['text0'];
            return $url;
        }
	}


	public function sendRequest($url)
	{
	$response = array();

        if (ini_get('allow_url_fopen')) {
            $response = file_get_contents($url);
        } elseif (function_exists('curl_version')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);
        }

        return json_decode($response);
	}

}
