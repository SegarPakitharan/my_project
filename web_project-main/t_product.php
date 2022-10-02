<?php 

	$id = $_GET['id'];

	if ($id == 'cc1') {
		$_SESSION['table'] = 'computer_casing';
	}else if ($id == 'g5') {
		$_SESSION['table'] = 'graphic_cards';
	}else if ($id == 'mb4') {
		$_SESSION['table'] = 'mother_board';
	}else if ($id == 'r5') {
		$_SESSION['table'] = 'ram';
	}


 ?>

 <form method="get" action="description.php">
 	<input type="hidden" name="id" value="<?php echo $id; ?>">
 </form>


 <?php header("location: discryption.php"); ?>
