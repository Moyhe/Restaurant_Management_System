<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Orders</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">town</th>
                                <th scope="col">country</th>
                                <th scope="col">zipcode</th>
                                <th scope="col">phone_number</th>
                                <th scope="col">address</th>
                                <th scope="col">total_price</th>
                                <!-- <th scope="col">status</th> -->
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <th scope="row"> <?= $order['id'] ?> </th>
                                    <td><?= $order['name'] ?></td>
                                    <td><?= $order['email'] ?></td>
                                    <td><?= $order['town'] ?></td>
                                    <td><?= $order['country'] ?></td>
                                    <td>
                                        <?= $order['zipcode'] ?>
                                    </td>
                                    <td><?= $order['phoneNumber'] ?></td>
                                    <td><?= $order['address'] ?></td>
                                    <td>$<?= $order['total_price'] ?></td>


                                    <td>
                                        <form action="/admins/orders?id=<?= $order['id'] ?>" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger  text-center ">delete</button>
                                        </form>
                                    </td>
                                </tr>


                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>

<?php require base_path('views/admin/partials/footer.php') ?>