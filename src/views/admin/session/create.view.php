<?php require base_path('views/admin/partials/head.php') ?>


<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mt-5">Login</h5>
                    <form method="POST" class="p-auto" action="/admins/session">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />

                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>

                        <ul>
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