<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bootstrap 5 Login form Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php 
            $session = session();
            $error = $session->getFlashdata('error');
        ?>
        
        <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
        
                <?php if($error){ ?>
                    <p style="color:red">Terjadi Kesalahan:
                        <ul>
                            <?php foreach($error as $e){ ?>
                            <li><?php echo $e ?></li>
                            <?php } ?>
                        </ul>
                    </p>
                <?php } ?>

            </div>

            <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-white">
                <div class="card-body p-5">
                    <h2 class="fw-bold mb-2 text-uppercase ">Register</h2>
                    <form class="mb-3 mt-md-4" method="post" action="/auth/valid_register">
                        <div class="mb-3">
                            <label for="email" class="form-label">Username: </label>
                            <input class="form-control" type="text" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Password: </label>
                            <input class="form-control" type="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Konfirmasi Password: </label>
                            <input class="form-control" type="password" name="confirm" required>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-outline-dark" type="submit">Register</button>
                        </div>
                    </form>
                    <div>
                        <p class="mb-0  text-center">
                            <a href="/auth/login" class="text-primary fw-bold">Sudah punya akun?</a>
                        </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </body>
</html>