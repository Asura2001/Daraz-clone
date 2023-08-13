<?php
session_start();
include "connection.php";
if(isset($_POST["login"])){
    $name= mysqli_real_escape_string($connection, $_POST['lname']);
    $password= mysqli_real_escape_string($connection, $_POST['lpassword']);

    $select_query = "SELECT * FROM `s-register` WHERE `name`='$name' AND `password`='$password'";

    $result_query = mysqli_query($connection, $select_query);
    $run_result = mysqli_num_rows($result_query);

    if($run_result > 0){
        $started_session = mysqli_fetch_assoc($result_query);
        $_SESSION['seller_id'] = $started_session['id'];
        $_SESSION['name'] = $started_session['name'];
        $_SESSION['password'] = $started_session['password'];

        header('location:sellondaraz.php');

    ?>
    <script>
        alert("login Successful.");
    </script>
    <?php
   }

   else{
    ?>
    <script>
        alert("Email or password is incorrect.");
    </script>
    <?php
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include "links.php"; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@800&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row text-muted  justify-content-between">
                <div class="col-2">
                    <img src="../assets/images/darazsellercenter.png" class="ps-5 pb-4 pt-2 pe-4 img-fluid">
                </div>

                <div class="col-5">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="d-flex">
                            <div class="me-3">
                                <label for="name" class="form-label mt-1 mb-1 fw-bold">Email or Phone</label>
                                <input type="text" id="phone" name="lname" class="form-control"
                                    placeholder="Please enter" required>
                            </div>

                            <div class="me-3">
                                <label for="password" class="form-label mb-1 mt-1 fw-bold">Password</label>
                                <input type="password" name="lpassword" class="form-control" placeholder="Please enter"
                                    required>

                                <div class="mt-1 text-end">
                                    <a class="small text-reset" href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" name="login" class="btn btn-orange ps-4 pe-4">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section
            style="background-image: url(../assets/images/bgimage.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container-fluid">
                <div class="row cart-container p-5 ps-3 pe-4 text-white">
                    <div class="col-6">
                        <h1 class="display-3 fw-bolder main-text">Sell on Pakistan's #1 Marketplace</h1>
                        <p class="fs-5 fw-bold">Create a Daraz seller account in 5 minutes and reach millions of
                            customers today!</p>
                        <div class="cart-image">
                            <img src="../assets/images/cartimage.png" height="400px">
                        </div>
                    </div>

                    <div class="col-6 ps-5">
                        <p class="fw-bold d-inline me-2">Want to sell from overseas to Pakistan?</p>
                        <a href="#" class="btn btn-outline-light">Register as Global Seller</a>

                        <?php
                            if(isset($_POST['create'])){
                                $name = $_POST['name'];
                                $password = $_POST['password']; 
                                
                                $insert_query = "INSERT INTO `s-register`(`name`, `password`) 
                                VALUES ('$name','$password')";
                        
                                $result_query = mysqli_query($connection, $insert_query);
                        
                                if($result_query){ 
                                    ?>
                                    <script>
                                        alert("Registration successful.");
                                        window.location.href = "sellondaraz.php";
                                    </script>
                                    <?php
                                    
                                }else{
                                    ?>
                                    <script>
                                        alert("Registration was unsuccessful.");
                                    </script>
                                <?php
                                }
                        }?>

                        <form class="bg-light p-4 rounded mt-4" id="signup-form" method="POST" enctype="multipart/form-data">
                            <h1 class="text-dark text-center pb-2">Create an Account</h1>
                            <p class="text-muted text-center ps-2 pe-2 fs-5">Welcome! Millions of Daraz users are
                                waiting to buy your product.</p>
                            <div class=" d-flex justify-content-around">
                                <div class="col-10">
                                    <div class="mb-3">
                                        <label for="name" class="form-label fw-bold text-muted">Full name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter your name" required>
                                    </div>

                                    <div class="mb-4 show">
                                        <label for="password" class="form-label text-muted fw-bold">Password</label>
                                        <input type="password" id="myInput" name="password" class="form-control"
                                            placeholder="Minumum 6 characters with a number and a letter" required>
                                        <div class="showpass">
                                            <i class="fa-solid text-dark fa-eye fs-5" onclick="myFunction()"></i>
                                        </div>
                                    </div>
                                    <button type="submit" name="create" class="btn btn-orange mb-3 p-2 w-100">Create Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="sellondaraz">
            <div class="container">
                <div class="row mt-5">
                    <div class="col mt-5">
                        <h1 class="display-4 fw-bold">Why Sell on Daraz?</h1>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 d-flex">
                        <img src="../assets/images/basket.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Reach</h2>
                            <p class="sellondaraztext pt-2">Millions of customers on Daraz, Pakistan's most visited
                                shopping destination</p>
                        </div>
                    </div>

                    <div class="col-4 d-flex">
                        <img src="../assets/images/paperheart.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Free Registration</h2>
                            <p class="sellondaraztext pt-2">Account registration & listing items for sale is <b>free</b>
                            </p>
                        </div>
                    </div>

                    <div class="col-4 d-flex">
                        <img src="../assets/images/handcard.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Reliable Shipping</h2>
                            <p class="sellondaraztext pt-2">Fast, reliable and hassle free delivery through Daraz
                                logistic network</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-4 d-flex">
                        <img src="../assets/images/card.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Timely Payments</h2>
                            <p class="sellondaraztext pt-2">Funds are safely deposited directly to your bank account on
                                a <b>weekly basis</b></p>
                        </div>
                    </div>

                    <div class="col-4 d-flex">
                        <img src="../assets/images/percent.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Marketing Tools</h2>
                            <p class="sellondaraztext pt-2">Find new customers & grow more with <b>advertising</b> and
                                our whole range of <b>marketing tools</b></p>
                        </div>
                    </div>

                    <div class="col-4 d-flex">
                        <img src="../assets/images/chatbubble.png" width="60px" height="60px">
                        <div class="ms-4 mt-2">
                            <h2>Support&Training</h2>
                            <p class="sellondaraztext pt-2">Learn all about ecommerce for free and get help with seller
                                support and Daraz University</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container-fluid pe-4">
                <div class="row">
                    <div class="col-7">
                        <div class="leftbanner text-white">
                            <img src="../assets/images/person1.png" class="img-fluid ps-4 pe-4">
                            <div class="leftbannertext">
                                <h3 class="mb-0">We cannot imagine doing business<br>without Daraz now</h3>
                                <p class="mb-0 fs-5">Ali Khemani</p>
                                <p class="leftbannerfounder">Founder, Craftsman</p>
                            </div>

                            <div class="leftbannerstars">
                                <img src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png"
                                    width="12px">
                                <img src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png"
                                    width="12px">
                                <img src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png"
                                    width="12px">
                                <img src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png"
                                    width="12px">
                                <img src="https://gw.alicdn.com/imgextra/i2/O1CN01jCCsJ226P7rPBAiF5_!!6000000007653-2-tps-30-29.png"
                                    width="12px">
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="rightbanner">
                            <div class="card border-0 cardshadow">
                                <a href="https://www.youtube.com/watch?v=16P735hTtQs" target="_blank"><img
                                        src="../assets/images/person2.png" class="card-img-top"></a>
                                <div class="card-body">
                                    <a class="btn btn-outline-warning disabled">TESTIMONY</a>
                                    <h4 class="card-text mt-3">Zaid Asghar</h4>
                                    <p class="card-text">At just 16 years old, Zaid runs his own shop on Daraz where he
                                        deals in mobile accessories and other similar products. He is an inspiration to
                                        all budding entrepreneurs in the country.</p>
                                </div>
                            </div>

                            <div class="card border-0 mt-3 cardshadow">
                                <a href="https://www.youtube.com/watch?v=j5tJC2WxxM0" target="_blank"><img
                                        src="../assets/images/person3.png" class="card-img-top"></a>
                                <div class="card-body">
                                    <a class="btn btn-outline-warning disabled">TESTIMONY</a>
                                    <h4 class="card-text mt-3">Abdullah Bawa</h4>
                                    <p class="card-text">Back in 2015, Abdullah used to run a brick-and- mortar business
                                        of computing goods. After joining Daraz, he saw a boom in his online sales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4 fw-bold">5 Simple Steps to Start Selling</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-5">
                        <img src="../assets/images/signupimage.png" width="100px">
                        <h6 class="mt-3">Signup for Free</h6>
                        <p class="startselling">Create your account through our website or mobile app with just your
                            phone number</p>
                    </div>
                    <div class="col mt-5">
                        <img src="../assets/images/personplus.png" width="65px">
                        <h6 class="mt-3">Add Profile Information</h6>
                        <p class="startselling">Complete your profile by providing your email and store name so that we
                            can identify you</p>
                    </div>
                    <div class="col mt-5">
                        <img src="../assets/images/handcard.png" width="66px">
                        <h6 class="mt-3">Add Address Information</h6>
                        <p class="startselling">Provide all address details of your business</p>
                    </div>
                    <div class="col mt-5">
                        <img src="../assets/images/card.png" width="65px">
                        <h6 class="mt-3">Add ID & Bank Information</h6>
                        <p class="startselling">Add in your ID & Business related details. Include necessary bank
                            information for payments</p>
                    </div>
                    <div class="col mt-5">
                        <img src="../assets/images/boxheart.png" width="60px">
                        <h6 class="mt-3">List Products</h6>
                        <p class="startselling">Add products to your store through seller center. Start selling as soon
                            as your products go live after going through quality control"
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="video-container">
                            <img src="../assets/images/watchhere.jpg" class="img-fluid">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="750" height="427" src="https://www.youtube.com/embed/-jceis9MlXY"
                                    title="YouTube video player" allowfullscreen
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 pb-5 text-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="downloadimagecontainer">
                            <img src="../assets/images/downloadbuttonimage.png" class="img-fluid">
                            <div class="downloadimagetext">
                                <p class="fw-bold mb-0">GO MOBILE</p>
                                <h1 class="mb-4">Use the free Daraz Seller App</h1>
                                <p class="startselling pb-3">The Daraz Seller app is packed with features to help you
                                    manage and grow your<br>
                                    ecommerce business wherever you are. It gives you the freedom to take care of<br>
                                    business details right from your phone.</p>
                                <a href="https://apps.apple.com/bf/app/daraz-seller-centre/id1466211050"><img
                                        src="../assets/images/downlaodonapple.png" width="100px"></a>
                                <a href="https://play.google.com/store/apps/details?id=com.daraz.sellercenter&hl=en&gl=US&pli=1"
                                    class="ms-2"><img src="../assets/images/getitongoogle.png" width="115px"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 pb-5">
            <div class="container">
                <div class="row">
                    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                    <div class="col">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        What categories can I sell on Daraz?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        Daraz has over 30 main categories of goods that you can sell your
                                        products in, including fashion, electronics, FMCG, lifestyle, health &
                                        beauty to name a few. However, we do have items that are counterfeit,
                                        dangerous and prohibited by law or cultural norms which sellers must refrain
                                        from listing. Click here to learn more
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        What is Daraz Commission?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        Opening a shop on Daraz is completely free. However, Daraz does deduct a small
                                        percentage of commission from the payment of your orders. Each product
                                        commission depends on the type of category it falls under.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        What documents do I need to provide during signup?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        Click here to learn more about other document types that we accept.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseFour">
                                        What if incorrect information is submitted during signup?
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingFour">
                                    <div class="accordion-body">
                                        In case there are any issues in your seller signup form, our verification team
                                        will guide you by highlighting the incorrect information after which you can
                                        simply resubmit. Click here to learn more about seller signup rejection reasons.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <section class="mt-5 bg-darkorange">
            <div class="container">
                <div class="row text-white d-flex justify-content-between">
                    <div class="col-6 pt-5 pb-5">
                        <h1>What are you waiting for? Start selling with Daraz today.</h1>
                    </div>
                    <div class="col-3 getstarted">
                        <a href="login.php" class="btn btn-outline-light ps-5 pe-5">GET STARTED</a>
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>