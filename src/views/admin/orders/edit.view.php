<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Update Status</h5>
                    <form method="POST" action="/admins/orders">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                        <div class="form-outline mb-4 mt-4">
                            <select name="status" class="form-select  form-control" aria-label="Default select example">
                                <option selected>Choose status</option>
                                <option value="pending">pending</option>
                                <option value="confirmed">confirmed</option>
                            </select>
                        </div>
                        <br>
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-dark  mb-4 text-center">update</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/admin/partials/footer.php') ?>