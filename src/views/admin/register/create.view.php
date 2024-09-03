<?php require base_path('views/admin/partials/head.php') ?>
<?php require base_path('views/admin/partials/navbar.php') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Admins</h5>
                    <form method="POST" action="/admins/create">
                        <!-- Email input -->

                        <div class="form-outline mb-4">
                            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="username" />
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />

                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

                        <ul>
                            <?php if (isset($errors['name'])) : ?>
                                <li class="text-danger fs-5 mt-2"><?= $errors['name'] ?></li>
                            <?php endif; ?>

                            <?php if (isset($errors['email'])) : ?>
                                <li class="text-danger fs-5 mt-2"><?= $errors['email'] ?></li>
                            <?php endif; ?>

                            <?php if (isset($errors['password'])) : ?>
                                <li class="text-danger fs-5 mt-2"><?= $errors['password'] ?></li>
                            <?php endif; ?>
                        </ul>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php require base_path('views/admin/partials/footer.php') ?>