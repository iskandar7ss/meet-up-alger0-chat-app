<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<head>
<style>
*{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.content.img{
  border-color: blueviolet;
  

}
.users-list a img{
  height: 40px;
  width: 40px;
  border-color: blueviolet;
}

.chat-area header img{
  height: 45px;
  width: 45px;
  margin: 0 15px;
  border-color: blueviolet;
}
  </style>

</head>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname']."|user id=".  $row['user_id'] ?> <br/>
          
        </span>
          <p><?php echo $row['status']; ?></p>    
          <button id="155">♥</button>    <h4 id="156">0</h4>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>
  <script src="likes.js"></script>

</body>
</html>
