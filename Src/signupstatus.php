<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'brm');
$state=$_GET['stateselected'];
$q1 = "select state_id from state where state_name='$state' ; ";	
$state_id=mysqli_query($con,$q1);
$record=mysqli_fetch_array($state_id);
$id = $record['state_id'];
$q2 = "select city_name from cities where stateid=$id ; ";
$cities=mysqli_query($con,$q2);
$size=mysqli_num_rows($cities);
for($i=1;$i<=$size;$i++)
{
$city=mysqli_fetch_array($cities);
$var1="<option>";
$var2="</option>";
echo $var1.$city['city_name'].$var2;
}
mysqli_close($con);
?>