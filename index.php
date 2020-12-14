 <html lang="em">
 <meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ei-edge">
	<title> HTML5 CANVAS </title>
	<link rel="stylesheet" href="css/style.css">
	
	
<canvas id="canvas1" width="200" height="200" style="border:1px solid black;"></canvas>
<script>

var canvas = document.getElementById('canvas1');
var ctx = canvas.getContext('2d');

ctx.fillStyle= '#689783'
ctx.beginPath();
ctx.arc(100, 110, 80, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.strokeStyle = "black";
ctx.fillStyle= 'black'
ctx.beginPath();
ctx.arc(100, 110, 10, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();
ctx.fill();

ctx.beginPath();
ctx.moveTo(98, 100);
ctx.lineTo(80, 60);
ctx.lineWidth = 4;
ctx.closePath();
ctx.stroke();


ctx.beginPath();
ctx.moveTo(100, 140);
ctx.lineTo(100, 120);
ctx.closePath();
ctx.stroke();

</script>
<canvas id="canvas2" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas2');
var ctx = canvas.getContext('2d');

ctx.fillStyle = 'red'
ctx.strokeStyle = "green";
ctx.lineWidth = '5'
ctx.beginPath();
ctx.arc(100, 70, 80, 0, Math.PI, false)
ctx.fill();
ctx.closePath();
ctx.stroke();

ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(50, 100, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();

ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(80, 130, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();

ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(90, 100, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();

ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(120, 85, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();

ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(150, 110, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();


ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(110, 130, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();


ctx.strokeStyle = "black";
ctx.beginPath();
ctx.arc(70, 85, 4, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();

</script>
<canvas id="canvas3" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas3');
var ctx = canvas.getContext('2d');

ctx.beginPath()
ctx.fillStyle = 'gold'
ctx.arc(100, 110, 80, 0.1 * Math.PI, 2 * Math.PI)
ctx.lineTo(80, 120)
ctx.fill()

ctx.strokeStyle = "black";
ctx.fillStyle='black'
ctx.beginPath();
ctx.arc(140, 85, 10, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();
ctx.fill();

</script>
<canvas id="canvas4" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas4');
var ctx = canvas.getContext('2d');

ctx.fillStyle = '#ff9200';
ctx.fillRect(10, 10, 160, 100);

ctx.beginPath();
ctx.moveTo(168,10);
ctx.lineTo(85,85);
ctx.lineTo(10,10);
ctx.lineTo(10,10);
ctx.strokeStyle = "yellow";
ctx.lineWidth = 5;
ctx.stroke();
ctx.fillStyle = "Yellow";
ctx.fill();
ctx.closePath();

</script>
<canvas id="canvas5" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas5');
var ctx = canvas.getContext('2d');

ctx.fillStyle = 'red';
ctx.fillRect(20, 50, 160, 100);

ctx.strokeStyle = "black";
ctx.fillStyle='blue'
ctx.beginPath();
ctx.arc(150, 110, 20, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();
ctx.fill();

ctx.strokeStyle = "black";
ctx.fillStyle='blue'
ctx.beginPath();
ctx.arc(60, 110, 20, 10, Math.PI, true)
ctx.closePath();
ctx.stroke();
ctx.fill();

ctx.fillStyle= 'yellow'
ctx.beginPath();
ctx.arc(100, 70, 5, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= 'yellow'
ctx.beginPath();
ctx.arc(130, 70, 5, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= 'yellow'
ctx.beginPath();
ctx.arc(70, 70, 5, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle = 'black';
ctx.fillRect(40, 20, 120, 10);

ctx.fillStyle = 'black';
ctx.fillRect(40, 20, 10, 30);

ctx.fillStyle = 'black';
ctx.fillRect(150, 20, 10, 30);

</script>
<canvas id="canvas6" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas6');
var ctx = canvas.getContext('2d');

ctx.fillStyle= '#a46d5b'
ctx.beginPath();
ctx.arc(102, 100, 80, 10, Math.PI, true)
ctx.closePath();
ctx.fill();


ctx.fillStyle= 'white'
ctx.beginPath();
ctx.arc(30, 107, 20, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= 'white'
ctx.beginPath();
ctx.arc(32, 125, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(65, 125, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();


ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(110, 60, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(155, 105, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(125, 145, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(100, 105, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= '#2b1d18'
ctx.beginPath();
ctx.arc(55, 65, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

</script>
<canvas id="canvas7" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas7');
var ctx = canvas.getContext('2d');

ctx.fillStyle = 'black';
ctx.fillRect(20, 50, 160, 100);

ctx.fillStyle = 'black';
ctx.fillRect(20, 155, 160, 10);
	  
ctx.fillStyle= 'white'
ctx.beginPath();
ctx.arc(98, 105, 30, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle = 'black';
ctx.fillRect(20, 35, 160, 10);


ctx.fillStyle= 'white'
ctx.beginPath();
ctx.arc(155, 80, 10, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

</script>
<canvas id="canvas8" width="200" height="200" style="border:1px solid black;"></canvas>
<script>
var canvas = document.getElementById('canvas8');
var ctx = canvas.getContext('2d');

ctx.fillStyle = 'black';
ctx.fillRect(50, 15, 100, 170);

ctx.fillStyle= 'red'
ctx.beginPath();
ctx.arc(98, 45, 20, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= 'yellow'
ctx.beginPath();
ctx.arc(98, 100, 20, 10, Math.PI, true)
ctx.closePath();
ctx.fill();

ctx.fillStyle= 'green'
ctx.beginPath();
ctx.arc(98, 155, 20, 10, Math.PI, true)
ctx.closePath();
ctx.fill();
</script>
</html>