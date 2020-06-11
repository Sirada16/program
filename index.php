<?php
//openfile ข้อ1 อ่านไฟล์
$text = file('word.txt');
foreach($text as $index=>$value){
	echo $value."<br>";

}
  //write file ข้อ2-3ตั้งชื่อไฟล์เป็นคำศัพท์ยังไม่ได้ แต่เขียนไฟล์ลงเป็นคำศัพท์100คำได้ และแปลงเป็นตัวพิมพ์เล็ดทั้งหมด
$data=file('word.txt');
foreach($data as $index=>$value1){
$name = fopen("$value1.txt", 'x+');
        if($name){
        	if(!fwrite($handle, strtolower(str_repeat($value1,100)))) 
        		echo "success  writing to file";
		} 
}
?>
