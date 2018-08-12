<?php 
include '../../config/config.php';
$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$data = json_decode(file_get_contents('php://input'), true);

if(count($data)>0){
		$manufacturername = $data['manufacturername'];
		$query="INSERT INTO t_car_manufacturer(manufacturer) VALUES ('$manufacturername')";
		if(mysqli_query($conn,$query)){
			echo "New Manufacturer Created: ".$manufacturername;			
		}
		else{
			echo "Manufacturer already exists";
		}
}
?>
