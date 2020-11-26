<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
			<p>PHP Quizer</p>
		</div>
	</header>

	<main>
			<div class="container">
				<h2>Testez vos connaissances</h2>
				<p>
					Ceci est un quiz à choix multiples pour tester vos connaissances .
				</p>
				<ul>
					<li><strong>Nombre de questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Choix multiple</li>
					<li><strong>Temps estimé:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>

				<a href="question.php?n=1" class="start">Démarrer le quiz</a>

			</div>

	</main>

</body>
</html>
