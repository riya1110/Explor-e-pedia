<?php 
  session_start();
  include_once "../config/dbconnect.php";
  if(!isset($_SESSION['unique_id'])){
    header("location:../shared/login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: ../User/search-places");
          }
        ?>
        <a href="../User/search-places" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="details">
          <span style="margin-left: 20px;"><?php echo $row['FirstName']. " " . $row['LastName'] ?></span>
          <p style="margin-left: 20px;"><?php echo $row['status']; ?></p>
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

</body>
</html>
