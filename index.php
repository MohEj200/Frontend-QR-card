<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  
  <title>Frontend Mentor | QR code component</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
    body{background-color: rgb(182, 199, 211);}
  </style>
</head>
<body>
  <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>. 
    Coded by <a href="#">Moh</a>.
    <a href="./fun.php">ph</a>
  </div></br>
  <?php
//write greeting function
 function sayHi(){
	echo "hello user";
	}
 sayHi();?>

  <div class="QR" style="background-color: antiquewhite; margin: auto;border-radius: 12px;padding: 12px; height: 400px;width: 250px;">
    <img src="./images/image-qr-code.png" style="width: 250px; height: 250px;margin: auto; border-radius: 10px;"/></br>
    <h3 style="text-align: center;font-family: Arial, Helvetica, sans-serif;"> Improve your front-end skills by building projects</h3>
    <p style="text-align: center; text-justify: auto; color: #4e4d4de5;">Scan the QR code to visit Frontend Mentor and take your coding skills to the next level</p>
  </div>

</body>
</html>
