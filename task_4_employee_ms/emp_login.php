<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employee Login Page</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body class="login">
  <div class="px-4 py-5 my-5 text-center">
      <h1 class="display-5 fw-bold login_heading mb-4">Employee Login Page</h1>
      <div class="col-lg-6 mx-auto">
        <form action="" method="post">
          <div class=" gap-3  justify-content-sm-center form">
            <center>
            <table >
              <tr>
                <td>
                Email: &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="email" required><br><br>
                </td>
              </tr>
              <tr>
              <td>
                Password: &nbsp;<input type="password" name="password" required><br><br>
                </td>
              </tr>
              
            </table>
            </center>
            
            <button type="submit" name="submit" value="Employee Login" class="btn btn-outline-secondary btn-lg px-5 button">Login</button>
            
          </div>
        </form>
        
      </div>
      
    </div>
    <center><br><br>
        
    
    <?php
      session_start();
      if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection, "ems");
        $query = "select * from employee where email = '$_POST[email]'";
        $query_run = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($query_run)){
            if($row['email'] == $_POST['email']){
                if($row['password'] == $_POST['password']){
                    $_SESSION['name']= $row['name'];
                    $_SESSION['email']= $row['email'];
                    // echo "Login Successful";
                    header("Location: emp_dashboard.php");
                }
                else{
                    echo "Wrong Password";
                }
            }
            else{
                echo "Wrong email ID";
            }
        }
      }
    ?>
    </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>