<div class="nav-button">
    <a href="cart.php" class="cart-button">
        <img class="cart-icon" src="img/shopping-cart.svg" alt="Cart">
    </a>
    <a href="login.php" class="login-button">Log In</a>
</div>

<style>

    /* Adjusting image size */
    .cart-icon
    {
        width: 45px;  /* Increase width */
        height: 45px; /* Increase height */
        object-fit: cover; /* Ensures image fits the size without distortion */
        border-radius: 50%; /* Optional: makes the image circular */
    }


    .login-button:hover 
    {
        background-color: #555;
    }

    .nav-button 
    {
        display: flex;
        align-items: center;
        gap: 25px;
    }

</style>
