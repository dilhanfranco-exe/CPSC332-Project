<!DOCTYPE html>
  <html>

  <head>
    <meta charset= "UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content= "width = device-width, intial-scale = 1">
    <title>CSUF Query</title>
    
  </head>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="icon" href="img/logo.png">
  <body>    
    <section class="topRect">
    <a class="logo" href="/"><img src="img/logo.png" alt="logo"></a>

    <div class = "btnContainer">
        <a href= "index.html"><button class ="btn btn1">Home</button></a>
        <a href= "students.php"><button class ="btn btn3">Students</button></a>
      </div>
<div class="phpCont" style ="text-align:center;">
	<form action="datarequest.php" method="post">
		<p>Search for a class's info</p>
		<span>please enter the course number </span><input type="text" label="">
		<input type="submit">
	</form>

	query 2
	<form action="datarequest.php" method="post">
		<p>Search for your class info</p>
		<span>please enter your CWID </span><input type="text" label="">
		<input type="submit">
	</form> 
</div>
    </section>
  <section class="botRect" style = "text-align: center; margin-bottom: 0px;">
    <section class ="csufFooter">
      <h2>© California State University, Fullerton. All Rights Reserved.</h2>
    </section>
  </section>
</html>
