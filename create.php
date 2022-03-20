<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Big Web Library |  Add Product</title>
        <link rel="stylesheet" href="style/style.css">
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 90% ;
            }   
            
            th {
                width: 15%;
            }
        </style>
    </head>
    <body>
    <header>
        <div class="header-img">
        <div class="header-text">
      <h1 class="title mb-3">Add Products</h1>

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
        <fieldset class="container mb-5">
            <legend class='h2 mb-5'>Add Product</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title of product" /></td>
                    </tr> 
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="number" name="isbn_number"  placeholder="ISBN Number" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td class="w-50"><input class='form-control' type="text" name= "author_f_name" placeholder="First Name" /></td>
                        <td class="w-50"><input class='form-control' type="text" name= "author_l_name" placeholder="Last Name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class='form-control' type="text" name="publisher_name"  placeholder="First Name, Last Name" /></td>
                    </tr>  
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name="publish_date"  placeholder="Day-Month-Year" step="any"/></td>
                    </tr> 
                    
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" /></td>
                    </tr>

                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <footer class="bg-danger mt-5" height="100px">
                <p class="text-center p-5 text-white"><b>Copyright &copy; 2022 -Adrian Pedziwiatr</b></p>
            </footer>
    </body>
</html>