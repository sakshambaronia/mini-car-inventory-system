<?php 
$conn = mysqli_connect('localhost', 'saksham', 'control' , 'Inventory');
$data = json_decode(file_get_contents('php://input'), true);

if(count($data)>0){
		$manufacturer = $data['manufacturer'];
		$modelname = $data['modelname'];
		$color = $data['color'];
		$registration = $data['registration'];
		$year = $data['year'];
		$note = $data['note'];
		$picture = $data['picture'];

		$query="INSERT INTO t_car_model_manufacturer(manufacturer,model,color,registration_number,manufacturing_year,note,image) 
		VALUES ('$manufacturer','$modelname','$color','$registration','$year','$note','$picture')";
		if(mysqli_query($conn,$query)){
			echo "New Model created : ".$modelname ;			
		}
		else{
			echo "Error while creating model";
		}
}
?>