<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = {$id}" ;
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $isbn_number = $data['isbn_number'];
        $picture = $data['picture'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Product</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style/style.css">
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }     
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    
        </style>
    </head>
    <body>
    <header>
        <div class="header-img">
        <div class="header-text">
      <h1 class="title mb-3">Delete Products</h1>

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
        <fieldset>
            <legend class='h2 mb-5'>Delete request <img class='img-thumbnail rounded-circle ms-5' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                </tr>
            </table>

            <h3 class="mb-4 mt-5">Do you really want to delete this product?</h3>
            <form action ="actions/a_delete.php" method="post">
                <input type="hidden" name="isbn_number" value="<?php echo $isbn_number ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-warning" type="button">No, go back!</button></a>
            </form>
        </fieldset>
        <footer class="bg-danger mt-5" height="100px">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </footer>
    </body>
</html>