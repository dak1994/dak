     <!DOCTYPE html>
     <html>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/jpg" href="logo.jpg">
        <title>subscriber</title>
         <style> 
   body{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
      }
   .sub{
            padding-top: 5%;
            width: 400px;
            height: 350px;
            color: green;
            font-size: 20px;
            text-align: center;
            margin-top: 4%;
            background-color: rgba(2, 0, 5, 0.905);
            opacity: 80%;
            transform: translateX(130%);
        
            border-radius: 8px;

          }
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
     </head>
   <body style="background: url(kuriftu/wow.jpg);
background-size:100%;">

      <div class="sub">
           <?php
            include_once 'database.php';

                     if(isset($_POST['save'])) {
                     

                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $PN=$_POST['phoneNumber'];
                        $sql = "INSERT INTO subscribe ( name, email, phoneNumber) 
                         VALUES ('$name','$email','$PN')";
                            
                if (mysqli_query($conn, $sql)){
                        echo "Dear $name , Subscription Completed!!";
                        }
                        else {
                           echo "Error: " . $sql . "
                             " . mysqli_error($conn);
                                   }
                              mysqli_close($conn);
                     }

                        ?>
                        <br>
                    <p>
                 thank you  using our hotel!!
                        </p>
                <h4>Kuriftu resort and spa Afar</h4>
            <br>
                <br>
     <a href="index.html">back to homepage</a>

</div>


</body>
</html>
  
               