<?php
  $is_included = get_included_files();
  if( $is_included[0] == (__FILE__) ) die('You have no permission for direct access to this file');
  require_once(dirname(dirname(dirname(__FILE__))).'/include/inc_load.php');
 if(!plugin_exsists('businesstype')){
  mysql_query("ALTER TABLE ".$table_prefix."products ADD rprice decimal(65,10) NOT NULL,
  ADD rpdiscount decimal(65,10) NOT NULL,
  ADD roffer decimal(65,10) NOT NULL,
  ADD rodiscount decimal(65,10) NOT NULL");
  mysql_query("ALTER TABLE ".$table_prefix."clients ADD retailer tinyint(1) NOT NULL DEFAULT 0,
  ADD retailer_request tinyint(1) NOT NULL DEFAULT 0,
  ADD retailer_denied tinyint(1) NOT NULL DEFAULT 0,
  ADD retailer_denied_message longtext CHARACTER SET utf8 NOT NULL");
  $long_name = 'Business Type';
  $shortname = 'businesstype';
  $description = 'This plugin allows you to have a B2B/B2c business for your BootCommerce.<br/>Different Price for Clients and Retailers.<br/>Complete management of Customers Status.';
  $version = '1.2.0';
  $bc_version_required = '3.2.1';
   execute('insert into '.$table_prefix.'plugins (name,shortname,version,description,min_bc_version_required) values ("'.$long_name.'","'.$shortname.'","'.$version.'","'.str_db_content($description).'","'.$bc_version_required.'")');
 }else{
  $version = '1.2.0';
   execute('update '.$table_prefix.'plugins set version =  "'.$version.'" where shortname = "businesstype"');
 }

 $result = execute('select system from '.$table_prefix."settings");
 $rs = mysql_fetch_array($result);
 $array_settings = unserialize($rs[0]);
 $array_settings['business_type'] = 'bc';
 execute("update ".$table_prefix."settings set system = '".serialize($array_settings)."'");
?>