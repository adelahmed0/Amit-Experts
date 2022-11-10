<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&family=Open+Sans:wght@400;700&family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="container">
            <a href="" class="logo">Cars</a>
            <ul class="main-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
        </ul>
        </div>
    </div>
    <div class="car">
        <div class="container">
            <div class="box">
                <img src="assets/images/car1.jpeg" alt="">
                <div class="content">
                    <h3>Car 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <button onclick="change(this)" class="btn">Rent Now</button>
            </div>
            <div class="box">
                <img src="assets/images/car2.jpeg" alt="">
                <div class="content">
                    <h3>Car 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <button onclick="change(this)" class="btn">Rent Now</button>
            </div>
            <div class="box">
                <img src="assets/images/car3.jpeg" alt="">
                <div class="content">
                    <h3>Car 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <button onclick="change(this)" class="btn">Rent Now</button>
            </div>
            <div class="box">
                <img src="assets/images/car4.jpeg" alt="">
                <div class="content">
                    <h3>Car 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <button onclick="change(this)" class="btn">Rent Now</button>
                <span class="span"></span>
            </div>
        </div>
        </div>
        <script src="assets/js/main.js"></script>
        </body>
</html>