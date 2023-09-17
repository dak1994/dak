
  <!DOCTYPE html>
      <html>
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Booking room</title>
             <link rel="icon" type="image/jpg" href="logo.jpg">
      </head>
      <style>
          body{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
   .sub{
            padding-top: 5%;
            width: 490px;
            height: 350px;
            color: green;
            font-size: 20px;
            text-align: center;
            margin-top: 4%;
            background-color: rgba(2, 0, 5, 0.905);
            opacity: 80%;
            transform: translateX(100%);
        
            border-radius: 8px;

          }
.link{ text-align: left; padding-left: 4%;}          
p{ font-size: 20px; color: }
h4{ color: orange; font-size: 25px; }
  .sub a{
    text-decoration: none;
    color: white;
    font-size: 18px;
         } 
 .sub a:hover{
         color: orange;
         text-decoration: underline;
        }
@media screen and (max-width: 760px ){
.sub{
   transform: translateX(3%);
}
}
      </style>
         <body style="background: url(kuriftu/wow.jpg);
background-size:100%;">

<div class="sub">
      <?php
include_once 'database.php';
$err="";
if(isset($_POST['save']))
{   
   $fullname  = $_POST['fullname'];
   $email= $_POST['email'];
   $phoneNumber = $_POST['phoneNumber'];
   $DepartureDate = $_POST['DepartureDate'];
   $NoGuest = $_POST['NoGuest'];
   $ArrivalDate = $_POST['ArrivalDate'];
   $RoomType = $_POST['room_type'];

   $sql = "INSERT INTO RS (fullname, email, phoneNumber, DepartureDate, NoGuest, ArrivalDate, RoomType)
   VALUES ('$fullname','$email','$phoneNumber','$DepartureDate','$NoGuest','$ArrivalDate','$RoomType')";
   if (mysqli_query($conn, $sql)) {
   echo "Dear $fullname successfully booked thank you for using our hotel!!";

   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);

}?>

<br>
<h4>Kuriftu resort and spa Afar</h4>
            <br>
                <br>
    <div class="link">
        <a href="index.html">homepage</a>
     <a href="Room booking.html">Booking form</a>
    </div>


</div>
      </body>
      </html>