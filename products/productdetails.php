<?php 
include($_SERVER['DOCUMENT_ROOT'].'/vfl/products/add_product.php'); 
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
    <!-- required for the cart -->
    <script type="text/javascript"></script>
</head>
<body>
         <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="https://localhost/vfl/images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="https://localhost/vfl/">Home</a></li>
                        <li><a href="https://localhost/vfl/products/">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="https://localhost/vfl/profile/?id=<?php echo $_SESSION['user_id'] ?>&user=<?php echo $_SESSION['user_type'] ?>">Account</a></li>
                    </ul>
                </nav>
                <a href="https://localhost/vfl/cart/"><img src="https://localhost/vfl/images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="https://localhost/vfl/images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>   
    
     <!-- -----single product details------ -->
    <?php 
    if(!isset($_GET['prod_id'])){
        ?>
     <div class="small-container single-product">
         <div class="row">
             <div class="col-2">
                 <img src="https://localhost/vfl/images/red-shoes.png" width="75%">
             </div>
             <div class="col-2">
                 <p>Home / Shoes</p>
                 <h1>Red Running Shoes by SparX</h1>
                 <h4>Rs.800.00</h4>
                 <select>
                     <option>Select Size</option>
                     <option>UK 7</option>
                     <option>UK 8</option>
                     <option>UK 9</option>
                 </select>
                 <input type="number" value="1">
                 <a href="#" class="btn add_to_cart">Add To Cart</a>
                 <h3>Product Details <i class="fa fa-indent"></i></h3>
                 <br>
                 <p>Give your footwear wardrobe a style upgrade with SparX Active Red Running Shoes.Team it up with gym wears and enjoy this trendy look.</p>

             </div>
         </div>
     </div>
     <?php
    }
    else{
        $product=new Products();
        $data=$product->get_product_details($_GET['prod_id']);
        if($data==NULL){
            header("location://localhost/vfl/404.php");
        }
        else{
            $d=mysqli_fetch_array($data); 
     ?>
     <div class="small-container single-product">
         <div class="row">
             <div class="col-2">
                 <img src="https://localhost/vfl/images/red-shoes.png" width="75%">
             </div>
             <div class="col-2">
                 <p>Home / Shoes</p>
                 <h1><?php echo htmlspecialchars($d['product_name']); ?></h1>
                 <h4><?php echo htmlspecialchars($d['product_price']); ?></h4>
                 <select>
                     <option>Select Size</option>
                     <option>UK 7</option>
                     <option>UK 8</option>
                     <option>UK 9</option>
                 </select>
                 <input type="number" name="quantity" id="quant" min="1" max="<?php echo htmlspecialchars($d['product_quant']/2) ?>">
                 <a href="#" class="btn add_to_cart">Add To Cart</a>
                 <h3>Product Details <i class="fa fa-indent"></i></h3>
                 <br>
                 <?php if($d['product_description']!=NULL){ ?>
                 <p><?php echo htmlspecialchars($d['product_description']); ?></p>
                 <?php
                 }
                 else{?>
                  <p>No details given</p>
                 <?php
        }
                 ?>
             </div>
             <div>
                <h4>Write a review here</h4>
                 <textarea class="review" name="review" cols="50" rows="4" placeholder="your review"></textarea>
                 <a href="#" class="submit btn">submit</a>
             </div>
         </div>
     </div>
     <script>
     $(".add_to_cart").click(function(){
        var prod_id="<?php echo htmlspecialchars($_GET['prod_id']); ?>";
        var product_quant=$("#quant").val();
        $.ajax({
            url:"add_to_cart.php",
            data:({prod_id:prod_id,product_quant:product_quant}),
            type:"post",
            dataType:"text",
            success:function(data){
                alert('success');
            }
        });
     });
     $(".submit").click(function(){
        var prod_id="<?php echo htmlspecialchars($_GET['prod_id']); ?>";
        var prod_review=htmlspecialchars($(".review").val());
        $.ajax({
            url:"add_product_review",
            data:({prod_id:prod_id,prod_review:prod_review}),
            type:"post",
            dataType:"text",
            success:function(data){
                alert("added review");
            }
        });
     });
     </script>
     <?php
        }
    }
     ?>
    <script>
    </script>
     <!-- ------title------>
     <div class="small-container">
         <div class="row row-2">
            <h2>Also View</h2>
         </div>
     </div>


     <!-- ------products--------->
     <div class="small-container">
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
