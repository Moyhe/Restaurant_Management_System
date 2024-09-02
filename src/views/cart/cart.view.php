<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>

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

                <?php foreach ($cart as $item) : ?>
                    <tr>
                        <th> <img src="img/<?= $item['image'] ?>" alt="" srcset="" style="width: 80px;"> </th>
                        <td><?= $item['name'] ?></td>
                        <td>$<?= $item['price'] ?></td>
                        <td>
                            <form action="/delete-item?id=<?= $item['id'] ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger text-white">delete</button>
                            </form>
                        </td>
                    </tr>
                <? endforeach; ?>
            </tbody>
        </table>
        <div class="position-relative mx-auto" style="max-width: 400px; padding-left: 679px;">
            <p style="margin-left: -7px;" class="w-19 py-3 ps-4 pe-5" type="text"> Total: $<?= $cartPrice['total_price'] ?></p>
            <a href="" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Checkout</a>
        </div>
    </div>
</div>
<!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>