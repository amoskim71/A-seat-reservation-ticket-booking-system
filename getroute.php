<?php
include('db.php');

$res = $_POST['get_sel'];
 $find=mysql_query("select * from route where route='$res'");

//error handle using if statement to check if any row is returned
if(mysql_num_rows($find) == 0){
					echo '<option>No Bus Available</option>';
				}else{
 while($row=mysql_fetch_array($find))
 {
echo '<option value="'.$row['id'].'">';
								echo $row['route'].'  :'.$row['type'].'  :'.$row['time'].'  :'.$row['price'];
								echo '</option>';


 }
}
 exit;

?>