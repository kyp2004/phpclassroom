<?php
  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-all");
  $data = json_decode($json);
  echo "วันที่ : ".$data[0]->txn_date ."<br>";
  echo "ผู้ป่วยใหม่ : ".$data[0]->new_case ."<br>";
  echo "ผู้ป่วยรวม : ".$data[0]->total_case."<br>";
  echo "ผู้ป่วยใหม่ในประเทศ : ".$data[0]->new_case_excludeabroad."<br>";
  echo "ผู้ป่วยรวมในประเทศ : ".$data[0]->total_case_excludeabroad ."<br>";
  echo "ผู้เสียชีวิตใหม่ : ".$data[0]->new_death ."<br>";
  echo "ผู้เสียชีวิตรวม : ".$data[0]->total_death ."<br>";
  echo "หายป่วยใหม่ : ".$data[0]->new_recovered ."<br>";
  echo "หายป่วยรวม : ".$data[0]->total_recovered ."<br>";
 
?>
