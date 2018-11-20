<?php


class StoriesTable {

    // define constants for the name of the table and the titles of the columns
    const TABLE_NAME        = "stories";
    const COLUMN_ID         = "id";
	const COLUMN_HEADLINE   = "headline";
    const COLUMN_STORY_TEXT = "storyText";
	const COLUMN_TYPE       = "type";
    const COLUMN_DATE       = "date";
	const COLUMN_TIME	    = "time";
    const COLUMN_AUTHOR		= "author";
	const COLUMN_TITLE 		= "title";
	
  

    // a PDO object which provides a connection to the database
    private $mConnection;

    public function __construct($connection) {
        $this->mConnection = $connection;
    }

    public function __destruct() {
        $this->mConnection = null;
    }

   // insert a person into the database and return the id assigned to the person
    public function insert($hl,$st,$tp,$dt,$tm,$ath,$tl) {
        
        // construct the SQL INSERT statement using named placeholders
        $sql = "INSERT INTO " . StoriesTable::TABLE_NAME . "(" .
                
				
                StoriesTable::COLUMN_HEADLINE . ", " .
                StoriesTable::COLUMN_STORY_TEXT  . ", " .
				StoriesTable::COLUMN_TYPE . ", " .
                StoriesTable::COLUMN_DATE  . ", " .
				StoriesTable::COLUMN_TIME . ", " .
                StoriesTable::COLUMN_AUTHOR  . ", " .
				StoriesTable::COLUMN_TITLE  . ") " .
                
                
                "VALUES (:headline,:storyText,:type,:date,:time,:author,:title)";

        // the values for the named placeholders in the SQL INSERT statement
        $params = array(
           
            'headline' => $hl,
            'storyText' => $st,
			'type' => $tp,
            'date' => $dt,
			'time' => $tm,
            'author' => $ath,
			'title' => $tl,
             
			
			
        );

        // prepare the statement for execution and execute it
        $stmt = $this->mConnection->prepare($sql);
        $status = $stmt->execute($params);

        // if an error occurred while executing the query then throw an exception
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not save the Story: " . $errorInfo[2]);
        }

        // retrieve the id assigned to the inserted table row
        $id = $this->mConnection->lastInsertId(StoriesTable::TABLE_NAME);

        // return the id assigned to the inserted table row
        return $id;
    } 

    public function findAll($category, $numOfRows) {
        
        // construct the SQL SELECT statement
        $sql = "SELECT * FROM " . StoriesTable::TABLE_NAME . " WHERE type='$category' ORDER BY id DESC  LIMIT $numOfRows " ;

        // prepare the statement for execution and execute it
        $stmt = $this->mConnection->prepare($sql);
        $status = $stmt->execute();

        // if an error occurred while executing the query then throw an exception
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve the Story: " . $errorInfo[2]);
        }

        // return the array of containing book table rows
        return $stmt;
    }

}