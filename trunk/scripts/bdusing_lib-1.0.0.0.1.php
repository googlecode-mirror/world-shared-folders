<?php
function open_file($path ,$optype)
{ 
mysql_query("SET NAMES utf8");
  $dbname =  "moodlebase"; // ����� ��������� ��� ����, � ������� ���������� ������.
   @ $db = mysql_pconnect ("localhost", "root" , "1380");
	  if (!$db)
	  { echo (mysql_error());
	    echo "������ ���������....�������� ���";
	    exit;
	  } else echo "���������� � mysql-�������� ������ �������.<br>";
  if (!mysql_select_db ($dbname,$db)) echo ("<br><b>2) ������ ��� ������ ����.</b> ".$dbname.".");
  else  echo ("<br><b>2) ���� ������ ������� �������.</b><br>"); 
  }
  ?>