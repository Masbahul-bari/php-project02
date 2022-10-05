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

   <h1 class="heading-title">Admin</h1>

   <form action="admin.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter Name" name="name">
         </div>
         <div class="inputBox">
            <span>Password :</span>
            <input type="number" placeholder="enter Salary" name="pass">
         </div>  
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>
</body>
</html>