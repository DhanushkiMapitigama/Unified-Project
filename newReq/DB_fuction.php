<?php


class DB_Functions {

    private $conn;

    // constructor
    function __construct() {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }

    // destructor
    function __destruct() {
        
    }

    
    public function updateConditon($height, $floorRate,$nodeNumber) {
        
	    $stmt = $this->conn->prepare("UPDATE `dataTable` SET height=?  WHERE nodeNumber=?");
        $stmt->bind_param("is",$height,$nodeNumber);
        $result1 = $stmt->execute();
        $stmt = $this->conn->prepare("UPDATE `dataTable` SET floorRate=?  WHERE nodeNumber=?");
        $stmt->bind_param("is",$floorRate,$nodeNumber);
        $result2 = $stmt->execute();

        // check for successful update
        if ($result1 && $result2) {
            $stmt = $this->conn->prepare("SELECT * FROM `dataTable");
         
            $stmt->execute();
            $details = $stmt->get_result();
            $stmt->close();

            return $details;
        } else {
			 $stmt->close();
             return false;
        }
       
 	}
  

}  

?>