<?php
if(($_POST['create'])=="Create")
{
$cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');


    $title=$_POST['title'];
    $text=$_POST['edit'];
$sel="INSERT into code values('','$text','$title')";
$se=mysqli_query($cont,$sel) or die('error');

$see="SELECT * from code";
$selq=mysqli_query($cont,$see);

$row=mysqli_fetch_array($selq);


    if(!$selq){
    echo "Error".mysqli_error($cont);

    }
    else
    {
    header('location:htmlgo.php');
    }
}
else
{
    $conten=$_POST['edit'];
$tit=$_POST['title'];
 $up=$_GET['oid'];

$cont=mysqli_connect('localhost','root','','texteditor') or die('connection failed');
$upda="UPDATE code set content='$conten', header='$tit' where sn='$up' ";
$up_now=mysqli_query($cont,$upda);
if(!$up_now)
{
    echo "Error".mysqli_error($cont);
}
else
{
   
    header('location:index.php');
}

}








?>