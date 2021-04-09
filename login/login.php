<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/vfl/config.php');

class Login extends Database{
    use Sanitize;
    public function user_Login($email,$password){
        //$santizie=new Sanitize();
        if(isset($_SESSION['user_id'])){
            echo "<script>alert('you are already logged in!); location.replace('https://localhost/vfl/');</script>";
            header("location:https://localhost/vfl/");
        }
        $email=$this->test_input($email);
        $password=$this->test_input($password);

        $link=$this->connect();

        $stmt=$link->prepare("SELECT passwords,id FROM shop WHERE email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($hash,$id);
        $stmt->fetch();

        if($hash!=NULL){
            if(password_verify($password,$hash)){
                $_SESSION['user_id']=$id;
                return true;
            }
        }
    }
}
trait Sanitize{
    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>