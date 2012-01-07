<?php
function open_file($path ,$optype)
{ 
mysql_query("SET NAMES utf8");
  $dbname =  "moodlebase"; // здесь указываем имя базы, в которую загоняется скрипт.
   @ $db = mysql_pconnect ("localhost", "root" , "1380");
	  if (!$db)
	  { echo (mysql_error());
	    echo "Ошибка произошла....попробуй ещё";
	    exit;
	  } else echo "Соединение с mysql-сервером прошло успешно.<br>";
  if (!mysql_select_db ($dbname,$db)) echo ("<br><b>2) Ошибка при выборе базы.</b> ".$dbname.".");
  else  echo ("<br><b>2) База данных выбрана успешно.</b><br>"); 
  }
  ?>