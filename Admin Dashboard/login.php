<?php
session_start();

require 'config/dbcon.php';

    if(isset($_POST["submit"])) 
    {    
        $email = $_POST["email"];
        $password = $_POST["password"];
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) 
        {
            if ($password == $row["password"]) 
            {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("location: success.php");                
            } 
            else 
            { echo "<script> alert('Wrong password'); </script>";}
        } 
        else 
        { echo "<script> alert('User not registered'); </script>";}
    }
?>

<?php
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mt-5 mb-4 text-center">Login User</h2>
                <form method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required>
                    </div>
                    <button type="submit" class="btn btn-info btn-block" name="submit">Login</button>
                </form>

                <p>Not a registeed user? <a href="registered.php">Registered</a></p>
            </div>
        </div>
    </div>
</div>

<?php include('includes/script.php');?>
<?php include('includes/footer.php');?>