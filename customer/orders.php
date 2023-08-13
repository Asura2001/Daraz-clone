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
    <?php include "links.php" ?>
</head>
<body>
    <?php include "../assets/include/header.php"; ?>

    <main> 
    <section class="bg-light">
        <div class="container">
            <?php
                include "connection.php";
                $check_query = "SELECT * FROM `orders` WHERE cid = $id";
                $check_query_result = mysqli_query($connection, $check_query);

                if(mysqli_num_rows($check_query_result) > 0){
            ?>
            <div class="row pt-5 pb-5 bg-light">
                <div class="col pt-5 pb-5 card">
                    <table class="card-body table lms_table_active table-hover" id="myTable">
                        <h4 class="mb-5 text-center">My Orders</h4>
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Id</th>
                                <th scope="col">Dated</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>

                        <?php
                            $select_query = "SELECT * FROM `orders` WHERE cid = $id";
                            $run_query = mysqli_query($connection, $select_query);
                            while($result = mysqli_fetch_array($run_query)){
                        ?>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <?php echo $result['id']; ?>
                                </td>
                                <td>
                                    <?php echo $result['time']; ?>
                                </td>
                                <td>
                                    <?php echo $result['name']; ?>
                                </td>
                                <td>
                                    <?php echo $result['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $result['address']; ?>
                                </td>
                                <td>
                                    <?php echo $result['totalprice']; ?>
                                </td>
                                <td>
                                    <?php echo $result['status']; ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php
                }

                else{
                    ?>
                    <div class="row pt-5 pb-5" style="height: 480px;">
                        <div class="card pt-5 pb-5 text-center">
                            <div class="col-6 offset-3">
                                <h4>You have placed no orders.</h4>
                                <a class="btn btn-outline-success ps-5 pe-5 mt-5" href="index.php">Continue shopping</a>
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