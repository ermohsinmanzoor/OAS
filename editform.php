<?php
    session_start();
    error_reporting(0);

	$unam = $_REQUEST["unam"];
	$dob = $_REQUEST["dob"];
	$eml = $_REQUEST["eml"];
	$mob = $_REQUEST["mob"];
	
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
    
    
    if(isset($_REQUEST["frmupdate"]))
    {   
	
	
$sql1="update t_user_data set s_name='$unam', s_dob='$dob', s_email='$eml', s_mob='$mob' 
where s_id='".$_SESSION['user']."'";
		mysqli_query($con, $sql1);


	$sql="update t_user set 	
f_name='$ufname', m_name='$umname', f_occ='$ufocc', s_inc='$inc', s_gen='$gen',
s_cadr='$cadr',	s_cpo='$cpo', s_ct='$ct', s_cdi='$cdi', s_cpin='$cpin',
s_padr='$padr', s_ppo='$ppo', s_pt='$pt', s_pdi='$pdi', s_ppin='$ppin',
s_natn='$natn', s_relg='$relg', s_catg='$cat', s_strm='$strm', s_sem='$sem',
s_sub1='$sub1', s_sub2='$sub2', s_sub3='$sub3', s_sub4='$sub4', s_sub5='$sub5', s_sub6='$sub6', s_sub7='$sub7', s_sub8='$sub8',	s_sub9='$sub9',
s_nob1='$nob1', s_sc1='$sc1', s_yop1='$yop1', s_ern1='$ern1', s_mo1='$mo1', s_po1='$po1', s_sb1='$sb1',
s_1nob2='$nob2', s_1sc2='$sc2', s_1yop2='$yop2', s_1ern2='$ern2', s_1mo2='$mo2', s_1po2='$po2', s_1sb2='$sb2',
s_2nob3='$nob3', s_2sc3='$sc3', s_2yop3='$yop3', s_2ern3='$ern3', s_2mo3='$mo3', s_2po3='$po3', s_2sb3='$sb3',
s_3nob4='$nob4', s_3sc4='$sc4',	s_3yop4='$yop4', s_3ern4='$ern4', s_3mo4='$mo4', s_3po4='$po4', s_3sb4='$sb4',
s_4nob5='$nob5', s_4sc5='$sc5', s_4yop5='$yop5', s_4ern5='$ern5', s_4mo5='$mo5', s_4po5='$po5', s_4sb5='$sb5',
s_5nob6='$nob6', s_5sc6='$sc6', s_5yop6='$yop6', s_5ern6='$ern6', s_5mo6='$mo6', s_5po6='$po6', s_5sb6='$sb6',
s_6nob7='$nob7', s_6sc7='$sc7', s_6yop7='$yop7', s_6ern7='$ern7', s_6mo7='$mo7', s_6po7='$po7', s_6sb7='$sb7'
where s_id='".$_SESSION['user']."'";
mysqli_query($con, $sql);
	    
        header('location:homepageuser.php');
        echo "<script type='text/javascript'>alert('Details Uploaded !!');</script>";
        
        
    }
    
    
$q=mysqli_query($con,"select s_name, s_dob , s_email, s_mob from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$stdob= $n['s_dob'];
$stemail= $n['s_email'];
$stmob= $n['s_mob'];


?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        
        
    </head>
     <body style="background-image:url('./images/inbg.jpg');">
        <form id="edform" action="editform.php" method="post">
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
                       
                       
            <table class="frmtbl">
                <?php
            
                    $result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$_SESSION['user']."'");

                            while($row = mysqli_fetch_array($result))
                              {
                        
                ?>
                <tr border="1" class="hdrow">
                    
                 </tr>       
                 
                  <tr>
                      <td> <font style="font-family: Verdana;">Name </font> </td>
                    <td colspan="2"> <input type="text" id="unam" name="unam" value="<?php echo $stname;?>">
                  </tr>
                  
                  <tr>
                      <td> <br> <font style="font-family: Verdana;">Date of Birth  </font> </td>
                    <td colspan="2"> <br> <input type="text" id="dob" name="dob" value="<?php echo $stdob;?>"></td>
                  </tr>
                  
                  <tr>
                      <td> <br> <font style="font-family: Verdana;">Email </font> </td>
                    <td colspan="2"> <br> <input type="text" id="eml" name="eml" value="<?php echo $stemail;?>"></td>
                  </tr>
                  
                  <tr>
                      <td> <br> <font style="font-family: Verdana;">Mobile No </font> </td>
                    <td colspan="2"> <br> <input type="text" id="mob" name="mob" value="<?php echo $stmob;?>"></td>
                  </tr>
                
                  <tr>
                    <td> <br> <font style="font-family: Verdana;"> Father's Name</font></td>
                    <td colspan="3"> <br>  <input type="text" id="ufname" name="ufname" value="<?php echo $row[2]  ?>" > </td>
                   </tr>
                   
                 <tr>
                    <td> <br>  <font style="font-family: Verdana;">Mother's Name</font> </td>
                    <td colspan="3">  <br> <input type="text" id="umname" name="umname" value="<?php echo $row[3] ?>"></td>
                </tr>
                
                  <tr>
                    <td> <br>  <font style="font-family: Verdana;">Father's Occupation</font></td>
                    <td>  <br> <input type="text" id="ufocc" name="ufocc" value="<?php echo $row[4] ?>"> </td>
                  </tr>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Monthly Income  </font>
                     <td  colspan="3"> <br> <input type="text" id="inc" name="inc" value="<?php echo $row[5] ?>"></td>
                </tr>
                
                <tr>
                    <td>  <br> <font style="font-family: Verdana;"> Gender </font>
                    <td> <br> <input type="radio" id="gen" name="gen" value="Male"><font style="font-family: Verdana;">Male</font>
                     <input type="radio" id="gen" name="gen" value="Female"><font style="font-family: Verdana;">Female </font></td>       
                    
                </tr>
                
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Correspondent Address</font>
                    <td colspan="3"> <br> <input type="text" id="cadr" name="cadr" value="<?php echo $row[7] ?>" ><br>
                          <input type="text" id="cpo" name="cpo" value="<?php echo $row[8] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="ct" name="ct" value="<?php echo $row[9] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="cdi" name="cdi" value="<?php echo $row[10] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="cpin" name="cpin" value="<?php echo $row[11] ?>" style="margin-top: 4px;"><br>
                </td>
                
                <tr>
                    <td>  <br> <font style="font-family: Verdana;">Permanent Address</font>
                    <td colspan="3"> <br> <input type="text" id="padr" name="padr" value="<?php echo $row[12] ?>" ><br>
                          <input type="text" id="ppo" name="ppo" value="<?php echo $row[13] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="pt" name="pt" value="<?php echo $row[14] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="pdi" name="pdi" value="<?php echo $row[15] ?>" style="margin-top: 4px;"><br>
                          <input type="text" id="ppin" name="ppin" value="<?php echo $row[16] ?>" style="margin-top: 4px;"><br>
                    </td>
                </tr>   
               
                <tr>
                    <td> <br> <font style="font-family: Verdana;"> Nationality</font>
                    <td> <br> <input type="text" id="natn" name="natn" value="<?php echo $row[17] ?>"></td>
                    <td> <br> <font style="font-family: Verdana;"> Religion</font>
                    <td> <br> <input type="text" id="relg" name="relg" value="<?php echo $row[18] ?>"></td>
                </tr>    
               
                <tr>
                	 <td>  <br> <font style="font-family: Verdana;">Category</font>
                    <td colspan="4"> <br> <input type="radio" id="cat" name="cat" value="SC"><font style="font-family: Verdana;">
                        SC
                        <input type="radio" id="cat" name="cat" value="ST"><font style="font-family: Verdana;">ST</font>
                        <input type="radio" id="cat" name="cat" value="OBC"><font style="font-family: Verdana;">OBC</font>
                        <input type="radio" id="cat" name="cat" value="GEN"><font style="font-family: Verdana;">GEN</font></td>
                 </tr>
                  
                 
                 <tr>
                    <td> <br> <font style="font-family: Verdana;"> Choice Stream </font></td>
                    <td> <br> <select id="strm" name="strm" >
                         <option><?php echo $row[20] ?></option>
                         <option>COMPUTER SCIENCE </option>
                         <option>ARTS</option>
                         <option>MEDICAL</option>
                         <option>NON_MEDICAL</option>
                         <option>Commerce</option>
                        </select>
                 
               
               <tr>
                     <td> <br> <font style="font-family: Verdana;">Select Semester</font></td>
                     <td> <br> <select id="sem" name="sem">
                         <option><?php echo $row[21] ?></option>
                         <option>1st / 2nd Semester</option>
                         <option>3rd / 4th Semester</option>
                         <option>5th / 6th Semester</option>
                         </select>
                     </td>
                     
                </tr>
              
              
              <tr>
                     <td> <br> <font style="font-family: Verdana;">Subjects Offered</font></td>
                     <td  colspan="3"> <br>
                     	<input type="text" id="sub1" name="sub1" placeholder="1) Subject" value="<?php echo $row[22] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub2" name="sub2" placeholder="2) Subject" value="<?php echo $row[23] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub3" name="sub3" placeholder="3) Subject" value="<?php echo $row[24] ?>" style="margin-top: 4px;"><br>
                        
                     	<input type="text" id="sub4" name="sub4" placeholder="4) Subject" value="<?php echo $row[25] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub5" name="sub5" placeholder="5) Subject" value="<?php echo $row[26] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub6" name="sub6" placeholder="6) Subject" value="<?php echo $row[27] ?>"style="margin-top: 4px;"><br>
                        
                    	<input type="text" id="sub7" name="sub7" placeholder="7) Subject" value="<?php echo $row[28] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub8" name="sub8" placeholder="8) Subject" value="<?php echo $row[29] ?>" style="margin-top: 4px;">
                     	<input type="text" id="sub9" name="sub9" placeholder="9) Subject" value="<?php echo $row[30] ?>" style="margin-top: 4px;">
                     	
               </td>
                 
               <tr>
                   <td> <br> <font style="font-family: Verdana;">Academic Qualification</font></td>
                   <td colspan="3"> <br> 
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
                               <td><input type="text" id="nob1" name="nob1" value="<?php echo $row[31] ?>"></td>
                               <td><input type="text" id="sc1" name="sc1" class="actab" value="<?php echo $row[32] ?>"></td>
                               <td><input type="text" id="yop1" name="yop1" class="actab" value="<?php echo $row[33] ?>"></td>
                               <td><input type="text" id="ern1" name="ern1" class="actab" value="<?php echo $row[34] ?>"></td>
                               <td><input type="text" id="mo1" name="mo1" class="actab" value="<?php echo $row[35] ?>"></td>
                               <td><input type="text" id="po1" name="po1" class="actab" value="<?php echo $row[36] ?>"></td>
                               <td><input type="text" id="sb1" name="sb1" class="actab" value="<?php echo $row[37] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "1st Semester"; ?></td>
                               <td><input type="text" id="nob2" name="nob2" value="<?php echo $row[38] ?>"></td>
                               <td><input type="text" id="sc2" name="sc2" class="actab" value="<?php echo $row[39] ?>"></td>
                               <td><input type="text" id="yop2" name="yop2" class="actab" value="<?php echo $row[40] ?>"></td>
                               <td><input type="text" id="ern2" name="ern2" class="actab" value="<?php echo $row[41] ?>"></td>
                               <td><input type="text" id="mo2" name="mo2" class="actab" value="<?php echo $row[42] ?>"></td>
                               <td><input type="text" id="po2" name="po2" class="actab" value="<?php echo $row[43] ?>"></td>
                               <td><input type="text" id="sb2" name="sb2" class="actab" value="<?php echo $row[44] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "2nd Semester"; ?></td>
                               <td><input type="text" id="nob3" name="nob3" value="<?php echo $row[45] ?>"></td>
                               <td><input type="text" id="sc3" name="sc3" class="actab" value="<?php echo $row[46] ?>"></td>
                               <td><input type="text" id="yop3" name="yop3" class="actab" value="<?php echo $row[47] ?>"></td>
                               <td><input type="text" id="ern3" name="ern3" class="actab" value="<?php echo $row[48] ?>"></td>
                               <td><input type="text" id="mo3" name="mo3" class="actab" value="<?php echo $row[49] ?>"></td>
                               <td><input type="text" id="po3" name="po3" class="actab" value="<?php echo $row[50] ?>"></td>
                               <td><input type="text" id="sb3" name="sb3" class="actab" value="<?php echo $row[51] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "3rd Semester"; ?></td>
                               <td><input type="text" id="nob4" name="nob4" value="<?php echo $row[52] ?>"></td>
                               <td><input type="text" id="sc4" name="sc4" class="actab" value="<?php echo $row[53] ?>"></td>
                               <td><input type="text" id="yop4" name="yop4" class="actab" value="<?php echo $row[54] ?>"></td>
                               <td><input type="text" id="ern4" name="ern4" class="actab" value="<?php echo $row[55] ?>"></td>
                               <td><input type="text" id="mo4" name="mo4" class="actab" value="<?php echo $row[56] ?>"></td>
                               <td><input type="text" id="po4" name="po4" class="actab" value="<?php echo $row[57] ?>"></td>
                               <td><input type="text" id="sb4" name="sb4" class="actab" value="<?php echo $row[58] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "4th Semester"; ?></td>
                               <td><input type="text" id="nob5" name="nob5" value="<?php echo $row[59] ?>"></td>
                               <td><input type="text" id="sc5" name="sc5" class="actab" value="<?php echo $row[60] ?>"></td>
                               <td><input type="text" id="yop5" name="yop5" class="actab" value="<?php echo $row[61] ?>"></td>
                               <td><input type="text" id="ern5" name="ern5" class="actab" value="<?php echo $row[62] ?>"></td>
                               <td><input type="text" id="mo5" name="mo5" class="actab" value="<?php echo $row[63] ?>"></td>
                               <td><input type="text" id="po5" name="po5" class="actab" value="<?php echo $row[64] ?>"></td>
                               <td><input type="text" id="sb5" name="sb5" class="actab" value="<?php echo $row[65] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "5th Semester"; ?></td>
                               <td><input type="text" id="nob6" name="nob6" value="<?php echo $row[66] ?>"></td>
                               <td><input type="text" id="sc6" name="sc6" class="actab" value="<?php echo $row[67] ?>"></td>
                               <td><input type="text" id="yop6" name="yop6" class="actab" value="<?php echo $row[68] ?>"></td>
                               <td><input type="text" id="ern6" name="ern6" class="actab" value="<?php echo $row[69] ?>"></td>
                               <td><input type="text" id="mo6" name="mo6" class="actab" value="<?php echo $row[70] ?>"></td>
                               <td><input type="text" id="po6" name="po6" class="actab" value="<?php echo $row[71] ?>"></td>
                               <td><input type="text" id="sb6" name="sb6" class="actab" value="<?php echo $row[72] ?>"></td>
                           </tr>
                           
                           <tr>
                               <td><?php echo "6th Semester"; ?></td>
                               <td><input type="text" id="nob7" name="nob7" value="<?php echo $row[73] ?>"></td>
                               <td><input type="text" id="sc7" name="sc7" class="actab" value="<?php echo $row[74] ?>"></td>
                               <td><input type="text" id="yop7" name="yop7" class="actab" value="<?php echo $row[75] ?>"></td>
                               <td><input type="text" id="ern7" name="ern7" class="actab" value="<?php echo $row[76] ?>"></td>
                               <td><input type="text" id="mo7" name="mo7" class="actab" value="<?php echo $row[77] ?>"></td>
                               <td><input type="text" id="po7" name="po7" class="actab" value="<?php echo $row[78] ?>"></td>
                               <td><input type="text" id="sb7" name="sb7" class="actab" value="<?php echo $row[79] ?>"></td>
                           </tr>
                 
                 
                           
                           <tr>
                                <td colspan="4">
                                   <center> <input type="submit" id="frmupdate" name="frmupdate" value="Update" ></center>
                                </td>
                           </tr>
                           
                           <?php
                           
                              }
                           ?>
                       </table>
            <br>
                       
                            
            <br>
                       
                  </form>
            </body>
</html>
