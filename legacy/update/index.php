<?php

function get_page($page)
{
	$old=false;
	$url;

	if($page == 3)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Anagrams";
	if($page == 2)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Cryptic_clues";
	if($page == 1)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Emote_clues";
	if($page == 4)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Coordinates";
	if($page == 5)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Challenge_scrolls";
	if($page == 6)
		$url = "http://2007.runescape.wikia.com/wiki/Treasure_Trails/Guide/Ciphers";

	if($old == true)
		echo file_get_contents($url);
	else
		return $url;
}

function update()
{
	return;//Remove to actually be able to run this

	$debug=false;;
	$show_emote_clue_output=false;
	$show_anagram_clue_output=false;
	$show_challenge_scrolls_output=false;
	$show_cipher_output=false;
	$show_cryptic_clue_output=false;
	$show_coord_clue_output=false;
	$show_clue_array=false;
	$show_clue_array_as_json=true;
	$echo_query=false;

	$target_table = "clues";


	if($debug == true){
    	ini_set('display_errors', 'On');      
	}else{
    	ini_set('display_errors', 'Off');      
	}

	if($debug) echo "DEBUG: Loading simple_html_dom library"."<br>";

	require_once 'simple_html_dom.php';


	/********* Emote Clues **********************/

	$clue_type = 1;	//The type so we can use get_page(type)
	$clue_name = 'Emote Clue'; //Just a nice name we can use for styling/debug message
	$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues = array();
	$clues[$clue_type] = array();

	foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
		if(count($element->find('td')) == $columns){
			$clue = array();
			$clue['clue_answer'] = "";
			$clue['clue_type_name'] = $clue_name;
			$clue['clue_type'] = $clue_type;
			foreach($element->find('td') as $count => $item){
				switch($count){
					case 0:
					if($item->plaintext == " ") continue;
						$clue['clue_text'] = $item->plaintext;
					break;
					case 1:
						foreach($item->find('img') as $img){
							if(substr($img->src, 0, 4) != "data")
								$clue['clue_answer'] .= "<img height='".$img->height."' width='".$img->width."'src='" . $img->src ."'/>";
						}
					break;
					case 2:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] .= "<br>".$item->plaintext;
					break;
					case 3:
						foreach($item->find('img') as $img){
							$extract_img = explode("scale-to-width-down", $img->src);
							$clue['clue_image'] = "<img src='" .$extract_img[0]."'/>";
						}
					break;
					case 4:
						if($item->plaintext == " ") continue;
						$clue['clue_level'] = $item->plaintext;
					break;
				}
				//echo $count." > ".$item->plaintext.'<br>';
			}
			if(array_filter($clue)) {
				array_push($clues[$clue_type], $clue);
			}
		}
	}

	if($show_emote_clue_output) pre($clues);


	/********* Anagram Clues **********************/

	$clue_type = 3;	//The type so we can use get_page(type)
	$clue_name = 'Anagram'; //Just a nice name we can use for styling/debug message
	$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues[$clue_type] = array();

	foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
		if(count($element->find('td')) == $columns){
			$clue = array();
			$clue['clue_answer'] = "";
			$clue['clue_type_name'] = $clue_name;
			$clue['clue_type'] = $clue_type;
			foreach($element->find('td') as $count => $item){

				switch($count){
					case 0:
						if($item->plaintext == " ") continue;
						$clue['clue_text'] = $item->plaintext;
					break;
					case 1:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] = $item->plaintext;
					break;
					case 2:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] .= "<br>".$item->plaintext;
					break;
					case 3:
						if($item->plaintext == " ") continue;
						$clue['challenge_answer'] = $item->plaintext;
					break;
					case 4:
						if($item->plaintext == " ") continue;
						$clue['clue_level'] = $item->plaintext;
					break;
				}
				//echo $count." > ".$item->plaintext.'<br>';
			}
			if(array_filter($clue)) {
				array_push($clues[$clue_type], $clue);
			}
		}
	}

	if($show_anagram_clue_output) pre($clues[$clue_type]);


	/********* Challenge scrolls Clues **********************/

	$clue_type = 5;	//The type so we can use get_page(type)
	$clue_name = 'Challenge scroll'; //Just a nice name we can use for styling/debug message
	$columns = 3; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues[$clue_type] = array();

	foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
		if(count($element->find('td')) == $columns){
			$clue = array();
			$clue['clue_answer'] = "";
			$clue['clue_type_name'] = $clue_name;
			$clue['clue_type'] = $clue_type;
			foreach($element->find('td') as $count => $item){

				switch($count){
					case 0:
						if($item->plaintext == " ") continue;
						$clue['clue_npc'] = $item->plaintext;
					break;
					case 1:
						if($item->plaintext == " ") continue;
						$clue['clue_text'] = $item->plaintext;
					break;
					case 2:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] = $item->plaintext;
					break;
				}
				//echo $count." > ".$item->plaintext.'<br>';
			}
			if(array_filter($clue)) {
				array_push($clues[$clue_type], $clue);
			}
		}
	}

	if($show_challenge_scrolls_output) pre($clues[$clue_type]);


	/********* Cipher Clues **********************/

	$clue_type = 6;	//The type so we can use get_page(type)
	$clue_name = 'Cipher Clue'; //Just a nice name we can use for styling/debug message
	$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues[$clue_type] = array();

	foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
		if(count($element->find('td')) == $columns){
			$clue = array();
			$clue['clue_answer'] = "";
			$clue['clue_type_name'] = $clue_name;
			$clue['clue_type'] = $clue_type;
			foreach($element->find('td') as $count => $item){
				switch($count){
					case 0:
						if($item->plaintext == " ") continue;
						$clue['clue_text'] = $item->plaintext;
					break;
					case 1:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] = $item->plaintext;
					break;
					case 2:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] .= "<br>".$item->plaintext;
					break;
					case 3:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] .= "<br><br>Challenge Answer: ".$item->plaintext;
					break;
					case 4:
						if($item->plaintext == " ") continue;
						$clue['clue_level'] = $item->plaintext;
					break;
				}
				//echo $count." > ".$item->plaintext.'<br>';
			}
			if(array_filter($clue)) {
				array_push($clues[$clue_type], $clue);
			}
		}
	}

	if($show_cipher_output) pre($clues[$clue_type]);


	/********* Cryptic Clues **********************/

	$clue_type = 2;	//The type so we can use get_page(type)
	$clue_name = 'Cryptic Clue'; //Just a nice name we can use for styling/debug message
	$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues[$clue_type] = array();

	foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
		if(count($element->find('td')) == $columns){
			$clue = array();
			$clue['clue_answer'] = "";
			$clue['clue_type_name'] = $clue_name;
			$clue['clue_type'] = $clue_type;
			foreach($element->find('td') as $count => $item){
				switch($count){
					case 0:
						if($item->plaintext == " ") continue;
						$clue['clue_text'] = $item->plaintext;
					break;
					case 1:
						if($item->plaintext == " ") continue;
						$clue['clue_answer'] = $item->plaintext;
					break;
					case 2:
						foreach($item->find('img') as $img){
							if(substr($img->src, 0, 4) != "data")
								$clue['clue_answer'] = "<img height='".$img->height."' width='".$img->width."'src='" . $img->src ."'/>&nbsp;".$clue['clue_answer'];
						}
					break;
					case 3:
						foreach($item->find('img') as $img){
							$extract_img = explode("scale-to-width-down", $img->src);
							$clue['clue_image'] = "<img src='" .$extract_img[0]."'/>";
						}
					break;
					case 4:
						if($item->plaintext == " ") continue;
						$clue['clue_level'] = $item->plaintext;
					break;
				}
				//echo $count." > ".$item->plaintext.'<br>';
			}
			if(array_filter($clue)) {
				array_push($clues[$clue_type], $clue);
			}
		}
	}

	if($show_cryptic_clue_output) pre($clues[$clue_type]);


	/********* Coordiante Clues **********************/

	$clue_type = 4;	//The type so we can use get_page(type)
	$clue_name = 'Coordiante Clue'; //Just a nice name we can use for styling/debug message
	$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

	if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".get_page($clue_type)."<br>";
	$html = file_get_html(get_page($clue_type));

	$clues[$clue_type] = array();

	$counter = 0;
	foreach($html->find('#mw-content-text > table') as $element){
		if($counter++ == 0) continue;
		$clue = array();
		$clue['clue_type_name'] = $clue_name;
		$clue['clue_type'] = $clue_type;
		foreach($element->find('td') as $count => $td){
			switch($count){
				case 0:
					if($td->plaintext == " ") continue;
					$clue['clue_text'] = trim(preg_replace('/[\s\t\n\r\s]+/', ' ', $td->plaintext));
				break;
				case 1:
					if($td->plaintext == " ") continue;
					
					$parts = explode(',',$td->plaintext);
					if(array_key_exists(1, $parts)){
						$sub_parts_1 = explode('.', $parts[0]);
						$sub_parts_2 = explode('.', $parts[1]);

						$clue['y_direction'] = substr($sub_parts_1[1], -1, 1);
						$clue['x_direction'] = substr($sub_parts_2[1], -3, 1);

						$sub_parts_1[1] = substr($sub_parts_1[1],0,-1);
						$sub_parts_2[1] = substr($sub_parts_2[1],0,-3);

						$clue['y_1'] = $sub_parts_1[0];
						$clue['y_2'] = $sub_parts_1[1];
						$clue['x_1'] = trim(preg_replace('/[\s\t\n\r\s]+/', ' ', $sub_parts_2[0]));
						$clue['x_2'] = $sub_parts_2[1];
					}

				break;
				case 2:
					if($td->plaintext == " ") continue;
					$clue['requirements'] = $td->plaintext;
				break;
				case 4:
					if($td->plaintext == " ") continue;
					$clue['clue_level'] = $td->plaintext;
				break;
				case 5:
					foreach($td->find('img') as $img){
						$extract_img = explode("scale-to-width-down", $img->src);
						$clue['clue_image'] = "<img src='" .$extract_img[0]."'/>";
					}
				break;
				case 6:
					foreach($td->find('img') as $img){
						$extract_img = explode("scale-to-width-down", $img->src);
						$clue['clue_minimap_image'] = "<img src='" .$extract_img[0]."'/>";
					}
				break;
				case 7:
					if($td->plaintext == " ") continue;
					$clue['clue_answer'] = $td->plaintext;
				break;
			}
		}
		if(array_filter($clue)) {
			array_push($clues[$clue_type], $clue);
		}
	}

	if($show_coord_clue_output) pre($clues[$clue_type]);

	if($show_clue_array) pre($clues);

	if($show_clue_array_as_json){
		$newArray = [];
		for($clue_type=1;$clue_type<7;$clue_type++){
			$newArray = array_merge($newArray, $clues[$clue_type]);
		}

		header('Content-Type: application/json');
		die("jsonstr = ".json_encode($newArray).";");
	}

	$total = 0;
	for($clue_type=1;$clue_type<7;$clue_type++){
		$total += count($clues[$clue_type]);
	}
		echo '<br>'.$total.' clues found';
}

function pre($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

update();