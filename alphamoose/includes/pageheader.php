<?
//this should update all clinet-side links + includes
$admin_url = "http://ds.rpitv.org/mike_admin";
include_once("/var/www/ds/config/config.php"); 
include_once("/var/www/ds/login.php");
include_once("/var/www/ds/data.php");
include_once("/var/www/ds/feeds.php");
include_once("/var/www/ds/screens.php");
include_once("/var/www/ds/upload/upload.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>DS Admin v2.0 - <? actiontitle(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo $admin_url ?>/css/admin_new.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $admin_url ?>/css/menu_tabs.css" />

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?php echo $admin_url ?>/includes/pngfix.js"></script>
<![endif]-->

<script type="text/javascript" src="<?php echo $admin_url ?>/niftycube.js"></script>
<script type="text/javascript">
window.onload=function(){
Nifty("div.logo_box", "bottom");
Nifty("div.menu_box");
}
</script>