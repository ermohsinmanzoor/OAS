<?php
    session_start();
    error_reporting(0);

    
    
    $detid=$_REQUEST["detid"];
   
    
    $ufname =$_REQUEST["ufname"]; 
	$umname=$_REQUEST["umname"];
    $ufocc=$_REQUEST["ufocc"];
    
   

    
    $inc=$_REQUEST["inc"];
    $gen=$_REQUEST["gen"];
    
    $cadr=$_REQUEST["cadr"];
    $cpo=$_REQUEST["cpo"];
	$ct=$_REQUEST["ct"];
	$cdi=$_REQUEST["cdi"];
    $cpin=$_REQUEST["cpin"];
   
    
    $padr=$_REQUEST["padr"];
    $ppo=$_REQUEST["ppo"];
	$pt=$_REQUEST["pt"];
	$pdi=$_REQUEST["pdi"];
    $ppin=$_REQUEST["ppin"];
    
  
    $natn=$_REQUEST["natn"];
    $relg=$_REQUEST["relg"];
    $cat=$_REQUEST["cat"];
	
    
    $strm=$_REQUEST["strm"];
    $sem=$_REQUEST["sem"];
	
    $sub1=$_REQUEST["sub1"];
	$sub2=$_REQUEST["sub2"];
	$sub3=$_REQUEST["sub3"];
	$sub4=$_REQUEST["sub4"];
	$sub5=$_REQUEST["sub5"];
	$sub6=$_REQUEST["sub6"];
	$sub7=$_REQUEST["sub7"];
	$sub8=$_REQUEST["sub8"];
	$sub9=$_REQUEST["sub9"];  

    $nob1=$_REQUEST["nob1"];
	$sc1=$_REQUEST["sc1"];
    $yop1=$_REQUEST["yop1"];
    $ern1=$_REQUEST["ern1"];
    $mo1 =$_REQUEST["mo1"];
    $po1=$_REQUEST["po1"];
    $sb1=$_REQUEST["sb1"];
    
    $nob2=$_REQUEST["nob2"];
	$sc2=$_REQUEST["sc2"];
    $yop2=$_REQUEST["yop2"];
    $ern2=$_REQUEST["ern2"];
    $mo2 =$_REQUEST["mo2"];
    $po2=$_REQUEST["po2"];
    $sb2  =$_REQUEST["sb2"];
	
	$nob3=$_REQUEST["nob3"];
	$sc3=$_REQUEST["sc3"];
    $yop3=$_REQUEST["yop3"];
    $ern3=$_REQUEST["ern3"];
    $mo3 =$_REQUEST["mo3"];
    $po3=$_REQUEST["po3"];
    $sb3  =$_REQUEST["sb3"];
	
 	$nob4=$_REQUEST["nob4"];
	$sc4=$_REQUEST["sc4"];
    $yop4=$_REQUEST["yop4"];
    $ern4=$_REQUEST["ern4"];
    $mo4 =$_REQUEST["mo4"];
    $po4=$_REQUEST["po4"];
    $sb4 =$_REQUEST["sb4"];
	
	$nob5=$_REQUEST["nob5"];
	$sc5=$_REQUEST["sc5"];
    $yop5=$_REQUEST["yop5"];
    $ern5=$_REQUEST["ern5"];
    $mo5 =$_REQUEST["mo5"];
    $po5=$_REQUEST["po5"];
    $sb5=$_REQUEST["sb5"];
	
	$nob6=$_REQUEST["nob6"];
	$sc6=$_REQUEST["sc6"];
    $yop6=$_REQUEST["yop6"];
    $ern6=$_REQUEST["ern6"];
    $mo6 =$_REQUEST["mo6"];
    $po6=$_REQUEST["po6"];
    $sb6  =$_REQUEST["sb6"];
	
	$nob7=$_REQUEST["nob7"];
	$sc7=$_REQUEST["sc7"];
    $yop7=$_REQUEST["yop7"];
    $ern7=$_REQUEST["ern7"];
    $mo7 =$_REQUEST["mo7"];
    $po7=$_REQUEST["po7"];
    $sb7  =$_REQUEST["sb7"];
   
    $con=mysqli_connect("localhost","root","","oas");
    
    
    if(!isset($con))
    {
        die("Database Not Found");
    }
    
    
    if(isset($_REQUEST["frmnext"]))
    {
        if($detid== "")
        $detid = DetCode();
        $sql  = "insert into t_user values(";
        $sql .= "'" . $detid . "',";
        $sql .= "'" . $_SESSION['user'] ."',";
       
        $sql .= "'" . $ufname . "',";
		$sql .= "'" . $umname . "',";
        $sql .= "'" . $ufocc . "',";
		
		$sql .= "'" . $inc . "',";
	    $sql .= "'" . $gen . "',";
		 
		$sql .= "'" . $cadr . "',";
        $sql .= "'" . $cpo . "',";
        $sql .= "'" . $ct . "',";
		$sql .= "'" . $cdi . "',";
		$sql .= "'" . $cpin . "',";
       
		
		$sql .= "'" . $padr . "',";
        $sql .= "'" . $ppo . "',";
        $sql .= "'" . $pt . "',";
        $sql .= "'" . $pdi . "',";
        $sql .= "'" . $ppin . "',";
       
		
        
        $sql .= "'" . $natn . "',";
        $sql .= "'" . $relg . "',";
		$sql .= "'" . $cat . "',";
		
        $sql .= "'" . $strm . "',";
        $sql .= "'" . $sem . "',";
		
        $sql .= "'" . $sub1 . "',";
	 	$sql .= "'" . $sub2 . "',";
		$sql .= "'" . $sub3 . "',";
		$sql .= "'" . $sub4 . "',";
		$sql .= "'" . $sub5 . "',";
		$sql .= "'" . $sub6 . "',";
		$sql .= "'" . $sub7 . "',";
		$sql .= "'" . $sub8 . "',";
		$sql .= "'" . $sub9 . "',";
		
        $sql .= "'" . $nob1 . "',";
        $sql .= "'" . $sc1 . "',";
        $sql .= "'" . $yop1 . "',";
        $sql .= "'" . $ern1 . "',";
		$sql .= "'" . $mo1 . "',";
        $sql .= "'" . $po1 . "',";
        $sql .= "'" . $sb1 . "',";
		
        $sql .= "'" . $nob2 . "',";
        $sql .= "'" . $sc2 . "',";
        $sql .= "'" . $yop2 . "',";
        $sql .= "'" . $ern2 . "',";
		$sql .= "'" . $mo2 . "',";
        $sql .= "'" . $po2 . "',";
        $sql .= "'" . $sb2 . "',";
		
    	$sql .= "'" . $nob3 . "',";
        $sql .= "'" . $sc3 . "',";
        $sql .= "'" . $yop3 . "',";
        $sql .= "'" . $ern3 . "',";
		$sql .= "'" . $mo3 . "',";
        $sql .= "'" . $po3 . "',";
        $sql .= "'" . $sb3 . "',";
		
	 	$sql .= "'" . $nob4 . "',";
        $sql .= "'" . $sc4 . "',";
        $sql .= "'" . $yop4 . "',";
        $sql .= "'" . $ern4 . "',";
		$sql .= "'" . $mo4 . "',";
        $sql .= "'" . $po4 . "',";
        $sql .= "'" . $sb4 . "',";
		
		$sql .= "'" . $nob5 . "',";
        $sql .= "'" . $sc5 . "',";
        $sql .= "'" . $yop5 . "',";
        $sql .= "'" . $ern5 . "',";
		$sql .= "'" . $mo5 . "',";
        $sql .= "'" . $po5 . "',";
        $sql .= "'" . $sb5 . "',";
		
		$sql .= "'" . $nob6 . "',";
        $sql .= "'" . $sc6 . "',";
        $sql .= "'" . $yop6 . "',";
        $sql .= "'" . $ern6 . "',";
		$sql .= "'" . $mo6 . "',";
        $sql .= "'" . $po6 . "',";
        $sql .= "'" . $sb6 . "',";
		
		$sql .= "'" . $nob7 . "',";
        $sql .= "'" . $sc7 . "',";
        $sql .= "'" . $yop7 . "',";
        $sql .= "'" . $ern7 . "',";
		$sql .= "'" . $mo7 . "',";
        $sql .= "'" . $po7 . "',";
        $sql .= "'" . $sb7 . "')";

      
        mysqli_query($con, $sql);
        
        $sql1  = "insert into t_status values(";
        $sql1 .= "'" . $_SESSION['user'] ."',";
        $sql1 .= "'Applied')";
        
         mysqli_query($con, $sql1);
         
        header('location:documents.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
    function DetCode()
{
      $con = mysqli_connect("localhost", "root", "", "oas");
      $rs  = mysqli_query($con,"select CONCAT('DE',LPAD(RIGHT(ifnull(max(s_detid),'DE00000000'),8) + 1,8,'0')) from t_user");
      return mysqli_fetch_array($rs)[0];
}

$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];


 if (!isset($_SESSION['user']))
{
        echo "<br><h2>You are not Logged On Please Login to Access this Page</div></h2>";
        echo "<a href=index.php><h3 align=center>Click Here to Login</h3></a>";
        exit();
}



?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
         <script language="javascript" type="text/javascript" src="jquery/jquery-1.10.2.js"></script>
        
       

        <script type="text/javascript">
        function validate()
		{
            $('#adform input[type="text"]').each(function() {
                if(this.required)
                {
                    if(this.value=="")
                        $(this).addClass("inpterr");
                    else
                        $(this).addClass("inpterrc");
                }
              
                if($(this).attr("VT")=="NM")
                {
                    if((!isAlpha(this.value)) && this.value!="")
                    {
                       alert("Only Aplhabets Are Allowed . . .");
                       $(this).focus();
                    }
                }

                        if($(this).attr("VT")=="PH")
                        {
                                if((!isPhone(this.value)) && this.value!="")
                                {
                                        alert("Check the phone number format . . .");
                                        $(this).focus();
                                }
                        }

                        if($(this).attr("VT")=="EML")
                        {
                                if(!IsEmail($(this).val()) && this.value!="")
                                {
                                        alert("Invalid Email . . . .");
                                        $(this).focus();
                                }
                        }	

                        if($(this).attr("VT")=="PIN")
                        {
                                if((!IsPin(this.value)) && this.value!="")
                                {
                                        alert("Invalid Pin Code . . . .");
                                        $(this).focus();
                                }
                        }

            });
        }
        
                function isAlpha(x)
                {
                    var re = new RegExp(/^[a-zA-Z\s]+$/);
                    return re.test(x);
                }
        
		function isPhone(x)
		{
			
			var ph = new RegExp (/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);  
			//if(!ph.length<10)
			return ph.test(x);
		}
                
                
		
		function IsEmail(x) 
		{
  			var em = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
  			return em.test(x);
		}
		
		function IsPin(x) 
		{
  			var pin = new RegExp (/^\d{6}$/);
			
  			return pin.test(x);
		}		
        </script>
        
        <style type="text/css">
            .inpterr
            {
                border: 1px solid red;
                background: #FFCECE;

            }
            
            .inpterrc
            {
                border: 1px solid black;
                background: white;
            }
        </style>
            
        
        
        
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="adform" action="admsnform.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/gdcg.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div>
            <div id="dmid" class="container-fluid">  
                
                 <div class="row">
                    <div class="col-sm-12">
                        <font style="color:white; margin-left:520px; font-family: Verdana; width:100%; font-size:30px;">
                        <b>ADMISSION FORM</b> </font>
                      </div>
                 </div>
                
             </div>
            
            <table class="frmtbl" style="background-image:url('./images/inbg.jpg');">
                
                <tr border="1" class="hdrow">
                    
                 </tr>       
                 
                  <tr>
                    <td> <font style="font-family: Verdana;"><h4>Welcome, <?php echo $stname;?></h4> </font> </td>
                    <td colspan="2"><input type="hidden" id="detid" name="detid"></td>
                  </tr>
              
                  <tr>
                    <td><font style="font-family: Verdana;"> Father's Name</font></td>
                    <td  colspan="3"> <input type="text" id="ufname" name="ufname" required VT="NM"> </td>
                   </tr>
                   
                  <tr>
                    <td> <br> <font style="font-family: Verdana;">Mother's Name</font> </td>
                    <td colspan="3"> <br> <input type="text" id="umname" name="umname" required VT="NM"></td>
                  </tr>
                
                  <tr>
                    <td> <br> <font style="font-family: Verdana;">Father's Occupation</font></td>
                    <td colspan="3"> <br> <input type="text" id="ufocc" name="ufocc" required VT="NM"> </td>
                  </tr>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Monthly Income </font>
                     <td  colspan="3"> <br> <input type="text" id="inc" name="inc" required ></td>
                </tr>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Gender </font>
                    <td> <br> <input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                     <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font></td>       
                    
                </tr>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Correspondent Address</font>
                    <td colspan="3"> <br> <input type="text" id="cadr" name="cadr" placeholder="Address" class="ad" required><br>
                          <input type="text" id="cpo" name="cpo" class="ad" placeholder="Post Office" style="margin-top: 4px;" required><br>
                          <input type="text" id="ct" name="ct" class="ad" placeholder="Tehsil" style="margin-top: 4px;" required><br>
                          <input type="text" id="cdi" name="cdi" class="ad" placeholder="District" style="margin-top: 4px;" required><br>
                          <input type="text" id="cpin" name="cpin" class="ad" placeholder="Pin" style="margin-top: 4px;" required><br>
   
                </td>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;">Permanent Address</font>
                    <td colspan="3"> <br> <input type="text" id="padr" name="padr" placeholder="Address" class="ad" required><br>
                          <input type="text" id="ppo" name="ppo" class="ad" placeholder="Post Office" style="margin-top: 4px;" required><br>
                          <input type="text" id="pt" name="pt" class="ad" placeholder="Tehsil" style="margin-top: 4px;" required><br>
                          <input type="text" id="pdi" name="pdi" class="ad" placeholder="District" style="margin-top: 4px;" required><br>
                          <input type="text" id="ppin" name="ppin" class="ad" placeholder="Pin" style="margin-top: 4px;" required><br>
        
                    </td>
                </tr>   
               
                <tr>
    
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Nationality</font>
                    <td> <br> <input type="text" id="natn" name="natn" required></td>
                    <td> <br> <font style="font-family: Verdana;"> Religion</font>
                    <td> <br> <input type="text" id="relg" name="relg" required></td>
                </tr>    
               
                <tr>
                	<td> <br> <font style="font-family: Verdana;"> Category</font>
                    <td colspan="4"> <br> <input type="radio" id="cat" name="cat" value="SC"><font style="font-family: Verdana;">
                        SC
                        <input type="radio" id="cat" name="cat" value="ST"><font style="font-family: Verdana;">ST</font>
                        <input type="radio" id="cat" name="cat" value="OBC"><font style="font-family: Verdana;">OBC</font>
                        <input type="radio" id="cat" name="cat" value="GEN"><font style="font-family: Verdana;">GEN</font></td>
                 </tr>
               
              <tr>
                    <td> <br> <font style="font-family: Verdana;">Choice Stream</font></td>
                    <td> <br> <select id="strm" name="strm">
                         <option>--------------------Select--------------------</option>
                         <option>COMPUTER SCIENCE </option>
                         <option>ARTS</option>
                         <option>MEDICAL</option>
                         <option>NON_MEDICAL</option>
                         <option>Commerce</option>
                         </select>
                     </td>
               </tr>
               <tr>
                     <td> <br> <font style="font-family: Verdana;">Select Semester</font></td>
                     <td> <br> <select id="sem" name="sem">
                         <option>--------------------Select--------------------</option>
                         <option>1st / 2nd Semester</option>
                         <option>3rd / 4th Semester</option>
                         <option>5th / 6th Semester</option>
                         </select>
                     </td>
                     
                </tr>
              
                <tr>
                     <td> <br> <font style="font-family: Verdana;">Subjects Offered</font></td>
                     <td  colspan="3"> <br>
                     	<input type="text" id="sub1" name="sub1" placeholder="1) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub2" name="sub2" placeholder="2) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub3" name="sub3" placeholder="3) Subject" style="margin-top: 4px;"><br>
                        
                     	<input type="text" id="sub4" name="sub4" placeholder="4) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub5" name="sub5" placeholder="5) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub6" name="sub6" placeholder="6) Subject" style="margin-top: 4px;"><br>
                        
                    	<input type="text" id="sub7" name="sub7" placeholder="7) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub8" name="sub8" placeholder="8) Subject" style="margin-top: 4px;">
                     	<input type="text" id="sub9" name="sub9" placeholder="9) Subject" style="margin-top: 4px;">
                     	
                      </td>
                     
                     
                </tr>
             
                
               <tr>
                   <td><font style="font-family: Verdana;">Academic Qualification</font></td>
                   <td colspan="3">
                       <table class="table table-hover">
                           <thead>
                               <tr>
                                  <th><font style="font-family: Verdana;font-size: small">Exam</font> <br><font style="font-family: Verdana; font-size: small">passed</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Name of</font> <br><font style="font-family: Verdana;font-size: small">Board/University</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">School/</font> <br><font style="font-family: Verdana;font-size: small">College</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Year of</font> <br><font style="font-family: Verdana;font-size: small"> Passing</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Exam</font><br><font style="font-family: Verdana;font-size: small">Roll NO</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Mark</font> <br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">% age</font> <br><font style="font-family: Verdana;font-size: small">Obtained</font></th>
                                    <th><font style="font-family: Verdana;font-size: small">Subject</font><br><font style="font-family: Verdana;font-size: small">Taken</font></th>
                              </tr>   
                           </thead>
                            <tbody>
                           <tr>
                               <td><?php echo "12th"; ?></td>
                               <td><input type="text" id="nob1" name="nob1" required></td>
                               <td><input type="text" id="sc1" name="sc1" class="actab" required ></td>
                               <td><input type="text" id="yop1" name="yop1" class="actab" required></td>
                               <td><input type="text" id="ern1" name="ern1" class="actab" required></td>
                               <td><input type="text" id="mo1" name="mo1" class="actab" required></td>
                               <td><input type="text" id="po1" name="po1" class="actab" required></td>
                               <td><input type="text" id="sb1" name="sb1" class="actab" required></td>
                           </tr>
                           
                          <tr>
                               <td><?php echo "1st Semester"; ?></td>
                               <td><input type="text" id="nob2" name="nob2" ></td>
                               <td><input type="text" id="sc2" name="sc2" class="actab" ></td>
                               <td><input type="text" id="yop2" name="yop2" class="actab" ></td>
                               <td><input type="text" id="ern2" name="ern2" class="actab" ></td>
                               <td><input type="text" id="mo2" name="mo2" class="actab" ></td>
                               <td><input type="text" id="po2" name="po2" class="actab" ></td>
                               <td><input type="text" id="sb2" name="sb2" class="actab" ></td>
                           </tr>

                           
                           <tr>
                               <td><?php echo "2st Semester"; ?></td>
                               <td><input type="text" id="nob3" name="nob3" ></td>
                               <td><input type="text" id="sc3" name="sc3" class="actab" ></td>
                               <td><input type="text" id="yop3" name="yop3" class="actab" ></td>
                               <td><input type="text" id="ern3" name="ern3" class="actab" ></td>
                               <td><input type="text" id="mo3" name="mo3" class="actab" ></td>
                               <td><input type="text" id="po3" name="po3" class="actab" ></td>
                               <td><input type="text" id="sb3" name="sb3" class="actab" ></td>
                           </tr>

                           
                           <tr>
                               <td><?php echo "3st Semester"; ?></td>
                               <td><input type="text" id="nob4" name="nob4" ></td>
                               <td><input type="text" id="sc4" name="sc4" class="actab" ></td>
                               <td><input type="text" id="yop4" name="yop4" class="actab" ></td>
                               <td><input type="text" id="ern4" name="ern4" class="actab" ></td>
                               <td><input type="text" id="mo4" name="mo4" class="actab" ></td>
                               <td><input type="text" id="po4" name="po4" class="actab" ></td>
                               <td><input type="text" id="sb4" name="sb4" class="actab" ></td>
                           </tr>

                           
                           <tr>
                               <td><?php echo "4st Semester"; ?></td>
                               <td><input type="text" id="nob5" name="nob5" ></td>
                               <td><input type="text" id="sc5" name="sc5" class="actab" ></td>
                               <td><input type="text" id="yop5" name="yop5" class="actab" ></td>
                               <td><input type="text" id="ern5" name="ern5" class="actab" ></td>
                               <td><input type="text" id="mo5" name="mo5" class="actab" ></td>
                               <td><input type="text" id="po5" name="po5" class="actab" ></td>
                               <td><input type="text" id="sb5" name="sb5" class="actab" ></td>
                           </tr>

                           
                           <tr>
                               <td><?php echo "5st Semester"; ?></td>
                               <td><input type="text" id="nob6" name="nob6" ></td>
                               <td><input type="text" id="sc6" name="sc6" class="actab" ></td>
                               <td><input type="text" id="yop6" name="yop6" class="actab" ></td>
                               <td><input type="text" id="ern6" name="ern6" class="actab" ></td>
                               <td><input type="text" id="mo6" name="mo6" class="actab" ></td>
                               <td><input type="text" id="po6" name="po6" class="actab" ></td>
                               <td><input type="text" id="sb6" name="sb6" class="actab" ></td>
                           </tr>

                           
                           <tr>
                               <td><?php echo "6st Semester"; ?></td>
                               <td><input type="text" id="nob7" name="nob7" ></td>
                               <td><input type="text" id="sc7" name="sc7" class="actab" ></td>
                               <td><input type="text" id="yop7" name="yop7" class="actab" ></td>
                               <td><input type="text" id="ern7" name="ern7" class="actab" ></td>
                               <td><input type="text" id="mo7" name="mo7" class="actab" ></td>
                               <td><input type="text" id="po7" name="po7" class="actab" ></td>
                               <td><input type="text" id="sb7" name="sb7" class="actab" 
                               ></td>
                           </tr>
                           
                            </tbody>
                       </table>
                       
                           <tr>
                                <td colspan="4">
                                   <center> <input type="submit" onClick="validate();" id="frmnext" name="frmnext" value="Next"></center>
                                </td>
                           </tr>
                       </table>
            <br>
                       
                            
            <br>
                       
                  </form>
            </body>
</html>
