<?php 
include '../../config/config.php';
$conn = mysqli_connect($server, $username, $password , $db) or die("Server Error");
$mydata = json_decode(file_get_contents('php://input'), true);

$model=$_GET['model'];
$manufacturer = $_GET['manufacturer'];

$output=array();
$query="select * from t_car_model_manufacturer  where manufacturer='$manufacturer' and  model='$model'";
$result=mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_array($result)){
		$output[]=$row;
	}
}

echo json_encode($output);
?>
