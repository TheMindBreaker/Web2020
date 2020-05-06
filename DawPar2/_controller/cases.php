<?php
require "../_helper/service.php";
header('Content-Type: application/json');
$service = new incidents();
if($_GET){
    switch ($_GET['data']){

        case 'allIncidents':
            echo json_encode($service->getAllIncidents());
            break;

        case 'getPlaces':
            echo json_encode($service->getPlaces());
            break;

        case 'getType':
            echo json_encode($service->getType());
            break;

        case 'addIncident':
            if(isset($_POST['type'])&&isset($_POST['place'])){
                echo json_encode($service->addIncident($_POST['type'],$_POST['place']));
            }
            else{
                echo json_encode('Error: faltan parametros');
            }
            break;

        case 'addPlace':
            if(isset($_POST['placeName'])){
                echo json_encode($service->addPlace($_POST['placeName']));
            }
            else{
                echo json_encode('Error: faltan parametros');
            }
            break;
        case 'addType':
            if(isset($_POST['typeName'])){
                echo json_encode($service->addType($_POST['typeName']));
            }
            else{
                echo json_encode('Error: faltan parametros');
            }
            break;
        default:
            echo json_encode("Data was not founded");
            break;

    }


}else{
    echo json_encode("Parameters not received");
}
