<?php

if(!function_exists('sanitizeString'))
{
	function sanitizeString($value = ''){

	    $value = trim($value);
	    if (get_magic_quotes_gpc()) { $value = stripslashes($value); }

	    $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
	    $value = strip_tags($value);
	    $value = mysqli_real_escape_string(get_mysqli(), $value);
	    $value = htmlspecialchars($value);

	    return $value;
	}
}



if(!function_exists('get_mysqli'))
{
	function get_mysqli() { 
	    $db = (array)get_instance()->db;
	    return mysqli_connect('localhost', $db['username'], $db['password'], $db['database']);
	} 
}