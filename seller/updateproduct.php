<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <?php include "links.php"; ?>
</head>
<body>
    <?php include "sheader.php"; ?>

    <main class="bg-light pt-5 pb-5">
        <section>
            <div class="container">
            
            <?php
                include "connection.php";

                $pid = $_GET['id'];
                $select_query = "SELECT * FROM `product_data` WHERE id =$pid";
                $run_select_query = mysqli_query($connection, $select_query);
                $data = mysqli_fetch_array($run_select_query);
                
                if(isset($_POST["update_product"])){
                    $idupdate = $_GET["id"];
                            
                    $name = $_POST["name"];
                    $description = $_POST["description"];
                    $price = $_POST["price"];                
                    $image = $_FILES["image"]; 
                    $filename = $image["name"];
                    move_uploaded_file($image["tmp_name"],'../assets/upload/'.$filename);   

                    $update_query = "UPDATE `product_data` SET `name`='$name',`description`='$description',`price`='$price',`image`='$filename'
                    WHERE id=$idupdate"; 

                    $result = mysqli_query($connection, $update_query);

                    if($result){
                        ?>
                        <script>
                            window.location.href='viewproducts.php';
                        </script>
                        <?php
                    }
                    
                    else{
                        ?>
                        <script>
                            alert("Sorry! The product could not be updated.");
                        </script>
                        <?php
                    }
                }
            ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6 offset-3 p-4 bg-white rounded">
                            <h5 class="text-center pb-5">Fill out the details for the new Product</h5>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $data['name'] ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" value="<?php echo $data['description'] ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" value="<?php echo $data['price'] ?>" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Product image" required>
                            </div>

                            <div class="text-end">
                                <button type="submit" name="update_product" class="btn btn-success rounded-pill">Update Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>
</body>
</html>