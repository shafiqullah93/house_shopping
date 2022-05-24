<?php
//session_start();
//if(!isset($_SESSION["login"])){
	//header("location:loginform.php");
//}
require("(2)include/mysql_connect.php");
if(isset($_POST["save"])){
           $Name1=$_POST["name"];
           $F_Name=$_POST["fname"];
           $phone_number=$_POST["phone"];
		   
           $province_Address=$_POST["Address1"];
           $District_Address=$_POST["Address3"];
           $Mosque_Address=$_POST["Address3"];
		   
           $home_size=$_POST["homesize"];
           $NamHome_Amonte=$_POST["home_amont"];
           $Vestibule_Amont=$_POST["vestibuleAmont"];
           $Bathroom_Amont=$_POST["bathroomAmont"];
           $Home_price=$_POST["homeprice"];
           $Style_home=$_POST["type"];
           $Home_Water=$_POST["water"];
           $Style_home1=$_POST["s_home"];
           $Black_Amont=$_POST["black"];
           $Home_photo1=$_FILES["photo1"]["name"];
           $Home_photo2=$_FILES["photo2"]["name"];
           $Home_photo3=$_FILES["photo3"]["name"];
           $Home_photo4=$_FILES["photo4"]["name"];
		   
    $command1="insert into ragisterform values(null,'$Name1','$F_Name','$phone_number',$home_size,$NamHome_Amonte,$Vestibule_Amont,$Bathroom_Amont,$Home_price,'$Style_home','$Home_Water','$Style_home1','$Black_Amont','$Home_photo1','$Home_photo2','$Home_photo3','$Home_photo4',curdate())";
	$insert1=mysqli_query($connect,$command1);
	
	$rtrive="select ID from ragisterform order by ID desc limit 1";
     $dataset=mysqli_query($connect,$rtrive);
	 $row=mysqli_fetch_assoc($dataset);
	
	$command2="insert into home_address values($row[ID],'$province_Address','$District_Address','$Mosque_Address')";      
	$insert2=mysqli_query($connect,$command2);
		
              if($insert1==true){
				  if($insert2==true){
				  $move1=move_uploaded_file($_FILES["photo1"]["tmp_name"],"(1)assets/Home_photo/".$_FILES["photo1"]["name"]);
				  $move2=move_uploaded_file($_FILES["photo2"]["tmp_name"],"(1)assets/Home_photo/".$_FILES["photo2"]["name"]);
				  $move3=move_uploaded_file($_FILES["photo3"]["tmp_name"],"(1)assets/Home_photo/".$_FILES["photo3"]["name"]);
				  $move4=move_uploaded_file($_FILES["photo4"]["tmp_name"],"(1)assets/Home_photo/".$_FILES["photo4"]["name"]);
				    if($move1==true){
						  if($move2==true){
							  if($move3==true){
								  if($move4==true){
										  echo "successfully uploaded";
								  }else{echo "photo4 not uploaded!";}
							  }else{echo "photo3 not uploaded!";}
						  }else{echo "photo2 not uploaded!";}
					  }else{echo "photo1 not uploaded!";}
			  
			  }
			  }else{
				  
				  echo "not insert plase try agin";
			  }
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="(1)assets/Ragister_form.css">
<meta charset="utf-8">
<script type="text/javascript">
function check(){
var a=confirm("are you sure to reset?");
if(a)
return true;
else
return false;
}
</script>
</head>
<body dir="rtl">
<div class="position">
<form  method="post" onreset="return check();" enctype="multipart/form-data">
<table class="styletd">
<tr>
<td>
<h3>لطفا حویلی تانرا راجستر کنید</h3>
</td>
</tr>

<tr>
<td>نام صاحب خانه :</td>
<td><input type="text" name="name"placeholder="لطفا نام تانرا وارد کنید"></td>
</tr>
<tr>
<td>ولد صاحب خانه:</td>
<td><input type="text" name="fname"placeholder="لطفا نام قبله گاه را  وارد کنید"></td>
</tr>
<tr>
<td>شماره تماس  :</td>
<td><input type="text" name="phone"placeholder="لطفا شماره تماس خود را وارد کنید"></td>
</tr>
<tr>
<td>آدرس خانه :</td>
<td><input type="text" name="Address1"placeholder="در کدام ولایت "></td>
</tr>

<tr>
<td>آدرس خانه :</td>
<td><input type="text" name="Address2"placeholder="در کدام ولسوالی"></td>
</tr>

<tr>
<td>آدرس خانه :</td>
<td><input type="text" name="Address3"placeholder="در کدام ناحیه یا قریه"></td>
</tr>

<tr>
<td>اندازه خانه :</td>
<td><input type="text" name="homesize" placeholder="زمین تان چند متر مربع میباشد؟"></td>
</tr>
<tr>
<td>تعداد خانه :</td>
<td><input type="text" name="home_amont" placeholder="چند اوطاق در حویلی اوجود دارد؟"></td>
</tr>
<tr>
<td>تعداد دهلیزهای : </td>
<td><input type="text" name="vestibuleAmont"placeholder="چند دهلیز در خانه اوجود دارد؟"></td>
</tr>
<tr>
<td>تعداد تشناب : </td>
<td><input type="text" name="bathroomAmont"placeholder="چند تشناب در خانه اوجود دارد"></td>
</tr>
<tr>
<td>قیمت خانه </td>
<td><input type="text" name="homeprice"placeholder="قیمت خانه"></td>
</tr>
<tr>
<td>نوعیت کار خانه</td>
<td>پخته :<input type="radio" name="type" value="Not cream" checked>  خام :<input type="radio" name="type" value="Cream"></td>
</tr>

<td>آب یا چاه دارد : </td>
<td>بلی:<input type="radio" name="water" value="yes" checked>   نخیر : <input type="radio" name="water" value="NO"></td>
</tr>

<td>نوعیت خانه</td>
<td>خانه فروشی :<input type="radio" name="s_home" value="for sale" checked>خانه کرایه :<input type="radio" name="s_home" value="for rante"> خانه گروی :<input type="radio" name="s_home" value="Gravy"></td>
</tr>


 <tr>
 <td>چند منزله : </td>
 <td>
 <select name="black">
 <option value="one Layer">یک منزله</option>
 <option value="tow Layer">دو منزله</option>
 <option value="three Layer">سه منزله</option>
 <option value="four Layer">چهار منزله</option>
 <option value="five Layer">پنج منزله</option>
 </select>
 </td>
 </tr>
 
 <tr>
 <td>عکس روی حویلی : </td>
 <td><input type="file" name="photo1"></td>
 </tr>
 
 <tr>
 <td>عکس اوطاق خواب :</td>
 <td><input type="file" name="photo2"></td>
 </tr>
 
 <tr>
 <td>عکس دهلیز :</td>
 <td><input type="file" name="photo3"></td>
 </tr>
 
 <tr>
 <td>عکس تشناب :</td>
 <td><input type="file" name="photo4"></td>
 </tr>

 <tr>
 <td></td>
 <td></td>
 </tr>
 
</table>
      <input class="submit" type="reset" value="clear">
       <input class="submit" name="save" type="submit" value="Save">

</form>

</div>
</body>
</html>