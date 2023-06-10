
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register | WebGIS</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-2">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="<?=site_url('logo.svg')?>" alt="logo" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>
              <div class="card-body">
                <?php if (session()->getFlashdata('error')) : ?>
			    <div class="alert alert-danger alert-dismissible show fade">
				<div class="alert-body">
					<button class="close" data-dismiss="alert">x</button>
					<b>Error</b>
					<?=session()->getFlashdata('error')?>
				</div>
			    </div>
		        <?php endif; ?>
                <form method="POST" action="<?=site_url('auth/registerProcess')?>" class="needs-validation" novalidate="">
                    <?=csrf_field()?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="text" class="form-control text-uppercase" name="nama" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your name
                    </div>
                  </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-2 text-muted text-center">
              Sudah memiliki akun ? <a href="<?=site_url('login')?>">Login</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/popper.js"></script>
  <script src="<?=base_url()?>/template/assets/js/tooltip.js"></script>
  <script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/moment.min.js"></script>
  <script src="<?=base_url()?>/template/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
  <script src="<?=base_url()?>/template/assets/js/auth/custom.js"></script>
</body>
</html>