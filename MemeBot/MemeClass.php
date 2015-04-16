<?php namespace Memebot;

class MemeClass implements Memeable
{

	public function matchMeme($text) {

		$final_text = array(
			"text0" => '',
			"text1" => '',
			"template_id" => ''
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
        //$final_text['text1'] = $matches[2];
        $final_text['template_id'] = '718432';

        return $final_text;
    }



	}

	public function generateMeme($text)
	{
		$args = $this->matchMeme($text);

		$url = 'https://api.imgflip.com/caption_image?template_id=' . urlencode($args['template_id']) . '&username=intellimeme&password=intellimeme&text0=' . rawurlencode($args['text0']) . '&text1=' . rawurlencode($args['text1']). '';

		$response = $this->sendRequest($url);
		return $response->data->url;
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
