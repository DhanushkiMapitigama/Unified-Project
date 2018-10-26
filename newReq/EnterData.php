<?php
require_once 'DB_function.php';
$db = new DB_Functions();


if (isset($_GET['nodeNumber']) && isset($_GET['height']) && isset($_GET['floorRate'])) {

    // receiving the post params
    $nodeNumber = $_GET['nodeNumber'];
    $height = $_GET['height'];
    $floorRate = $_GET['floorRate'];
   		
	$details = $db->updateConditon($height, $floorRate,$nodeNumber);	
	if ($details) {
            // user stored successfully
            $response["error"] = FALSE;
            while($row = $details->fetch_assoc()){
            

    
                $r[] = $row;
            }
            echo json_encode($r);
        } 
        else {
            // user failed to store
            $response["error"] = TRUE;
            $response["error_msg"] = "Unknown error occurred in updating data!";
            echo json_encode($response);
        }

}
	
else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters (nodeNumber height floorRate) is missing!";
    echo json_encode($response);
}
		
?>