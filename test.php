<!DOCTYPE html>
<html>
<head>
	<title>battle</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>
<body>
<audio id="shot"><source src="audio/shot.mp3" type="audio/mpeg"></audio>
<audio id="hit"><source src="audio/hit.mp3" type="audio/mpeg"></audio>

<div id="container">
	<div id="furst">USER
					<?php
					//my table
				echo "<table id='table'>";
				for ($row = 0; $row < 5; $row ++) {
				   echo "<tr>";
				   for ($col = 1; $col <= 5; $col ++) {
				        echo "<td class='td_furst' ></td>";
				   }
				   echo "</tr>";
				}
				echo "</table>";
				?>
	</div>
	<div id="second">BOT
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
	<div class="result"> <p id="my_score">My Score: 0</p><p id="pc_score">Pc Score: 0</p> </div>

</div>
<script type="text/javascript">
var temp = 0 , flag;
var shot = 0;
var miss = 0;
var pc_score = 0;
//arrange my ships
$("#furst td").click(function(){ 

			var img=Math.floor((Math.random() * 4) + 1);
	var img = "<img src=' img/ship" +img+ ".png ' />";
	$(this).append(img);
	$(this).off('click');
	temp=temp+1;

//array for pc answer
	function numberArray(a,b){
			b=[];
			while(a--)b[a]=a+1;
			return b;}

			function rand(a,b,c,d){
			c=a.length;
			while(c)b=Math.random()*(--c+1)|0,d=a[c],a[c]=a[b],a[b]=d}
			var a=numberArray(24);
			rand(a);



	//my thurn
	var i =0;
	if (temp==10) {
		$("#furst td").off('click');
	   	$("#second td").on('click');
	   	
	   
	    $("#second td").click(function(){ 
	    document.getElementById("shot").play(); ;
		$(this).css("background-color","gray");
		$(this).off('click');
	   	var shoting = $(this).children("p").html();
	   
	    if (shoting==1) { 
	    	shot++;
	    	$(this).css("background-color","red");
	    	var img=Math.floor((Math.random() * 4) + 1);
	    	var imgcrash="<img src=' img/ship" +img+ ".png ' />";
	    	$(this).append(imgcrash);

	    	setTimeout(function(){	document.getElementById("hit").play();  }, 1000);
			 
			









	   		$("#my_score").text("My Score: " + shot);}

	   	// $("td").off('click');
	   	// $("td").on('click');
					//pc thurn
				    setTimeout(function(){	
					    var td = document.getElementsByClassName('td_furst')[a[i]];
					    i++;
					    td.style.background = "gray";
					    document.getElementById("shot").play();
					    var src = td.querySelector('img').getAttribute('src');
					    // $("td").on('click');

					    if (src) {
					    	//td.querySelector('img').src="img/ship2.png";
					    	td.style.background = "red";
					    	var rnd=Math.floor((Math.random() * 4) + 1);
					    	setTimeout(function(){	document.getElementById("hit").play();  }, 1000);
							 
					    	pc_score++;
					    	$("#pc_score").text("Pc Score: " + pc_score);
					    	 console.log(src);

					    } 
					     }, 4000);

		 }); 



	}
}); 



</script>
</body>
</html>

