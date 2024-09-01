<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>

<!-- banner -->
<div class="py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown"> <?= $register ?> </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/register"><?= $register ?></a></li>
            </ol>
        </nav>
    </div>
</div>
<!-- end banner -->

<!-- Service Start -->
<div class="container">
    <div class="col-md-12 bg-dark">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Register</h5>
            <h1 class="text-white mb-4">Register for a new user</h1>
            <form class="col-md-12" method="POST" action="/register">
                <div class="row g-3">
                    <div class="">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            <label for="name">Username</label>
                        </div>
                    </div>
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
                        <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                    </div>
                </div>
                <ul>
                    <?php if (isset($errors['name'])) : ?>
                        <li class="text-danger fs-5 mt-2"><?= $errors['name'] ?></li>
                    <?php endif; ?>

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