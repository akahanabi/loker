<?php
	use yii\helpers\Html;
	use app\models\Industri;
?>
<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">
	<!-- Header -->
	<div id="header">
		<div class="container">
			<!-- Left Side Content -->
		  	<div class="left-side">
				<!-- Logo -->
				<div id="logo">
					<?= Html::a(Html::img('@web/themes/images/logo.png'), Yii::$app->homeUrl) ?>
			  	</div>
   				<!-- Main Navigation -->
    			<nav id="navigation">
	    			<ul id="responsive">
   						<li><a href="#">Cari Lowongan Kerja</a>
    						<ul class="dropdown-nav">
								<li><?= Html::a('Semua Lowongan', 'index.php?r=site/lowongan') ?></li>
	    						<li><a href="#">Berdasarkan Tipe</a>
		    						<ul class="dropdown-nav">
										<li><a href="#">Waktu Penuh</a></li>
										<li><a href="#">Paruh Waktu</a></li>
										<li><a href="#">Pekerja Lepas</a></li>
										<li><a href="#">Kontrak</a></li>
										<li><a href="#">Sukarelawan</a></li>
							    	</ul>
						    	</li>
								<li><a href="#">Berdasarkan Popularitas</a></li>
							</ul>
						</li>
						<li><a href="#">Perusahaan</a>
							<ul class="dropdown-nav">
								<li><a href="#">Semua Perusahaan</a>
								<li><a href="#">Berdasarkan Bidang</a>
		    						<ul class="dropdown-nav">
										<?php foreach(Industri::find()->all() as $industri) { ?>
			    							<li><?= Html::a($industri['nama'], '#') ?></li>
										<?php } ?>
							    	</ul>
						    	</li>
								<li><a href="#">Berdasarkan Popularitas</a></li>
								<li><a href="#">Berdasarkan Rating</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
			</div>
			<!-- Left Side Content / End -->
			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
				</div>
				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>
			</div>
			<!-- Right Side Content / End -->
		</div>
	</div>
	<!-- Header / End -->
</header>
<div class="clearfix"></div>