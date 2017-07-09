<!DOCTYPE html>
<html>
<head>
	<title>battle</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<script type="text/javascript" src="assets/jquery-3.2.1.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">
</head>
<body>
<audio id="shot"><source src="audio/shot.mp3" type="audio/mpeg"></audio>
<audio id="hit"><source src="audio/hit.mp3" type="audio/mpeg"></audio>
<audio id="puton"><source src="audio/puton.mp3" type="audio/mp3"></audio>

<div id="planets"> 
	<div id="earth"></div>
	<div id="mars" ></div>
</div>

<div id="container">
	<div id="furst">USER NAME <p class="carefully">Put on 10 ships to start a game. Arrange carefully!!</p>
					<?php 
					//my table
				echo "<table id='table'>";
				for ($row = 0; $row < 5; $row ++) {
				   echo "<tr>";
				   for ($col = 1; $col <=5; $col ++) {
				        echo "<td class='td_furst' ></td>";
				   }
				   echo "</tr>";
				}
				echo "</table>";
				?>
	</div>
	<div id="second">PC BOT

		<?php
		$ship_temp=0;

//arrange ships for pc in table
	echo "<table>";
	for ($row = 0; $row < 5; $row ++) {
	   echo "<tr>";
	   for ($col = 1; $col <= 5; $col ++) {
	   		
	   		$ship = rand(0,4);
		   		if ($ship>1 && $ship_temp<10) {
		   			$arr[$col][$row]=1;
		   			$ship_temp++;
		   		}else{
		   			$arr[$col][$row]=0;
		   		}
	        echo "<td><p>" . $arr[$col][$row] . "</p></td>";
	   }
	   echo "</tr>";
	}
	echo "</table>";
	?>
	</div>
	<div class="result"> 
	<p id="my_score">My Score: 0</p>
	<p id="pc_score">Pc Score: 0</p> 
	</div>
</div>

<div id="message"> YOU WIN!</div>
<div id="message2"> YOU LOSE!</div>
<script type="text/javascript" src="assets/script.js"></script>
</body>
</html>

