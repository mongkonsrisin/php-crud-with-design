 <?php $id = $_GET['id'];?>
 <html>
 <head>
 <title>PHP Exam</title>
 <meta charset="utf-8">
 </head>
 <body>
 <table width="1500" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr bgcolor="gray" height="256">
 <td colspan="2"></td>
</tr>
  <tr>
 <td bgcolor="lightgreen" width="256" align="center" valign="top">
  <!--Start Sidebar-->
  <br><br>
   <h2><center>ปุ่ม</center></h2>

  <button style="width:160px;height:32px" onclick="window.location.href='exam.php'">หน้าหลัก</button>
   <br><br>
    <button style="width:160px;height:32px">BBB</button>
  <br><br>
    <button style="width:160px;height:32px">CCC</button>
 <!--End Sidebar-->

 
 </td>
 <td bgcolor="lightyellow" valign="top">
 <!--Start Content-->
 <br><br>
 <h1><center>แก้ไข</center></h1>
 <table width="90%" border="1" cellspacing="0" cellpadding="5" align="center">
 <tr align="center" bgcolor="gray">
 <th>ไอดี</th>
  <th>ชื่อ</th>
 <th>นามสกุล</th>
 <th>อีเมล</th>
 <th>เบอร์</th>
 <th>วันเกิด</th>
  <th width="90">เมนู</th>
</tr>

<?php 
$con = mysqli_connect('localhost','root','','exam');
$sql = "SELECT * FROM profile WHERE id = '$id' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
?>

 <tr align="center">
 <form action="" method="post">
 <?php 
 if(isset($_POST['edit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$birthday = $_POST['birthday'];
	$sql = "UPDATE profile SET fname='$fname',lname='$lname',email='$email',tel='$tel',birthday='$birthday' WHERE id='$id'";
	$result = mysqli_query($con,$sql);
	header('location:exam.php');
 }

 ?>
 <td><?php echo $row['id']?></td>
  <td><input type="text" name="fname" value="<?php echo $row['fname']?>"></td>
 <td><input type="text" name="lname" value="<?php echo $row['lname']?>"></td>
 <td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
 <td><input type="text" name="tel" value="<?php echo $row['tel']?>"></td>
 <td><input type="date" name="birthday" value="<?php echo $row['birthday']?>"></td>
   <td><button type="submit" name="edit">แก้ไข</button></td>
</form>
</tr>
 </table>
 
 
  <!--End Content-->

 </td>
 </tr>
  <tr bgcolor="skyblue" height="64">
 <td colspan="2">
   <!--Start Footer-->
   <center>58122202001</center>
  <!--End Footer-->

</td>
</tr>
 </table>
 </body>
 </html>