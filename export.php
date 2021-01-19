<?php 

if (isset($_POST['export'])) {
	$con = mysqli_connect("localhost","root","","kibblerz");
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=data.csv');

	$output = fopen("php://output", "w");
	fputcsv($output, array('ID','sku','food_brand','food_name','image_url','animal','min_age','max_age','min_weight','max_weight','allergies','health_issues','description','price_range','purchase_link'));
	$query = "SELECT * FROM details ORDER BY detailid DESC";
	$viewresult = mysqli_query($con,$query);

	while ($row = mysqli_fetch_assoc($viewresult)) {
		fputcsv($output, $row);
	}
	fclose($output);
}

 ?>