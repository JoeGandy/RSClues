<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$update = false;

		if(!$update)
			$this->load->view('home');
		else
			$this->load->view('update2');

	}

	public function about()
	{
		$this->load->view('about');
	}

	public function changelog()
	{
		$this->load->view('changelog');
	}

	public function get_page($page)
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

	public function update()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		$debug=true;
		$show_emote_clue_output=false;
		$show_anagram_clue_output=false;
		$show_challenge_scrolls_output=false;
		$show_cipher_output=false;
		$show_cryptic_clue_output=false;
		$show_coord_clue_output=false;
		$show_clue_array=false;
		$echo_query=true;
		$run_query=true;

		$target_table = "clues";


		if($debug) echo "DEBUG: Loading simple_html_dom library"."<br>";

		require_once APPPATH.'/libraries/simple_html_dom.php';

		if($debug) echo "DEBUG: Loading debug library"."<br>";

		require_once APPPATH.'/libraries/vayes_helper.php';

		if($debug) echo "DEBUG: Loading database"."<br>";
		$this->load->database();
		$this->db->from($target_table); 

		if($debug) echo "DEBUG: Clearing database table: ".$target_table."<br>";
		$this->db->empty_table();

		/********* Emote Clues **********************/

		$clue_type = 1;	//The type so we can use $this->get_page(type)
		$clue_name = 'Emote Clues'; //Just a nice name we can use for styling/debug message
		$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues = array();
		$clues[$clue_type] = array();

		foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
			if(count($element->find('td')) == $columns){
				$clue = array();
				$clue['clue_answer'] = "";
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

		if($show_emote_clue_output) $this->pre($clues);


		/********* Anagram Clues **********************/

		$clue_type = 3;	//The type so we can use $this->get_page(type)
		$clue_name = 'Anagrams'; //Just a nice name we can use for styling/debug message
		$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues[$clue_type] = array();

		foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
			if(count($element->find('td')) == $columns){
				$clue = array();
				$clue['clue_answer'] = "";
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

		if($show_anagram_clue_output) $this->pre($clues[$clue_type]);


		/********* Challenge scrolls Clues **********************/

		$clue_type = 5;	//The type so we can use $this->get_page(type)
		$clue_name = 'Challenge scrolls'; //Just a nice name we can use for styling/debug message
		$columns = 3; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues[$clue_type] = array();

		foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
			if(count($element->find('td')) == $columns){
				$clue = array();
				$clue['clue_answer'] = "";
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

		if($show_challenge_scrolls_output) $this->pre($clues[$clue_type]);


		/********* Cipher Clues **********************/

		$clue_type = 6;	//The type so we can use $this->get_page(type)
		$clue_name = 'Cipher Clues'; //Just a nice name we can use for styling/debug message
		$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues[$clue_type] = array();

		foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
			if(count($element->find('td')) == $columns){
				$clue = array();
				$clue['clue_answer'] = "";
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

		if($show_cipher_output) $this->pre($clues[$clue_type]);


		/********* Cryptic Clues **********************/

		$clue_type = 2;	//The type so we can use $this->get_page(type)
		$clue_name = 'Cryptic Clues'; //Just a nice name we can use for styling/debug message
		$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues[$clue_type] = array();

		foreach($html->find('#mw-content-text > table > tbody > tr') as $element){
			if(count($element->find('td')) == $columns){
				$clue = array();
				$clue['clue_answer'] = "";
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

		if($show_cryptic_clue_output) $this->pre($clues[$clue_type]);


		/********* Coordiante Clues **********************/

		$clue_type = 4;	//The type so we can use $this->get_page(type)
		$clue_name = 'Coordiante Clues'; //Just a nice name we can use for styling/debug message
		$columns = 5; //The number of columns on the wiki page so we know what we're grabbing is right

		if($debug) echo "DEBUG: Loading data for : ".$clue_name.", from ".$this->get_page($clue_type)."<br>";
		$html = file_get_html($this->get_page($clue_type));

		$clues[$clue_type] = array();

		$counter = 0;
		foreach($html->find('#mw-content-text > table') as $element){
			if($counter++ == 0) continue;
			$clue = array();
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

		if($show_coord_clue_output) $this->pre($clues[$clue_type]);

		if($show_clue_array) $this->pre($clues);

		for($clue_type=1;$clue_type<7;$clue_type++){
			//id = int
			//type_id = int
			//clue_text = string
			//clue_level = int
			//clue_answer_text = string
			//clue_img = string
			//y_1 = int
			//y_2 = int
			//y_direction = char
			//x_1 = int
			//x_2 = int
			//x_direction = char
			//clue_map = string


			foreach($clues[$clue_type] as $clue){
				$qry = "INSERT INTO clues VALUES (null,";
				
				$qry .= $clue_type.",";

				if(isset($clue['clue_text']) && $clue['clue_text']){
					$qry .= "'".urlencode(str_replace("\n", "", str_replace("</p>", "", $clue['clue_text']))) ."',";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['clue_level']) && trim(preg_replace('/[\s\t\n\r\s]+/', ' ', $clue['clue_level'])) && is_numeric(trim(preg_replace('/[\s\t\n\r\s]+/', ' ', $clue['clue_level'])))){
					$qry .= trim(preg_replace('/[\(\)\s\t\n\r\s]+/', ' ', $clue['clue_level'])).",";
				}else{
					$qry .= "0,";
				}

				if(isset($clue['clue_answer']) && $clue['clue_answer']){
					$qry .= "'".urlencode($clue['clue_answer'])."',";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['clue_image']) && $clue['clue_image']){
					$qry .= "'".urlencode($clue['clue_image'])."',";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['y_1']) && $clue['y_1']){
					$qry .= $clue['y_1'].",";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['y_2']) && $clue['y_2']){
					$qry .= $clue['y_2'].",";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['y_direction'])){
					$qry .= "'".$clue['y_direction']."',";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['x_1']) && $clue['x_1']){
					$qry .= $clue['x_1'].",";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['x_2']) && $clue['x_2']){
					$qry .= $clue['x_2'].",";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['x_direction'])){
					$qry .= "'".$clue['x_direction']."',";
				}else{
					$qry .= "null,";
				}

				if(isset($clue['clue_map']) && $clue['clue_map']){
					$qry .= "'".urlencode($clue['clue_map'])."');";
				}else{
					$qry .= "null);";
				}

				if($echo_query) echo $qry."<br>";
				
				if($run_query) $this->db->query($qry);

			}

		}


		$total = 0;
		for($clue_type=1;$clue_type<7;$clue_type++){
			$total += count($clues[$clue_type]);
		}
			echo '<br>'.$total;
	}

	private function pre($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

	public function get_clues()
	{
		header('Content-Type: application/json');
		$this->load->database();

		$q = "";

		if(isset($_GET) && $_GET){
			$q = $_GET['q'];
		}

		$q = urlencode(sanitizeString($q));



		if($q)
			$query = $this->db->query("SELECT clues.id as data, clues.clue_text as value FROM clues WHERE clues.clue_text LIKE '%".$q."%'");
		else
			$query = $this->db->query("SELECT clues.id as data, clues.clue_text as value FROM clues");

		

		$output = '[';

		$x = 0;
		foreach($query->result_array() as $item){
			if($x != 0){
				$output .=  ",";
			}
			$x++;
			$output .= '{ "id" : "'.$item['data'].'", "value" : "'.urldecode($item['value']).'" }';
		}
		$output .= ']';

		if($x == 0){
			$output = '["No results were found"]';
		}

		echo $output;
	}

	public function error_404()
	{
		echo '404';
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */