<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Canvas</title>
</head>
<body>
<p id="output"></p>
<canvas id="b" width="600" height="500" style="border:solid grey;">
Fallback content, in case the browser does not support Canvas.
</canvas>

<script>
window.onload = function() {
var b = document.getElementById("b");
var context = b.getContext("2d");

context.fillStyle   = '#00f'; // blue
context.strokeStyle = '#f00'; // red
context.lineWidth   = 4;

// Draw some rectangles.
context.fillRect  (0,   0, 150, 50);
context.strokeRect(0,  60, 150, 50);
context.clearRect (30, 25,  90, 60);
context.strokeRect(30, 25,  90, 60);



context.beginPath();
// Start from the top-left point.
context.moveTo(200, 200); // give the (x,y) coordinates
context.lineTo(300, 310);
context.lineTo(400, 300);
context.lineTo(200, 200);
// Done! Now fill the shape, and draw the stroke.
// Note: your shape will not be visible until you call any of the two methods.
context.fill();
context.stroke();
context.closePath();


  // Create a new image.
  var img = new Image();
  // Once it's loaded draw the image on the canvas.
  img.addEventListener('load', function () {
    // Original resolution: x, y.
    context.drawImage(this, 0, 0);
    // Now resize the image: x, y, w, h.
    context.drawImage(this, 160, 0, 120, 70);
    // Crop and resize the image: sx, sy, sw, sh, dx, dy, dw, dh.
    context.drawImage(this, 8, 20, 140, 50, 0, 150, 350, 70);
  }, false);
  img.src = 'img/monkey_430.png';
  
}
</script>






</body>
</html>