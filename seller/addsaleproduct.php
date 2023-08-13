<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a sale product</title>
    <?php include "links.php"; ?>
</head>
<body>
    <?php include "sheader.php"; ?>

    <main class="bg-light pt-5 pb-5">
        <section>
            <div class="container">
                
            <?php
            include "connection.php";

            if(isset($_POST["add_sale_product"])){
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $dis_price = $_POST["dis_price"];
                $image = $_FILES["image"];

                $filename = $image["name"];
                move_uploaded_file($image['tmp_name'],'../assets/upload/'.$filename);

                $insert_query = "INSERT INTO `sale_product_data`(`user_id`, `usertype`, `name`, `description`, `price`, `dis_price`, `image`) 
                VALUES ('$id','seller','$name','$description','$price','$dis_price','$filename')";
                
                $run_query = mysqli_query($connection, $insert_query);
                
                if($run_query){ 
                    header("location:viewsaleproducts.php");
                }
                
                else{
                ?>
                <script>
                    alert("Sorry, the data was not inserted.");
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
                                <input type="text" name="name" class="form-control" placeholder="Product name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" placeholder="Product description" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Original Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Product price" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discounted Price</label>
                                <input type="number" name="dis_price" class="form-control" placeholder="Product price" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Product image" required>
                            </div>

                            <div class="text-end">
                                <button type="submit" name="add_sale_product" class="btn btn-success rounded-pill">Add Product</button>
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