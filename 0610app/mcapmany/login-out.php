<?php session_start();?>
<?php require "setup/header.php"; ?>
<?php
$pdo=new PDO("mysql:host=localhost;dbname=apps;charset=utf8",
    "Admin","Admin");
$id=$_POST["userid"];
$pass=$_POST["userpasswd"];
unset($_SESSION["userdata"]);
$sql=$pdo->prepare("select * from userdata where userid=? and userpasswd=?");
$sql->execute([[$_REQUEST["userid"]],$_REQUEST["userpasswd"]]);
foreach($sql as $row) {
    $_SESSION["userdata"] = ["userid" => $row["userid"], "userpasswd" => $row["userpasswd"]];
}
    if(isset($_SESSION["userdata"])){
        echo"ログイン成功";
    }else{
        echo"ログイン失敗";
    }

?>
<?php require "setup/footer.php"; ?>