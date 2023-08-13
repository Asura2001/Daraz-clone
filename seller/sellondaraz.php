<?php
session_start();
if(isset($_SESSION['seller_id'])){
    $id = $_SESSION['seller_id'];
    $name = $_SESSION['name'];
} else{
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include "links.php"; ?>
</head>

<body>

    <header>
        <div class="dashboard d-flex justify-content-between">
            <p class="fw-bold fs-4 p-3 mb-0"><a href="sellondaraz.php" class="text-reset text-decoration-none">Dashboard</a>
            </p>
            <div class="dropdown p-3">
                <button class="btn btn-outline-light dropdown-toggle" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo("$name"); ?>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                    <hr class="mb-0">
                    <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
                </ul>
            </div>
        </div>
    </header>
    
    <main class="bg-light pb-5">
        <section class="pt-5 fs-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-6">
                        <a href="addproduct.php" class="text-decoration-none">
                            <div class="products">
                                <p>Add a product</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="viewproducts.php" class="text-decoration-none">
                            <div class="products">
                                <p>View products</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-6">
                        <a href="addsaleproduct.php" class="text-decoration-none">
                            <div class="products">
                                <p>Add discount products</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="viewsaleproducts.php" class="text-decoration-none">
                            <div class="products">
                                <p>View discounted products</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>
</body>

</html>