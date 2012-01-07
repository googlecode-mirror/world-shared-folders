
<?php
/*this script read meta.info file in each directory in directory hierarchy*/
require "common_lib.php";
require "parser_lib.php";  
require "test_lib.php"; // подключаем библиотеку тестирования


$path="../files/mag/meta.info";
$fdata = open_file ($path, "r");

$str="";

  main_test();
    echo ("<br>***вот и всё))<br>");
?>