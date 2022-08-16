<html>
<title>Control Panel</title>
<style>

body{
	font-family: arial;
	font-size: 18px;
	margin: 0;
	background-color: #D3D3D3;
   height: 100%;
   overflow: hidden;
	color: #000;
	display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}
#F{
		margin-left: 100;
	width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;
	
  }
  #F:hover {
	background-color: white;
	transition: 0.7s;
  }
#L{
	width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;
  }
  #L:hover {
	background-color: white;
	transition: 0.7s;
  }
  #S{
	width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;

	
  }
  #S:hover {
	background-color: white;
	transition: 0.7s;
  }
  
  
  #R{
	width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;

  }
  
  #R:hover {
	background-color: white;
	transition: 0.7s;
  }
  
  
  #B{
	margin-left: 100;
	width: 100px;
	padding: 9px 22px;
	background: #F0E68C;
	border: 2px solid black;
	border-radius: 50%;
	cursor: pointer;
	color: black;
  }
  #B:hover {
	background-color: white;
	transition: 0.7s;
  }

</style>
<body>

 <form action="db.php" method="get">
        <button name="F" id="F" >Forward</button><br></br>
        <button name="L" id="L" >Left</button>
        <button name="S" id="S" >Stop</button>
        <button name="R" id="R" >Right</button>
			<br> </br>
	<button name="B" id="B" >Backward</button>
</form>
</body>
</html>