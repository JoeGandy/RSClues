<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	If you wish to add to this configuration please use a reliable CDN source such as:
	http://cdnjs.com/   
*/

/*  CDN Hosted @ https://developers.google.com/speed/libraries/devguide  */

	//Include jQuery
	$config['tbm_jquery'] = true;
	$config['tbm_jquery_version'] = '1.11.1';

	//Include jQuery Mobile
	$config['tbm_jquery_mobile'] = false;
	$config['tbm_jquery_mobile_version'] = '1.4.2';

	//Include jQuery UI
	$config['tbm_jquery_ui'] = false;
	$config['tbm_jquery_ui_version'] = '1.10.4';


/*  CDN Hosted @ http://www.bootstrapcdn.com/  */
	
	//Include BootStrap
	$config['tbm_bootstrap'] = true; 
	$config['tbm_bootstrap_version'] = '3.1.1';

/*  CDN Hosted @ http://cdnjs.com/  */
    
    //Include DataTables
	$config['tbm_datatables'] = false;
	$config['tbm_datatables_version'] = '1.10.0';