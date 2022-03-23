<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $title = $_POST['title'];
    $isbn_number = $_POST['isbn_number'];
    $author_f_name = $_POST['author_f_name'];
    $author_l_name = $_POST['author_l_name'];
    $type_of = $_POST['type_of'];
    $txt = $_POST['txt'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['publisher_address'];
    $publish_date = $_POST['publish_date'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
   
    $sql = "INSERT INTO products (title, isbn_number, author_f_name, author_l_name, type_of, txt, publisher_name, publisher_address, publish_date, picture) VALUES ('$title', $isbn_number, '$author_f_name', '$author_l_name', '$type_of', '$txt', '$publisher_name', '$publisher_address', '$publish_date','$picture->fileName')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $isbn_number </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>