<?php
	require_once 'Core/Start.php';
	#var_dump(_DataSet('localhost', 'root', '', 'TheOne', 'Users', 'id:null,first_name:Patate,last_name:Pilées,password:Menoume,localisation:Montréal,username:Test,email:test@test.com'));
	#var_dump(_DatasGet('localhost', 'root', '', 'TheOne', 'Users', 'last_name'));
	$Home = new Page('Test');
    $Home->_setPageContent('Blablablablablabla');
    $Home->_setPageTitle('Patate');
	//$Home->_postPage();
    $Home->_getPageId('Test');
?>