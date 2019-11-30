<?php include_once 'auth.php'?>
<?php
  include_once 'connection.php';




  if(isset($_POST['phone']) && !empty($_POST['phone']))
  {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $sql = "Select * from user where phone = $phone and password = $password";
    //echo $sql;
    $result = $conn->query($sql);
    if($result->num_rows>0)
    {
      $data = $result->fetch_assoc();
      $name = $data['name'];
      $user_type = $data['user_type'];
      $join_data = $data['join_date'];
      $package_id = $data['package_id'];
      $phone = $data['phone'];
      $id = $data['id'];
      $_SESSION['name'] = $name;
      $_SESSION['user_type'] = $user_type;
      $_SESSION['join_data'] = $join_data;
      $_SESSION['package_id'] = $package_id;
      $_SESSION['phone'] = $phone;
      $_SESSION['earning'] = $data['earning'];
      $_SESSION['error'] = "";
      if($user_type==1)

      	header("Location: admin/index.php");
      else
      	header("Location: client/index.php");
    }
    else
    {
      $_SESSION['error'] = "Authentication Error";
      header("Location: login.php");
    }

  }
?>
