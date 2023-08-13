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

    <main class="bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="d-flex justify-content-between mb-4">
                        <div class="fs-4">Create your Daraz Account</div>
                        <div class="small text-muted mt-2">Already Member? <a class="text-decoration-none"
                                href="login.php">Login</a> here</div>
                    </div>

                    
                <?php include 'connection.php';

                if(isset($_POST['register'])){
                    $phone = $_POST['phone'];
                    $password = $_POST['password'];
                    $birthday = $_POST['birthday'];
                    $gender = $_POST['gender'];
                    $name = $_POST['name'];        
                    
                    $insert_query = "INSERT INTO `c-register`(`phone`, `password`, `birthday`, `gender`, `name`) 
                    VALUES ('$phone','$password','$birthday','$gender','$name')";
            
                    $result_query = mysqli_query($connection, $insert_query);
            
                    if($result_query){ 
                        ?>
                        <script>
                            alert("Registration successful.");
                            window.location.href = "login.php";
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

                    <form id="signup-form" method="POST" enctype="multipart/form-data">
                        <div class="p-4 bg-white d-flex justify-content-around">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number<span
                                            class="text-danger formerror"> </span></label>
                                    <input type="text" name="phone" pattern="[0-9]{11}"
                                        class="form-control" placeholder="Enter your phone number (11 digits)" required>
                                </div>

                                <div class="mb-3 show">
                                    <label for="password" class="form-label">Password<span
                                            class="text-danger formerror"> </span></label>
                                    <input type="password" id="myInput" name="password" class="form-control"
                                        placeholder="Minumum 6 characters with a number and a letter" required>
                                        <div class="showpass">
                                            <i class="fa-solid fa-eye fs-5" onclick="myFunction()"></i>
                                        </div>
                                </div>

                                <div class="mb-3 d-flex justify-content-around">
                                    <div class="col-7">
                                        <label for="birthday" class="form-label">Birthday <span class="formerror"> </span></label>
                                        <input type="date" name="birthday" class="form-control">
                                    </div>

                                    <div class="col-4">
                                        <label for="gender" class="form-label">Gender <span class="formerror"> </span></label>
                                        <select name="gender" class="form-select" aria-label="Default select example">
                                            <option value="" selected disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name<span
                                            class="text-danger formerror"> </span></label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Enter your first and last name" required>
                                </div>

                                <button type="submit" name="register" class="btn btn-orange p-2 w-100">SIGN UP</button>
                                <div class="mb-3 mt-3">
                                    <p class="small text-muted">By clicking “SIGN UP”, I agree to Daraz's <a class="text-decoration-none"
                                            href="https://www.daraz.pk/terms-conditions?spm=a2a0e.login_signup.0.0.45cf7d68ZOZPtF"
                                            target="_blank">Terms of Use</a> and <a class="text-decoration-none"
                                            href="https://www.daraz.pk/privacy-agreement?spm=a2a0e.login_signup.0.0.45cf7d68ZOZPtF"
                                            target="_blank">Privacy Policy</a></p>
                                    <p class="small text-muted">Or, sign up with</p>
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