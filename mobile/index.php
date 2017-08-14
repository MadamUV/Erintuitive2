<!DOCTYPE html>
<html>
<head>
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/glide.js"></script>
	<link rel="stylesheet" href="../css/glide.core.css">
    <link rel="stylesheet" href="../css/glide.theme.css">
	<title>Erintuitive's Psychic Place</title>
</head>
<body>
	<!-- animal or human? -->
	<table width="750px">
		<tr>
			<td width="10%">
				<div id="avatarOptions" class="init">
					Is your character an animal or object?<input type="checkbox" id="notHuman" name="species" value="animal">
				</div>
			</td>
			<td>
				<div id="result" width="500px" class="glide">
				Large Previews:<br>
				<div class="glide__arrows">
					<button class="glide__arrow prev" data-glide-dir="<">prev</button>
					<button class="glide__arrow next" data-glide-dir=">">next</button>
				</div>
				<div class="glide__wrapper">
					<ul class="glide__track" id="onTrack">
					</ul>
				</div>
				<div class="glide__bullets"></div>
				</div>
			</td>
			<td id="myChoice">
				
			</td>
		</tr>
	</table>
	<div id="buttons">
		<button id="back" onclick="backOptions()">Back</button>
		<button id="next" onclick="nextOptions()">Next</button>
	</div>
	<style>
		body {
			background-color: #FFBB22;
		}
		#avatarOptions {
			position: relative;
			float: left;
		}
		#buttons {
			position: fixed;
			top: 395px;
			left: 600px;
		}
		#result {
			vertical-align: text-top;
			width: 300px;
			padding-left: 5px;
			border-width: 5px;
			border-style: solid;
		}
		#avatarOptions {
			overflow: scroll;
			height: 450px;
		}
	</style>
	<script>
		var slider;
		var slider_api;
		function shuffle(array) {
			var rand, index = -1,
				length = array.length,
				result = Array(length);
			while (++index < length) {
				rand = Math.floor(Math.random() * (index + 1));
				result[index] = result[rand];
				result[rand] = array[index];
			}
			return result;
		}
		function backOptions() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if (avatarOptions.getAttribute("class")=="animal"){
				avatarOptions.innerHTML = 'Is your character an animal or object?<input type="checkbox" id="notHuman" name="species" value="animal">';
				track.innerHTML = "";
			}
			else if (avatarOptions.getAttribute("class")=="animal1"){
				var animalsObjects = ['<input type="radio" name="animal" onchange="checkWolf()" value="wolf" id="wolf2">Wolf<br>', '<input type="radio" name="animal" onchange="checkAnt()" id="ant2" value="ant">Ant<br>', '<input type="radio" name="animal" onchange="checkBee()" id="bee2" value="bee">Bee<br>', '<input type="radio" name="animal" onchange="checkBird()" id="bird2" value="bird">Bird<br>', '<input type="radio" name="animal" onchange="checkSun()" id="sun2" value="sun">Sun<br>', '<input type="radio" name="animal" onchange="checkSalamander()" id="salamander2" value="salamander">Salamander<br>', '<input type="radio" name="animal" onchange="checkYinyang()" id="yinyang2" value="yinyang">Yin-Yang<br>', '<input type="radio" name="animal" onchange="checkCat()" id="cat2" value="cat">Cat<br>', '<input type="radio" name="animal" onchange="checkBat()" id="bat2" value="bat">Bat<br>', '<input type="radio" name="animal" onchange="checkSpiral()" id="spiral2" value="spiral">Spiral<br>', '<input type="radio" name="animal" onchange="checkMosquito()" id="mosquito2" value="mosquito">Mosquito<br>', '<input type="radio" name="animal" onchange="checkDaisy()" id="daisy2" value="daisy">Daisy<br>', '<input type="radio" name="animal" onchange="checkRainbow()" id="rainbow2" value="rainbow">Rainbow<br>', '<input type="radio" name="animal" onchange="checkMoon()" id="moon2" value="moon">Moon<br>', '<input type="radio" name="animal" onchange="checkSnake()" id="snake2" value="snake"></li>Snake<br>', '<input type="radio" name="animal" onchange="checkBlackDragon()" id="blackDragon2" value="blackDragon">Black Dragon<br>', '<input type="radio" name="animal" onchange="checkWaterDragon()" id="waterDragon2" value="waterDragon">Water Dragon<br>', '<input type="radio" name="animal" onchange="checkButterfly()" id="butterfly2" value="butterfly">Butterfly<br>', '<input type="radio" name="animal" onchange="checkBear()" id="bear2" value="bear">Bear<br>', '<input type="radio" name="animal" onchange="checkWingFeathers()" id="wingFeathers2" value="wingFeathers">Wing Feathers<br>', '<input type="radio" name="animal" onchange="checkDeer()" id="deer2" value="deer">Deer<br>', '<input type="radio" name="animal" onchange="checkRabbit()" id="rabbit2" value="rabbit">Rabbit<br>', '<input type="radio" name="animal" onchange="checkTiger()" id="tiger2" value="tiger"></li>Tiger<br>', '<input type="radio" name="animal" onchange="checkFrog()" id="frog2" value="frog">Frog<br>', '<input type="radio" name="animal" onchange="checkDog()" id="dog2" value="dog">Dog<br>', '<input type="radio" name="animal" onchange="checkTriangle()" id="triangle2" value="triangle">Triangle<br>', '<input type="radio" name="animal" onchange="checkSquare()" id="square2" value="square">Square<br>', '<input type="radio" name="animal" onchange="checkFox()" id="fox2" value="fox">Fox<br>'];
				animalsObjects = shuffle(animalsObjects);
				animalsObjects = animalsObjects.join("");
				avatarOptions.innerHTML = animalsObjects;
				track.innerHTML = "";
				slider_api = slider.data("glide_api");
				slider_api.destroy();
				document.getElementById("buttons").innerHTML = '<button id="back" onclick="backOptions()">Back</button><button id="next" onclick="nextOptions()">Next</button>'; 
			}
		}
		function nextOptions() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			var animalsObjects = ['<input type="radio" name="animal" onchange="checkWolf()" value="wolf" id="wolf2">Wolf<br>', '<input type="radio" name="animal" onchange="checkAnt()" id="ant2" value="ant">Ant<br>', '<input type="radio" name="animal" onchange="checkBee()" id="bee2" value="bee">Bee<br>', '<input type="radio" name="animal" onchange="checkBird()" id="bird2" value="bird">Bird<br>', '<input type="radio" name="animal" onchange="checkSun()" id="sun2" value="sun">Sun<br>', '<input type="radio" name="animal" onchange="checkSalamander()" id="salamander2" value="salamander">Salamander<br>', '<input type="radio" name="animal" onchange="checkYinyang()" id="yinyang2" value="yinyang">Yin-Yang<br>', '<input type="radio" name="animal" onchange="checkCat()" id="cat2" value="cat">Cat<br>', '<input type="radio" name="animal" onchange="checkBat()" id="bat2" value="bat">Bat<br>', '<input type="radio" name="animal" onchange="checkSpiral()" id="spiral2" value="spiral">Spiral<br>', '<input type="radio" name="animal" onchange="checkMosquito()" id="mosquito2" value="mosquito">Mosquito<br>', '<input type="radio" name="animal" onchange="checkDaisy()" id="daisy2" value="daisy">Daisy<br>', '<input type="radio" name="animal" onchange="checkRainbow()" id="rainbow2" value="rainbow">Rainbow<br>', '<input type="radio" name="animal" onchange="checkMoon()" id="moon2" value="moon">Moon<br>', '<input type="radio" name="animal" onchange="checkSnake()" id="snake2" value="snake"></li>Snake<br>', '<input type="radio" name="animal" onchange="checkBlackDragon()" id="blackDragon2" value="blackDragon">Black Dragon<br>', '<input type="radio" name="animal" onchange="checkWaterDragon()" id="waterDragon2" value="waterDragon">Water Dragon<br>', '<input type="radio" name="animal" onchange="checkButterfly()" id="butterfly2" value="butterfly">Butterfly<br>', '<input type="radio" name="animal" onchange="checkBear()" id="bear2" value="bear">Bear<br>', '<input type="radio" name="animal" onchange="checkWingFeathers()" id="wingFeathers2" value="wingFeathers">Wing Feathers<br>', '<input type="radio" name="animal" onchange="checkDeer()" id="deer2" value="deer">Deer<br>', '<input type="radio" name="animal" onchange="checkRabbit()" id="rabbit2" value="rabbit">Rabbit<br>', '<input type="radio" name="animal" onchange="checkTiger()" id="tiger2" value="tiger"></li>Tiger<br>', '<input type="radio" name="animal" onchange="checkFrog()" id="frog2" value="frog">Frog<br>', '<input type="radio" name="animal" onchange="checkDog()" id="dog2" value="dog">Dog<br>', '<input type="radio" name="animal" onchange="checkTriangle()" id="triangle2" value="triangle">Triangle<br>', '<input type="radio" name="animal" onchange="checkSquare()" id="square2" value="square">Square<br>', '<input type="radio" name="animal" onchange="checkFox()" id="fox2" value="fox">Fox<br>'];
			animalsObjects = shuffle(animalsObjects);
			animalsObjects = animalsObjects.join("");
			document.getElementById("next").innerHTML = "Ok";
			//animalDivs = shuffle(animalDivs);
			//animalDivs = animalDivs.join("");
			if(document.getElementById("notHuman").checked == false){
				window.location.replace("../human.php");
			}
			else {
				//insert animal section here
				avatarOptions.innerHTML = animalsObjects;
				//itemPreview.innerHTML = animalDivs;
				avatarOptions.setAttribute("class", "animal");
			}
		}
		function checkWolf() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("wolf2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/wolf1.svg" alt="first wolf"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf2.svg" alt="second wolf"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf3.svg" alt="third wolf"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf4.svg" alt="fourth wolf"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf5.svg" alt="fifth wolf"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf6.svg" alt="sixth wolf"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/wolf7.svg" alt="seventh wolf"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkAnt() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("ant2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/ant1.svg" alt="first ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant2.svg" alt="second ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant3.svg" alt="third ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant4.svg" alt="fourth ant"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/ant5.svg" alt="fifth ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant6.svg" alt="sixth ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant7.svg" alt="seventh ant"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/ant8.svg" alt="eighth ant"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkBee() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("bee2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/bee1.svg" alt="first bee"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bee2.svg" alt="second bee"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bee3.svg" alt="third bee"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bee4.svg" alt="fourth bee"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bee5.svg" alt="fifth bee"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bee6.svg" alt="sixth bee"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bee7.svg" alt="seventh bee"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkBat() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("bat2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/bat1.svg" alt="first bat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bat2.svg" alt="second bat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bat3.svg" alt="third bat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bat4.svg" alt="fourth bat"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bat5.svg" alt="fifth bat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bat6.svg" alt="sixth bat"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkBear() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("bear2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/bear1.svg" alt="first  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear2.svg" alt="second  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear3.svg" alt="third  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear4.svg" alt="fourth  bear"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bear5.svg" alt="fifth  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear6.svg" alt="sixth  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear7.svg" alt="seventh  bear"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bear8.svg" alt="eighth  bear"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bear9.svg" alt="ninth  bear"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkBird() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("bird2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/bird1.svg" alt="first bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird2.svg" alt="second bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird3.svg" alt="third bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird4.svg" alt="fourth bird"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bird5.svg" alt="fifth bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird6.svg" alt="sixth bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird7.svg" alt="seventh bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird8.svg" alt="eighth bird"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bird9.svg" alt="ninth bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird10.svg" alt="tenth bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird11.svg" alt="eleventh bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird12.svg" alt="twelfth bird"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/bird13.svg" alt="thirteenth bird"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/bird14.svg" alt="fourteenth bird"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkBlackDragon() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("blackDragon2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/blackDragon1.svg" alt="first blackDragon"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkWaterDragon() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("waterDragon2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/waterDragon1.svg" alt="first waterDragon"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkCat() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("cat2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/cat1.svg" alt="first cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat2.svg" alt="second cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat3.svg" alt="third cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat4.svg" alt="fourth cat"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/cat5.svg" alt="fifth cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat6.svg" alt="sixth cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat7.svg" alt="seventh cat"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/cat8.svg" alt="eighth cat"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/cat9.svg" alt="ninth cat"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkDaisy() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("daisy2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/daisy1.svg" alt="first daisy"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/daisy2.svg" alt="second daisy"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/daisy3.svg" alt="third daisy"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkButterfly() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("butterfly2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly1.svg" alt="first butterfly"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly2.svg" alt="second butterfly"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly3.svg" alt="third butterfly"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly4.svg" alt="fourth butterfly"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly5.svg" alt="fifth butterfly"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly6.svg" alt="sixth butterfly"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/butterfly7.svg" alt="seventh butterfly"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkDeer() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("deer2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/deer1.svg" alt="first deer"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/deer2.svg" alt="second deer"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/deer3.svg" alt="third deer"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/deer4.svg" alt="fourth deer"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkDog() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("dog2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/dog1.svg" alt="first dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog2.svg" alt="second dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog3.svg" alt="third dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog4.svg" alt="fourth dog"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/dog5.svg" alt="fifth dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog6.svg" alt="sixth dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog7.svg" alt="seventh dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog8.svg" alt="eighth dog"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/dog9.svg" alt="ninth dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog10.svg" alt="tenth dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog11.svg" alt="eleventh dog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/dog12.svg" alt="twelfth dog"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkWingFeathers() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("wingFeathers2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/feathers1.svg" alt="first  feathers"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/feathers2.svg" alt="second  feathers"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkFrog() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("frog2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/frog1.svg" alt="first frog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/frog2.svg" alt="second frog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/frog3.svg" alt="third frog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/frog4.svg" alt="fourth frog"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/frog5.svg" alt="fifth frog"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/frog6.svg" alt="sixth frog"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkFox() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("fox2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/fox1.svg" alt="first fox"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/fox2.svg" alt="second fox"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/fox3.svg" alt="third fox"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/fox4.svg" alt="fourth fox"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/fox5.svg" alt="fifth fox"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/fox6.svg" alt="sixth fox"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkMoon() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("moon2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/moon1.svg" alt="first moon"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/moon2.svg" alt="second moon"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/moon3.svg" alt="third moon"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/moon4.svg" alt="fourth moon"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkMosquito() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("mosquito2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/mosquito1.svg" alt="first mosquito"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/mosquito2.svg" alt="second mosquito"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/mosquito3.svg" alt="third mosquito"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkRabbit() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("rabbit2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit1.svg" alt="first rabbit"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit2.svg" alt="second rabbit"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit3.svg" alt="third rabbit"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit4.svg" alt="fourth rabbit"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit5.svg" alt="fifth rabbit"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit6.svg" alt="sixth rabbit"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rabbit7.svg" alt="seventh rabbit"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkRainbow() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("rainbow2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/rainbow1.svg" alt="first rainbow"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rainbow2.svg" alt="second rainbow"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rainbow3.svg" alt="third rainbow"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/rainbow4.svg" alt="fourth rainbow"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkSalamander() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("salamander2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/salamander1.svg" alt="first salamander"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/salamander2.svg" alt="second salamander"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/salamander3.svg" alt="third salamander"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkSnake() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("snake2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/snake1.svg" alt="first snake"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/snake2.svg" alt="second snake"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/snake3.svg" alt="third snake"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/snake4.svg" alt="fourth snake"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/snake5.svg" alt="fifth snake"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		
		///goto: replace </li><li with </li><input type radido animal name value blank<li>
		function checkSpiral() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("spiral2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/spiral1.svg" alt="first spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral2.svg" alt="second spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral3.svg" alt="third spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral4.svg" alt="fourth spiral"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral5.svg" alt="fifth spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral6.svg" alt="sixth spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral7.svg" alt="seventh spiral"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral8.svg" alt="eighth spiral"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/spiral9.svg" alt="ninth spiral"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkSquare() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("square2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/square1.svg" alt="first square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square2.svg" alt="second square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square3.svg" alt="third square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square4.svg" alt="fourth square"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/square5.svg" alt="fifth square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square6.svg" alt="sixth square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square7.svg" alt="seventh square"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/square8.svg" alt="eighth square"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkSun() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("sun2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/sun1.svg" alt="first sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun2.svg" alt="second sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun3.svg" alt="third sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun4.svg" alt="fourth sun"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/sun5.svg" alt="fifth sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun6.svg" alt="sixth sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun7.svg" alt="seventh sun"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/sun8.svg" alt="eighth sun"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/sun9.svg" alt="ninth sun"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkTiger() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("tiger2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/tiger1.svg" alt="first tiger"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger2.svg" alt="second tiger"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger3.svg" alt="third tiger"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger4.svg" alt="fourth tiger"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger5.svg" alt="fifth tiger"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger6.svg" alt="sixth tiger"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/tiger7.svg" alt="seventh tiger"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				transferData();
			}
		}
		function checkTriangle() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("triangle2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img  width="280" height="280" src="../svg/triangle1.svg" alt="first triangle"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/triangle2.svg" alt="second triangle"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/triangle3.svg" alt="third triangle"></li><li class="glide__slide"><img  width="280" height="280" src="../svg/triangle4.svg" alt="fourth triangle"></li><br><li class="glide__slide"><img  width="280" height="280" src="../svg/triangle5.svg" alt="fifth triangle"></li><li class="glide__slide"><img width="280" height="280" src="../svg/triangle6.svg" alt="sixth triangle"></li>';
				slider = $("#result").glide({
					type: "carousel"
				});
				avatarOptions.setAttribute("class", "animal1");
				avatarOptions.innerHTML = "";
				transferData();
			}
		}
		function checkYinyang() {
			var avatarOptions = document.getElementById("avatarOptions");
			var track = document.getElementById("onTrack");
			if(document.getElementById("yinyang2").checked == true){
				track.innerHTML = '<li class="glide__slide"><img id="yinyang" width="280" height="280" src="../svg/yinyang.svg" alt="yin yang"></li>';
				slider = $("#result").glide({
					type: "carousel" 
				});
				avatarOptions.setAttribute("class", "animal1");
				avatarOptions.innerHTML = "";
				transferData();
			}
		}
		function transferData(){    
            var index = $("img").length - 4;
			var newIndex = Math.floor(Math.random()*index);
			var src = $("img").eq(newIndex).attr("src");
			//selection on next page
            src = src.substr(3, src.length-7);
            //document.getElementById("choose").innerHTML = src.toString();
            document.getElementById("buttons").innerHTML = "Choose random selection (you can change your selection on the nesst page.)<br><form action='../randomizer.php' method='get'><input type='hidden' name='num' value ='"+index.toString()+"'><input type='hidden' name='image' value ='"+src+"'><input id='mySubmit' type='submit' name='submit' value='Randomize!'></form>";
        }
	</script>
	<div id="choose"></div>
</body>
</html>