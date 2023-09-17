	   <!DOCTYPE html>
      <html>
      <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Booking Table</title>
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
if(isset($_POST['save']))
{   
   $restaurant = $_POST['restaurant'];
   $fullname = $_POST['fullname'];
   $email = $_POST['email'];
   $address = $_POST['address'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $people = $_POST['people'];

   $sql = "INSERT INTO BR (restaurant, fullname, email, address, dates, time1, people)
   VALUES ('$restaurant','$fullname','$email','$address','$date','$time','$people')";
   if (mysqli_query($conn, $sql)) {
     echo "Dear $fullname ,successfully booked <br>thank you for using our hotel!!";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>
<br>
<h4>Kuriftu resort and spa Afar</h4>
            <br>
                <br>
    <div class="link">
        <a href="index.html">homepage</a>
     <a href="Bar and Resturant  Reservation.html">Booking form</a>
    </div>


</div>
      </body>
      </html>