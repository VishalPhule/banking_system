<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
     <link rel="stylesheet" href="new.css">

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1 bg-dark">
            <div >
                <div >
                   <center> <h1>Welcome to MV Finance </h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center row align-items-vertical">

            <div class="col-sm-12 act">
                <br><br>
                <img src="img\picc2.png" class="img-fluid " style="width: 200px;">
                <br><br>
                <a href="transfermoney.php"><button class="bg-warning">View all Users</button></a>
            </div>
            <div class="col-sm-12 act">
                <br><br>
                <img src="img\mob.jpg" class="img-fluid" style="width: 200px;">
                <br><br>
                <a href="transfermoney.php" class=""><button class="bg-warning">Transfer Money</button></a>
            </div>
            <div class="col-sm-12  act mt-5" >
                <img src="img\money.png" class="img-fluid" style="width: 200px;">
                <br>
                <a href="transactionhistory.php"><button class="bg-warning mt-4">View Transfer History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center mt-5 py-2 bg-dark text-white">
        <p>&copy 2021. Made by <b>Vishal Phule</b> | For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
