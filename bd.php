<?php
/*	mysql_query ("set character_set_client='utf8'"); //���������, � ������� ������ ����� ��������� �� �������
	mysql_query ("set character_set_results='utf8'"); //���������, � ������� ����� ������ ���������
	mysql_query ("set collation_connection='utf8'"); //��������� �� ��������� ��� �����, ��� � ������ ���������� �� ����� ���������
	mysql_query('SET CHARACTER SET utf8');
	mysql_query('SET NAMES utf8');	
	*/
	$db = mysql_connect("localhost","root", "");
	mysql_select_db("aibek", $db);
	//$db->query("SET NAMES 'utf8'");
?>