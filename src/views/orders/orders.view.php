<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<!-- Service Start -->
<div class="container">

    <div class="col-md-12">
        <?php if (count($orders) > 0) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">town</th>
                        <th scope="col">country</th>
                        <th scope="col">zipcode</th>
                        <th scope="col">phone number</th>
                        <th scope="col">address</th>
                        <th scope="col">total price</th>
                        <th scope="col">status</th>
                        <th scope="col">date</th>

                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <th><?= $order['name'] ?> </th>
                            <td><?= $order['email'] ?></td>
                            <td><?= $order['town'] ?></td>
                            <td>
                                <?= $order['country'] ?>
                            </td>
                            <th><?= $order['zipcode'] ?></th>
                            <th><?= $order['phoneNumber'] ?></th>
                            <th><?= $order['address'] ?></th>
                            <th>$<?= $order['total_price'] ?></th>
                            <th><?= $order['status'] ?></th>
                            <th><?= $order['created_at'] ?></th>
                        </tr>
                    <? endforeach; ?>
                </tbody>

            </table>

        <?php else : ?>
            <div class="alert alert-danger text-center" role="alert">
                No orders was purchased
            </div>

        <?php endif; ?>
    </div>
</div>
<!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>