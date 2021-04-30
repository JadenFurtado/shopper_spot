<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper's Spot</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="https://localhost/vfl/cart/"><img src="images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="https://localhost/vfl/index.php">Home</a></li>
                        <li><a href="https://localhost/vfl/products/index.php">Products</a></li>
                        <li><a href="https://localhost/vfl/about.php">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <?php
                    if(isset($_SESSION['user_id'])){//for shops
                      ?>
                        <li><a href="https://localhost/vfl/profile/?id=<?php echo $_SESSION['user_id'] ?>&user=<?php echo $_SESSION['user_type']?>">Account</a></li>
                      <?php
                    }
                    else{
                        ?>
                         <li><a href="https://localhost/vfl/login/">login</a></li>
                         <li><a href="https://localhost/vfl/signup/">signup</a></li>
                        <?php
                    }
                        ?>
                    </ul>
                </nav>
                <a href="https://localhost/vfl/"><img src="images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div> 
            <div class="row">
                <div class="col-2">
                    <h1>Welcome to <br> Shopper's Spot!</h1>
                    <a href="#" class="btn">Shop Now &#10132;</a>
                </div>
                <div class="col-2">
                    <img src="images/basket.png" alt="basket">
                </div>
            </div>   
        </div>
    </div> 
    <!---------featured categories----------->   
    <div class="categories">
        <div class="small-container">
            <div class="row"> 
                <div class="col-3">
                    <img src="images/fruits-veggies.png" alt="">
                    <h3>Fruits and Vegetables</h3>
                </div>
                <div class="col-3">
                    <img src="images/general-grocery.png" alt="">
                    <h3>General Groceries</h3>
                </div>
                <div class="col-3">
                    <img src="images/dairy.png" alt="">
                    <h3>Dairy Products</h3>
                </div>
                <div class="col-3">
                    <img src="images/personal-care.png" alt="">
                    <h3>Personal Care</h3>
                </div>
                <div class="col-3">
                    <img src="images/apparels.png" alt="">
                    <h3>Apparels</h3>
                </div>
                <div class="col-3">
                    <img src="images/footwear.png" alt="">
                    <h3>Footwear</h3>
                </div>
             </div>
        </div>        
    </div>
     <!---------featured products-----------> 
     <div class="small-container">
         <h2 class="title">Featured Products</h2>
         <div class="row">
             <div class="col-4">
                 <img src="images/personal-care-product1.png" alt="">
                 <h4>650ml Shampoo</h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <p>Rs.512.00</p>
             </div>
             <div class="col-4">
                <img src="images/lays.jpg" alt="">
                <h4>167gm Blue Lays</h4>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.65.00</p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/red-shoes.png" alt=""></a>
                <a href="productdetails.html"></a><h4>Red Running Shoes For Men</h4></a>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rs.800.00</p>
            </div>
            <div class="col-4">
                <img src="images/red-shirt.png" alt="">
                <h4>Red Casual shirt for Men</h4>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.650.00</p>
            </div>
         </div>
          <!---------Daily-use products-----------> 
         <h2 class="title">Daily-Use Products</h2>
         <div class="row">
            <div class="col-4">
                <img src="images/dairy-product1.png" alt="">
                <h4>500ml Milk</h4>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.30.00</p>
            </div>
            <div class="col-4">
                <img src="images/personal-care-product1.png" alt="">
                <h4>650ml Shampoo</h4>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-half-o"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.512.00</p>
            </div>
            <div class="col-4">
               <img src="images/tomato.png" alt="">
               <h4>Local Tomato(1kg)</h4>
               <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
               </div>
               <p>Rs.40.00</p>
           </div>
           <div class="row">
            <div class="col-4">
                <img src="images/oil.png" alt="">
                <h4>1L Soyabean Oil</h4>
                <div class="rating">
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star"></i>
                   <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.110.00</p>
            </div>
        </div>
     </div>
     <!-----offers----->
    <div class="offer">
         <div class="small-container">
             <div class="row">
                 <div class="col-2">
                     <img src="images/hoodie.png" class="offer-img">
                 </div>
                 <div class="col-2">
                     <p>Exclusively Available on Shopper's Spot.</p>
                     <h1>Red Hoodie for Women</h1>
                     <small>Comfortable Hoodies. Available in all sizes.</small>
                     <a href="#" class="btn">Buy Now &#10132;</a>
                 </div>
             </div>
         </div>
    </div>
    <!-----testimonial------>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p> 
                   <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                   </div>
                   <h3>~Yohan Gupta</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p>
                      <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                       <i class="fa fa-star-o"></i>
                    </div>
                    <h3>~Jaden Furtado</h3>
                   </div>
                   <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p> 
                    <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                    </div>
                    <h3>~Jash Dharia</h3>
                   </div>
            </div>
        </div>
    </div>
    <!-------js for toggle menu------>  
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
</body>
</html>
