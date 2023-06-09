<?php
include_once "partial/DB_CONNECTION.php";
$errors = [];
$success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];
  if (empty($email)) {
    $errors['email_error'] = "email is required, please fill it";
  }
  if (empty($password)) {
    $errors['password_error'] = "password is required, please fill it";
  }


  if (count($errors) > 0) {
    $errors['general_error'] = "Please Fix All Errors";
  } else {
    $query1 = "SELECT * from admins where email='$email' AND password='$password'";
    $result1 = mysqli_query($connection, $query1);

    if (mysqli_num_rows($result1) > 0) {
      $row = mysqli_fetch_assoc($result1);
      session_start();
      $_SESSION['is_login'] = true;
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];


      $errors = [];
      $success = true;
      header('Location:index.php');
    } else {
      $errors['general_error'] = "Admin name or password is wrong!";
    }
  }
}
?>



<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php
include "partial/header.php";

?>

<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">

  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                          <h2>DASHBOARD</h2>
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Dashboard</span>
                  </h6>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <?php
                    if (!empty($errors['general_error'])) {
                      echo "<div class='alert alert-danger'>" . $errors["general_error"] . "</div>";
                    }
                    ?>
                    <form method="POST" class="form-horizontal form-simple" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="email" class="form-control form-control-lg input-lg" name='email' id="user-name" placeholder="Your email" required>
                        <?php
                        if (!empty($errors['email_error'])) {
                          echo "<span class='text-danger'>" . $errors["email_error"] . "</span>";
                        }

                        ?>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <br>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name='password' class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter Password" required>
                        <?php
                        if (!empty($errors['password_error'])) {
                          echo "<span class='text-danger'>" . $errors["password_error"] . "</span>";
                        }
                        ?>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                     
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <p class="float-sm-right text-center m-0">New Admin? <a href="register.php" class="card-link">Sign Up</a></p>
                  
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>


</body>

</html>