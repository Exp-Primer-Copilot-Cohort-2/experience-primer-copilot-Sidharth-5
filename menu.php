<?php
// Determine the current page
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header-nav">
    <div class="logo"><a href="#">BookLab</a></div> <!-- Logo -->
    <nav class="nav-bar">
        <ul class="nav-list">
            <li><a class="<?php echo $current_page == 'home.php' ? 'active' : ''; ?>" href="home.php">Home</a></li>
            <li><a class="<?php echo $current_page == 'books.php' ? 'active' : ''; ?>" href="books.php">Books</a></li>
            <li><a class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About</a></li>
            <li><a class="<?php echo $current_page == 'search.php' ? 'active' : ''; ?>" href="search.php">Search</a></li>
        </ul>
    </nav>
    <?php include 'buttons.php'; ?> <!-- Include the buttons file -->
</header>
