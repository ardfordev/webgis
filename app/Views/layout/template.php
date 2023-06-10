<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <?= $this->renderSection('title') ?>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/@fontawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>/template/node_modules/select2/dist/css/select2.css">
	<link rel="stylesheet" href="<?=base_url()?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/css/components.css">

    <link rel="stylesheet" href="<?=base_url()?>/template/assets/gis/css/leaflet.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/gis/css/qgis2web.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/gis/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/template/assets/gis/css/leaflet-measure.css">
</head>

<body>
<div id="app">
	<div class="main-wrapper">
	<div class="navbar-bg"></div>
	<nav class="navbar navbar-expand-lg main-navbar">
		<form class="form-inline mr-auto">
		<ul class="navbar-nav mr-3">
			<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
		</ul>
		</form>
		<ul class="navbar-nav navbar-right">
		<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
			<img alt="image" src="<?=base_url()?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
			<div class="d-sm-none d-lg-inline-block">Hi, <?=userLogin()->nama?></div></a>
			<div class="dropdown-menu dropdown-menu-right">
			<a href="<?=site_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
				<i class="fas fa-sign-out-alt"></i> Logout
			</a>
			</div>
		</li>
		</ul>
	</nav>
	<div class="main-sidebar">
		<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?=site_url('dashboard')?>"><i class="fas fa-map"></i> WebGIS</a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?=site_url('dashboard')?>">WebGIS</a>
		</div>
		<ul class="sidebar-menu">
            <?= $this->include('layout/menu') ?>
		</ul>
		</aside>
	</div>

	<!-- Main Content -->
	<div class="main-content">
        <?= $this->renderSection('content') ?>
	</div>
	<footer class="main-footer">
		<div class="footer-left">
		Copyright &copy; 2023 <div class="bullet"></div> Developed By <a href="">ard</a>
		</div>
		<div class="footer-right">
		1.0
		</div>
	</footer>
	</div>
</div>

<!-- General JS Scripts -->
<script src="<?=base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="<?=base_url()?>/template/assets/js/stisla.js"></script>
<script src="<?=base_url()?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url()?>/template/node_modules/select2/dist/js/select2.full.js"></script>
<script src="<?=base_url()?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url()?>/template/assets/js/moment.min.js"></script>



<!-- JS Libraies -->
<script src="<?=base_url()?>/template/assets/js/chart.min.js"></script>

<script src="<?=base_url()?>/template/assets/gis/js/qgis2web_expressions.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/leaflet.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/leaflet.rotatedMarker.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/leaflet.pattern.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/leaflet-hash.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/Autolinker.min.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/rbush.min.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/labelgun.min.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/labels.js"></script>
<script src="<?=base_url()?>/template/assets/gis/js/leaflet-measure.js"></script>
<script src="<?=base_url()?>/template/assets/gis/data/NilaiLahan_KecamatanNgombol_1.js"></script>
<script src="<?=base_url()?>/template/assets/gis/data/BatasAdmin_2.js"></script>
<?= $this->renderSection('script') ?>

<!-- Template JS File -->

<script src="<?=base_url()?>/template/assets/js/scripts.js"></script>
<script src="<?=base_url()?>/template/assets/js/custom.js"></script>
<!-- Page Specific JS File -->
</body>
</html>