<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Dashboard</title>
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
                        <button type="submit" name="show_detail" value="Show Employee" class="btn btn-outline-secondary btn-lg px-5 button">Show Employee</button>
                        
                        <!-- <input type="submit" name="show_detail" class="btn btn-outline-secondary btn-lg px-5 my-2 button" value="Show Employee"> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="edit_detail" value="edit_detail" class="btn btn-outline-secondary btn-lg px-5 button">edit_detail</button>
                        
                        <!-- <input type="submit" name="edit_detail" class="btn btn-outline-secondary btn-lg px-5 button" value="Edit Employee"> -->
                    </td>
                </tr>
                
            </table>
        </form>
    </div>
    <div id="right"><br><br>
        <div id="demo">
            <?php
                if(isset($_POST['show_detail'])){
                    $query = "select * from employee where email = '$_SESSION[email]'";
                    $query_run = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                        <div class="d-flex justify-content-center">
                        <table>
                            <tr>
                                <td>
                                    <span>Emp Id: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['emp_id'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Name: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['name'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Age: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['age'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Gender: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['gender'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Date of Birth: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['dob'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Mobile No: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['mobile'] ?>" disabled>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <span>Password: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['password'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Salary: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo $row['salary'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Email Id: &nbsp;</span>
                                </td>
                                <td>
                                    <textarea rows="2" cols="40" type="text"  disabled>
                                    <?php echo $row['email'] ?></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                        <?php
                    }
                }
            ?>

            <?php
                if(isset($_POST['edit_detail'])){
                    $query="select * from employee where email = '$_SESSION[email]'";
                    $query_run = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                        <div class="d-flex justify-content-center">
                        <form action="edit_emp.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <span>Emp Id: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="emp_id" value="<?php echo $row['emp_id'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Name: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo $row['name'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Age: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="age" value="<?php echo $row['age'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Gender: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="gender" value="<?php echo $row['gender'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Date of Birth: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="dob" value="<?php echo $row['dob'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Mobile No: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>" >
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    <span>Password: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="password" value="<?php echo $row['password'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Salary: &nbsp;</span>
                                </td>
                                <td>
                                    <input type="text" name="salary" value="<?php echo $row['salary'] ?>" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Email Id: &nbsp;</span>
                                </td>
                                <td>
                                    <textarea rows="2" cols="40" type="text" name="email" >
                                    <?php echo $row['email'] ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><br><input type="submit" name="save" value="Save" class="btn btn-outline-secondary btn-lg px-5 button"></td>
                            </tr>
                        </table>
                        </form>
                    </div>
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