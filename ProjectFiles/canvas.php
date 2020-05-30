<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Drawing in canvas</title>
<style type="text/css">
	canvas{
		border: 1px cornflowerblue;
		color: cornflowerblue;
	}
</style>
<script type="text/javascript">
	window.onload= function(){
		var canvas = document.getElementById("myCanvas");
		var context= canvas.getContext("2d");
		context.rect(95, 50, 150, 100);
		context.arc(50, 100, 45, 0, 2 *Math.PI, false);
	//context.lineWidth=5;
		//context.strokeStyle = "orange";
		context.lineWidth=1;
        context.strokeStyle="black";
        context.moveTo(47.5,60);
        context.lineTo(60,25);

        context.lineWidth=1;
        context.strokeStyle="black";
        context.moveTo(47.5,60);
        context.lineTo(35,25);

        context.lineWidth=1;
        context.strokeStyle="black";
        context.moveTo(140,150);
        context.lineTo(140,190);

        context.lineWidth=1;
        context.strokeStyle="black";
        context.moveTo(190,150);
        context.lineTo(190,190);
		context.stroke();
	}
</script>
</head>
<body style="background-color:white;">
	<canvas id="myCanvas" width="300" height="200"></canvas>
</body>
</html>