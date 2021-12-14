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
   

    <?php 
        $id=$_GET['catid'];
        $sql="SELECT * FROM `categories` WHERE category_id=$id";
        $result=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($result))
        {
            $catname=$row['category_name'];
            $catdesc=$row['category_description'];
        }

    ?>


    <?php
    
        $method=$_SERVER['REQUEST_METHOD'];
        $showAlert=false;
        if($method=='POST')
        {
            $th_title=$_POST['title'];
            $th_desc=$_POST['desc'];

            $th_title=str_replace("<","&lt;",$th_title);
            $th_title=str_replace(">","&gt;",$th_title);

            $th_desc=str_replace("<","&lt;",$th_desc);
            $th_desc=str_replace(">","&gt;",$th_desc);

            $sno=$_POST['sno'];
            $sql="INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ( '$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            $showAlert=true;
            if($showAlert)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Your thread has been added.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
            }
        }

    ?>



    <div class="container my-4">
        <div class="bg-light p-4">
            <h1 class="display-4">Welcome to <?php echo $catname;?> forums</h1>
            <p class="lead"> This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
            <hr class="my-4">
            <p><?php echo $catdesc;?></p>
            <p><b>Posted by: <em>afsgshfhcghjytrsadj</em></b></p>
        </div>
    </div>

    <?php 
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {
        echo '<div class="container">
            <h1>Start Discussion</h1>
            <form action="'. $_SERVER["REQUEST_URI"].'" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thread Title</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text">Keep your tltle as crisp as possible.</small>
                </div>
                <input type="hidden" name="sno" value="'.$_SESSION["sno"].'">
                <div class="form-group mb-2">
                    <label for="exampleFormControlTextarea1" class="mb-2">Type your comment</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success mb-4">Submit</button>
            </form>
        </div>';
    }
    else 
    {
        echo '<div class="container">
                <h1>Start Discussion</h1>
                <p class="lead">You are not logged in.Please login to continue.</p>
              </div>';
    }
    ?>


    <div class="container mb-5">
        <h1>Browse Questions</h1>

        <?php 
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id"; 
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result))
        {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc']; 
            $thread_time = $row['timestamp']; 
            $thread_user_id = $row['thread_user_id']; 
            $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
           

        echo '<div class="container d-flex my-3">
                        <div class="flex-shrink-0">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP7NjSjKYoQFApBGgMXfrAioIDBfleCIZWyA&usqp=CAU" width="96px" alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">'.' <h5><a class="text-dark" href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
                            '.$desc.' </div>'.' <p class="my-0"><b> Asked by: '. $row2['user_email'].'
                            at '.$thread_time.'</b></p>'.'
                    </div>
                    
                </div>';

        }
        if($noResult)
        {
            echo '<div class="bg-light p-5 rounded-lg m-3">
            <h1 class="display-4">No Threads Found</h1>
            <p class="lead">Be the first person to comment</p>
            <hr class="my-4">
          </div>';
        }

        ?>

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