<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>

    <!-- Service Start -->
    <div class="container">

        <div class="col-md-12 bg-dark">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Register</h5>
                <h1 class="text-white mb-4">Register for a new user</h1>
                <form class="col-md-12">
                    <div class="row g-3">
                        <div class="">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Username</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="email" placeholder="Your Email">
                                <label for="password">Password</label>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>