<?php if(config_item('tbm_jquery')){?>
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/<?php echo config_item('tbm_jquery_version');?>/jquery.min.js"></script>
<?php }?>

<?php if(config_item('tbm_jquery_mobile')){?>
	<!-- jQuery Mobile -->
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/<?php echo config_item('tbm_jquery_mobile_version');?>/jquery.mobile.min.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquerymobile/<?php echo config_item('tbm_jquery_mobile_version');?>/jquery.mobile.min.js"></script>
<?php }?>

<?php if(config_item('tbm_jquery_ui')){?>
	<!-- jQuery UI -->
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/<?php echo config_item('tbm_jquery_ui_version');?>/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/<?php echo config_item('tbm_jquery_ui_version');?>/jquery-ui.min.js"></script>
<?php }?>

<?php if(config_item('tbm_bootstrap')){?>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/<?php echo config_item('tbm_bootstrap_version');?>/css/bootstrap.min.css" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/<?php echo config_item('tbm_bootstrap_version');?>/js/bootstrap.min.js"></script>
<?php }?>

<?php if(config_item('tbm_datatables')){?>
	<!-- DataTables -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/<?php echo config_item('tbm_datatables_version');?>/js/jquery.dataTables.min.js"></script>
<?php }?>