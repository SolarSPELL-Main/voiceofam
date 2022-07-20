<?php 
  include_once 'dbconnection.php';
  // required headers
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  $db = (new DBConnection())->connect();
  session_start();
  if (isset($_SESSION["name"])) {
      $name = $_SESSION["name"];
      $url = $_SERVER['HTTP_REFERER'];
      $url_parsed = parse_url($url);
      $path = explode('/',$url_parsed['path']);
      if(in_array("lessons", $path)){
        $sql = "UPDATE user SET url = ? WHERE name = ?";
        $stmt= $db->prepare($sql);
        if($stmt->execute([$url, $name])){
          //echo "Successfully updated records ";
          //echo "<br><br>Number of rows updated : ".$stmt->rowCount();
        }
        else{
          //print_r($stmt->errorInfo()); // if any error is there it will be posted
          //echo " Database problem, please contact site admin ";
        }
        echo json_encode($stmt);
    }
  }
  else {
      echo "nothing";
  }

?> 