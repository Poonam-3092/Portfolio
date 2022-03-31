<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Page</title>
    <link rel="stylesheet" href="./css/style.css">
    <script>
      body{
        background-image: url(./img/login_bg.jpg)
      }
    </script>
  </head>
  <body class="login_page">
    <section class="login_page">
      <div class="px-4 py-5 my-5 text-center">
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="display-5 fw-bold login_heading mb-4">Employee Management System</h1>
      <div class="col-lg-6 mx-auto">
        <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->
        <form action="" method="post">
          <div class="d-grid gap-3 d-sm-flex justify-content-sm-center ">
            <button type="submit" name="admin_login" value="Admin Login" class="btn  btn-lg px-4 gap-3 button">Admin Login</button>
            <button type="submit" name="emp_login" value="Employee Login" class="btn btn-outline-secondary btn-lg px-4 button">Employee Login</button>
            
          </div>
        </form>
        <img src="./img/login_bg.jpg" class="img1 img-thumbnail" alt="">
      </div>
      
    </div>
      
      <?php
        if(isset($_POST['admin_login'])){
          header("Location: admin_login.php");
        }
        if(isset($_POST['emp_login'])){
          header("Location: emp_login.php");
        }
      ?>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>