<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Foods</h5>
                    <a href="/admin/foods" class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">image</th>
                                <th scope="col">price</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($foods as $food) : ?>
                                <tr>
                                    <th scope="row"> <?= $food['id'] ?> </th>
                                    <td><?= $food['name'] ?></td>
                                    <th> <img src="/img/<?= $food['image'] ?>" alt="" srcset="" style="width: 80px;"> </th>
                                    <td>$<?= $food['price'] ?></td>
                                    <td>
                                        <form action="/admins/foods?id=<?= $food['id'] ?>" method="post">
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