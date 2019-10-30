<?php session_start() ; 
    include 'header.php';
?>
<?php
    $conn = mysqli_connect('localhost','root','Himavarsha','login_swe') or die('Unable To connect');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $u = mysqli_real_escape_string($conn,$_SESSION['user']);
    $sql = "select * from confirm where user_name = '".$u."';";
    $result = $conn->query($sql);
    //echo $result->num_rows;
    
    
    if ($result->num_rows > 0) {
         //echo "<div id='a'><table>";
         // output data of each row
         echo "<div id='a1'><table class='table'><thead class='thead-light'><tr><th scope='col'><b>Order Id</b></th>
            <th scope='col'><b>User Name</b></th>
            <th scope='col'><b>Service</b></th>
            <th scope='col'><b>Date</b></th>
            <th scope='col'><b>Order Type</b></th>
            <th scope='col'><b>Order Status</b></th>
            <th scope='col'><b></b></th>
            <th scope='col'><b></b></th></tr></thead>";
         while($row = $result->fetch_assoc()) {
             echo "<form method = 'post' ><div id='a'>";
             echo "<tr>
             <td><input type = 'text' name = 'order_id' value = ".$row["order_id"]." readonly></td>
             <td><input type = 'text' name = 'order_id1' value = ".$row["user_name"]." readonly></td>
             <td><input type = 'text' name = 'order_id2' value = ".$row["service"]."</td>
             <td><input type = 'text' name = 'order_id3' value = ".$row["time"]." readonly></td>
             <td><input type = 'text' name = 'order_id4' value = ".$row["oder"]." readonly></td>
             <td><input id = type= 'text' name = 'status' value = ".$row["status"]." readonly></td>
             <td ><input type ='submit' name = 'edit' class='btn btn-cyan' value = 'Edit'></td>
             <td ><input type ='submit' name = 'cancel' class='btn btn-danger' value = 'Cancel'></td>
             
             </tr>";
             echo " </div></form>";
         }
         echo "</table>";
        
     } else {
         echo "0 results";
     }
    $conn->close();

?>
<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  
if(isset($_POST['cancel'])){?>
<?php 
        $con = mysqli_connect('localhost','root','Himavarsha','login_swe') or die('Unable To connect');
        $o= mysqli_real_escape_string($con,$_POST['order_id']);
        $u = mysqli_real_escape_string($con,$_SESSION['user']);
        $sql = "delete from confirm where order_id = '".$o."';";
        if($conn->query($sql)){?>
        <script>
            alert("order cancelled");
            location('http://localhost/swe/myorders.php');
        </script>
            <?php
        }
        else{?>
        <script>
            alert("not deleted please try again");
        </script>
            <?php
            }
        }
        else{
        header("Location:edit.php?orderid = ".$o."?");
            }
        ?>