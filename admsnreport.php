<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","oas");
$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$_SESSION['user']."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
    <body>
        <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;"><br><br><img src="./images/Logo-T.jpg" width="81%"> </td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">
                     <br><br>
                    GOVERMNEMT DEGREE COLLEGE , GANDERBAL - 191131, KASHMIR</font></center>
                
                <center><font style="font-family:Verdana; font-size:18px;">
                     Phone : (0194)2416854, Fax : (0000)01234567
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
                    ADMISSIONS (2019-20)</font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='studentpic/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$_SESSION['user']."'");
                        
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                        echo"<div>";
                      }
                      
                    
                      
                      
                        $resdata = mysqli_query($con,"SELECT * FROM t_user_data WHERE s_id='".$_SESSION['user']."'");
                    
                    while($rowdata = mysqli_fetch_array($resdata))
                      {
						  
					  
                    
                   ?>
                        </td>
                 </tr>       
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name  </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>
                 
                 
                <tr>
                    <td> <font style="font-family: Verdana;">ID  </font> </td>
                    <td colspan="3"> <?php echo $id ?> </td>
                </tr>
                  
                
                <tr>
                    <td> <font style="font-family: Verdana;">Date of Birth  </font> </td>
                    <td colspan="3"> <?php echo $rowdata[2] ?> </td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Email  </font> </td>
                      <td colspan="3"> <?php echo $rowdata[4]  ?> </td>
                </tr>
                                  
                
                  <tr>
                    <td > <font style="font-family: Verdana;"> Mobile No.</font>  </td>
                   <td colspan="3"> <?php echo $rowdata[5] ?></td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Father's Name</font></td>
                    <td  colspan="3"><?php echo $row[2] ?> </td>
                   </tr>
                   
                 <tr>
                    <td> <font style="font-family: Verdana;">Mother's Name</font> </td>
                    <td colspan="3"> <?php echo $row[3] ?></td>
                </tr>
                
                  <tr>
                    <td> <font style="font-family: Verdana;">Father's Occupation</font></td>
                    <td colspan="3"><?php echo $row[4] ?></td>
                  </tr>
               
                <tr>
                    <td><font style="font-family: Verdana;"> Monthly Income </font>
                     <td  colspan="3"><?php echo $row[5] ?></td>
                </tr>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Gender</font>
                    <td colspan="3"><?php echo $row[6] ?></td>       
                    
                </tr>
                
                <tr>
                    <td><font style="font-family: Verdana;"> Correspondent Address</font>
                    <td colspan="3"><?php echo 'Address :'. $row[7] ?><br>
                          <?php echo 'Post Office :'. $row[8] ?><br>
                          <?php echo 'Tehsil :'. $row[9] ?><br>
                          <?php echo 'District :'. $row[10] ?><br>
                          <?php echo 'Pin :'. $row[11] ?><br>
                          
                </td>
                
                <tr>
                    <td> <font style="font-family: Verdana;">Permanent Address</font>
                    <td colspan="3"><?php echo 'Address :'. $row[12] ?><br>
                          <?php echo 'Post Office :'. $row[13] ?><br>
                          <?php echo 'Tehsil :'. $row[14] ?><br>
                          <?php echo 'District :'. $row[15] ?><br>
                          <?php echo 'Pin :'. $row[16] ?><br>
                          
                </td>
                </tr>                 
                <tr>
                    <td><font style="font-family: Verdana;"> Nationality</font>
                    <td> <?php echo $row[17] ?></td>
                    <td><font style="font-family: Verdana;"> Religion</font>
                    <td> <?php echo $row[18] ?></td>
                </tr>    
               
                <tr>
                    <td> <font style="font-family: Verdana;">Category</font>
                    <td colspan="3">  <?php echo $row[19] ?>
                </td>
                </tr> 
                  
               <tr>
                    <td><font style="font-family: Verdana;">Choice of Stream</font></td>
                    <td colspan="3"><?php echo $row[20] ?>
                     </td>
               </tr>
               <tr>
                     <td><font style="font-family: Verdana;">Selected Semester</font></td>
                     <td colspan="3"><?php echo $row[21] ?></td>
                    
                </tr>
                
                  <tr>                       
                     </td> <td><font style="font-family: Verdana;">Subjects Offered</font></td>
                   <td colspan="3">
                       <table class="table table-hover">
                           <thead>
                              <tr>
                               
                               <td>1.<?php echo $row[22] ?></td>
                               <td>2.<?php echo $row[23] ?></td>
                               <td>3.<?php echo $row[24] ?></td>
                               <td>4.<?php echo $row[25] ?></td>
                               <td>5.<?php echo $row[26] ?></td>
                              </tr>   
                           </thead>
                            <tbody>
                           <tr>
                               
                               <td>6.<?php echo $row[27] ?></td>
                               <td>7.<?php echo $row[28] ?></td>
                               <td>8.<?php echo $row[29] ?></td>
                               <td>9.<?php echo $row[30] ?></td>
                               <td><?php  ?></td>
                               
                           </tr>
                            </tbody>
                       </table>
                     
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
                               <td><?php echo $row[31] ?></td>
                               <td><?php echo $row[32] ?></td>
                               <td><?php echo $row[33] ?></td>
                               <td><?php echo $row[34] ?></td>
                               <td><?php echo $row[35] ?></td>
                               <td><?php echo $row[36] ?></td>
                               <td><?php echo $row[37] ?></td>
                               
                           </tr>
                           
                             <tr>
                               <td><?php echo "1st Semester"; ?></td>
                               <td><?php echo $row[38] ?></td>
                               <td><?php echo $row[39] ?></td>
                               <td><?php echo $row[40] ?></td>
                               <td><?php echo $row[41] ?></td>
                               <td><?php echo $row[42] ?></td>
                               <td><?php echo $row[43] ?></td>
                               <td><?php echo $row[44] ?></td>
                               
                           </tr>
                           
                             <tr>
                               <td><?php echo "2nd Semester"; ?></td>
                               <td><?php echo $row[45] ?></td>
                               <td><?php echo $row[46] ?></td>
                               <td><?php echo $row[47] ?></td>
                               <td><?php echo $row[48] ?></td>
                               <td><?php echo $row[49] ?></td>
                               <td><?php echo $row[50] ?></td>
                               <td><?php echo $row[51] ?></td>
                               
                           </tr>
                           
                             <tr>
                               <td><?php echo "3rd Semester"; ?></td>
                               <td><?php echo $row[52] ?></td>
                               <td><?php echo $row[53] ?></td>
                               <td><?php echo $row[54] ?></td>
                               <td><?php echo $row[55] ?></td>
                               <td><?php echo $row[56] ?></td>
                               <td><?php echo $row[57] ?></td>
                               <td><?php echo $row[58] ?></td>
                               
                           </tr>
                             <tr>
                               <td><?php echo "4th Semester"; ?></td>
                               <td><?php echo $row[59] ?></td>
                               <td><?php echo $row[60] ?></td>
                               <td><?php echo $row[61] ?></td>
                               <td><?php echo $row[62] ?></td>
                               <td><?php echo $row[63] ?></td>
                               <td><?php echo $row[64] ?></td>
                               <td><?php echo $row[65] ?></td>
                               
                           </tr>
                             <tr>
                               <td><?php echo "5th Semester"; ?></td>
                               <td><?php echo $row[66] ?></td>
                               <td><?php echo $row[67] ?></td>
                               <td><?php echo $row[68] ?></td>
                               <td><?php echo $row[69] ?></td>
                               <td><?php echo $row[70] ?></td>
                               <td><?php echo $row[71] ?></td>
                               <td><?php echo $row[72] ?></td>
                               
                           </tr>
                             <tr>
                               <td><?php echo "6th Semester"; ?></td>
                               <td><?php echo $row[73] ?></td>
                               <td><?php echo $row[74] ?></td>
                               <td><?php echo $row[75] ?></td>
                               <td><?php echo $row[76] ?></td>
                               <td><?php echo $row[77] ?></td>
                               <td><?php echo $row[78] ?></td>
                               <td><?php echo $row[79] ?></td>
                               
                           </tr>
                           
                            </tbody>
                       </table>
                       
                           <tr>
                               <td colspan="3"><font style="font-family: Verdana;"> I solemnly undertake to obey all the rules & regulations of the college and also the instruction issueed from time to time by the principal.<br>
I also know that any breach of rule may render me liable to displinary action.<br>
I undertake to attend the maximum number of lictures(Theory & Practial)required under statutory rules of the University to sit in the University Examination.</font></td>
                                <td colspan="2">
                                        <?php            
                                         $picfile_path1 ='studentproof/';
                                         $result2 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$_SESSION['user']."'");
                                         while($row2 = mysqli_fetch_array($result2))
                                        {                  
                                          $picsrc1=$picfile_path1.$row2['s_sigpic'];
                                          echo "<img src='$picsrc1.' class='img-thumbnail' width='180px' style='height:80px;'>";
                                          echo"<div>";
                                        }    
                                        ?>
                                        <center><font style="font-family: Verdana;">Signature</font></center>
                                    </td>
                           </tr>
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }}
        ?>
             <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onClick="printpage();">
             <a href="logout.php">Login Again</a></center>
    </body>
    </html>