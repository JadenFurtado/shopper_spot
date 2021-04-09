<?php 
include('signup.php') 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- my css-->
<style type="text/css">
    .signup_form{
        padding: 50px;
    }
</style>
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Signup</title>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
    <div class="signup_form">
        <form class="form" method="POST">
            <table>
                <tr>
                    <td>
                        email
                    </td>
                    <td>
                        <input type="text" class="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        <input type="password" class="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        phone no
                    </td>
                    <td>
                        <input type="text" class="phone_no" name="phone_no">
                    </td>
                </tr>
                <tr>
                    <td>
                        GST no
                    </td>
                    <td>
                        <input type="text" class="gst" name="GST_no">
                    </td>
                </tr>
                <tr>
                    <td>
                        shop name
                    </td>
                    <td>
                        <input type="text"  class="shop_name" name="shop_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        address:
                    </td>
                    <td>
                        <textarea class="address" name="address"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button name='submit' class="submit">submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    //just temporary
    if(isset($_POST['submit'])){
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone_no=$_POST['phone_no'];
        $gst=$_POST['GST_no'];
        $shop_name=$_POST['shop_name'];
        $address=$_POST['address'];
        
        $signup=new Signup();
        
        if($signup->sign_up($email,$password,$shop_name,$address,$phone_no,$gst)){
            echo "<script>alert('success');</script>";
            echo "<script>location.href='https://localhost/vfl/login';</script>";
        }
        else{
            echo "<script>alert('some error occured');</script>";
        }
    
    }
?>
    <script type="text/javascript">
       /* $(document).ready(function(){
            $(".submit").on("click",function(){
                var email=$(".email").val();
                var password=$(".password").val();
                var shop_name=$(".shop_name").val();
                var address=$(".address").val();
                var phone_no=$(".phone_no").val();
                var gst=$(".gst").val();
                $.ajax({
                    url:"signup_user.php",
                    type:"post",
                    data:{email:email,password:password,shop_name:shop_name,address:address,phone_no:phone_no,gst:gst},
                    dataType:"text",
                    success:
                    function(result=="true"){
                        alert(result);
                    },
                    error: function(xhr, status, error) {
            console.log(xhr);
            if (xhr == 'undefined' || xhr == undefined) {
                alert('undefined');
            } else {
                alert('object is there');
            }
            console.log(error);
            alert(status);
            alert(error);
        }
                });
            });
        });
        */
    </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>