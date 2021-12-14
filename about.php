<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/header.php';?>


    <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img class="center" src="images/sakethf.JPEG" alt="Saketh" style="width:200px">
      <div class="container">
        <h2>Saketh Reddy</h2>
        <p class="title">Website Design</p>
        <p>I made design and features for this codeForums website.</p>
        <p>kommareddy19533@mechyd.ac.in</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img class="center" src="images/gauravf.JPEG" alt="Gaurav" style="width:200px">
      <div class="container">
        <h2>Gaurav_Gadeela</h2>
        <p class="title">Database and Backend</p>
        <p>My role is connecting backend to this website and maintaining database.</p>
        <p>gadeela19526@mechyd.ac.in</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>

  <div class="column mb-5">
    <div class="card">
      <img class="center" src="images/kaushik.JPEG" alt="Kaushik" style="width:200px">
      <div class="container">
        <h2>Kaushik Bhargav</h2>
        <p class="title">PHP</p>
        <p>I made dynamic part of the codeForums website</p>
        <p>kaushik19569@mechyd.ac.in</p>
        <!-- <p><button class="button">Contact</button></p> -->
      </div>
    </div>
  </div>
</div>
    
    <?php include 'partials/footer.php';?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>