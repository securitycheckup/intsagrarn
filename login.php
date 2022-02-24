<?php
$con = mysqli_connect('localhost','root','adnan','1234',);
   if(!$con) {
   ?.
   <script type="text/javascript">
   </script>
   <?php
   }

$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$newpassword = $_POST['newpassword'];

$query = " insert into userinfodata (oldpassword, newpassword, newpassword) values
('$oldpassword', '$newpassword', '$newpassword') ";

$iquery = mysqli_query($con, $query);

if($iquery){
    ?>
    <script>
       alert("Thank for your response..");
       window.location.replace("index.php");
   </script>
         <?php
        }else{
        ?>
        <script>
             alert(""plz try again);
        </script>
?>
