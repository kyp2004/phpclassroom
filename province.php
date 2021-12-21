<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<center><h3>รายงานสถานการโควิด-19 แยกจังหวัด</h3></center>";
  echo '<body style="background-color:LightPink">';
  echo "<center><table border='1'>";
  echo "<tr><td><b>ลำดับ</b></td><td style='background-color:	MistyRose'><b>จังหวัด</b></td><td><b>ผู้ป่วยใหม่</b></td><td><b>ผู้ป่วยรวม</b></td><td><b>ผู้ป่วยใหม่ในประเทศ</b></td><td><b>ผู้ป่วยรวมในประเทศ</b></td><td><b>ผู้เสียชีวิตใหม่</b></td><td><b>ผู้เสียชีวิตรวม</b></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo ($key+1);
    echo "</td>";
    echo "<td>";
    echo $val->province;
    echo "</td>";
    echo "<td>";
    echo $val->new_case;
    echo "</td>";
    echo "<td>";
    echo $val->total_case;
    echo "</td>";
    echo "<td>";
    echo $val->new_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->total_case_excludeabroad;
    echo "</td>";
    echo "<td>";
    echo $val->new_death;
    echo "</td>";
    echo "<td>";
    echo $val->total_death;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table></center>"; 

  echo "<center><tr><td><br><br><b>วันที่อัพเดต</b></b></td></center>";
  echo "<center><tr>";
  echo "<td>";
  echo $val->txn_date;
  echo "</td>";
  echo "</tr></center>";
  
?>
