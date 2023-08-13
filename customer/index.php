<?php
session_start();
if(isset($_SESSION['custom_id'])){
    $id = $_SESSION['custom_id'];
    $phone = $_SESSION['phone']; 
    $name = $_SESSION['name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping in Pakistan: Fashion, Electronics & Groceries - Daraz.pk</title>
    <?php include "links.php"; ?>
</head>

<body>
    <?php include "../assets/include/header.php"; ?>

    <main class="bg-light pb-5">
        <section class="bg-white">
            <div class="container-fluid">
                <div class="row categories">
                    <div class="col-2 pe-0">
                        <ul class="list-unstyled text-muted">
                            <li><a class="nav-link text-reset pt-0 pb-0">Groceries & Pets</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Health & Beauty</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Men's Fashion</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Women's Fashion</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Mother & Baby</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Home & Lifestyle</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Electronic Devices</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Electroni Accessories</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">TV & Home Appliances</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Sports & Outdoor</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Watches, Bags & Jewellery</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                            <li><a class="nav-link text-reset pt-0 pb-0">Automotive & motorbikes</a><span class="i"><i
                                        class="fa-solid fa-chevron-right"></i></span></li>
                        </ul>
                    </div>
                    <div class="col-10">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="5"
                                    aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="6"
                                    aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="7"
                                    aria-label="Slide 8"></button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="8"
                                    aria-label="Slide 9"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="2000">
                                    <img src="../assets/images/Electronics.jpg" class="d-block w-100" alt="Electronics"
                                        data-toggle="tooltip" title="Electronics Week">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Wearables.jpg" class="d-block w-100" alt="Wearables"
                                        data-toggle="tooltip" title="TV Audio & Wearables">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Watches.jpg" class="d-block w-100" alt="Watches"
                                        data-toggle="tooltip" title="Watches">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Xiaomi.jpg" class="d-block w-100" alt="Xiaomi"
                                        data-toggle="tooltip" title="Xiaomi">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Food_storage.jpg" class="d-block w-100" alt="Food_storage"
                                        data-toggle="tooltip" title="Food Storage">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Fitness_depot.jpg" class="d-block w-100"
                                        alt="Fitness_depot" data-toggle="tooltip" title="Fitness Depot">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Baby_Bazar.jpg" class="d-block w-100" alt="Baby_Bazar"
                                        data-toggle="tooltip" title="Baby Bazar">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Tech_beauties.jpg" class="d-block w-100"
                                        alt="Tech_beauties" data-toggle="tooltip" title="Tech Beauties - BY">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../assets/images/Saya.jpg" class="d-block w-100" alt="Saya"
                                        data-toggle="tooltip" title="Saya">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="../assets/images/Electronics_week.png" alt="Electronics_week" class="img-fluid">
                    </div>
                </div>

                <div class="row row-content">
                    <div class="col p-0">
                        <div class="p-1 me-1 rounded-pill mart content-container">
                            <img src="../assets/images/Mart_image.png" alt="Mart" width="36px" class="img-fluid"><span
                                class="content ms-2">Mart</span><span class="i"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="p-1 me-1 rounded-pill fashion content-container">
                            <img src="../assets/images/Fashion_image.png" alt="Fashion" width="36x"
                                class="img-fluid"><span class="content ms-2">Fashion</span><span class="i"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="p-1 me-1 rounded-pill beauty content-container">
                            <img src="../assets/images/Beauty_image.png" alt="Beauty" width="36px"
                                class="img-fluid"><span class="content ms-2">Beauty</span><span class="i"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>
                    <div class="col p-0">
                        <div class="p-1 me-1 rounded-pill decor content-container">
                            <img src="../assets/images/Home & Decor_image.png" alt="Home & Decor" width="36px"
                                class="img-fluid"><span class="content ms-2">Home & Decor</span><span class="i"><i
                                    class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h3 class="text-muted">Flash Sale</h3>
                <div class="row bg-white">
                    <div class="col-10">
                        <div class="p-3 pt-4 countdown-container">
                            <span class="text-orange pe-5">On Sale Now</span><span class="ps-3 pe-2">Ending
                                in</span><span class="p-2 me-1 rounded bg-orange text-light" id="hours">0</span><span
                                class="me-1 text-orange">:</span><span
                                class="p-2 me-1 rounded bg-orange text-light" id="minutes">0</span><span
                                class="me-1 text-orange">:</span><span
                                class="p-2 me-1 rounded bg-orange text-light" id="seconds">0</span>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="p-3 pe-0 text-end">
                            <a href="fillerpage.php" class="btn btn-orange">SHOP MORE</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="row bg-white pe-3">
                <?php
                    include 'connection.php';
                    $select_query = " SELECT * FROM `sale_product_data` ORDER BY rand() LIMIT 6";
                    $run_query = mysqli_query($connection, $select_query);
                    while($result = mysqli_fetch_array($run_query)){
                    ?>
                    <div class="col-2 pb-3 pe-0 name <?php echo $result['name']; ?>">
                        <div class="card product-shadow border-0">
                        <img src="../assets/upload/<?php echo $result['image']; ?>" class="card-img-top img-fluid" alt="product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result['name']; ?></h5>
                            <p class="card-text description"><?php echo $result['description']; ?></p>
                            <p class="card-text text-orange">Price: Rs <?php echo $result['dis_price']; ?></p>
                            <p class="card-text small text-muted"><del>Price: Rs <?php echo $result['price']; ?></del></p>
                            <a href="saleproduct.php?id=<?php echo $result['id']; ?>" class="btn btn-primary rounded-pill w-100">Buy Now</a>
                        </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        
        <section class="mt-5 fixed-items">
            <div class="container p-0">
                <h4 class="text-muted">Categories</h4>
                <ul class="list-inline fixed-items">
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/blacktea.jpg" title="Black Tea">
                        </div>
                        <div>
                            <p class="small mb-0">Black Tea</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/doorlocks.jpg" title="Door">
                        </div>
                        <div>
                            <p class="small mb-0">Door hardware</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/moisturizers.jpg" title="Mositurizers">
                        </div>
                        <div>
                            <p class="small mb-0">Mositurizers</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/tomatoes.jpg" title="Tomatoes">
                        </div>
                        <div>
                            <p class="small mb-0">Tomatoes</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/trimmer.jpg" title="Trimmer">
                        </div>
                        <div>
                            <p class="small mb-0">Trimmer</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/walldecor.jpg" title="Wall Decor">
                        </div>
                        <div>
                            <p class="small mb-0">Wall Decor</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/handstrength.jpg" title="Hand Strength">
                        </div>
                        <div>
                            <p class="small mb-0">Hand Strength</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/smartwatches.jpg" title="Smart Watches">
                        </div>
                        <div>
                            <p class="small mb-0">Smart Watches</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/wirelessearbuds.jpg" title="Wireless Earbuds">
                        </div>
                        <div>
                            <p class="small mb-0">Wireless Earbuds</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/inearheadphones.jpg" title="In-ear Headphones">
                        </div>
                        <div>
                            <p class="small mb-0">In-ear Headphones</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/bathroomcounter.jpg" title="Bathroom Stand">
                        </div>
                        <div>
                            <p class="small mb-0">Bathroom Stand</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/pushupbars.jpg" title="Push-up Bars">
                        </div>
                        <div>
                            <p class="small mb-0">Push-up Bars</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/pencilcase.jpg" title="Pencil Case">
                        </div>
                        <div>
                            <p class="small mb-0">Pencil Case</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/drawingtable.jpg" title="Drawing Table">
                        </div>
                        <div>
                            <p class="small mb-0">Drawing Table</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/tapedispenser.jpg" title="Tape Dispenser">
                        </div>
                        <div>
                            <p class="small mb-0">Tape Dispenser</p>
                        </div>
                    </li>
                    <li class="list-inline-item me-0 product-shadow text-center mt-1">
                        <div class="pt-4 pb-2">
                            <img src="../assets/images/dairies.jpg" title="Diaries and Notes">
                        </div>
                        <div>
                            <p class="small mb-0">Diaries and Notes</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="pt-3">
            <div class="container p-0">
                <h3 class="text-muted">Just For You</h3>
                <div class="row pe-3">
                    <?php
                    include 'connection.php';
                    $select_query = " SELECT * FROM `product_data`";
                    $run_query = mysqli_query($connection, $select_query);
                    while($result = mysqli_fetch_array($run_query)){
                    ?>
                    <div class="col-2 pb-3 pe-0 name <?php echo $result['name']; ?>">
                        <div class="card product-shadow border-0">
                        <img src="../assets/upload/<?php echo $result['image']; ?>" class="card-img-top img-fluid" alt="product">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $result['name']; ?></h5>
                            <p class="card-text desctiption"><?php echo $result['description']; ?></p>
                            <p class="card-text text-orange">Price: Rs <?php echo $result['price']; ?> </p>
                            <a href="product.php?id=<?php echo $result['id']; ?>" class="btn btn-primary rounded-pill w-100">Buy Now</a>
                        </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php include "../assets/include/footer.php"; ?>

    <script src="../assets/main.js"></script>
</body>

</html>