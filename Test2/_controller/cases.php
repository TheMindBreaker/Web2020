<?php
require "../_helper/service.php";
header('Content-Type: application/json');
$service = new zombies();
if($_GET){
    switch ($_GET['data']){

        case 'allZombies':
            echo json_encode($service->getAllZombies());
            break;

        case 'allStatus':
            echo json_encode($service->getStatus());
            break;

        case 'zombiesByStatus':
            if(isset($_GET['statusId'])){
                echo json_encode($service->getZombiesByStatus($_GET['statusId']));
            }
            else{
                echo json_encode("Missing Parameter");
            }
            break;
        default:
            echo json_encode("Data was not founded");
            break;
    }


}else{
    echo json_encode("Parameters not received");
}
