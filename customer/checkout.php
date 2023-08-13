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
    <?php include "links.php";
    include "connection.php"; ?>
</head>
<body>
    <?php include "../assets/include/header.php"; ?>

    <main class="bg-light pb-5">
    <section class="pt-5">
        <div class="container">
            <h3 class="ps-5">Order details</h3>
            <div class="card">
                <form method="POST" enctype="multipart/form-data" id="signup-form">
                <div class="row card-body p-5">
                    <div class="col-7">
                        <h4>Basic details</h4>
                        <hr>
                        <div class="border rounded p-4">
                            <div class="form-group">
                                <label><b>Name <span class="text-danger">*</span></b></label>
                                <input type="text" name="name" id="customerName" class="form-control"
                                placeholder="Input full name" title="Please enter your name" required>
                                <span id="errorCustomerName" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3 cart-container">
                                <label><b>Phone <span class="text-danger">*</span></b></label>
                                <input type="number" pattern="[0-9]{4}-[0-9]{7}" name="phone" id="emailAddress" class="form-control"
                                placeholder="Input mobile number" required>
                                <span id="errorEmailAddress" class="text-danger"></span>
                            </div>
                            <div class="form-group mt-3">
                                <label><b>Address <span class="text-danger">*</span></b></label>
                                <input type="text" name="address" id="customerAddress" class="form-control"
                                placeholder="House no. / building / street / area" required>
                                <span id="errorCustomerAddress" class="text-danger"></span>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>City <span class="text-danger">*</span></b></label>
                                        <input type="text" name="city" id="customerCity" class="form-control"
                                            placeholder="Input your province" required>
                                        <span id="errorCustomerCity" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Zip <span class="text-danger">*</span></b></label>
                                        <input type="text" name="zip" id="customerZipcode"
                                            class="form-control" placeholder="Input your zip code" required>
                                        <span id="errorCustomerZipcode" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Province <span class="text-danger">*</span></b></label>
                                        <input type="text" name="province" id="customerState" class="form-control"
                                            placeholder="Input your province" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><b>Country <span class="text-danger">*</span></b></label>
                                        <input type="text" name="country" id="customerCountry"
                                            class="form-control" placeholder="Input your country" required>
                                        <span id="errorCustomerCountry" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <h4>Product details</h4>
                        <hr>
                        <div class="card">
                            <table class="card-body table lms_table_active table-hover">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">Name</th>
                                        <th scope="col">Price (Rs)</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>

                                <?php
                                $totalprice = 0;
                                $select_query = "SELECT * FROM `mycart` WHERE cid = $id";
                                $run_query = mysqli_query($connection, $select_query);
                                while($result = mysqli_fetch_array($run_query)){
                                ?>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <?php echo $result['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['price']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['quantity']; ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $totalprice += $result['price'] * $result['quantity'];
                                    }
                                    ?>

                            </table>
                            <div class="pb-3 ps-5 pe-5 d-flex">
                                <h4>Total</h4>
                                <h4 class="ms-auto">Rs
                                    <?= $totalprice ?>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-0 p-5">
                    <div class="col">
                        <button type="submit" name="order" class="btn btn-success w-100">Place an order</button>
                    </div>
                </div>
                </form>

                <?php
                if(isset($_POST['order'])){
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $city = $_POST['city']; 
                    $zip = $_POST['zip'];
                    $province = $_POST['province'];
                    $country = $_POST['country'];
                    $total = $totalprice;

                    $insert_query = "INSERT INTO `orders`(`cid`, `name`, `phone`, `address`, `city`, `zip`, `province`, `country`, `totalprice`)
                    VALUES ('$id','$name','$phone','$address','$city','$zip','$province','$country','$total')";
                    $result = mysqli_query($connection, $insert_query);
            
                    $delete_query = " DELETE FROM `mycart` WHERE cid=$id";
                    $query = mysqli_query($connection, $delete_query);

                    if($result){ 
                        ?>
                        <script>
                            window.location.href="orders.php";
                            alert("Your order is placed successfully.");
                        </script>
                        <?php
                    }else{
                        ?>
                        <script>
                            alert("Sorry, the order could not be placed.");
                        </script>

                    <?php
                    }
                    }
                    ?>

            </div>
        </div>
    </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>
</body>
</html>