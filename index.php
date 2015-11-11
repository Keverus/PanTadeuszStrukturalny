<html>
	<head>
		<meta charset="UTF-8">
		<title>Pan Tadeusz</title>
	</head>	
	<body>
		<h1>Pan Tadeusz, czyli ostatni zajazd na Litwie</h1>
		<h2>Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h2>
		<div id="menu">
			<p>Spis Treści</p>
			<ul>
				<li><a href="index.php">Strona Główna</a></li>
				<li><a href="index.php?co=k1">Księga I</a></li>
				<li><a href="index.php?co=k2">Księga II</a></li>
				<li><a href="index.php?co=k3">Księga III</a></li>
				<li><a href="index.php?co=k4">Księga IV</a></li>
				<li><a href="index.php?co=k5">Księga V</a></li>
				<li><a href="index.php?co=k6">Księga VI</a></li>
				<li><a href="index.php?co=k7">Księga VII</a></li>
				<li><a href="index.php?co=k8">Księga VIII</a></li>
				<li><a href="index.php?co=k9">Księga IX</a></li>
				<li><a href="index.php?co=k10">Księga X</a></li>
				<li><a href="index.php?co=k11">Księga XI</a></li>
				<li><a href="index.php?co=k12">Księga XII</a></li>
			</ul>
		</div>
		<div id="ksiegi">
			<?php
				for ($i=1;$i<=12;$i++){
						$book='k'.$i;
						if ($book==$_GET[co]){
							$book='./ksiegi/'.$_GET[co].'.html';
							require_once($book);
						}
					}
			?>
		</div>
	</body>	
</html>