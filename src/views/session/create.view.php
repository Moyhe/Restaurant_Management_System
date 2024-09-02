<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<!-- Service Start -->
<div class="container">

    <div class="col-md-12 bg-dark">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Login</h5>
            <h1 class="text-white mb-4">Login</h1>
            <form class="col-md-12" method="POST" action="/session">
                <div class="row g-3">

                    <div class="">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                            <label for="email">Your Email</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="email" placeholder="Your Email">
                            <label for="password">Password</label>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                    </div>
                </div>

                <ul>
                    <?php if (isset($errors['email'])) : ?>
                        <li class="text-danger fs-5 mt-2"><?= $errors['email'] ?></li>
                    <?php endif; ?>

                    <?php if (isset($errors['password'])) : ?>
                        <li class="text-danger fs-5 mt-2"><?= $errors['password'] ?></li>
                    <?php endif; ?>
                </ul>
            </form>
        </div>
    </div>
</div>
<!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>