<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.Jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.m1m.css" rel="styesheet"  integrity="sha384-1BmE4KWBq78iYhf1dvKuhfTAU6auU8t94WrhftjDbrCEXSU1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productsالمنتجات</title> 
    <style>
        h3{
            font-family:'Cairo',sans-serif;
            font-weight: bold;
        }
        .card{
            float:right;
            margin-top: 20px;
            margin-left: 1px;
            margin-right: 10px;
        }
        .card img{
            width: 70px;;
            height: 150px;
        }
        main{
            width: 60%;
        }
        #aa{
            margin-left:70px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav  class="navbar navbar -dark bg-dark">
        <a id="aa"class="navbar-brand" href="card.php">Mycard عربتي</a>
    </nav>
  <center>
      <h3> المنتجات المتوفرة</h3>
  </center> 
  <?php
  include("config.php");
  $result = mysqli_query($con, "SELECT*FROM prod");
  while($row = mysqli_fetch_array($result)){
      echo "
      <center>
   <main>
      <div class='card' style='width: 15rem;'>
         <img src='$row[image]' class='card-img-top'>
         <div class='card-body'>
             <h5 class='card-title'>$row[name]</h5>
             <p class='card-text'>$row[price]</p>
            <button> <a href='val.php? id=$row[id]' class='btn btn-success'> اضافة المنتج للعربة</a></button>
         </div>
      </div> 
   </main>
   <center>
      
      ";
  }
  ?> 
  
</body>
</html>