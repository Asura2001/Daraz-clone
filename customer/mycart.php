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
    <title>Daraz.pk: Online Shopping Pakistan - Mobiles, Tablets, Home Appliances, TV, Audio &amp; More</title>
    <?php include "links.php"; ?>
</head>
<body>
    <?php include "../assets/include/header.php"; ?>

    <main class="bg-light pb-5">
        <section>
            <div class="container">
            <?php   
                include "connection.php";
                $check_query = "SELECT * FROM `mycart` WHERE cid = $id";
                $check_query_result = mysqli_query($connection, $check_query);

                if(mysqli_num_rows($check_query_result) > 0){
                ?>
                <div class="row pt-4">
                    <div class="d-flex justify-content-between pe-0">
                        <div>
                            <h3>My cart</h3>
                        </div>
                        <div>
                            <a class="btn btn-outline-warning" href="index.php">Continue Shopping</a>
                        </div>
                    </div>
                    <?php
                        $select_query = "SELECT * FROM `mycart` WHERE cid = $id";
                        $run_query = mysqli_query($connection, $select_query);
                        while($result = mysqli_fetch_array($run_query)){
                    ?>
                    <div class="col-12 mt-2 card p-3">
                        <div class="d-flex">
                            <div class="col-2">
                                <img class="img-fluid" src="../assets/upload/<?php echo $result['image']; ?>">
                            </div>
                            <div class="offset-2 col-4 mt-3">
                                <h5 class="card-text">
                                    <?php echo $result['name']; ?>
                                </h5>
                                <p class="small text-muted">
                                    <?php echo $result['description']; ?>
                                </p>
                                <a href="remove.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Remove Product" class="text-reset text-decoration-none">
                                <span class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></span></a>
                                <a class="ms-3" href="change.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="Remove Product" class="text-reset text-decoration-none">
                                <span class="btn btn-outline-warning"><i class="fa-solid fa-pencil"></i></span></a>
                            </div>
                            <div class="col-4 mt-5">
                                <h5 class="card-text text-orange">
                                    Rs. <?php echo $result['price']; ?>
                                </h5>
                                <p class="card-text">
                                    Quantity: <?php echo $result['quantity']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                <div class="mt-4 text-end pe-0">
                    <a class="btn btn-orange ps-4 pe-4" href="checkout.php">Proceed to checkout</a>
                </div>
                </div>
                <?php

                }

                else{
                    ?>
                    <div class="row pt-5 pb-5" style="height: 480px;">
                        <div class="card pt-5 pb-5 text-center">
                            <div class="col-6 offset-3">
                            <h4>No items added in your cart.</h4>
                            <a class="btn btn-outline-success ps-5 pe-5 mt-5" href="index.php">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>    
        </div>
        </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>
</body>
</html>