
      <?php
         if(isset($_POST['delete'])) {
           require 'dbh.inc.php';

            if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }

            $itemName = $_POST['itemName'];

            $sql = "DELETE FROM masterlist WHERE itemName = '$itemName'";
            //mysqli::select_db('loginsystem2020RocketInventory');
            $retval = mysqli_query($conn, $sql );

            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error($conn));
            }
            //echo $itemName;
            //echo "Deleted data successfully\n";

            mysqli_close($conn);
            header("Location: ../account.php?=success");
            exit();

         }
