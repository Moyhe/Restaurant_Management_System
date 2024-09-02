<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<!-- Service Start -->
<div class="container">

    <div class="col-md-12">
        <?php if (count($bookings) > 0) : ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">Booking date</th>
                        <th scope="col">number of people</th>
                        <th scope="col">sepcial request</th>
                        <th scope="col">status</th>
                        <th scope="col">review</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($bookings as $booking) : ?>
                        <tr>
                            <th> <?= $booking['name'] ?> </th>
                            <td><?= $booking['email'] ?></td>
                            <td>$<?= $booking['date'] ?></td>
                            <td>
                                <?= $booking['people'] ?>
                            </td>
                            <td><?= $booking['special_request'] ?></td>
                            <td><?= $booking['status'] ?></td>
                            <td>
                                <?php if ($booking['status'] == 'confirmed') : ?>
                                    <a href="/review" class="btn btn-warning text-white">review us</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <? endforeach; ?>
                </tbody>

            </table>
        <?php else : ?>
            <div class="alert alert-danger text-center" role="alert">
                No bookings was set
            </div>

        <?php endif; ?>
    </div>
</div>
<!-- Service End -->

<?php require base_path('views/partials/footer.php') ?>