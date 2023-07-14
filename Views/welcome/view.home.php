<?php
  $app['db']=(new Database())->db;
$user = $_SESSION['name']['username'];

// echo $user;

  $stm = $app['db']->query("SELECT * FROM login WHERE username='$user'");
  $values=$stm->fetchAll();

  // print_r($values[0])


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="https://deepakofficial347460294.wordpress.com/" target="_blank" >Blogs</a></li>
          <!-- <li><a href="https://www.instagram.com/invites/contact/?i=12h11hduh0mk7&utm_content=4gb3mnv" target="_blank" >About</a></li> -->

          <li><a href="/about">About</a></li>
          <li><a href="https://www.linkedin.com/in/deepak-mohandass-2a785323b" target="_blank">Contact</a></li>
          <!-- <li><a href="">EDIT PROFILE</a></li> -->
        </ul>

        <?php foreach($values as $value): ?>
        <form action="/edit" method="post">
        <input type="text" hidden name="edit" value="<?php echo $value[0] ?>">
        <button name="editbtn" type="submit">EDIT</button>
        </form>
        <?php endforeach; ?> 


        <?php foreach($values as $value): ?>
        <form action="/delete" method="post">
          <!-- <button name="del"><a href="/delete">DEL</a></button> -->
          <button name="del" id="delbtn" value="<?php echo $value[0] ?>">DEL</button>
        </form>
        <?php endforeach; ?>


      </nav>
    </header>

    <!-- hello user -->
    <section class="hero">
      <h1 class="webhead">Welcome to Our Website</h1>
      <h2>Hello,                                     <?php echo $_SESSION['name']['username']; ?></h2>
      <img src="Views/welcome/IMG-20221213-WA0007.jpg" hidden alt="hii" class="img">
      <a href="/logout" class="cta-btn">Log out</a>
    </section>

    <!-- =------------QR---------- -->
    <!-- <div class="container"  >
        <h1>Love Calculator</h1>
        <div class="form">
            <input  value="https://lovecalculator.site/love/10021179" disabled id="text">
            <button class="gen" type="submit" id="button">Genrate QR</button>
        </div>
        <div class="qr-code">
            <img src="" alt="" id="qr-img">
        </div>
    </div> -->
    <script src="/qr.js"></script>

    <script>
      let alerts = document.querySelector(".cta-btn")

      alerts.addEventListener("click",(e)=>{
        alert("Are you sure?");
      })

      let delbtn = document.getElementById("delbtn");
      delbtn.addEventListener("click",()=>{
        alert("Account will be deleted permenatly!");
      })
    </script>
  </body>
</html>
