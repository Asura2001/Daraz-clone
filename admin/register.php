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

                <?php
                include "connection.php";

                if(isset($_POST['create'])){
                    $name = $_POST['name'];
                    $password = $_POST['password']; 

                    $insert_query = "INSERT INTO `a-register`(`name`, `password`) 
                    VALUES ('$name','$password')";
        
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

                <form class="bg-light p-5 rounded mt-4" id="signup-form" method="POST" enctype="multipart/form-data">
                    <h1 class="text-dark text-center pb-2">Create an Account</h1>
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
                            <button type="submit" name="create" class="btn btn-orange mb-3 p-2 w-100">Create
                                Account</button>
                            <div class="text-end mt-4">
                                <p>Already have an account? <a href="login.php">Login</a> here.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>