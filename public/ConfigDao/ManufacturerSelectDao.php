<?php 
$conn = mysqli_connect('localhost', 'saksham', 'control' , 'Inventory');
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