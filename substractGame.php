<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Math Kidz</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="mathKidz.css">
	<script src ="sideMenu.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="w3.css">
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<script src ="subtractionGame.js"></script>

</head>
<body>
<!---Header and Menu--->
	<nav class="w3-sidenav w3-white w3-card-2" style="display:none" id="sideNavGames">
		<a href="javascript:void(0)" onclick="w3_close()" 
		class="w3-closenav w3-large">Close &times;</a>
		<a href="#">Home</a>
		<a href="#">Link 2</a>
		<a href="#">Link 3</a>
		<a href="#">Link 4</a>
		<a href="#">Link 5</a>
	</nav>
	<header class="w3-container w3-deep-purple">
		<span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
		<span id="nowPlaying"><h5>Now Playing: </span><span id="gameName">BALANCE NUMBERS</span></h5>
		<!-- Success Message -->
	</header>
	
	</header>
	
<!-- Main Container -->
	<div class="w3-row">
		<div id="otherSideGames" class="w3-col w3-right w3-container">
			<div class="w3-card-4">
				<img src="" alt=""style="width:100%"/>
			    <div class="w3-container w3-center">
					<p>75px</p>
				</div>
			</div>
			<div class="w3-card-4">
				<img src="" alt=""style="width:100%"/>
			    <div class="w3-container w3-center">
					<p>75px</p>
				</div>
			</div>
		</div>

<!-- Left Container -->	
	<div class="w3-rest w3-container w3-green"><p><span style="font-weight:bold">Goal:</span> After replacing 'x' with your number, both sides of the line should add up to the same total!</p>
		
<!-- Level Button container -->
		<div class="w3-row">
			<div class="w3-col w3-container w3-white" style="width:33.3333%"><p>21.6666%</p></div>
			<div class="w3-col w3-container w3-blue" style="width:33.3333%"><p>21.6666%</p></div>
			<div class="w3-col w3-container w3-red" style="width:33.3333%"><p>20%</p></div>
		</div>	
		
		<audio controls="controls" id="move-sound">
			<source src="audio/try-again.mp3" type="audio/mpeg" />
			<source src="audio/try-again.ogv" type="audio/ogg" />
		</audio>

		<div class="w3-row">
			<div class="w3-col w3-right w3-container w3-blue w3-center" style="width:115px">
				<div><p class="w3-yellow">Score</p>
					<span id="correctAns"></span> <span>/</span><span id="total"></span> 
				</div>
			
				<div><p class="w3-yellow">Timer</p>
					<span id="time"></span> 
				</div>
			
				<div>
					 <input type="button" class="w3-btn w3-yellow w3-hover-khaki w3-round-xlarg" id="check" value="Check"></input>
				</div>
			</div>
		
		
		<div class="w3-rest w3-container w3-pink"><p>w3-rest</p>
	
<!-- Game  container -->
	
			<div class="w3-container w3-content w3-center"  id="gameContainer" style="max-width:850px";>
				<div class="w3-row w3-xlarge" id="topRow">
					<div id="randomNum"></div>
				</div>
			</div>
<!-- answer  container -->
	<div class="w3-container">
		<div class="w3-round w3-blue w3-center w3-animate-left" id="ansBox" style="width:650px; height:30%";>
			<span id="number1">?</span><span>-</span><span id="number2">?</span><span>=</span><span id="answer"></span>
		</div>
	</div>
		</div>	
		</div>
	
	</div>
	
<!-- bottom container -->
	<div class="w3-container w3-padding-8 w3-deep-purple" style="width:80%;">
		<p>	In this game, students use their knowledge of ones, and tens to solve balancing number puzzles. 
			They strengthen their number sense as they apply their computation skills in addition and subtraction to find 
			missing addends. The idea of balance is represented using drawings that show both sides in balance, similar 
			to a pan balance, thus indicating the sides are equivalent.
		</p>
	</div>
	</div>
</body>
</html>