<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clue extends CI_Controller {

	public function index()
	{	
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		$this->load->database();
		if(!isset($_GET) || !$_GET)
			die("No parameters");

		$id = sanitizeString($_GET['id']);
		
		$query = $this->db->query("SELECT clues.*, clue_levels.clue_level as level_text, clue_type.clue_type as type_text FROM clues INNER JOIN clue_levels ON clue_levels.id = clues.clue_level INNER JOIN clue_type ON clue_type.id = clues.type_id WHERE clues.id = '".$id."'");
		$result = $query->result_array();
		
		$this->load->view("clue", $result[0]);

	}
}