
<header>
        <?php
        session_start();
        // if the navigation.php is executing in pages/ directory, then we need to modify the anchor paths
        $isExecInPublicRoot = strpos($_SERVER["SCRIPT_FILENAME"],"index.php");

        $mainPagePath = $isExecInPublicRoot ? "index.php" : "../index.php";
        $jewelryPagePath = $isExecInPublicRoot ? "pages/catalog.php" : "catalog.php";
        $featuredPagePath = $isExecInPublicRoot ? "pages/featured.php" : "featured.php";
        $aboutPagePath = $isExecInPublicRoot ? "pages/about.php" : "about.php";
        $contactPagePath = $isExecInPublicRoot ? "pages/contact.php" : "contact.php";
        $modCatalogPagePath = $isExecInPublicRoot ? "pages/mod_catalog.php" : "mod_catalog.php";
        $myAccountPagePath = $isExecInPublicRoot ? "pages/account.php" : "account.php";
        $logoutPagePath = $isExecInPublicRoot ? "../src/logout.php" : "../../src/logout.php";
        $loginPagePath = $isExecInPublicRoot ? "pages/login.php" : "login.php";

        echo '<h1><a class="title" href="'.$mainPagePath.'">RuneStone</a></h1>';
        echo '<ul class="nav" aria-roledescription="Navigation">';

        echo '<li class="link"><a href="'.$jewelryPagePath.'">Jewelry</a> </li>';
        echo '<li class="link"><a href="'.$featuredPagePath.'">Featured</a> </li>';
        echo '<li class="link"><a href="'.$aboutPagePath.'">About Us</a> </li>';
        echo '<li class="link"><a href="'.$contactPagePath.'">Contact</a> </li>';

        if (isset($_SESSION["email"])) {
            if (isset($_SESSION["is_employee"])){
                echo '<li class="link"><a href="'.$modCatalogPagePath.'">Modify Catalog</a> </li>';
            }
            echo '<li class="link"><a href="'.$myAccountPagePath.'">My Account</a> </li>';
            echo '<li class="link"><a href="'.$logoutPagePath.'">Logout</a> </li>';
        } else {
            echo '<li class="link"><a href="'.$loginPagePath.'">Login</a> </li>';
        }
        echo '</ul>';
        ?>
</header>
