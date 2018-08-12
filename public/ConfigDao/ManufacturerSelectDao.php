<?php 
include '../../config/config.php';
$conn = mysqli_connect('$server', '$username', '$password' , '$db ');
$output=array();
$query="select manufacturer from t_car_manufacturer";
$result=mysqli_query($conn,$query);

if(count($result)>0){
	while($row = mysqli_fetch_array($result)){
		$output[]=$row;
	}
}

echo json_encode($output);
?>
