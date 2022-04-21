<?php
include("../config_indemnifier.php");
if(!empty($_POST['cabinets'])){
        
        $cartraige_id = $_POST['cabinets'];
        if($cartraige_id!=""){
            $users_arr = array();
            $sql= "SELECT * FROM custom_field where folder_id = $cartraige_id";
            //  echo $sql;
            $result = mysqli_query($db,$sql);
            
            while( $row = mysqli_fetch_array($result) )
            {
                // $userid = $row['id'];
                $id = $row['id'];
                $email = $row['field_name'];
                
               
            
                $users_arr[] = array('id'=>$id,'email'=>$email);
            }
            // print_r($users_arr);
    
            // echo 'True '.$data;
            
                echo json_encode($users_arr);
                
        }else{
            echo 'False';
        }
    }?>