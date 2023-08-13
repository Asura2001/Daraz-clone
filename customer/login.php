<?php
session_start();
include "connection.php";
if(isset($_POST["login"])){
    $phone=   mysqli_real_escape_string($connection, $_POST['phone']);
    $password=  mysqli_real_escape_string($connection, $_POST['password']);

    $select_query = "SELECT * FROM `c-register` WHERE `phone`='$phone' AND `password`='$password'";

    $result_query = mysqli_query($connection, $select_query);
    $run_result = mysqli_num_rows($result_query);

    if($run_result > 0){
        $started_session = mysqli_fetch_assoc($result_query);
        $_SESSION['custom_id'] = $started_session['id'];
        $_SESSION['name'] = $started_session['name'];
        $_SESSION['phone'] = $started_session['phone'];
        $_SESSION['password'] = $started_session['password'];

        header('location:index.php');

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
    <title>Daraz.pk: Online Shopping Pakistan - Mobiles, Tablets, Home Appliances, TV, Audio &amp; More</title>
    <?php include "links.php"; ?>
    <link rel="stylesheet" href="lstyle.css">
</head>
<body>
    <?php include "../assets/include/header.php"; ?>

    <main class="p-5 bg-light">
    <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="fs-4">Welcome to Daraz! Please login.</div>
                        <div class="small text-muted mt-2">New member? <a class="text-decoration-none"
                                href="register.php">Register</a> here</div>
                    </div>
                    <form id="signup-form" method="POST" enctype="multipart/form-data">
                        <div class="p-4 bg-white d-flex justify-content-around">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number or Email<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="phone" name="phone" pattern="[0-9]{11}"
                                        class="form-control" placeholder="Enter your phone number" required>
                                </div>

                                <div class="mb-3 show">
                                    <label for="password" class="form-label">Password<span
                                            class="text-danger">*</span></label>
                                    <input type="password" id="myInput" name="password" class="form-control"
                                        placeholder="Minumum 6 characters with a number and a letter" required>
                                        <div class="showpass">
                                            <i class="fa-solid fa-eye fs-5" onclick="myFunction()"></i>
                                        </div>
                                </div>

                                <div class="mb-3 mt-3 text-end">
                                    <a class="small" href="#">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="col-5 mt-3">
                                <button type="submit" name="login" class="btn btn-orange p-2 w-100">Login</button>
                                <div class="mb-3 mt-3">
                                    <p class="small text-muted">Or, login with</p>
                                    <button class="btn btn-facebook ps-3 pe-3 me-1"><i class="fa-brands fa-facebook-f me-4"></i>Facebook</button>
                                    <button class="btn btn-google ps-3 pe-4 ms-1"><i class="fa-brands fa-google-plus-g me-4"></i>Google</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php include "../assets/include/footer.php"; ?>
</body>
</html>