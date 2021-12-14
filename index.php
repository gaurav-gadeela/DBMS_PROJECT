<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    
    <title>Hello, world!</title>
</head>

<body>
<?php include 'partials/dbconnect.php';?>
<?php include 'partials/header.php';?>
    






    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZ3JhbW1pbmd8ZW58MHx8MHx8&w=1000&q=80"
                    class="d-block w-100" width="500px" height="450px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://wallpaperbat.com/img/397330-programmers-wallpaper-collection-programacao-web-programacao.png"
                    class="d-block w-100" width="500px" height="450px" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://cloudsek.com/wp-content/uploads/2020/10/Language-independent.png"
                    class="d-block w-100" width="500px" height="450px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>







    <div class="container my-3" >
        <h2 class="text-center">iDiscuss - Browse Categories</h2>
        <div class="row">

            <?php 
            $sql='SELECT * FROM `categories`';
            $result=mysqli_query($conn,$sql);
            $cnt=1;
            $s;
            while($row=mysqli_fetch_assoc($result))
            {
                if($cnt==1)
                $s="images/HTML.png";
                if($cnt==2)
                $s="images/CSS.png";
                if($cnt==3)
                $s="images/Javascript.png";
                if($cnt==4)
                $s="images/Python.png";
                if($cnt==5)
                $s="images/Java.png";
                if($cnt==6)
                $s="images/Kotlin.png";
                if($cnt==7)
                $s="images/Reactimg.png";
                if($cnt==8)
                $s="images/Swift.png";
                if($cnt==9)
                $s="images/C.png";
                $cnt=$cnt+1;
                // echo $row['category_id'];
                // echo$row['category_name'];
                $id=$row['category_id'];
                $cat=$row['category_name'];
                $desc=$row['category_description'];
                // echo $cat;
                // echo $desc;
                echo   '<div class="col-md-4 my-2">
                            <div class="card" style="width: 18rem;">
                                <img src='.$s.' width="200px" height="312px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
                                    <p class="card-text">'.substr($desc,0,157).'...</p>
                                    <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Thread</a>
                                </div>
                            </div>
                        </div>';
            }
            ?>






        </div>
    </div>

    <?php include 'partials/footer.php';?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>