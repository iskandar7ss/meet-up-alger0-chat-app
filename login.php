<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<head>
<style>
*{
 
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

  </style>
  

    </div>
  <div class="wrapper">
    <section class="form login">
      <header><center><img src="Untitled-121212.png" > </center> <center>login</center></header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" maxlength= 30 required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" maxlength= 20 required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
      <div class="link">read our ruls <a href="r.html">ruls</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
