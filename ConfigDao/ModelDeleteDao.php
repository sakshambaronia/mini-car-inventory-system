<?php 
$conn = mysqli_connect('localhost', 'saksham', 'control' , 'Inventory');
$data = json_decode(file_get_contents('php://input'), true);

if(count($data)>0){
		$id = $data['data'];
		$query="Delete from t_car_model_manufacturer where id= $id";
		if(mysqli_query($conn,$query)){
			echo "Model deleted from the database ";			
		}
		else{
			echo "Error deleting the model from the database";
		}
}
?>