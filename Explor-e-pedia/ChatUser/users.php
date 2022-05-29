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
    <section class="users">
      <header>
        <div class="content">
            <?php 
                
                $place=$_GET['id'];


            $sql = mysqli_query($conn, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");

              $row = mysqli_fetch_assoc($sql);
            
          ?>
          <div class="details">
            <span><?php echo $row['FirstName']. " " . $row['LastName'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="../shared/login.php" class="logout">Exit</a>
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

</body>
</html>
