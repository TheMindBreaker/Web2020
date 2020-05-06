<?php
require_once "controller.php";



/*$conQ = $fer->runQuery("SELECT * FROM zombies");
$conQ->execute();
echo "<pre>";   //////Para strings
var_dump($conQ->fetchAll(PDO::FETCH_ASSOC)); //Para arreglos o objetos

*/

class incidents
{
    public function __construct(){}

    public function getAllIncidents()
    {
        $db = new baseCon();

        $incidentsQ = $db->runQuery("SELECT * FROM incident_place_type_view ORDER BY dateRegistered DESC");
        $incidentsQ->execute();

        $incidentsL = $incidentsQ->fetchAll(PDO::FETCH_ASSOC);


        if($incidentsQ->rowCount()==0){
            return "No data";
        }else{
            return $incidentsL;
        }


    }

    public function getPlaces()
    {
        $db = new baseCon();

        $statusQ = $db->runQuery("SELECT * FROM incident_place");
        $statusQ->execute();

        $statusL = $statusQ->fetchAll(PDO::FETCH_ASSOC);

        return $statusL;
    }

    public function getType()
    {
        $db = new baseCon();

        $statusQ = $db->runQuery("SELECT * FROM incident_type");
        $statusQ->execute();

        $statusL = $statusQ->fetchAll(PDO::FETCH_ASSOC);

        return $statusL;
    }

    public function addIncident($type,$place)
    {
        $db = new baseCon();

        ////////All zombies

        $addQ = $db->runQuery("CALL addIncident(:type,:place) ");
        $addQ->execute(array(":type"=>$type,":place"=>$place));


        if($addQ){
            return "Agregado";
        }else{
            return "Error Interno";
        }
    }

    public function addPlace($placeName)
    {
        $db = new baseCon();

        ////////All zombies

        $addQ = $db->runQuery("CALL addPlace(:placeName) ");
        $addQ->execute(array(":placeName"=>$placeName));


        if($addQ){
            return "Agregado";
        }else{
            return "Error Interno";
        }
    }


    public function addType($typeName)
    {
        $db = new baseCon();

        ////////All zombies

        $addQ = $db->runQuery("CALL addType(:typeName) ");
        $addQ->execute(array(":typeName"=>$typeName));


        if($addQ){
            return "Agregado";
        }else{
            return "Error Interno";
        }
    }
}