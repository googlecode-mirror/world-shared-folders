<?php
function open_file($path ,$optype) // открыть файл php
{ 
	$fdata = fopen ($path, $optype);
	$result=0;
	if (!$fdata) 
	  { 
		echo ("<b>(!)Error = Невозможно открыть файл</b><br>");
		exit;
	  }
	  else $result= $fdata;
	  return $result; 
	   
}
function tfile_to_str($path) // считываем текстовый файл в строку.
{ 
    $str = "";

	$fdata = open_file($path ,"r");
	while (!feof($fdata)) 
  { 
    $simb = fgetc($fdata); // read file charecter by character
    $str=$str.$simb;

  } // по окончании этого цикла в переменной $str мы размещаем всё содержимое файла метаинформации.
  return $str; 
}
?>