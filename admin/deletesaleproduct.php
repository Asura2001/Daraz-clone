<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    <?php
        include ('connection.php');
        $pid = $_GET['id'];
        $delete_query = " DELETE FROM `sale_product_data` WHERE id=$pid";
        $run_query = mysqli_query($connection, $delete_query);
        header('location:viewsaleproducts.php');
    ?>
</body>
</html>