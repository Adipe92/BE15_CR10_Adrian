<?php 
require_once 'actions/db_connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= " 
        <div class='container bg-light'>
        <div class='row'>
            <div class='col-3'>
                <div class='text-center'>
                    <img class='img-thumbnail width='100%' mt-3' src='pictures/" .$row['picture']."'>
                </div>
                <div class='m-4'>
                    <p>ISBN: " .$row['isbn_number']." </p>
                    <p>Type: " .$row['type_of']." </p>
                    <p>Publish Date: " .$row['publish_date']."</p>
                    <br>
                    <a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm ms-4 mt-4 mb-4'
                    type='button'>Edit</button></a>
                    <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm ms-2 mt-4 mb-4'
                    type='button'>Delete</button></a>
                </div>
            </div>
            <div class='col-9'>
                <div class='p-5'>
                   <h4>Title: " .$row['title']." </h4>
                    <h5 class='mt-3 mb-3'>Author: " .$row['author_f_name'] .$row['author_l_name']."</h5>
                    <h4>Description: </h4>
                    <p>" .$row['txt']."</p>
                    <hr>
                    <p>Publisher: " .$row['publisher_name']."</p>
                    <p>Publisher Address: " .$row['publisher_address']."</p>
                </div>

            </div>
        </div>
    </div>";
    };
} else {
    $tbody =  "<tr><td colspan='10'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Big Web Library</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style/style.css">
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 100px !important;
                height: 100px !important;
                margin-top: 50px;
            }
            td {          
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <header>
        <div class="header-img">
        <div class="header-text">
      <h1 class="title mb-3">Web Library</h1>
      <p>Welcome to our Library!</p>
      <a href= "create.php" class="btn btn-danger" role="button" data-bs-toggle="button">Add product</a>

    </div>
  </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-danger bg-danger">
  <div class="container-fluid">
      <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Add products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">About library</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" aria-current="page" href="#">Contact</a>
        </li>

    </div>
      </div>
    
  </div>
</nav>
            <main>
            <div class="manageProduct w-75 mt-3"> 
            <h1 class="text-center m-5">Home</h1>

            <p class="m-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consectetur, accusamus, voluptas harum, adipisci totam ea reiciendis fugiat fugit repellendus reprehenderit et! Expedita cumque explicabo incidunt culpa beatae obcaecati ab vitae porro adipisci rem officia iste, optio officiis. Cupiditate praesentium magnam, fugit earum adipisci hic rerum quod laudantium illum quae.</p>

            <h2 class="mt-3 mb-3">Find products in our store.</h2>

            <table class="table table-striped">
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
            </main>

            <footer class="bg-danger mt-5" height="100px">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </footer>
        
    </body>
</html>