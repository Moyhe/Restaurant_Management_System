<?php

use Core\Session;
?>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav side-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="margin-left: 20px;" href="/admins">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admins/all" style="margin-left: 20px;">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/orders" style="margin-left: 20px;">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/create/food" style="margin-left: 20px;">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/bookings" style="margin-left: 20px;">Bookings</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto d-md-flex">


                    <?php if (Session::has('admin')) : ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                <?= Session::get('admin_name')['name'] ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form action="/admins/session" method="post">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="dropdown-item">Logout</button>
                                </form>

                            </div>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/admins/session">login
                            </a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </nav>