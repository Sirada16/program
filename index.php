<?php
//openfile ข้อ1 อ่านไฟล์
$text = file('word.txt');
foreach($text as $index=>$value){
	echo $value."<br>";

}
  //write file ข้อ2-3
  $data = file('word.txt');
  foreach($data as $index=>$value){
  $word = substr($value, 0, -2);
	  $name = fopen($word.".txt", 'w+');
	  if($name){
			if(!fwrite($name, strtolower(str_repeat($value,100)))) 
				  echo "success  writing to file";
	  }
  }
  
?>
