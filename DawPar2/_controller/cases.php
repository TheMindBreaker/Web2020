<?php
require "../_helper/service.php";
header('Content-Type: application/json');
$service = new incidents();
if($_GET){
    switch ($_GET['data']){

        case 'allIncidents':
            echo json_encode($service->getAllIncidents());
            break;

        default:
            echo json_encode("Data was not founded");
            break;
    }


}else{
    echo json_encode("Parameters not received");
}
