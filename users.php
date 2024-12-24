<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ."|your id=".  $row['user_id'] ?></span>
            <p><?php echo $row['status']; ?> </p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>
<style>

  .users{
  padding: 10px 10px;
  
  
  
 




}
.users-list a{
  display: flex;
  align-items: center;
  padding-bottom: 20px;
  border-bottom: 2px solid #e6e6e6;
  justify-content: space-between;
}
.users-list{
  max-height: 400px;
  overflow-y: auto;
}
.users-list a .status-dot{
  font-size: 12px;
  color: #06eb84;
  padding-left: 10px;
}

.users-list a img{
  height: 50px;
  width: 50px;
  border-color: blueviolet;
  
}
.wrapper img{
  object-fit: cover;
  border-radius: 50%;
  border-color: blueviolet;
}
:is(.users, .users-list) .content .details{
  color: #000;
  margin-left: 20px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  
}
:is(.users, .users-list) .details span{
  font-size: 18px;
  font-weight: 500;
  font-family:  'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  
}
.chat-box{
  position: relative;
  min-height: 500px;
  max-height: 500px;
  overflow-y: auto;
  padding: 10px 30px 20px 30px;
  background: #f7f7f7;
  box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
              inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
              
}







</style>
</body>



</html>
