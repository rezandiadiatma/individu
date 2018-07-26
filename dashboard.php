<?php
session_start();
if(!isset($_SESSION['id'])) {
   header('location:index.php'); 
} else { 
   $name = $_SESSION['id']; 
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Aplikasi Pengelola Keuangan</title>
		<meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
		<meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script src="js/modernizr.custom.79639.js"></script>
	</head>
	<body>
		<div id="container" class="container">	

			<div class="menu-panel">
				<h3>Menu</h3>
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current"><a href="#item1">Dashboard</a></li>
					<li><a href="#item2">Pendapatan</a></li>
					<li><a href="#item3">Pengeluaran</a></li>
					<li><a href="#item4" name="item4" >Kategori</a></li>
					<li><a href="#item5">Laporan Keuangan</a></li>
				</ul>
				<div>
					<a href="proses/logout.php">&larr; Logout</a>
				</div>
			</div>

			<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
					<div class="bb-item" id="item1">
						<div class="content">
							<div class="scroller">
								<h2>Total Bulan Ini</h2>
								<p><?php require_once("templates/dashboard.php");?></p>
							</div>
						</div>
					</div>
					<div class="bb-item" id="item2">
						<div class="content">
							<div class="scroller">
								<h2>Pendapatan</h2>
								<p><?php require_once("templates/income.php");?></p>
							</div>
						</div>
					</div>
					<div class="bb-item" id="item3">
						<div class="content">
							<div class="scroller">
								<h2>Pengeluaran</h2>
								<p><?php require_once("templates/expense.php");?></p>
							</div>
						</div>
					</div>
					<div class="bb-item" id="item4">
						<div class="content">
							<div class="scroller">
								<h2>Kategori</h2>
								<p><?php require_once("templates/kategori_pendapatan.php");?></p>
								<br><br>
								<p><?php require_once("templates/kategori_pengeluaran.php");?></p>
							</div>
						</div>
					</div>
					<div class="bb-item" id="item5">
						<div class="content">
							<div class="scroller">
								<h2>Laporan Keuangan</h2>
								<p><?php require_once("templates/laporan.php");?></em></p>
							</div>
						</div>
					</div>
				</div>
				
				<nav>
					<span id="bb-nav-prev" name="prev">&larr;</span>
					<span id="bb-nav-next" name="next">&rarr;</span>
				</nav>

				<span id="tblcontents" class="menu-button">Menu</span>

			</div>
				
		</div><!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.js"></script>
		<script src="js/jquerypp.custom.js"></script>
		<script src="js/jquery.bookblock.js"></script>
		<script src="js/page.js"></script>
		<script>
			$(function() {

				Page.init();

			});
		</script>
	</body>
</html>
