<?php
/*
    The MIT License (MIT)
    Copyright (c) 2015 Frédéric Nault

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    THE SOFTWARE.
 */
	require_once 'Core/Start.php';
	#var_dump(_DataSet('localhost', 'root', '', 'TheOne', 'Users', 'id:null,first_name:Patate,last_name:Pilées,password:Menoume,localisation:Montréal,username:Test,email:test@test.com'));
	#var_dump(_DatasGet('localhost', 'root', '', 'TheOne', 'Users', 'last_name'));
	$Home = new Page('Test');
    $Home->_setPageContent('Blablablablablabla');
    $Home->_setPageTitle('Patate');
	//$Home->_postPage();
    $Home->_getPageId('Test');
?>