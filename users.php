<?php 

class users{

 	private $con;
 	public function __construct(){
 		$this->con = mysqli_connect('localhost','root','','oopcrud');
 		if(mysqli_connect_error()){
 			echo mysqli_connect_error();

 		}
 	}

    public function addRecord($data){
       // echo "<pre>"; print_r($data); die;
        $query = "INSERT INTO users set name = '".$data['name']."',email = '".$data['email']."', phone = '".$data['phone']."' ";

        $runQuery = mysqli_query($this->con,$query);
        if($runQuery){
            echo "Data Inserted Successfully";
        }else{
            echo mysqli_errno($this->con);
        }
    }

    public function tablelist(){
    	$query = "select * from users  order by id DESC";
    	$getQuery = mysqli_query($this->con,$query);
    	$responseArray = array();
    	while($data = mysqli_fetch_array($getQuery)){;
    	$responseArray[] = $data;
     }
      return $responseArray;
    }

    public function getFormData($id){
    	$query = "select * from users where id = ".$id;
    	$getQuery = mysqli_query($this->con,$query);
    	$getData = mysqli_fetch_array($getQuery);
    	// echo "<pre>"; print_r($getData);exit;
    	return $getData;
// exit;
    }


    public function updateData($data,$id){
       // echo "<pre>"; print_r($data); die;
        $query = "UPDATE users set name = '".$data['name']."',email = '".$data['email']."', phone = '".$data['phone']."', age= '".$data['age']."' where id = '" .$id."' ";

        $runQuery = mysqli_query($this->con,$query);
        if($runQuery){
            echo "Data Updated Successfully";
        }else{
            echo mysqli_errno($this->con);
        }
    }


}

