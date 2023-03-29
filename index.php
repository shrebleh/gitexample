<?php
    include_once 'hey.php';
    $sql = "SELECT ABOUT FROM descp WHERE ID='BURGER'";
    $result = mysqli_query($conn, $sql);

?>


<!---->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD BLOG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header starts  -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>OMELA</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#speciality">speciality</a>
        <a href="#popular">popular</a>
        <a href="#gallery">gallery</a>
        <a href="#order">order</a>
    </nav>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>FOOD COOKED AND MADE WITH UTMOST CARE</h3>
        <h2>PUTTING A SMILE ON YOUR FACE</h2>
        <p>Get all your restaurant's online orders in one place with the order taking</p>
        <a href="#order" class="btn">order now</a>
    </div>

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

</section>

<section class="speciality" id="speciality">

    <h1 class="heading"> our <span>speciality</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="images/s-img-1.jpg" alt="">
            <div class="content">
                <img src="images/s-1.png" alt="">
                <h3>tasty burger</h3>
                <p>In house burger bun filled with veg patty flavoured with tandoori spices , mix lettuce, tomatoes, gherkins and peri peri mayo</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-2.jpg" alt="">
            <div class="content">
                <img src="images/s-2.png" alt="">
                <h3>tasty pizza</h3>
                <p>Tomato sauce, chunks of paneer tikka, fresh chopped onions, bell peppers and our fresh homemade mozzarella cheese</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-3.jpg" alt="">
            <div class="content">
                <img src="images/s-3.png" alt="">
                <h3>cold ice-cream</h3>
                <p>Rich chocolate based ice cream adorned with chocolate pieces and crispies!</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-4.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>cold drinks</h3>
                <p>A refreshing mocktail with combination with fresh fruit and lemon juice. mint, soda and crushed ice.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-5.jpg" alt="">
            <div class="content">
                <img src="images/s-5.png" alt="">
                <h3>tasty sweets</h3>
                <p>Delicious dollops of love, our sweets are made using wheat flour, sugar and are infused with a variety of nuts to bring you richness in every mouth watering bite.</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="images/s-img-6.jpg" alt="">
            <div class="content">
                <img src="images/s-6.png" alt="">
                <h3>healty breakfast</h3>
                <p>Choose from any of our espresso classics such as latte, cappuccino, Americano and any one croissant!!</p>
            </div>
        </div>

    </div>

</section>

<section class="popular" id="popular">

    <h1 class="heading"> most <span>popular</span> foods </h1>

    <div class="box-container">

        <div class="box">
            <span class="price">$10</span>
            <img src="images/p-1.jpg" alt="">
            <h3>tasty burger</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $15</span>
            <img src="images/p-2.jpg" alt="">
            <h3>tasty cakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $12</span>
            <img src="images/p-3.jpg" alt="">
            <h3>tasty sweets</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $2 each</span>
            <img src="images/p-4.jpg" alt="">
            <h3>tasty cupcakes</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $15- $20 </span>
            <img src="images/p-5.jpg" alt="">
            <h3>cold drinks</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>
        <div class="box">
            <span class="price"> $3 a scoop</span>
            <img src="images/p-6.jpg" alt="">
            <h3>cold ice-cream</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <a href="#order" class="btn">order now</a>
        </div>

    </div>

</section>

<section class="gallery" id="gallery">

    <h1 class="heading"> our food <span> gallery </span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
            
                <h3>BURGER</h3>
                <p></p>

                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
                <h3>SANDWICHES</h3>
                <p id="demo"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
                <h3>ROLLS</h3>
                <p id="roll"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
                <h3>CUPCAKES</h3>
                <p id="3"></p>
                <a href="#order" class="btn">order  now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
                <h3>CANDY</h3>
                <p id="CANDY"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
                <h3>FRIED CHICKEN</h3>
                <p></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
                <h3>TOAST</h3>
                <p id="TOST"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
                <h3>CHOCOLATE</h3>
                <p id="CHOCO"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
                <h3>CAKE SLICE</h3>
                <p id="CAKE"></p>
                <a href="#order" class="btn">order now</a>
            </div>
        </div>

    </div>

</section>

<section class="order" id="order">

    <h1 class="heading"> <span>order</span> now </h1>

    <div class="row">
        
        <div class="image">
            <img src="images/order-img.jpg" alt="">
        </div>

        <form action="form.php">

            <div class="inputBox">
                <input type="text" placeholder="name" name="name" id="Name" required>
                <input type="email"  placeholder="email" name="email" id="Email_id" required>
            </div>

            <div class="inputBox">
                <input type="tel" placeholder="number" id="phone" name="phone" pattern="{9}{1}[0-9]" required>
                <input type="text" placeholder="food name" name="foodName" id="food_name" required>
            </div>

            <textarea placeholder="address" name="address" id="Adress" cols="30" rows="10" required></textarea>

            <a href="next.html" target="_self"><input type="submit" value="order now" class="btn"></a>

        </form>

    </div>

</section>

<section class="footer">
    <h1 class="credit">CREATED BY<span> Team 7</span>|| Food blog</h1>
    <div class="share">
        <a href="#" class="btn">Shravani S</a>
        <a href="#" class="btn">Shreya Naga Sai Malepaty</a>
        <a href="#" class="btn">Shreya S</a>
        <a href="#" class="btn">Sona Thomas</a>
    </div>
</section>

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>
<!-- class loader -->

<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>