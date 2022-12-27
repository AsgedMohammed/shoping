<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.Jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.m1m.css" rel="styesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربتي منتجاتي</title>
    <style>
         h3{
             font-family:'cairo',sans-serif;
             font-weight: bold;
         }
         main{
             width: 40%;
             margin-top:30px;
         }
         table{
             box-shadow: 1px  1px 10px silver;
         }
         thead{
             background-color: #3498DB;
             COLOR:white;
             text-align:center:
         }
         tbody{
             text-align: center;
         }
    </style> 
</head>
<body>
    <center>
    <h3>
    منتجاتك المحجوزة
    </h3>
    <center>
<?php
   include('config.php');
   $result = mysqli_query($con, "SELECT * FROM addcard");
   while($row = mysqli_fetch_array($result)){
       echo"
        <center>
        <main>
           <table class='table'>
              <thead>
                  <tr>
                      <th scope='col'>product name</th>
                      <th scope='col'>product price</th>
                      <th scope='col'>delete product</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td>$row[name]</td>
                     <td>$row[price]</td>
                     <td> <button><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a> </button></td>
                   </tr>
               </tbody>
            </table> 
        </main>        
       </center>
       ";}?>
       <center>
           <a href="shop.php">الرجوع لصفحة المنتجات</a>
       </center>
</body>
</html>