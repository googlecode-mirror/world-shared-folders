<?php
function main_test()
{ 
  echo ("<br>***  ---------<b>НАЧАЛО ТЕСТИРОВАНИЯ </b>---------- ***<br><br><br><br>");
  parser_test();
  
  
  echo ("<br><br><br><br>***  ---------<b>ТЕСТ ЗАВЕРШЁН </b>---------- ***<br>");
  }
   
function parser_test()
{ 

 echo ("<br>***  ---------<b>структура заполняемого массива метаинформации=</b>---------- ***<br><br>");
  $tagarr = get_tag_list("tags.txt");
 print_r($tagarr);
 echo ("<br> <br> <br> ");
 
 echo ("<br>***  ---------<b>заполнение массива метаинформации , после чтения meta.info файла=</b>---------- ***<br><br>");
 $str = tfile_to_str("mag/meta.info"); // указываем путь к файлу метаинформации.
 $rarr = meta_arr_fill($tagarr,$str);
 print_r($rarr);
  echo ("<br> <br> <br> ");
  
 // get_inff_dir("/mag");

  }

 ?>
 