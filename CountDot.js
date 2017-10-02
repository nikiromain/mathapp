var correctCards = 0;
$( init );
 
function init() {
 
  // Hide the success message
  $('#successMessage').hide();
  $('#successMessage').css( {
    left: '580px',
    top: '250px',
    width: 0,
    height: 0
  } );

}

// Reset the game
var  correctCards = 0;
  $('#top-cards').html(' ');
  $('#top-card').html( ' ');

  $('#move-sound').hide();
//generate random pic

window.onload = choosePic;
  var myPix = new Array("countD/zero.png","countD/one.png","countD/two.png","countD/three.png","countD/four.png","countD/five.png","countD/six.png","countD/seven.png",
						"countD/eight.png","countD/nine.png","countD/ten.png","countD/eleven.png","countD/twelve.png","countD/thirteen.png","countD/fourteen.png",
							"countD/fifteen.png","countD/sixteen.png","countD/seventeen.png","countD/eighteen.png","countD/nineteen.png","countD/twenty.png");
   var randomNum;
    var a;
  function choosePic() {
     randomNum = Math.floor(Math.random() * myPix.length);
		a = myPix.indexOf(myPix[randomNum]);
	 document.getElementById("pics").src = myPix[randomNum];
		}

	 function checky() {
		var answer= document.getElementById("answere").value;
		if(answer==a){
		choosePic();
		var answer= document.getElementById("answere").value="";
   }
   else{
   alert("try again");
   }
	}
	checky();


	 