<?php
  function setVar(&$sqlHost, &$sqlUser, &$sqlPass, &$sqlDBName) {
    include "settings.php";
    $sqlHost = $config["db_host"];
    $sqlUser = $config["db_username"];
    $sqlPass = $config["db_password"];
    $sqlDBName = $config["db_dbname"];
  }
  function connectDB()
  {
    setVar($sqlHost, $sqlUser, $sqlPass, $sqlDBName);
    $mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $sqlDBName);
    if(!$mysqli)
    {
      echo "Database connection/selection error.";
      exit();
    }
    $mysqli->query("SET NAMES 'utf8'");
    return $mysqli;
  }
  function connectDBAjax()
  {
    setVar($sqlHost, $sqlUser, $sqlPass, $sqlDBName);
    $mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $sqlDBName);
    if(!$mysqli) return false;
    $mysqli->query("SET NAMES 'utf8'");
    return $mysqli;
  }
?>