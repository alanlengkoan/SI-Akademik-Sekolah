	<!DOCTYPE html>
	<html lang="en" class="no-js">

	<head>
		<title>Selamat Datang | <?= $halaman ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="Sistem Informasi Akademik Sekolah" />
		<meta name="keywords" content="Sistem Informasi Akademik Sekolah" />
		<meta name="author" content="Sistem Informasi Akademik Sekolah" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/linearicons.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/bootstrap.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/magnific-popup.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/nice-select.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/animate.min.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/owl.carousel.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/jquery-ui.css">
		<link rel="stylesheet" href="<?= assets_url() ?>page/css/main.css">

		<!-- begin:: css local -->
		<?php empty($css) ? '' : $this->load->view($css); ?>
		<!-- end:: css local -->

		<style>
			.parsley-errors-list {
				color: red;
				list-style-type: none;
				padding: 0;
			}
		</style>

		<script src="<?= assets_url() ?>page/js/vendor/jquery-2.2.4.min.js"></script>
	</head>

	<body>
		<!-- begin:: header -->
		<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
							<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
							<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="<?= base_url() ?>"><img src="<?= assets_url() ?>page/img/logo.png" alt="" title="" /></a>
					</div>
					<nav id="nav-menu-container">
						<ul class="nav-menu">
							<li>
								<a href="<?= base_url() ?>">Beranda</a>
							</li>
							<li>
								<a href="<?= base_url() ?>berita">Berita</a>
							</li>
							<li>
								<a href="<?= base_url() ?>galeri">Galeri</a>
							</li>
							<li>
								<a href="<?= base_url() ?>tentang">Tentang</a>
							</li>
							<li>
								<a href="<?= base_url() ?>kontak">Kontak</a>
							</li>
							<li class="menu-has-children"><a href="">Siswa</a>
								<ul>
									<li><a href="<?= base_url() ?>siswa/aktif">Aktif</a></li>
									<li><a href="<?= base_url() ?>siswa/alumni">Alumni</a></li>
								</ul>
							</li>
							<li>
								<a href="<?= base_url() ?>tracer-study">Tracer Study</a>
							</li>
							<?php if ($this->session->userdata('id_users')) { ?>
								<li>
									<a href="<?= logout_url() ?>">Keluar</a>
								</li>
							<?php } else { ?>
								<li>
									<a href="<?= login_url() ?>">Masuk</a>
								</li>
							<?php } ?>
						</ul>
					</nav><!-- #nav-menu-container -->
				</div>
			</div>
		</header>
		<!-- end:: header -->

		<!-- begin:: content -->
		<?php $this->load->view($content); ?>
		<!-- end:: content -->

		<!-- begin:: footer -->
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Top Products</h4>
							<ul>
								<li><a href="#">Managed Website</a></li>
								<li><a href="#">Manage Reputation</a></li>
								<li><a href="#">Power Tools</a></li>
								<li><a href="#">Marketing Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Quick links</h4>
							<ul>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Brand Assets</a></li>
								<li><a href="#">Investor Relations</a></li>
								<li><a href="#">Terms of Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Features</h4>
							<ul>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Brand Assets</a></li>
								<li><a href="#">Investor Relations</a></li>
								<li><a href="#">Terms of Service</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Resources</h4>
							<ul>
								<li><a href="#">Guides</a></li>
								<li><a href="#">Research</a></li>
								<li><a href="#">Experts</a></li>
								<li><a href="#">Agencies</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h4>Newsletter</h4>
							<p>Stay update with our latest</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									<div class="input-group">
										<input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">
												<span class="lnr lnr-arrow-right"></span>
											</button>
										</div>
										<div class="info"></div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom row align-items-center justify-content-between">
					<p class="footer-text m-0 col-lg-6 col-md-12">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
					<div class="col-lg-6 col-sm-12 footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- end:: footer -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/easing.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/superfish.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/jquery.ajaxchimp.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/jquery.tabs.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/jquery.nice-select.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/mail-script.js"></script>
		<script type="text/javascript" src="<?= assets_url() ?>page/js/main.js"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

		<script type="text/javascript">
			// untuk angka
			function justAngka(e) {
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
					(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
					(e.keyCode >= 35 && e.keyCode <= 40)) {
					return;
				}
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			};
			// untuk format harga
			function autoSeparator(Num) {
				Num += '';
				Num = Num.replace('.', '');
				Num = Num.replace('.', '');
				Num = Num.replace('.', '');
				Num = Num.replace('.', '');
				Num = Num.replace('.', '');
				Num = Num.replace('.', '');
				x = Num.split('.');
				x1 = x[0];
				x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1))
					x1 = x1.replace(rgx, '$1' + '.' + '$2');
				return x1 + x2;
			};
		</script>

		<!-- begin:: js local -->
		<?php empty($js) ? '' : $this->load->view($js); ?>
		<!-- end:: js local -->
	</body>

	</html>