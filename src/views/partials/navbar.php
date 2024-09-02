<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar & Hero Start -->
<div class=" position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Service</a>
                <a href="/menu" class="nav-item nav-link">Menu</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>

                <?php

                use Core\Session;

                if (Session::has('user')) : ?>
                    <a href="/cart" class="nav-item nav-link"><i class="fa-sharp fa-solid fa-cart-shopping"></i>Cart</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['user']['email'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li> <a class="dropdown-item" href="/bookings">bookings</a></li>
                            <li> <a class="dropdown-item" href="/orders">orders</a></li>
                            <form action="/session" method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                <li> <button class="dropdown-item btn">logout</button></li>
                            </form>

                        </ul>
                    </li>

                <?php else : ?>

                    <a href="/login" class="nav-item nav-link">Login</a>
                    <a href="/register" class="nav-item nav-link">Register</a>
                <?php endif; ?>
            </div>

        </div>
    </nav>


</div>
<!-- Navbar & Hero End -->