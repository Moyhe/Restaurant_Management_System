<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Foods</h5>
                    <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
                    <p class="card-text">number of foods: <?= $foods['food_count'] ?></p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders</h5>

                    <p class="card-text">number of orders: <?= $orders['order_count'] ?></p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Bookings</h5>

                    <p class="card-text">number of bookings: <?= $bookings['booking_count'] ?></p>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Admins</h5>

                    <p class="card-text">number of admins: <?= $admins['admin_count'] ?></p>

                </div>
            </div>
        </div>
    </div>

</div>



<?php require base_path('views/admin/partials/footer.php') ?>