<?php include('head.php');?>
<!-- Navbar start here -->
<nav class="navbar navbar-expand-lg navbar-light navbar_style">
    <div class="responsive_logo">
        <a class="navbar-brand d-lg-none" href="index.php">
            <img src="<?= WEB_ASSETS ?>images/logo.png" class="img-fluid" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="w-100 collapse navbar-collapse flex-column" id="navbarSupportedContent">
        <div class=" top_navbar justify-content-between">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li>
                    <form class="form-inline position-relative my-2 my-lg-0 navbar_search">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search...">
                        <img src="<?= WEB_ASSETS ?>images/image.png" class="icon-1" alt="">
                        <img src="<?= WEB_ASSETS ?>images/search.png" class="icon-2" alt="">
                    </form>
                </li>
            </ul>
            <a class="navbar-brand d-sm-none d-lg-block" href="index.php">
                <img src="<?= WEB_ASSETS ?>images/logo.png" class="img-fluid" alt="">
            </a>
            <ul class="navbar-nav align-items-center justify-content-end">
                <li>
                    <a class="btn btn-dark btn-black" href="login.php">Login</a>
                </li>
                <li>
                    <select>
                        <option value="">EN</option>
                        <option value="">EN</option>
                        <option value="">EN</option>
                        <option value="">EN</option>
                    </select>
                </li>
                <!-- <li>
                    <select>
                        <option class="fas fa-globe"></option>
                    </select>
                </li> -->
            </ul>
        </div>
        <div class=" bottom_navbar justify-content-center">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">All Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">New Arrivals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">All Collection</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end here -->