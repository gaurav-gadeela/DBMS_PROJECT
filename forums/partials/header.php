<?php
session_start();
include 'partials/dbconnect.php';
echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/forums">CodeForums</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forums">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Top Categories
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">';


          $sql = "SELECT category_name, category_id FROM `categories` LIMIT 9";
          $result = mysqli_query($conn, $sql); 
          while($row = mysqli_fetch_assoc($result)){
            echo '<a class="dropdown-item" href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>'; 
          }


          echo '</div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        
        <div class="d-flex flex-row mx-2">';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<form class="d-flex mx-2" action="search.php" method="get">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
            <a href="partials/logout.php" class="btn btn-outline-success ml-2">Logout</a>
        </form>';
      }
      else
      {
        echo '<form class="d-flex mx-2">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <button class="btn btn-success ml-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
          <button class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>';
      }


      echo'
      </div>
    </div>
  </div>
</nav>
';

include 'partials/loginModal.php';
include 'partials/signupModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
{
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
          <strong>Success! </strong> Your account has been created successfully.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}
else if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
{
  echo '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
          <strong>Error! </strong> Invalid credentials.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}


?>