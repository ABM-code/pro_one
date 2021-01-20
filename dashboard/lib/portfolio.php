<?php

function AddNewPortfolio($img, $desc, $user_id){

$con = mysqli_connect("localhost", "root", "", "pro_one");
$sql = " INSERT INTO `portfolio`(`img`, `description`, `user_id`) VALUES ('$img', '$desc', '$user_id')";
mysqli_query($con , $sql);
$res = mysqli_affected_rows ($con);
if ($res == 1){
return True;        
}else{
return false;
};


}


function getPortfolios(){
    $con = mysqli_connect("localhost", "root", "", "pro_one");
    $sql = "SELECT * FROM `userportfolio`";
    $q = mysqli_query($con , $sql);

    $projects = [];
    $res = mysqli_fetch_assoc($q);
        while( $res = mysqli_fetch_assoc($q)){
            $projects[]= $res;
        }

        return $projects;
    

}


function deletepro($pro_id){

    $con = mysqli_connect("localhost", "root", "", "pro_one");
    $sql = " DELETE FROM `portfolio` WHERE `id`= $pro_id ";
    mysqli_query($con , $sql);
    $res = mysqli_affected_rows ($con);
    if ($res == 1){
    return True;        
    }else{
    return false;
    };
    
    
    }

    function getPortfolioById($id){
        $con = mysqli_connect("localhost", "root", "", "pro_one");
        $sql = "SELECT * FROM `userportfolio` WHERE `id` = $id ";
        $q = mysqli_query($con , $sql);
    
        $res = mysqli_fetch_assoc($q);
            
            return $res;
        
    
    }



?>