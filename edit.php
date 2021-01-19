<?php $con = mysqli_connect("localhost","root","","kibblerz"); 
$id = $_REQUEST['id'];
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
		<div class="row mt-5">
			<form class="col-md-10 ml-5" action="edit.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">


          <a href="" style="text-decoration: none;"><h2 class="text-info">Edit Details of Items </h2> </br></a>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title" class="a"><b>SKU</b></label>
                <input type="text" class="form-control" name="sku" placeholder="SKU">
              </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Food Brand </b></label>
              <input type="text" class="form-control" name="fbrand" placeholder="Food Brand ">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Food Name </b></label>
              <input type="text" class="form-control" name="fname" placeholder="Food Name ">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="price"><b>Image Url</b></label>
              <input type="text" class="form-control"  name="Image_Url" placeholder="Image Url">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Animal</b></label>
              <input type="text" class="form-control" name="animal" placeholder="Animal">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Minimum Age </b></label>
              <input type="text" class="form-control" name="minage" placeholder="Minimum Age ">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Maximum Age </b></label>
              <input type="text" class="form-control" name="maxage" placeholder="Maximum Age ">
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Minimum Weight </b></label>
              <input type="text" class="form-control" name="minweight" placeholder="Minimum Weight ">
            </div>
            </div>

			<div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Maximum Weight </b></label>
              <input type="text" class="form-control" name="maxweight" placeholder="Maximum Weight ">
            </div>
            </div> 

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Allergies </b></label>
              <input type="text" class="form-control" name="allergies" placeholder="Allergies ">
            </div>
            </div> 

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Health Issues </b></label>
              <input type="text" class="form-control" name="health" placeholder="Health Issues ">
            </div>
            </div>  

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Description </b></label>
              <input type="text" class="form-control" name="desc" placeholder="Description ">
            </div>
            </div>  

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Price Range </b></label>
              <input type="text" class="form-control" name="range" placeholder="Price Range ">
            </div>
            </div>   

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="desc"><b>Purchase Url </b></label>
              <input type="text" class="form-control" name="purl" placeholder="Purchase Url ">
            </div>
            </div>    


                  <div class="dropdown-divider"></div>
                   <div class="form-row">
                   <div class="form-group col-lg-3">
                   <button type="submit" name="submit" class="btn col-xl-10 btn-info" style="border-radius:20px;">Update Details</button><br><br>
                   <button type="button" name="submit" onclick="window.location.href='index.php'" class="btn col-xl-10 btn-info" style="border-radius:20px;">Back Main</button>
                   </div>
                   </div>


                 </form>
          </div>
               <?php if(isset($_POST['submit'])){

                    $sku = $_REQUEST['sku'];
                    $fbrand = $_REQUEST['fbrand'];
                    $fname = $_REQUEST['fname'];
                    $Image_Url = $_REQUEST['Image_Url'];
                    $animal = $_REQUEST['animal'];
                    $minage = $_REQUEST['minage'];
                    $maxage = $_REQUEST['maxage'];
                    $minweight = $_REQUEST['minweight'];
                    $maxweight = $_REQUEST['maxweight'];
                    $allergies = $_REQUEST['allergies'];
                    $health = $_REQUEST['health'];
                    $desc = $_REQUEST['desc'];
                    $range = $_REQUEST['range'];
                    $purl = $_REQUEST['purl'];


                      if(!empty($sku))
                      {

                        $query3="UPDATE details SET sku='$sku' WHERE detailid ='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }


                       if(!empty($fbrand))
                      {
                        $query3="UPDATE details SET food_brand='$fbrand' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($fname))
                      {
                          $query3="UPDATE details SET food_name='$fname' WHERE detailid='".$id."'";
                          $sql3=mysqli_query($con,$query3);
                          echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                        
                      }

                      if(!empty($Image_Url))
                      {
                        $query3="UPDATE details SET image_url='$Image_Url' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($animal))
                      {
                        $query3="UPDATE details SET animal='$animal' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($minage))
                      {
                        $query3="UPDATE details SET min_age='$minage' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($maxage))
                      {
                        $query3="UPDATE details SET max_age='$maxage' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($minweight))
                      {
                        $query3="UPDATE details SET min_weight='$minweight' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($maxweight))
                      {
                        $query3="UPDATE details SET max_weight='$maxweight' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($allergies))
                      {
                        $query3="UPDATE details SET allergies='$allergies' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($health))
                      {
                        $query3="UPDATE details SET health_issues='$health' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($desc))
                      {
                        $query3="UPDATE details SET description='$desc' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($allergies))
                      {
                        $query3="UPDATE details SET allergies='$allergies' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($range))
                      {
                        $query3="UPDATE details SET price_range='$range' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }

                      if(!empty($purl))
                      {
                        $query3="UPDATE details SET purchase_link='$purl' WHERE detailid='".$id."'";
                        $sql3=mysqli_query($con,$query3);
                        echo "<script type=\"text/javascript\"> alert(\"Updated Succussfully\"); window.location= \"index.php\";</script>";
                      }


                }?>
		</div>
	</div>

</body>
</html>