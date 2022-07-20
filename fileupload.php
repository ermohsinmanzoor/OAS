
<?php
session_start();
$sp=mysqli_connect("localhost","root","","oas");
         if($sp->connect_errno){
                echo "Error <br/>".$sp->error;
}

$picpath="studentpic/";
$docpath="studentdoc/";
$proofpath="studentproof/";
$id=$_SESSION['user'];
if(isset($_POST['fpicup']))
{
$picpath=$picpath.$_FILES['fpic']['name'];
$docpath1=$docpath.$_FILES['fdmdoc']['name'];     
$docpath2=$docpath.$_FILES['fdcdoc']['name']; 
$docpath3=$docpath.$_FILES['fdobdoc']['name']; 
$docpath4=$docpath.$_FILES['fprcdoc']['name'];      
$proofpath1=$proofpath.$_FILES['fsig']['name']; 

if(move_uploaded_file($_FILES['fpic']['tmp_name'],$picpath)
  && move_uploaded_file($_FILES['fdmdoc']['tmp_name'],$docpath1)
  && move_uploaded_file($_FILES['fdcdoc']['tmp_name'],$docpath2)
  && move_uploaded_file($_FILES['fdobdoc']['tmp_name'],$docpath3)
  && move_uploaded_file($_FILES['fprcdoc']['tmp_name'],$docpath4)
  && move_uploaded_file($_FILES['fsig']['tmp_name'],$proofpath1))
{

$img=$_FILES['fpic']['name'];
$img1=$_FILES['fdmdoc']['name'];
$img2=$_FILES['fdcdoc']['name'];
$img3=$_FILES['fdobdoc']['name'];
$img4=$_FILES['fprcdoc']['name'];
$img5=$_FILES['fsig']['name'];


$query="insert into t_userdoc (s_id,s_pic,s_twdmarkpic, s_twdcerpic, s_dobcer, s_prccer ,s_sigpic) values 
    ('$id','$img','$img1','$img2','$img3','$img4','$img5')";
        if($sp->query($query)){
     echo "Inserted to DB ";    
    }else
    {
        echo "Error <br/>".$sp->error;        
    }
}
else
{
echo "There is an error,please retry or ckeck path";
}
}
 ?>
