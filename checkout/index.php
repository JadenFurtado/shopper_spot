<?php
//session_start();
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
</head>
<body>
         <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="https://localhost/vfl/images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="https://localhost/vfl/index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="https://localhost/vfl/profile/?id=<?php echo $_SESSION['user_id'] ?>&user=<?php echo $_SESSION['user_type'] ?>">Account</a></li>
                    </ul>
                </nav>
                <a href="cart.html"><img src="https://localhost/vfl/images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="https://localhost/vfl/images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>   
    <!-- -----cart item details----- -->
    <div style="padding-left: 20px;">
        <h2>Your order summary</h2>
    </div>
    <div class="responsive-table" style="max-width: 800px; padding-left: 10px;">
        <table class="table">
            <tr>
                <td>
                    email
                </td>
                <td>
                    <input class="input" type="text" name="email" value="">
                </td>
            </tr>
            <tr>
                <td>
                    phone no
                </td>
                <td>
                    <input class="input" type="text" name="phone_no">
                </td>
            </tr>
            <tr>
                <td>
                    address
                </td>
                <td>
                    <textarea type="address" cols="50" rows="3" name="address" placeholder="your address"></textarea>
                </td>
            </tr>
            <tr>
                <td>Your order summary</td>
                <td>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>product 1</td>
                                <td>price 1</td>
                            </tr>
                            <tr>
                                <td>product 2</td>
                                <td>price 2</td>
                            </tr>
                            <tr>
                                <td>product 3</td>
                                <td>price 3</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Place your order
                </td>
                <td>
                    <a href="#" class="btn confirm">confirm</a>
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".confirm").click(function(){
                url="confirm.php",
                function(data){
                    alert('success');
                }
            });
        });
    </script>
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

