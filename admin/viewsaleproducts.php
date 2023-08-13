<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products for sale</title>
    <?php include "links.php"; ?>
</head>
<body>
    <?php include "sheader.php"; ?>

    <main class="bg-light pt-5 pb-5">
        <section>
            <div class="container">
            <?php        
                include ('connection.php');
                $check_query = "SELECT * FROM `sale_product_data` WHERE user_id = $id";
                $check_result = mysqli_query($connection, $check_query);

                if(mysqli_num_rows($check_result) > 0){
            ?>
                <div class="row p-3 bg-white rounded">
                    <div class="col mt-3 mb-3">
                        <table class="table lms_table_active table-hover" id="myTable">
                            <h4 class="mb-3 text-center">Products on Sale</h4>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">User Type</th>
                                    <th scope="col">Original price</th>
                                    <th scope="col">Discounted price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <?php        
                                include ('connection.php');
                                $select_query = "SELECT * FROM `sale_product_data`";
                                $run_query = mysqli_query($connection, $select_query);
                                while($result = mysqli_fetch_array($run_query)){
                            ?>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php echo $result['id']; ?>
                                    </th>
                                    <td>
                                        <?php echo $result['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['usertype']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $result['dis_price']; ?>
                                    </td>
                                    <td><img width="60" src="../assets/upload/<?php echo $result['image']; ?>"></td>
                                    <td><a href="updatesaleproduct.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Update Product"><i
                                                class="far fa-edit ms-3"></i></a></td>
                                    <td><a href="deletesaleproduct.php?id=<?php echo $result['id']; ?>" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom" title="Delete Product"><i
                                                class="fa-solid fa-trash ms-3"></i></a></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php } else{
                    ?>
                    <div class="container">
                        <div class="row card card-body pt-5 pb-5 text-center">
                            <div class="col">
                                <h4>No Products added yet</h4>
                                <a class="btn btn-outline-success mt-5 ps-5 pe-5" href="addsaleproduct.php">Start adding your products</a>
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