<?php
require_once "db_connection.php";
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
if(isset($_POST['insert_brand']))
{
    //getting text data from the fields
    $brand_title = $_POST['brand_title'];
    $insert_brand = "insert into brands (brand_title) 
                  VALUES ('$brand_title');";
    $insert_br = mysqli_query($con, $insert_brand);
    if($insert_br){
        header("location: ".$_SERVER['PHP_SELF']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>brand</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<div class="container">

    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Brand </h1>

    <form action="insert_brands.php" method="post" enctype="multipart/form-data">
        <div class="row">

            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="brand_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Brand </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="brand_title" name="brand_title" placeholder="Enter Here brand Title" >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>

    </form>

</div>
</body>
</html>