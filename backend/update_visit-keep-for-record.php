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
        $query = $db->prepare('UPDATE user SET url = :url WHERE name = :name');
        $query->bindParam(":url",$url);
        $query->bindParam(":name",$name);
        $query->execute();
    }
  }
  else {
      echo "nothing";
  }

?> 