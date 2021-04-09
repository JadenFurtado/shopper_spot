<?php 
    //session_start();
    include('add_product.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Shopper's Spot</title>
    <link rel="stylesheet" href="https://localhost/vfl/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
         <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="https://localhost/vfl/images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="https://localhost/vfl/index.php">Home</a></li>
                        <li><a href="https://localhost/vfl/products/index.php">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="account.html">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="https://localhost/vfl/images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="https://localhost/vfl/images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>   
    
     <div class="small-container">
         <div class="row row-2">
             <h2>All Products</h2>
             <select>
                 <option>Default sorting</option>
                 <option>Sort by Price</option>
                 <option>Sort by Manufacturer</option>
                 <option>Sort by rating</option>
             </select>
         </div>
           <!--this is for the demo-->
           <div class="row">
         <?php
             $products = new Products();
             $data=$products->get_products();
        if($data!=NULL){
          $i=0;
            while($row=mysqli_fetch_array($data)){
              $i++;
                ?>
                <div class="col-4 <?php echo $row['id'] ?>" id="prod_<?php echo $row['id'] ?>">
                 <img src="https://localhost/vfl/images/personal-care-product1.png" alt="">
                 <h4><?php echo htmlspecialchars($row['product_name']); ?></h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <p><?php echo htmlspecialchars($row['product_price']); ?></p>
             </div>
             <script type="text/javascript">
               $(".<?php echo $row['id'] ?>").on("click",function(){
                location.href="https://localhost/vfl/products/productdetails.php?prod_id=<?php echo $row['id']; ?>";
               });
             </script>
                <?php
                if($i%4==0){
                  echo "</div>";
                  echo "<div class='row'>";
                }
            } 
        }
        ?>
             <div class="col-4">
                 <img src="https://localhost/vfl/images/personal-care-product1.png" alt="">
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
                <img src="https://localhost/vfl/images/lays.jpg" alt="">
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
                <img src="https://localhost/vfl/images/red-shoes.png" alt="">
                <h4>Red Running Shoes For Men</h4>
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
                <img src="https://localhost/vfl/images/red-shirt.png" alt="">
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
<!--end of demo-->
           <div class="row">
             <div class="col-4">
                 <img src="https://localhost/vfl/images/personal-care-product1.png" alt="">
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
                <img src="https://localhost/vfl/images/lays.jpg" alt="">
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
                <img src="https://localhost/vfl/images/red-shoes.png" alt="">
                <h4>Red Running Shoes For Men</h4>
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
                <img src="https://localhost/vfl/images/red-shirt.png" alt="">
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
         <div class="row">
            <div class="col-4">
                <img src="https://localhost/vfl/images/dairy-product1.png" alt="">
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
                <img src="https://localhost/vfl/images/personal-care-product1.png" alt="">
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
               <img src="https://localhost/vfl/images/tomato.png" alt="">
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
                <img src="https://localhost/vfl/images/oil.png" alt="">
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
        <div class="page-btn">
          <span>1</span>
          <span>2</span> 
          <span>3</span> 
          <span>4</span>  
          <span>&#10132;</span>  
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
<!--this is just a demo-->

<div style="padding: 20px;">
<?php
if(isset($_SESSION['user_id'])){//checks if user is logged in
    echo '<a href="https://localhost/vfl/products/Products.php">Add products</a>';
    ?>
    <br>
    <div class="products">
        <?php 
        $products = new Products();
        $data=$products->get_products();
        if($data!=NULL){
            while($row=mysqli_fetch_array($data)){
                echo htmlspecialchars($row['shop_id']);
                echo "<br>";
                echo htmlspecialchars($row['product_price']);
                echo "<br>";
                echo htmlspecialchars($row['prod_subcat']);
                echo "<br><br>";
            } 
        }
    }
    else{
        header("https://localhost/vfl/404.php");
    }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>