
<?php
require "Header/header.php";
require "config.php";
?>

<h2>ALL STUDENTS</h2>
<table class="table table-hover table-bordered table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM students ";
            $result = mysqli_query($conn, $query);

            if(!$result) 
            {
                die("Query Failed" . mysqli_error());
            } 
            else 
            {
                foreach ($result as $row) 
                {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>
                    <?php
                }
            }
        ?>
    </tbody>
</table>

<?php
require "Footer/footer.php";
?>