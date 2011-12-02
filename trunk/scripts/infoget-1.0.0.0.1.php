
<?php
/*this script read meta.info file in each directory in directory hierarchy*/
require "common_lib-1.0.0.0.1.php";
require "parser_lib-1.0.0.0.1.php";  
require "test_lib-1.0.0.0.1.php"; // подключаем библиотеку тестирования


$path="mag/meta.info";
$fdata = open_file ($path, "r");

$str="";

  main_test();
    echo ("<br>***вот и всё))<br>");
?>