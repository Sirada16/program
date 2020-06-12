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
  //ข้อ 1-4
  $data = file('word.txt');
  $data = file('text.txt');
  $count_data = count($data);
  foreach($data as $index=>$value){
  $enter = array("\n","\r",' ');
  $value = strtolower(str_replace($enter,'',$value));
  $first_word = substr($value,0,$count_data-($count_data-1));//ตัวอักษรตัวแรก
  $word_after_first = substr($value,1,$count_data);//ตัวอักษรหลังตัวแรก
  $check_vowel = strcspn(strtolower($value), "aeiou");//aeiouอยู่ที่indexไหน
  $vowel = substr($value,$check_vowel,1);//สระ
      //if ตรวจสอบว่ามีโฟลเดอร์นี้อยู่ไหม
      if(!@mkdir($first_word."/".$vowel,0,true)){
                      $myfile = fopen($first_word."/".$vowel."/".$value.".txt", 'w+');
                              fwrite($myfile, str_repeat($value,100));
                  }else{//สำหรับcaseที่aeiouซ้ำ
                          $myfile = fopen($first_word."/".$vowel."/".$value.".txt", 'x+');
                                  fwrite($myfile, str_repeat($value,100));
                      }//endelse
  
  }//endforeach
  
?>
