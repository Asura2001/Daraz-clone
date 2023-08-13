<?php
session_start();
if(isset($_SESSION['custom_id'])){
    $id = $_SESSION['custom_id'];
    $phone = $_SESSION['phone']; 
    $name = $_SESSION['name'];
} else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <?php include "links.php"; ?>
</head>
<body>
    <?php include "../assets/include/header.php";
        include "connection.php";

        $pid = $_GET["id"];
        $select_query = "SELECT * FROM `sale_product_data` WHERE id =$pid";
        $run_query = mysqli_query($connection, $select_query);
        $data = mysqli_fetch_assoc($run_query);
    ?>
    <main class="bg-light pb-5">
    <section>
        <div class="container">
            <div class="row">
                <div class="offset-1 col-10 details-card mt-3">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo($data["name"]); ?></li>
                        </ol>
                    </nav>
                    <div class="row bg-white rounded">
                        <div class="col-5 p-3">
                            <img class="rounded img-fluid" src="../assets/upload/<?php echo $data['image']; ?>">
                        </div>

                        <div class="col">
                            <div class="card-body">
                                <h4 class="card-title mb-3">
                                    <?php echo $data['name']?>
                                </h4>
                                <p class="mb-3">
                                    <?php echo $data['description'] ?>
                                </p>
                                <hr>
                                <h3 class="text-orange">Rs.
                                    <?php echo $data['dis_price'] ?>
                                </h3>
                                <p class="mb-2 text-muted">
                                    <del>Rs. <?php echo $data['price'] ?></del>
                                </p>
                                <hr>
                                <form method="POST" enctype="multipart/form-data">
                                <?php
                                    if(isset($_POST['add'])){
                                        $quantity = $_POST["quantity"];
                                        $name = $data['name'];
                                        $description = $data['description'];
                                        $price = $data['dis_price'];
                                        $filename = $data['image'];

                                        $check_query = "SELECT * FROM `mycart` WHERE `name`='$name' AND `cid`='$id'";
                                        $check_query_result = mysqli_query($connection, $check_query);

                                        if(mysqli_num_rows($check_query_result) > 0){
                                            ?>
                                            <script>
                                                alert("Item already exists in cart.");
                                            </script>
                                            <?php
                                        }

                                        else{
                                            $insert_query = "INSERT INTO `mycart`(`pid`,`cid`, `name`, `description`, 
                                            `price`, `image`, `quantity`) VALUES ('$pid','$id','$name',
                                            '$description','$price','$filename','$quantity')";

                                            $result = mysqli_query($connection, $insert_query);
                                                        
                                            if($result){ 
                                                ?>
                                            <script>
                                                window.location.href = "mycart.php";
                                                alert("Added to the cart successfully.");
                                            </script>
                                            <?php
                                            }
                                            
                                            else{
                                                ?>
                                            <script>
                                                alert("Sorry, item was not added to the cart.");
                                            </script>
                                            <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <div class="input-group mb-3 cartcontainer" style="width: 130px;">
                                        <span class="input-group-text cartbtn" onclick="button2()">-</span>
                                        <input type="number" id="input" min="1" max="10"
                                            class="form-control bg-light text-center" name="quantity" value="1">
                                        <span class="input-group-text cartbtn" onclick="button1()">+</span>
                                    </div>
                                    <button class="btn btn-orange ps-4 pe-4" name="add" type="submit">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>
</body>
</html>