<?php
session_start();
?>

<h1 align=center>Recover password Here</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
  <br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input ng-model="email" id="email" type="text" class="form-control" name="email" placeholder="email" required>
  </div>

<br>

<br>
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>

<?php
if(isset($_POST['btnsub']))
{
$email=$_POST['email'];

include("connection.php");
$q="select * from rprofile where email='$email'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
 $sq=$a["sque"];
 ?>
<form method=post>
<input type=hidden name=eml class=form-control value="<?php echo $email; ?>"><br>
<input type=text class=form-control name=squ value="<?php echo $sq; ?>" readonly><br>
<input type=text class=form-control name=ans value=""><br>
<input type=submit name=btns value="Submit">
</form>
<?php


}
mysqli_close($cn);
}
?>

<?php
if(isset($_POST["btns"]))
{

  $email=$_POST["eml"];
  $sq=$_POST["squ"];
$an=$_POST["ans"];
include("connection.php");
$q="select * from rprofile where email='$email' and sque='$sq' and sans='$an'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
 $answer=$a["pass"];
echo "<h2><font color=green><b>Your password is $answer</b></font></h2>";
}
}
?>

</div>
