<?php
//openfile ข้อ1 อ่านไฟล์
/*$text = file('word.txt');
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
  */
  $data = file('text.txt');

$count = count($data);
foreach($data as $index=>$value){
$word = substr($value, 0, -2);//ตัดenterออก
$big = strtoupper(substr($word,0,$count-($count-1)));//ตัวอักษรตัวแรก
$big2 = substr($word,1,$count);//ตัวอักษรหลังตัวแรก
    //if ตรวจสอบสอบว่ามีโฟลเดอร์นี้อยู่ไหม
    if(!@mkdir($big,0,true)){
        $path = $big;
        $name = fopen($path."/".$word.".txt", 'w+');
        if($name){
          if(!fwrite($name, strtolower(str_repeat($value,100)))) {
        		echo "success  writing to file";
           }
            
            $pos = strcspn(strtolower($big2), "aeiou");//aeiouอยู่ที่indexไหนแต่ไม่ได้เริ่มด้วย0
        }             
    }
}
?>
