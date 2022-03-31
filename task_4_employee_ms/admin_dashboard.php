<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
   
  </head>
  <body class="dashboard">
  <?php
      session_start();
      $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, "ems");
        
      ?>

      <div class="container-fluid d-flex justify-content-between nav">
          <div class="logo">
              Employee Management System
          </div>
          <div class="navbar">
              <ul class="d-flex">
                  <li>Email: <?php echo $_SESSION['email']; ?> &nbsp;</li>
                  <li>Name: <?php echo $_SESSION['name']; ?> &nbsp;</li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
          </div>
      </div>
   
    <span id="top_span"><marquee behavior="" direction="">Note: Our Organization enables people to collaborate easily , even if remote</marquee> </span>
    <div id="left" class="left_side"><br><br><br>
        <form action="" method="post">
            <table>
                <!-- <tr>
                    <td>
                        <input type="submit" name="Employee" value="Search Employee">
                    </td>
                </tr> -->
                <tr>
                    <td>
                        
                        <button type="submit" name="search_emp" value="Search Employee" class="btn btn-outline-secondary btn-lg px-5 button">Search Employee</button>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="edit_emp" value="Edit Employee" class="btn btn-outline-secondary btn-lg px-5 button">Edit Employee</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="add_new_emp" value="Add New " class="btn btn-outline-secondary btn-lg px-5 button">Add New Emp</button>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                    <button type="submit" name="delete_emp" value="Delete Employee" class="btn btn-outline-secondary btn-lg px-5 button">Delete Employee</button>
                    
                    </td>
                </tr>
                <tr>
                    <td>
                    <button type="submit" name="show_admins" value="Show Admins" class="btn btn-outline-secondary btn-lg px-5 button">Show Admins</button>
                    
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="right"><br><br>

    <?php
               ?>
    <div id="demo">
        <?php
            if(isset($_POST['search_emp'])){
                ?>
                <div class="d-flex justify-content-center info">
                    <form action="" method="post">
                        <span>Enter Employee ID:</span>
                        <input type="text" name="emp_id" class="search my-1">
                        <button type="submit" name="search_by_id_for_search"  class="btn btn-outline-secondary btn-lg px-4 button">Search</button>
                    
                    </form>
                </div>
                <?php
            }
            if(isset($_POST['search_by_id_for_search'])){
                $query = "select * from employee where emp_id = '$_POST[emp_id]'";
                $query_run = mysqli_query($connection, $query);
        
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="d-flex justify-content-center">
                        <table>
                            <tr>
                                <td><span>Emoloyee Id:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['emp_id'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Name:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['name'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Age:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['age'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Gender:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['gender'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Date of Birth:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['dob'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Emoloyee Id:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['emp_id'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Mobile No:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['mobile'];?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td><span>email:&nbsp;</span></td>
                                <td>
                                    <textarea rows="1" cols="40" type="text" value="<?php echo $row['email'];?>" disabled><?php echo $row['email'];?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Password:&nbsp;</span></td>
                                <td>
                                    <input type="text" value="<?php echo $row['password'];?>" disabled>
                                </td>
                            </tr>
                        </table>
                        </div>
                    <?php
                }
            }
         ?>
        <?php
            if(isset($_POST['edit_emp'])){
                ?>
                <div class="d-flex justify-content-center info">
                    <form action="" method="post">
                        <span>Enter Employee ID:</span>
                        <input type="text" name="emp_id" class="search my-1">
                        <button type="submit" name="search_by_id_for_edit"  class="btn btn-outline-secondary btn-lg px-4 button">edit</button>
                    
                    </form>
                </div>
                
                <?php
            }
            if(isset($_POST['search_by_id_for_edit'])){
                $query = "select * from employee where emp_id = '$_POST[emp_id]'";
                $query_run = mysqli_query($connection, $query);
        
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="d-flex justify-content-center">
                    <form action="admin_edit_emp.php" method="post">
                    
                        <table>
                            <tr>
                                <td><span>Emoloyee Id:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="emp_id" value="<?php echo $row['emp_id'];?>" >
                                </td>
                            </tr>
                            <tr>
                                <td><span>Name:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $row['name'];?>" >
                                </td>
                            </tr>
                            <tr>
                                <td><span>Age:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="age" value="<?php echo $row['age'];?>" >
                                </td>
                            </tr>
                            <tr>
                                <td><span>Gender:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="gender" value="<?php echo $row['gender'];?>" >
                                </td>
                            </tr>
                            <tr>
                                <td><span>Date of Birth:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="dob" value="<?php echo $row['dob'];?>" >
                                </td>
                            </tr>
                            
                            <tr>
                                <td><span>Mobile No:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" >
                                </td>
                            </tr>
                            <tr>
                                <td><span>email:&nbsp;</span></td>
                                <td>
                                    <textarea rows="1" name="email" cols="40" type="text" value="<?php echo $row['email'];?>" ><?php echo $row['email'];?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><span>Password:&nbsp;</span></td>
                                <td>
                                    <input type="text" name="password" value="<?php echo $row['password'];?>" >
                                </td>
                            </tr><br><br>
                            <tr>
                                
                                <td></td>
                                <td><br><input type="submit" name="edit" value="Save" class="btn btn-outline-secondary btn-lg px-4 button "></td>
                            </tr>
                        </table>
                        </form>
                </div>
                    <?php
                }
            }
         ?>

         <?php
            if(isset($_POST['add_new_emp'])){
                ?>
                <center>
                    <span style="color:#F10086">Fill the given details: </span>
                </center>
                <div class="d-flex justify-content-center">
                <form action="add_emp.php" method="post">
                    <table>
                        <tr>
                            <td><span >Employee:</span></td>
                            <td>
                                <input type="text" name="emp_id" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Name:</span></td>
                            <td>
                                <input type="text" name="name" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Age:</span></td>
                            <td>
                                <input type="text" name="age" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Gender:</span></td>
                            <td>
                                <input type="text" name="gender" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Date Of Birth:</span></td>
                            <td>
                                <input type="date" name="dob" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Mobile No.</span></td>
                            <td>
                                <input type="text" name="mobile" required>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><span>Password:</span></td>
                            <td>
                                <input type="password" name="password" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Salary:</span></td>
                            <td>
                                <input type="text" name="salary" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Email ID:</span></td>
                            <td>
                            <textarea rows="1" name="email" cols="40" type="text" value="email" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add" value="Add Employee"></td>
                        </tr>
                    </table>
                </form>
            </div>
                <?php
            }
          ?>


            <?php
                if(isset($_POST['delete_emp'])){
                    ?>
                    <center>
                        <span style="color:black">Enter Employee Id to delete employee account!</span><br><br>
                        <div class="d-flex justify-content-center info">
                            <form action="delete_emp.php" method="post">
                                <span>Enter Employee ID:</span>
                                <input type="text" name="emp_id" class="search my-1">
                                <button type="submit" name="search_by_id_for_delete"  class="btn btn-outline-secondary btn-lg px-4 button">Delete Emoloyee</button>
                            
                            </form>
                        </div>
                        
                    </center>
                    <?php
                }
             ?>

             <?php
                if(isset($_POST['show_admins'])){
                    ?>
                    <center>
                        <span>Admins Details</span>
                        <!-- <table style="border-collapse:collapse; border:1px solid black;">
                            <tr>
                                <td id="table"><strong>ID</strong></td>
                                <td id="table"><strong>Name</strong></td>
                                <td id="table"><strong>Email</strong></td>
                                <td id="table"><strong>Password</strong></td>
                                
                            </tr>
                        </table> -->
                    </center>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection, "ems");
                    $query = "select * from login";
                    $query_run = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc( $query_run)){
                        ?>
                        <center>
                            <table style="border-collapse:collapse; border:2px solid black;">
                                <tr>
                                    <td class="table_content"><strong>ID</strong></td>
                                    <td class="table_content"><strong>Name</strong></td>
                                    <td class="table_content"><strong>Email</strong></td>
                                    <td class="table_content"><strong>Password</strong></td>
                                    
                                </tr>
                                <tr>
                                    <td class="table_content"><?php echo $row['id'] ?></td>
                                    <td class="table_content"><?php echo $row['name'] ?></td>
                                    <td class="table_content"><?php echo $row['email'] ?></td>
                                    <td class="table_content"><?php echo $row['password'] ?></td>
                                    <td class="table_content"><a href="#"  style="color:white;">View Details</a></td>
                                </tr>
                            </table>
                        </center>
                        <?php

                    }
                }
             ?>
    </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>