<header class="sticky-top pb-1 soc">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid ms-5 me-4">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="fillerpage.php">SAVE MORE ON APP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fillerpage.php">DARAZ AFFILIATE PROGRAM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sellondaraz.php">SELL ON DARAZ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fillerpage.php">CUSTOMER CARE</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="trackorder.php">TRACK MY ORDER</a>
                </li>
                <?php if(!isset($_SESSION['custom_id'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">SIGNUP</a>
                </li>
                <?php } else{ ?>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle nav-link pt-0" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo($name) ?>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li class="p-0"><a class="dropdown-item ps-3" href="mycart.php">My Cart</a></li>
                            <li class="p-0"><a class="dropdown-item ps-3" href="orders.php">My Orders</a></li>
                            <hr class="mb-0">
                            <li class="p-0"><a class="dropdown-item ps-3" href="signout.php">Sign out</a></li>
                        </ul>
                    </div>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="fillerpage.php">LANGUAGE</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row m-3">
            <div class="col-2">
                <a href="./index.php"><img src="../assets/images/Daraz_logo.png" alt="Daraz_logo" width="135px"></a>
            </div>
            <div class="col-7 search-container">
                <input class="form-control" type="search" placeholder="Search in Daraz" id="searchbar" onkeyup="search()">
                <div class="search-btn">
                    <button class="btn btn-lg btn-orange" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="col-1 mt-1">
                <a class="btn" href="mycart.php">
                    <i class="fa fa-cart-shopping fs-4"></i>
                </a>
            </div>
            <div class="col-2">
                <a href="downloadnow.php" target="_blank"><img src="../assets/images/Download_now_logo.png" alt="Download_now_logo" width="185px"></a>
            </div>
        </div>
    </div>
</header>