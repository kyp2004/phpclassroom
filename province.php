<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<center><h4>รายงานสถานการโควิด-19 แยกจังหวัด</h4></center>";
  echo "<center><table border='1'></center>";
  echo "<tr><td><h5>ลำดับ</h5></td><td><h1>จังหวัด</h1></td><td><h1>ผู้ป่วยใหม่</h1></td><td><h1>ผู้ป่วยรวม</h1></td><td><h1>ผู้ป่วยใหม่ในประเทศ</h1></td><td><h1>ผู้ป่วยรวมในประเทศ</h1></td><td><h1>ผู้เสียชีวิตใหม่</h1></td><td><h1>ผู้เสียชีวิตรวม</h1></td><td><h1>วันที่อัพเดท</h1></td></tr>";
  foreach($data as $key=>$val){
    echo "<tr>";
    echo "<td>";
    echo $key;
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
    echo "<td>";
    echo $val->txn_date;
    echo "</td>";
    echo "</tr>";
  }
  echo "</table>"; 
?>
