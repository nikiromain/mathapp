
$( init );
 
function init() {

   $(document).ready(function(e) {
    $("#randomNum div").click(function() {
	   var text = $(this).text();
        $("#randomNum div").each(function() {
           $(this).css("background-color", "purple");
			  $(this).css("color", "white"); 
        });
       $(this).css("background-color", "blue"); 
	     $(this).css("color", "black"); 
		 
		 if(number1 == number2)
		 {
			$("#number1").show();
			$("#number2").html($(this).text());
			if(text==number2){
			location.reload();
			 }
			 else{ $('#move-sound')[0].play();
				$('#ansBox').toggleClass('border');
				
			 }
			e.preventDefault();
		}
			
		else
			if(number1 > number2)
			{
			 $("#number1").show();
			 $("#number2").html($(this).text());
			 if(text==number2){location.reload();
			 }
			  else{ $('#move-sound')[0].play();
					$('#ansBox').toggleClass('border');
				

			 }
			 e.preventDefault();
			}
			
		else
		
        if(number1 < number2){
			$("#number2").show();
			$("#number1").html($(this).text());
            if(text==number2){
			location.reload();
			 }
			 else{ $('#move-sound')[0].play();
				$('#ansBox').toggleClass('border');
			
			 }
			e.preventDefault();
		}		
    });
	
});

$(function() {
    $("#mute").click(function(e) {
        e.preventDefault();
        
        var song = $('audio')[0]
        if (song.paused){
            song.play();
            document.getElementById("mute").src = "images/speakeron.png";
        }else{
            song.pause();
            document.getElementById("mute").src = "images/speakeroff.png";
        }
        });
});

	$('#correctsound').hide();
   $('#move-sound').hide();
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );
  
 var numberArray = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
  numberArray.sort( function() { return Math.random() - .3 } );
 
  for ( var i=0; i<10; i++ ) {
    $('<div>' + numberArray[i] + '</div>').data( 'number', numberArray[i] ).attr( 'id', 'card'+numberArray[i] ).appendTo( '#randomNum' )
}

//generate random number


var number1;
var number2;
number1 = Math.floor((Math.random() * 10) + 1);
number2 = Math.floor((Math.random() *10) + 1);


if(number1 > number2){
document.getElementById("number2").innerHTML ="?" ;
$("#number1").show();
document.getElementById("number1").innerHTML = number1;
var answer = number1 - number2;
document.getElementById("answer").innerHTML = answer;

}

else
if(number1==number2){
document.getElementById("number2").innerHTML ="?" ;
$("#number1").show();
document.getElementById("number1").innerHTML = number1;
var answer = number1 - number2;
document.getElementById("answer").innerHTML = answer;
}

else{

if(number1 < number2){
document.getElementById("number1").innerHTML ="?" ;
$("#number2").show();
document.getElementById("number2").innerHTML = number1;
var answer = number2 - number1;
document.getElementById("answer").innerHTML = answer;


}
}

}


function startTimer(duration, display) {
    var timer = duration, seconds;
    setInterval(function () {
	
        minutes = parseInt(timer / 00, 10);
        seconds = parseInt(timer % 10, 10);

      
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(":" + seconds);

        if (--timer < 1) {
            timer = duration;
			$('#correctsound')[0].play();
        }
		
		
    }, 1000);
}

jQuery(function ($) {
    var tenSecs = 5 * 2,
        display = $('#time');
    startTimer(tenSecs, display);
		
	
});
