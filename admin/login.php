<?php
session_start();
include "connection.php";
if(isset($_POST["login"])){
    $name=   mysqli_real_escape_string($connection, $_POST['name']);
    $password=  mysqli_real_escape_string($connection, $_POST['password']);

    $select_query = "SELECT * FROM `a-register` WHERE `name`='$name' AND `password`='$password'";

    $result_query = mysqli_query($connection, $select_query);
    $run_result = mysqli_num_rows($result_query);

    if($run_result > 0){
        $started_session = mysqli_fetch_assoc($result_query);
        $_SESSION['adm_id'] = $started_session['id'];
        $_SESSION['name'] = $started_session['name'];
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
    <title>Document</title>
    <?php include "links.php"; ?>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col mt-5">
                <form class="bg-light p-5 rounded mt-4" id="signup-form" method="POST" enctype="multipart/form-data">
                    <h1 class="text-dark text-center pb-2">Login to your account</h1>
                    <div class="d-flex justify-content-around">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold text-muted">Full name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                    required>
                            </div>

                            <div class="mb-4 show">
                                <label for="password" class="form-label text-muted fw-bold">Password</label>
                                <input type="password" id="myInput" name="password" class="form-control"
                                    placeholder="Minumum 6 characters with a number and a letter" required>
                                <div class="showpass">
                                    <i class="fa-solid text-dark fa-eye fs-5" onclick="myFunction()"></i>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn btn-orange mb-3 p-2 w-100">Login</button>
                            <div class="text-end mt-4">
                                <p>Don't have an account? <a href="register.php">Register</a> now.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>