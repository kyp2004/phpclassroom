<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<center><h3>รายงานสถานการโควิด-19 แยกจังหวัด</h3></center>";
  echo "<center><table border='1'></center>";
  echo "<tr><td><h4>ลำดับ</h4></td><td><h5>จังหวัด</h5></td><td><h5>ผู้ป่วยใหม่</h5></td><td><h5>ผู้ป่วยรวม</h5></td><td><h5>ผู้ป่วยใหม่ในประเทศ</h5></td><td><h5>ผู้ป่วยรวมในประเทศ</h5></td><td><h5>ผู้เสียชีวิตใหม่</h5></td><td><h5>ผู้เสียชีวิตรวม</h5></td><td><h5>วันที่อัพเดท</h5></td></tr>";
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
