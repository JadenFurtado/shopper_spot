<?php

include($_SESSION['user_id'].'/vfl/config.php');

class Profile extends Database{
	
	public function get_user_details($user_id,$user_type){
		$link=$this->connect();
		if($user_type==NULL){
			$sql="SELECT * FROM shop WHERE id='$user_id'";
		}
		else{
			$sql="SELECT * FROM users WHERE id='$user_id'";
		}
		$res=mysqli_query($link,$sql);
		if($res!=NULL){
			return $res;
		}
		else{
			return 0;
		}
	}
}

?>