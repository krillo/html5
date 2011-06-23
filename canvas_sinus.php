<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Canvas move smiley</title>
    <script type="text/javascript" src="js/move_smiley.js"></script>

    <script type="text/javascript">
      window.onload = init;
      function init(){
        canvas = document.getElementById('canvas');
        context2D = canvas.getContext('2d');
        setInterval(drawSinus, 1000 / FPS);
      }
    </script>


  </head>
  <body>
    <h1>smiley som sinusvåg</h1>

    <p>


<canvas id="canvas" width="750" height="300" style="border:solid grey 1px;">
Fallback content, in case the browser does not support Canvas.
</canvas>


  </body>
</html>
