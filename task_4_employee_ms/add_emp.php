<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "ems");
    $query = "insert into employee values('', $_POST[emp_id] ,'$_POST[name]', $_POST[age],  '$_POST[gender]','$_POST[dob]', 
     $_POST[mobile],'$_POST[email]' ,'$_POST[password]', $_POST[salary])";

    // echo $query;
    $query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
    alert("Details Added Successfully");
    window.location.href = "admin_dashboard.php";
</script>