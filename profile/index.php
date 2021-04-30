<?php 
session_start(); 
$user_id=$_GET['id'];
include($_SERVER['DOCUMENT_ROOT'].'/vfl/profile/profile.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper's Spot</title>
    <link rel="stylesheet" href="https://localhost/vfl/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="https://localhost/vfl/images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="https://localhost/vfl/">Home</a></li>
                        <li><a href="https://localhost/vfl/products/">Products</a></li>
                        <?php
                        if(isset($_SESSION['user_id'])){
                            ?>
                        <li><a href="https://localhost/vfl/profile/?id=<?php echo $_SESSION['user_id'] ?>&user=<?php echo $_SESSION['user_type'] ?>">Account</a></li>
                            <?php
                }
                        else{
                        ?>
                         <li><a href="https://localhost/vfl/login/">login</a></li>
                         <li><a href="https://localhost/vfl/signup/">signup</a></li>
                        <?php
                        }
                        ?>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="https://localhost/vfl/images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="https://localhost/vfl/images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div> 
        </div>
    </div> 
    <div style="padding: 10px;">
      <div style="max-height: 200px; max-width: 150px;">
        <img src="https://localhost/swasthya/dp/def.jpg" class="img-fluid">
      </div>
      <?php
      if(isset($_SESSION['user_id'])){
        ?>
        <div>
          <?php 
          //check if user is shop
          if($_SESSION['user_type']=="shop"&&$_SESSION['user_id']==$_GET['id']&&$_GET['user']=="shop"){
            ?>
            <a href="https://localhost/vfl/edit/profile/" class="btn">edit</a>
            <a href="https://localhost/vfl/products/product.php" class="btn">add products</a>
          <?php
        }
          ?>
        </div>
        <?php
      }
      ?>
      <?php
      if(isset($_SESSION['user_id'])){
        ?>
        <form method="POST">
<button class="btn" name="logout">logout</button>
</form>
        <?php
      }
      if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
      }
      ?>
    </div>
    <div class="small-container">
         <div class="row row-2">
             <h2>Users Products</h2>
             <select>
                 <option>Default sorting</option>
                 <option>Sort by Price</option>
                 <option>Sort by Manufacturer</option>
                 <option>Sort by rating</option>
             </select>
         </div>
           <!--this is for the demo-->
           <?php
           $i=1;
           $user = new Profile();
           $res=$user->get_user_products($_GET['id'],$_GET['user']);
           ?>
           <div class="row">
            <?php
            while($row=mysqli_fetch_array($res)){
            ?>
            <div class="col-4">
                 <img src="https://localhost/vfl/images/personal-care-product1.png" alt="">
                 <h4><?php echo $row['product_name']; ?></h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <p>Rs<?php echo $row['product_price']; ?></p>
             </div>
            <?php
            if($i%4==0){
                echo "</div>"; //row ends here
                echo "<div class='row'>";
            }
            $i++;
        }
            ?>
<!--end of demo-->
     <!-----offers----->
    <div class="offer">
         <div class="small-container">
             <div class="row">
                 <div class="col-2">
                     <img src="https://localhost/vfl/images/hoodie.png" class="offer-img">
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
