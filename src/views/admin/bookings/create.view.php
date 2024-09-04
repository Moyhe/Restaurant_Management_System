<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>


<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Bookings</h5>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">date_booking</th>
                                <th scope="col">num_people</th>
                                <th scope="col">special_request</th>
                                <th scope="col">status</th>
                                <th scope="col">created_at</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($bookings as $booking) : ?>
                                <tr>
                                    <th scope="row"> <?= $booking['id'] ?> </th>
                                    <td><?= $booking['name'] ?></td>
                                    <td><?= $booking['email'] ?></td>
                                    <td><?= $booking['date'] ?></td>
                                    <td><?= $booking['people'] ?></td>
                                    <td><?= $booking['special_request'] ?></td>
                                    <td><?= $booking['status'] ?></td>
                                    <td><?= $booking['created_at'] ?></td>
                                    <td>
                                        <form action="/admins/bookings?id=<?= $booking['id'] ?>" method="post">
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