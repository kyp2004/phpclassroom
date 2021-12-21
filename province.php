<?php

  $json = file_get_contents("https://covid19.ddc.moph.go.th/api/Cases/today-cases-by-provinces");
  $data = json_decode($json);

  echo "<center><h3>รายงานสถานการโควิด-19 แยกจังหวัด</h3></center>";
  echo '<body style="background-color:lavender">';
  echo "<center><table border='1'>";
  echo "<tr><td><b>ลำดับ</b></td><td><h4>จังหวัด</h4></td><td><h4>ผู้ป่วยใหม่</h4></td><td><h4>ผู้ป่วยรวม</h4></td><td><h4>ผู้ป่วยใหม่ในประเทศ</h4></td><td><h4>ผู้ป่วยรวมในประเทศ</h4></td><td><h4>ผู้เสียชีวิตใหม่</h4></td><td><h4>ผู้เสียชีวิตรวม</h4></td></tr>";
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

  echo "<tr><td><b><br><br><br>วันที่อัพเดต</br></br></br></b></td>";
  echo "<tr>";
  echo "<td>";
  echo $val->txn_date;
  echo "</td>";
  echo "</tr>";
  
?>
