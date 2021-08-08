<?php
  $is_included = get_included_files();
  if( $is_included[0] == (__FILE__) ) die('You have no permission for direct access to this file');
  require_once(dirname(dirname(dirname(__FILE__))).'/include/inc_load.php');  
 if(!plugin_exsists('dgoods')){
  mysql_query("ALTER TABLE ".$table_prefix."products ADD pl_digital tinyint(1) NOT NULL DEFAULT 0, 
  ADD pl_digital_code varchar(20) CHARACTER SET utf8 NOT NULL,
  ADD pl_digital_code_name varchar(30) CHARACTER SET utf8 NOT NULL,
  ADD pl_digital_original_name varchar(250) CHARACTER SET utf8 NOT NULL,
  ADD pl_digital_not_available tinyint(1) NOT NULL DEFAULT 0"); 
  mysql_query("CREATE TABLE IF NOT EXISTS ".$table_prefix."customers_downloads (
	id bigint(20) NOT NULL AUTO_INCREMENT,
	id_order bigint(20) NOT NULL,
	download_code varchar(20) CHARACTER SET utf8 NOT NULL,	
	file_name varchar(250) CHARACTER SET utf8 NOT NULL,	
	available tinyint(1) NOT NULL DEFAULT 0,	
	id_client bigint(20) NOT NULL,	
	expiration_date datetime NULL,	
	guest tinyint(1) NOT NULL DEFAULT 0,	
	session_guest varchar(20) CHARACTER SET utf8 NOT NULL,		  
	PRIMARY KEY (id)
  ) DEFAULT CHARSET=utf8");  
  $long_name = 'Sell Digital Goods';
  $shortname = 'dgoods';
  $description = 'This plugin allows you to sell digital goods with BootComemrce.';
  $version = '1.2.0'; 
  $bc_version_required = '3.2.1';
   execute('insert into '.$table_prefix.'plugins (name,shortname,version,description,min_bc_version_required) values ("'.$long_name.'","'.$shortname.'","'.$version.'","'.str_db_content($description).'","'.$bc_version_required.'")');
 }else{
  $version = '1.2.0'; 
   execute('update '.$table_prefix.'plugins set version =  "'.$version.'" where shortname = "dgoods"');	 
 }
?>