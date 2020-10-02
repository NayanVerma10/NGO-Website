<?php 

if (isset($_POST['form_submitted']))
{echo"<h2> Entered Details</h2>";
echo "Your name is " .$_POST['first']; 
echo"   Gender   ".$_POST['gender'] ;
echo"   date of birth  ".$_POST['dob'] ;
echo"  lives in  " .$_POST['add']  ;
echo"    from ".$_POST['vehicle'];
echo"  studying in   ".$_POST['gy'] ."  department.  ";}
?>
