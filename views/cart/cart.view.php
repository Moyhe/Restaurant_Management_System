<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>

    <!-- Service Start -->
    <div class="container">

        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>image</th>
                    <td>Pizza</td>
                    <td>$10</td>
                    <td><a class="btn btn-danger text-white">delete</td>
                </tr>
                <tr>
                    <th>image</th>
                    <td>Pizza</td>
                    <td>$10</td>
                    <td><a class="btn btn-danger text-white">delete</td>
                </tr>
                <tr>
                    <th>image</th>
                    <td>Pizza</td>
                    <td>$10</td>
                    <td><a class="btn btn-danger text-white">delete</td>
                </tr>
                </tbody>
            </table>
            <div class="position-relative mx-auto" style="max-width: 400px; padding-left: 679px;">
                <p style="margin-left: -7px;" class="w-19 py-3 ps-4 pe-5" type="text"> Total: $100</p>
                <button type="button" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Checkout</button>
            </div>
        </div>
    </div>
    <!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>