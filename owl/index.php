<?php
	require_once('koneksiku.php');
?>
<!doctype html>
<html>
	<head>
		<title>MyWeb</title>
		<link href = 'gayaku.css' rel = 'stylesheet'>
	</head>
	<body>
		<div id = 'wrapper'>
			<header>
				<h1>Welcome to mySite</h1>
			</header>
			<nav>
				<?php require_once('menu.php'); ?>
			</nav>
			<main>
				<?php
					if(!isset($_GET['madyan_go'])){
						require_once('main.php');
					}
					elseif($_GET['madyan_go'] == 'pagination'){
						require_once('page.php');
					}
					elseif($_GET['madyan_go'] == 'edit'){
						require_once('crud.php');
					}
					elseif($_GET['madyan_go'] == 'update'){
						require_once('edit.php');
					}
					elseif($_GET['madyan_go'] == 'doupdate'){
						require_once('edit_prc.php');
					}
					elseif($_GET['madyan_go'] == 'delete'){
						require_once('delete.php');
					}
					elseif($_GET['madyan_go'] == 'add'){
						require_once('add.php');
					}
					elseif($_GET['madyan_go'] == 'doadd'){
						require_once('add_prc.php');
					}
				?>
			</main>
			<footer>
				<p>Copyright &copy; 2015</p>
			</footer>
		</div><!-- wrapper -->
	</body>
</html>