<header>
    <h1><a class="title" href="index.php">RuneStone</a></h1>
    <ul class="nav" aria-roledescription="Navigation">
        <li class="link"><a href="pages/catalog.php">Jewelry</a> </li>
        <li class="link"><a href="pages/featured.php">Featured</a> </li>
        <li class="link"><a href="pages/about.php">About Us</a> </li>
        <li class="link"><a href="pages/contact.php">Contact</a> </li>
        <?php
        session_start();

        if (!isset($_SESSION["email"])) {
            if (isset($_SESSION["is_employee"])){
                    echo '<li class="link"><a href="pages/mod_catalog.php">Modify Catalog</a> </li>';
            }
            echo '<li class="link"><a href="pages/account.php">My Account</a> </li>';
            echo '<li class="link"><a href="../src/logout.php">Logout</a> </li>';
        } else {
            echo '<li class="link"><a href="pages/login.php">Login</a> </li>';
        }
        ?>
    </ul>
</header>
