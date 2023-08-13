<?php
session_start();
if(isset($_SESSION['adm_id'])){
    $id = $_SESSION['adm_id'];
    $name = $_SESSION['name'];
} else{
    header("location: login.php");
}
?>

<header>
    <div class="d-flex justify-content-between p-3 dashboard pb-0">
        <p class="fw-bold fs-4"><a href="index.php" class="text-reset text-decoration-none">Dashboard</a></p>
            <ul class="list-unstyled text-end">
                <li class="list-inline-item tshadow"><a href="addproduct.php" class="text-reset text-decoration-none">Add a product</a></li>
                <li class="list-inline-item tshadow"><a href="viewproducts.php" class="text-reset text-decoration-none">View Products</a></li>
                <li class="list-inline-item tshadow"><a href="addsaleproduct.php" class="text-reset text-decoration-none">Add discount products</a></li>
                <li class="list-inline-item tshadow"><a href="viewsaleproducts.php" class="text-reset text-decoration-none">View discounted products</a></li>
                <li class="list-inline-item">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo("$name") ?>
                        </button>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                            <hr class="mb-0">
                            <li><a class="dropdown-item" href="signout.php">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
    </div>
</header>