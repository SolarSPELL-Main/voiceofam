<?php 
  include_once 'dbconnection.php';
  // required headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $db = (new DBConnection())->connect();
  $name = $_GET["username"];
  session_set_cookie_params(0);
  session_start();
  $user = new \stdClass;// to be returned
  $query = $db->prepare('SELECT * FROM user WHERE name = :name');
  $query->execute([':name' => $name]);
  $result = $query->fetch(PDO::FETCH_ASSOC);
  if ($result) {
    $user->name =  $result["name"];
    $user->url = $result["url"];
    $_SESSION["name"] = $user->name;
    echo json_encode($user);
  }
  else {
    $sql = "INSERT INTO user (name, url) VALUES (?,?)";
    $stmt= $db->prepare($sql);
    if($stmt->execute([$name, "/voiceofam/let's%20learn%20english%20level%201/learnEng01.html"])){
      //echo "Successfully added records ";
      //echo "<br><br>Number of added updated : ".$stmt->rowCount();
    }
    else{
      //print_r($stmt->errorInfo()); // if any error is there it will be posted
      //echo " Database problem, please contact site admin ";
    }
    $user->name = $name;
    $user->url = "/voiceofam/let's%20learn%20english%20level%201/learnEng01.html";
    $_SESSION["name"] = $user->name;
    echo json_encode($user);
  }
?> 