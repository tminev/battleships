var temp = 0 , flag =1;
var shot = 0;
var miss = 0;
var pc_score = 0;


//arrange my ships
$("#furst td").click(function(){ 
	document.getElementById("puton").play(); 
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
		$(".carefully").fadeOut(2000);
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
	    	var thisTd = $(this)
	    	setTimeout(function(){	document.getElementById("hit").play(); 
	    		thisTd.children().attr('src', 'img/crash.gif');
	    	 }, 1000);
	   		$("#my_score").text("My Score: " + shot);
	   		 if (shot==10) {
						 for (var z = 0; z < 20; z++) {
						$("#message").fadeOut(700);
						$("#message").fadeIn(700);
						};
				return false;
			};
	   	};


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
					    	 
					     	 if (pc_score==10) {

							 	 for (var w = 0; w < 20; w++) {

							 		$("#message2").fadeOut(700);
							 		$("#message2").fadeIn(700);
							 		};
							 	$("#second td").off('click');
							 
							 };
					    	 

					    } ;
					}, 4000);
				};
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

