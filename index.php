<?php
//openfile
$text = file('word.txt');
foreach($text as $index=>$value){
	echo $value."<br>";
  //write file
}
$data=file('text.txt');
foreach($data as $index=>$value1){
$handle = fopen("$value1.txt", 'x+');
        if($handle){
        	if(!fwrite($handle, strtolower(str_repeat($value1,100)))) 
        		echo "success  writing to file";
		} 
}
?>
