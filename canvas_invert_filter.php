<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canvas Primer - Example: ImageData colour inversion filter</title>
    <script type="text/javascript">
      window.addEventListener('load', function () {
        // Get the canvas element.
        var elem = document.getElementById('myCanvas');
        if (!elem || !elem.getContext) {
          return;
        }

        // Get the canvas 2d context.
        var context = elem.getContext('2d');
        if (!context || !context.getImageData || !context.putImageData || !context.drawImage) {
          return;
        }
        
        // Create a new image.
        var img = new Image();

        // Once it's loaded draw the image on canvas and invert the colors.
        img.addEventListener('load', function () {
          var x = 0, y = 0;

          // Draw the image on canvas.
          context.drawImage(this, x, y);

          // Get the pixels.
          var imgd = context.getImageData(x, y, this.width, this.height);
          var pix = imgd.data;

          // Loop over each pixel and invert the color.
          for (var i = 0, n = pix.length; i < n; i += 4) {
            pix[i  ] = 255 - pix[i  ]; // red
            pix[i+1] = 255 - pix[i+1]; // green
            pix[i+2] = 255 - pix[i+2]; // blue
            // i+3 is alpha (the fourth element)
          }

          // Draw the ImageData object.
          context.putImageData(imgd, x, y);
        }, false);

        img.src = 'img/smiley.gif';
      },
      false);
  </script>
  </head>
  <body>
    <h1>invertera en bild</h1>
    <h4>OBS!  funkar med gif-bilder</h4>
    <p>
    <canvas id="myCanvas" width="100" height="100" style="border:solid grey 1px;">
      Your browser does not have support for Canvas.  You should see the following image:
      <img src="img/smiley.gif" alt="Opera 9.6: Making you faster." />
    </canvas>
    </p>

<canvas id="b" width="100" height="100" style="border:solid grey 1px;">
Fallback content, in case the browser does not support Canvas.
</canvas>

<script>
window.onload = function() {
var b = document.getElementById("b");
var context = b.getContext("2d");

  // Create a new image.
  var img2 = new Image();
  // Once it's loaded draw the image on the canvas.
  img2.addEventListener('load', function () {
    // Original resolution: x, y.
    context.drawImage(img2, 0, 0);
  }, false);
  img2.src = 'img/smiley.gif';

}
</script>


    <br/>



<canvas id="sinus" width="100" height="100" style="border:solid grey 1px;">
Fallback content, in case the browser does not support Canvas.
</canvas>

<script>
window.onload = function() {
var s = document.getElementById("sinus");
var s_context = s.getContext("2d");

  // Create a new image.
  var img3 = new Image();
  // Once it's loaded draw the image on the canvas.
  img3.addEventListener('load', function () {
    // Original resolution: x, y.
    s_context.drawImage(img3, 0, 0);
  }, false);
  img3.src = 'img/smiley2.png';

}
</script>



  </body>
</html>