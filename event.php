   <?php
include_once 'database.php';
if(isset($_POST['save']))
{   
   $fullname  = $_POST['fullname'];
   $email= $_POST['email'];
   $phoneNumber = $_POST['phoneNumber'];
   $company =$_POST['company'];

   $sql = "INSERT INTO event (fullname, email, phoneNumber, company)
   VALUES ('$fullname','$email','$phoneNumber','$company')";
   if (mysqli_query($conn, $sql)) {
    echo "Dear $fullname successfully booked thank you for using our hotel!!<br>";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>