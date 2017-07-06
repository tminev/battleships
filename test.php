<!DOCTYPE html>
<html>
<head>
	<title>battle</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<audio id="shot"><source src="audio/shot.mp3" type="audio/mpeg"></audio>
<audio id="hit"><source src="audio/hit.mp3" type="audio/mpeg"></audio>

<div id="planets"> 
<div id="earth">  </div>
<div id="mars" ></div>
</div>
<div id="container">
	<div id="furst">USER NAME
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
	<div class="result"> <p id="my_score">My Score: 0</p><p id="pc_score">Pc Score: 0</p> </div>
	
</div>
<div id="message"> YOU WIN Ma MAN !<div>
<div id="message2"> YOU LOSE!<div>
<script type="text/javascript">
//$("#message").fadeIn(3000);

var temp = 0 , flag =1;
var shot = 0;
var miss = 0;
var pc_score = 0;


//arrange my ships
$("#furst td").click(function(){ 

	var img=Math.floor((Math.random() * 4) + 1);
	var img = "<img src=' img/ship" +img+ ".gif ' />";
	$(this).append(img);
	$(this).off('click');
	temp=temp+1;


//array for pc answer
	function numberArray(a,b){
			b=[];
			while(a--)b[a]=a;
			return b;}

	function rand(a,b,c,d){
			c=a.length;
			while(c)b=Math.random()*(--c+1)|0,d=a[c],a[c]=a[b],a[b]=d}
			var a=numberArray(25);
			rand(a);

console.log(a)

	//my thurn
	var i =0;

	if (temp==10) { 

		var flag = true;
		$("#furst td").off('click');
	    $("#second td").on( "click", function() { 

	    if (flag) {
	    document.getElementById("shot").play(); 
		$(this).css("background-color","rgba(158, 158, 158, 0.3");
		$(this).off('click');
	   	var shoting = $(this).children("p").html();
	   flag = false
	    if (shoting==1) { 
	    	shot++;
	    	var img=Math.floor((Math.random() * 4) + 1);
	    	var imgcrash="<img src=' img/exp.gif ' />";
	    	$(this).append(imgcrash);
	    	var koko = $(this)
	    	setTimeout(function(){	document.getElementById("hit").play(); 
	    		koko.children().attr('src', 'img/crash.gif');
	    	 }, 1000);
	   		$("#my_score").text("My Score: " + shot);
	   		 if (shot==10) {
						 $("#message").fadeIn(3000);
						 return false;
			}
	   	}


					//pc thurn
				    setTimeout(function(){	
				    	flag=true;
					    var td = document.getElementsByClassName('td_furst')[a[i]];
					    i++;
					    td.style.background = "rgba(158, 158, 158, 0.3";
					    document.getElementById("shot").play();
					    var src = td.querySelector('img').getAttribute('src');
					  	
					    if (src) {
					   		var c = td.children;
					   		c[0].src='img/exp.gif'
					   		setTimeout(function(){	
					    	c[0].src='img/crash.gif'
					    	 }, 2000);
					    	var rnd=Math.floor((Math.random() * 4) + 1);
					    	setTimeout(function(){	document.getElementById("hit").play();  }, 1000);
							 
					    	pc_score++;
					    	$("#pc_score").text("Pc Score: " + pc_score);
					    	 
					    	 if (pc_score==1) {
							 $("#message2").fadeIn(3000);
							 return false;
							}
					    	 

					    } 
					}, 4000);
				}
		 }); 
	}

	


}); 

// cool
$(document).mousemove( function(e) {
   mouseY = e.pageY;
   mouseX = e.pageX;
   translateY = 'translateY(' + (mouseY-200)/20 + 'px)';
   translateX = 'translateX(' + (mouseX-800)/20 + 'px)';

    $('td').css({'transform': translateY});
    $('tr').css({'transform': translateX});
    
    $('#second').css({'transform': translateX});
    $('#furst').css({'transform': translateX});
    $('#container').css({'transform': translateY});


    translatePlanetY = 'translateY(' + (mouseY-200)/100 + 'px)';
  	translatePlanetX = 'translateX(' + (mouseX-800)/100 + 'px)';

    $('#mars').css({'transform': translatePlanetY})
    $('#earth').css({'transform': translatePlanetY})
    $('#planets').css({'transform': translatePlanetX});

});


 



</script>
</body>
</html>

