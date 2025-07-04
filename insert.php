<?php
require_once('connect.php');
class insert{
    public $conn;
    function Ins($n,$e,$numb,$connect){
        $sql="INSERT INTO information (name, email, number) VALUES ('$n', '$e','$numb')";
        if ($connect->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $connect->error;
        }
    }
}
$obj1=new insert();
$obj2=new connect();

$conn=$obj2->getConnection();

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

$obj1->Ins($name,$email,$number,$conn);

?>