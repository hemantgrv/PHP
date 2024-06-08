<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>


<div class="content-wrapper">
    <div class="container-fluid">
        <?php
          if (isset($_SESSION['status'])) 
          {
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
          }
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 mb-4 text-center">Registered User</h2>
                <form action="execute.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="">Phone No</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" name="registerUser" class="btn btn-info btn-block">Registered</button>
                </form>

                <p>Already a existing user ? <a href="login.php">Login</a></p>
            </div>
        </div>
    </div>
</div>



<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>