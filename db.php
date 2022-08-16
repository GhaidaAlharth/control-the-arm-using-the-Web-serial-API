<?php

$conn = mysqli_connect('localhost', 'root', '', 'database');

if (!$conn) {
    echo " Error : " , mysqli_connect_error();
}
else if (isset($_GET['F'])) {
    echo "<h1>F</h1>";
    $sql = "INSERT INTO mytable(direction)VALUES('Forward')";
    mysqli_query($conn, $sql);
} if (isset($_GET['B'])) {

    echo "<h1>B</h1>";
    $sql = "INSERT INTO mytable(direction)VALUES('Backward')";
    mysqli_query($conn, $sql);
}  if (isset($_GET['L'])) {
    echo "<h1> L  </h1>";
    $sql = "INSERT INTO mytable(direction)VALUES('Left')";
    mysqli_query($conn, $sql);
} if (isset($_GET['R'])) {
    echo "<h1>R </h1>";
    $sql = "INSERT INTO mytable(direction)VALUES('Right')";
    mysqli_query($conn, $sql);
} if (isset($_GET['S'])) {
    echo "<h1>S</h1>";
$sql = "INSERT INTO mytable(direction)VALUES('Stop')";
  mysqli_query($conn, $sql);
}
  ?>

  <!DOCTYPE html>
  <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruserlt</title>
</head>
<style>
  body{
    font-family: arial;
  	font-size: 18px;
  	margin: 0;
	background-color: #D3D3D3;
   color: #000;
  	display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
  }

  .Back{
    width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;
    align-items: center;
    justify-content: center;
    }
	
    .Back:hover {
     background-color: white;
	transition: 0.7s;
    }
    h1 {
      width: 140px;
      padding: 9px 22px;
    font-size: 150px;
    color: black;
    align-items: center;
    justify-content: center;
    font-family: 'Inter UI', sans-serif;
    height: 50vh;
    margin: 0;

    }

  </style>
  <body>
      <form action="index.php" method="get">
          <br>  <br>   <br>  <br>   <br>  <br>   <br>  <br>  <br>  <br>
          <button class= "Back" name="Back" id="Back">Back</button>
</br></br>
      </form>
  </body>

  </html>