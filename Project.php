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
  $count_data = count($data);
  foreach($data as $index=>$value){
      $enter = array("\n","\r",' ');
          $value = strtolower(str_replace($enter,'',$value));
              $first_word = strtoupper(substr($value,0,$count_data-($count_data-1)));//ตัวอักษรตัวแรก
                  $second_word = strtoupper(substr($value,1,$count_data-($count_data-1)));//ตัวอักษรตัว2
                      $word_after_first = substr($value,1,$count_data);//ตัวอักษรหลังตัวแรก    
                      //if ตรวจสอบว่ามีโฟลเดอร์นี้อยู่ไหม
                      if(!file_exists($first_word."/".$second_word."/")){
                          //echo "ไม่มีไฟล์ต้องสร้างไฟล์";
                              if(@mkdir($first_word."/".$second_word,0,true)){
                                  $myfile = fopen($first_word."/".$second_word."/".$first_word.$word_after_first.".txt", 'w+');
                                              fwrite($myfile, str_repeat($value."\r\n",100));
                              }
  
                      }else{
                              $myfile = fopen($first_word."/".$second_word."/".$first_word.$word_after_first.".txt", 'w+');
                                          fwrite($myfile, str_repeat($value."\r\n",100));
                      }       
  ini_set('max_execution_time', 800);
  
  }//endforeach
  fclose($myfile);
?>
