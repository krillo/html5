<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Canvas coordinates</title>
</head>
<body>

<canvas id="b" width="500" height="500" style="border:solid grey;">
Fallback content, in case the browser does not support Canvas.
</canvas>

<script>
  window.onload = function() {
    var b = document.getElementById("b");
    var context = b.getContext("2d");

    for(var x = 0.5; x < 500; x += 10){
      context.moveTo(x, 0);
      context.lineTo(x, 500);
    }

    for(var y = 0.5; y < 500; y += 10){
      context.moveTo(0, y);
      context.lineTo(500, y);
    }

    context.strokeStyle = "#eee";
    context.stroke();
  }
</script>


</body>
</html>