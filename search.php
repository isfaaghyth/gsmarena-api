<?php
    require("gsm.php");
    $query = isset($_GET['q']) ? $_GET['q'] : NULL;
    
    if ($query !== NULL) {
        $gsm = new gsm();
        $data = $gsm->search($query);
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        echo json_encode($data);
    } else {
        $result["status"] = "error";
		$result["data"] = array();
        echo json_encode($result);
    }

?>