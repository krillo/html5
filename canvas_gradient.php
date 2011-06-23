<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Canvas gradient</title>
</head>
<body>

<canvas id="b" width="500" height="500" style="border:solid grey;">
Fallback content, in case the browser does not support Canvas.
</canvas>

<script>
  window.onload = function() {
    var b = document.getElementById("b");
    var context = b.getContext("2d");
    var my_gradient = contxt.createLinearGradient(0,0,300,0);
    my_gradient.addColorStop(0, '#000');
    my_gradient.addColorStop(1, '#8e8e8e');
    context.fillStyle = my_gradient;
    context.fillRect(0, 0, 300, 225);
  }
</script>


</body>
</html>
