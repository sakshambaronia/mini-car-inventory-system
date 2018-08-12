<?php 
include '../../config/config.php';
$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$output=array();
$query="select manufacturer, model, count(*) as count from t_car_model_manufacturer group by manufacturer, model";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){
		$output[]=$row;
	}
}

echo json_encode($output);
?>
