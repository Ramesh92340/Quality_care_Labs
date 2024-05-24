<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login|BHAVI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

</head>

<body>
  <div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card">
            <div class="card-body p-5">

              <?php
              $error = session('blog-error');
              $success = session('success');
              ?>
              <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                  <?php
                  // Check if $error is an array
                  if (is_array($error)) {
                    foreach ($error as $value) {
                      echo $value . '<br>';
                    }
                  } else {
                    echo $error;
                  }
                  ?>
                </div>
              <?php endif; ?>
              <?php if (!empty($success)) : ?>
                <div class="alert alert-success">
                  <?= $success ?>
                </div>
              <?php endif; ?>

              <form action="<?= base_url() ?> login_dashboard" method="post">

                <h2 class=" mb-2 text-uppercase "><strong>Quality care </strong></h2>
                <!-- <p class=" mb-5">we're Here to Help You Shine</p> -->
                <div class="mb-3">
                  <label for="email" class="form-label "><b> Username</b></label>
                  <input type="text" class="form-control form-input-login" id="email" placeholder="username" name="username">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label "><b>Password</b></label>
                  <input type="password" class="form-control form-input-login" id="password" placeholder="*******" name="password">
                </div>
                <div class="d-flex justify-content-center ">
                  <button class="btn btn-primary mt-2 login-button" type="submit" style="border-radius: 22px;">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>