<?php
/**
 * Created by PhpStorm.
 * User: DIU
 * Date: 1/2/2018
 * Time: 9:30 PM
 */

namespace App\classes;


class Registration
{
    private function dbConnection(){
        $hostname="localhost";
        $userName="root";
        $password="";
        $dbName="info";
        $link=mysqli_connect($hostname,$userName,$password,$dbName);
        return $link;

    }


    public function addInfo($data){
//        $link=mysqli_connect("localhost", "root", "", "info");
        $sql="INSERT INTO reghistory(first_name, last_name, email, password, phone_number, date_of_birth, gender, Address) VALUES ('$data[first_name]', '$data[last_name]','$data[email]','$data[password]','$data[phone_number]','$data[date_of_birth]','$data[gender]','$data[Address]')";

        if(mysqli_query(Registration::dbConnection(),$sql)){
            $message="Information save successfully";
            return $message;

        }else{
            die('Query Problem. '.mysqli_error(Registration::dbConnection()));
        }
    }

    public function getAllInfo(){
        $sql="SELECT `id`, `first_name`, `last_name`, `email`, `phone_number`, `date_of_birth`, `gender`, `Address` FROM `reghistory`";
        if(mysqli_query(Registration::dbConnection(),$sql)){
            $queryResult=mysqli_query(Registration::dbConnection(),$sql);
//            echo '<pre>';
//            print_r($queryResult);

            return $queryResult;

        }else{
            die('Query Problem'.mysqli_error(Registration::dbConnection()));
        }

    }
    public function getInfoBtId($id){
        $sql="SELECT * FROM reghistory WHERE id='$id'";
        if(mysqli_query(Registration::dbConnection(),$sql)){
            $queryResult=mysqli_query(Registration::dbConnection(),$sql);
            return $queryResult;
        }else{
            die('Query problem. '.mysqli_error(Registration::dbConnection()));
        }

    }
    public function updateInfo($data){
        $sql="UPDATE reghistory SET first_name='$data[first_name]',last_name='$data[last_name]',email='$data[email]',password='$data[password]',phone_number='$data[phone_number]',date_of_birth='$data[date_of_birth]',gender='$data[gender]',Address='$data[Address]' WHERE id='$data[id]'";
        if(mysqli_query(Registration::dbConnection(),$sql)){

            header('Location: reg-history.php');

        }else{
            die("Query Problem".mysqli_error(Registration::dbConnection()));
        }

    }
    public function DeleteInfo($id){
        $sql="DELETE FROM `reghistory` WHERE id='$id'";
        if(mysqli_query(Registration::dbConnection(),$sql)){
            $message="Your Selected Info Deleted";
            return $message;
        }else{
            die('Query Problem'.mysqli_error(Registration::dbConnection()));
        }
    }

}