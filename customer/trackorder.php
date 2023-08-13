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
    <?php include "links.php"; ?>
</head>

<body>
    <?php include "../assets/include/header.php"; ?>

    <main class="bg-light p-5">
        <section class="bg-white p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1715.8239007312377!2d73.07921718841547!3d30.67204470062703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922c81bbab676a3%3A0x526924a9304a9ced!2sScheme%20Number%203%20Farid%20Town%2C%20Sahiwal%2C%20Sahiwal%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1691482381036!5m2!1sen!2s"
                            width="1050" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <?php include "../assets/include/footer.php"; ?>
</body>

</html>