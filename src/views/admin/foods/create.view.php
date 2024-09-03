<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Foods</h5>
                    <a href="/admin/create/food" class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

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
                            <tr>
                                <th scope="row">1</th>
                                <td>Pizza</td>
                                <td>image</td>
                                <td>$1300</td>
                                <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                            </tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td>image</td>
                            <td>$1300</td>
                            <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                            </tr>
                            <th scope="row">1</th>
                            <td>Pizza</td>
                            <td>image</td>
                            <td>$1300</td>
                            <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>

<?php require base_path('views/admin/partials/footer.php') ?>