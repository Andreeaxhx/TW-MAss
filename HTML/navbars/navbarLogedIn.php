<div class="navbar">
        <a href="home.php">HOME</a>
        <a href="aboutus.php">ABOUT US</a>
        <a href="products.php">PRODUCTS</a>
        <?php if(isset($_SESSION['username'])): ?>
            <div class="dropdown">
                <button class="dropbtn">ADVICE<i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="makeup.php">MAKE-UP</a>
                    <a href="skincare.php">SKINCARE</a>
                </div>
            </div> 
            <a href="tumay.php">TELL US MORE ABOUT YOU</a>
            <a href="admin.php">ADMIN</a>
            <a href="../PHP/logout.php">LOGOUT</a>
            <h3>Hello <?php echo $_SESSION['username']?> </h3>
        <?php else : ?>
            <a href="login.php">LOGIN</a>
            <a href="register.php">REGISTER</a>
        <?php endif;?>

    </div>