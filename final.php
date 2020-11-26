<?php 

session_start();

?>

<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>Quiz</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>ton résultat</h2>
				<p>Félicitations Vous avez terminé ce test avec succès.</p>
				<p>votre <strong>Score</strong> est de <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>


</body>
</html>