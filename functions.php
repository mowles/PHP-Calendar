<?php
function drawCalendar(){
$m=date("m");
$y=date("Y");
$d=date("d");
$r=0;
$c=cal_days_in_month(CAL_GREGORIAN,$m,$y);
?>

<table class='calendar'>
  <tr>
    <th>Sun</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
  </tr>
  <tr>
<?php
for ($i=1; $i<=$c; $i++) {
  $date=$m . "/" . $i . "/" . $y;
  $time = strtotime($date);
  $w = date('w',$time);

  while($w!=$r){echo "<td class='empty'></td>"; $r++;}
  if($d==$i){echo "<td class='today'>" . $i . "</td>";} else {echo "<td class='date'>" . $i . "</td>";}

  $r++;
  if ($r==7){$r=0; echo "</tr><tr>";}
  }
echo "</tr>";
echo "</table>";
} // End of drawCalendar fuction
?>
