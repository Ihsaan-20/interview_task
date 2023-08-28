<?php 
require_once ('config.php');


if(isset($_POST['add'])){
    extract($_POST);
// ONE TO MANY RELATIONSHIP;

    // $father_q = " INSERT INTO `fathers` (f_name) values ('{$f_name}') ";
    // $result = mysqli_query($conn, $father_q);
    // if($result){
    //    $f_id = mysqli_insert_id($conn);
       
    //    $std = " INSERT INTO `students` (std_name, std_dpt, f_id) VALUES ('{$std_name}', '{$std_dpt}', '{$f_id}') ";
    //    $result = mysqli_query($conn, $std);
    //    if($result){
    //     echo "done";
    //    }else{
    //     echo "std query failed";
    //    }
    // }else{
    //     echo "father query failed";
    // }

// MANY TO MANY RELATIONSHIP;
    $father_q = " INSERT INTO `fathers` (f_name) values ('{$f_name}') ";
        $result = mysqli_query($conn, $father_q);
        if($result){
        echo $f_id = mysqli_insert_id($conn)."\n";
        
        $std = " INSERT INTO `students` (std_name, std_dpt) VALUES ('{$std_name}', '{$std_dpt}') ";
        $result = mysqli_query($conn, $std);
        if($result){
                $std_id = mysqli_insert_id($conn)."\n";
                $std_f = "INSERT INTO `std_father` (std_id, f_id) values('{$std_id}', '{$f_id}') ";
                $result3 = mysqli_query($conn, $std_f);
            echo "done";
        }else{
            echo "std query failed";
        }
        }else{
            echo "father query failed";
        }

}

?>