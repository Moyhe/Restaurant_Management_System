<?php

use Core\Session;

require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-12 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/<?= $items['image'] ?>">
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4"><?= $items['name'] ?></h1>
                <p class="mb-4"><?= $items['description'] ?></p>
                <div class="row g-4 mb-4">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                            <h3>Price: $ <?= $items['price'] ?> </h3>
                        </div>
                    </div>

                </div>
                <form action="/addToCart?id=<?= $items['id'] ?>" method="POST">
                    <?php if (isset($cart['id'])) : ?>
                        <button class="btn btn-primary py-3 px-5 mt-2" disabled>Added to Cart</button>
                    <?php else : ?>
                        <button class="btn btn-primary py-3 px-5 mt-2">Add to Cart</button>
                    <?php endif; ?>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>