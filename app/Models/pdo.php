<?php
function connectDb(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=pdo", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}

function get_all($sql){
   $conn = connectDb();
   $stmt = $conn->prepare($sql);
   $stmt->execute();
   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
   return $stmt->fetchAll();
}