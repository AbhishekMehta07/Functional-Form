<?php
require_once('connect.php');
class edit{
    public $conn;
    public function up($id,$n,$e,$numb,$connect){
        $sql="UPDATE information SET name='$n', email='$e', number='$numb' WHERE id='$id' ";
        if ($connect->query($sql) === TRUE) {
            header('Location: index.php');
            exit;
        } else {
            echo "Error: " . $connect->error;
        }
    }
}

$obj1=new edit();
$obj2=new connect();

$conn=$obj2->getConnection();
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];

$obj1->up($id,$name,$email,$number,$conn);

?>