<?php

    require_once 'classes/DB.php';
    require_once 'classes/StoriesTable.php';

    $errors = array();
    $formdata = array();

    
    $formdata["headline"]       = $_POST["headline"];
    $formdata["storyText"]      = $_POST["storyText"];
	$formdata["type"]       = $_POST["type"];
    $formdata["date"]      = date("Y-m-d");
	$formdata["time"]      = date("H:m:s");
	$formdata["author"]     = $_POST["author"];
    $formdata["title"]      = $_POST["title"];
    
    

    if (empty($errors)) {
        try {
            $conn = DB::getConnection();
            $table = new StoriesTable($conn);
            $id = $table->insert($formdata["headline"], $formdata["storyText"], $formdata["type"], $formdata["date"], $formdata["time"], $formdata["author"], $formdata["title"]);

            //require "index.php";
            header("Location: index.php");
        }
        catch (PDOException $e) {
            $conn = null;
            exit("Connection failed: " . $e->getMessage());
        }
    }
        
        
        
    else {
        require 'form.html';
    }
?>