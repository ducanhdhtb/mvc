<?php 
switch ($act) {
	case 'edit':
	include_once("controller/edit_user.php");
	break;
	case 'del':
	include_once('controller/del_user.php');
	break;
	case 'add':
	include_once('controler/add_user.php');
	break;
	

}

?>