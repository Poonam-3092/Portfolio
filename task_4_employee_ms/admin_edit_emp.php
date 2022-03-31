<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "ems");
    $query = "update employee set name='$_POST[name]', age='$_POST[age]', email='$_POST[email]', gender='$_POST[gender]', dob='$_POST[dob]',
     password='$_POST[password]', mobile='$_POST[mobile]' where emp_id = $_POST[emp_id] ";
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href = "admin_dashboard.php";
</script>