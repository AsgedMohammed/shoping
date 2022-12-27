<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input تسجيل العملاء</title>
    <link rel="stylesheet" href="index.css"> 
    <style>
        label{
padding: 10px;
cursor: pointer;
font-weight: bold;
font-size: 15px;
background-color: #1f87cf;
font-family: "cairo",sans-serif;
color: white;
}
a{
text-decoration: none;
font-size: 20px;
color: tomato;
font-family: "cairo",sans-serif;
font-weight: bold;
}
    </style>
</head>
<body>
    <center>
    <div class="main">
           <form action="insert.php"method="post" enctype="multipart/form-data">
               <h2>تسجيل الدخول</h2>
               
                <input type="text" placeholder="user name">
                <br>
                <input type="password" placeholder="enter password">
                 <button onclick="location.href='shop.php'">تسجيل الدخول</button>
                <br><br>
                <a href="set_up.php">انشاء حساب</a>
           </form>
       </div>
       <p>Developer by barby</p>
    </center>
</body>
</html>