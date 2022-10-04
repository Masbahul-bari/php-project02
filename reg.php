<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>


<section class="booking">

   <h1 class="heading-title">Create Account</h1>

   <form action="reg_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Employee ID :</span>
            <input type="number" placeholder="Enter your ID" name="id">
         </div>
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Dept. :</span>
            <input type="text" placeholder="enter your dept" name="dep">
         </div>      
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>
</body>
</html>