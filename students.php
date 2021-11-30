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
        <a href= "professors.php"><button class ="btn btn3">Professors</button></a>
      </div>

    </section>
  <form action = "process.php" method="post">
    Enter your name: <input name="name" type="text"/>
    <input type="submit"/>
  </form>

  <?php 
    $hostname = "";
    $username = "review_site";
    $password = "JxSLRkdutW";
    $db = "reviews";
  
  
  
  ?>






  <section class="botRect" style = "text-align: center; margin-bottom: 0px;">
    <section class ="csufFooter">
      <h2>© California State University, Fullerton. All Rights Reserved.</h2>
    </section>
  </section>
</html>


