<script type="text/javascript">
    if(confirm("Are you sure you want to delete?")){
        document.write("<?php
                 $connection = mysqli_connect("localhost","root","");
                 $db = mysqli_select_db($connection, "ems");
                 $query = "delete from employee where emp_id = $_POST[emp_id]";
             
                 // echo $query;
                 $query_run = mysqli_query($connection, $query);
             ?>");
    }
    else{
        window.location.href ="admin_dashboard.php";
    }
    window.location.href ="admin_dashboard.php";
</script>
<!-- 
<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection, "ems");
    $query = "";

    echo $query;
    $query_run = mysqli_query($connection, $query);
?> -->
<!-- <script type="text/javascript">
    alert("Details Added Successfully");
    window.location.href = "admin_dashboard.php";
</script> -->