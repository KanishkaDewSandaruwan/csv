<?php 
	$con = mysqli_connect("localhost","root","","kibblerz");

	if (isset($_POST['submit'])) {

		if ($_FILES['file']['name']) {

			$filename = explode('.',$_FILES['file']['name']);
			if ($filename[1] == 'csv') {
				$handle = fopen($_FILES['file']['tmp_name'], "r");
				while ($data = fgetcsv($handle)) {
					$item1 = mysqli_real_escape_string($con, $data[0]);
					$item2 = mysqli_real_escape_string($con, $data[1]);
					$item3 = mysqli_real_escape_string($con, $data[2]);
					$item4 = mysqli_real_escape_string($con, $data[3]);
					$item5 = mysqli_real_escape_string($con, $data[4]);
					$item6 = mysqli_real_escape_string($con, $data[5]);
					$item7 = mysqli_real_escape_string($con, $data[6]);
					$item8 = mysqli_real_escape_string($con, $data[7]);
					$item9 = mysqli_real_escape_string($con, $data[8]);
					$item10 = mysqli_real_escape_string($con, $data[9]);
					$item11 = mysqli_real_escape_string($con, $data[10]);
					$item12 = mysqli_real_escape_string($con, $data[11]);
					$item13 = mysqli_real_escape_string($con, $data[12]);
					$item14 = mysqli_real_escape_string($con, $data[13]);

					$sqlquery = "INSERT INTO details(sku,food_brand,food_name,image_url,animal,min_age,max_age,min_weight,max_weight,allergies,health_issues,description,price_range,purchase_link) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14')";
 
					// $sqlquery = "INSERT INTO data(sku,food_brand,food_name,image_url,animal,min_age,max_age,min_weight,max_weight,allergies,health_issues,description,price_range,purchase_link) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14')";
					mysqli_query($con,$sqlquery);
				}
				fclose($handle);
				print("Import Done");
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kibblerz</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
      <!--fontawesome-->
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" 
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row p-5">
			<div class="col-md-6">	
				<form method="POST" enctype="multipart/form-data">
					<h4 class="text-info">You Can Insert your data From CSV File</h4>
					Upload CSV : <input type="file" name="file"><br><br>
					<input class="btn btn-primary" type="submit" name="submit" value="Import">
				</form>
			</div>
			<div class="col-md-6">
				<form method="POST" action="export.php" enctype="multipart/form-data">
					<h4 class="text-info">You Can Export your data as CSV File</h4>
					<input class="btn btn-primary" type="submit" name="export" value="Export as CSV">
				</form>
			</div>
		</div>

		<div class="row p-2" style="width: 180%;">
			
			<div class="table-responsive">
		       		 <table class="table v-middle">
		            <thead>
		                <tr class="bg-light">
		                    <th class="border-top-0">Actions</th>
		                    <th class="border-top-0">SKU</th>
		                    <th class="border-top-0">Food Brand</th>
		                    <th class="border-top-0">Food Name</th>
		                    <th class="border-top-0">Image Url</th>
		                    <th class="border-top-0">Animal</th>
		                    <th class="border-top-0">Min Age</th>
		                    <th class="border-top-0">Max Age</th>
		                    <th class="border-top-0">Min Weight</th>
		                    <th class="border-top-0">Max Weight</th>
		                    <th class="border-top-0">Allergies</th>
		                    <th class="border-top-0">Health Issue</th>
		                    <th class="border-top-0">Description</th>
		                    <th class="border-top-0">Price Range</th>
		                    <th class="border-top-0">Perchase Link</th>
		                </tr>
		            </thead>
		             <?php 
                    $count=1;
					  $viewquery = " SELECT * FROM details";
					  $viewresult = mysqli_query($con,$viewquery);

                     ?>
                    <tbody>
                    	<?php while($row = mysqli_fetch_assoc($viewresult)) { ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="">
                                    	<div class="dropdown show">
										  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    <i class="fas fa-arrow-down"></i>
										  </a>

										  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										    <a class="dropdown-item" href="edit.php?id=<?php echo $row['detailid']; ?>">Edit Details</a>
										    <a class="dropdown-item" href="delete.php?detailid=<?php echo $row['detailid']; ?>">Delete</a>
										  </div>
										</div>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $row['sku']; ?></td>
                            <td><?php echo $row['food_brand']; ?></td>
                            <td><?php echo $row['food_name']; ?></td>
                            <td><a href="<?php echo $row['image_url']; ?>"><?php echo $row['image_url']; ?></a></td>
                            <td><?php echo $row['animal']; ?></td>
                            <td><?php echo $row['min_age']; ?></td>
                            <td><?php echo $row['max_age']; ?></td>
                            <td><?php echo $row['min_weight']; ?></td>
                            <td><?php echo $row['max_weight']; ?></td>
                            <td><?php echo $row['allergies']; ?></td>
                            <td><?php echo $row['health_issues']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['price_range']; ?></td>
                            <td><a href="<?php echo $row['purchase_link']; ?>"><?php echo $row['purchase_link']; ?></a></td>
                            <!-- <td><a style="text-decoration: none; color: red; font-size: 15px;" href="delete.php?customer_id=<?php echo $row['customer_id']; ?>">Delete</a></td> -->
                        </tr>
                        <?php   $count++; } ?>
                    </tbody>
		        </table>

		    </div>
		</div>

	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>