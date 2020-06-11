<?php
$text = file('word.txt');
foreach($text as $index=>$value){
	echo $value."<br>";
   
$handle = fopen("$value.txt", 'w+');
     
        $handle = fopen("$index.txt", 'w+');
        if($handle){

        if(!fwrite($handle, str_repeat($value,100)))  die("couldn't write to file."); 
        echo "success  writing to file";
}
    }
?>
