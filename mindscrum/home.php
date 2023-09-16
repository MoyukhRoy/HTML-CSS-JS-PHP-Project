<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<?php include 'components/user_header.php'; ?>

<section class="home-grid">

   

   
   <section class="home">

   
      <div class="row">
         <div class="content">
             <h3>MindScrum <span>education center</span> </h3>
             <a href="about.php" class="btn">Visit Link For More </a>
         </div>
         <div class="image">
             <img src="images/Working-pana.svg" alt="">
         </div>
     </div>
   
   </section>
</section>



















<footer class="footer">

   &copy; copyright @ 2023 by <span>MINDSCRUM PVT. LTD.</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>