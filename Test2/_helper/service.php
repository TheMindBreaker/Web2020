<?php
require_once "controller.php";



/*$conQ = $fer->runQuery("SELECT * FROM zombies");
$conQ->execute();
echo "<pre>";   //////Para strings
var_dump($conQ->fetchAll(PDO::FETCH_ASSOC)); //Para arreglos o objetos

*/

class zombies
{
    public function __construct(){}

    public function getAllZombies()
    {
        $db = new baseCon();

        $zombiesQ = $db->runQuery("SELECT * FROM zombies_status_view ORDER BY registeredDate DESC ");
        $zombiesQ->execute();

        $zombiesL = $zombiesQ->fetchAll(PDO::FETCH_ASSOC);

        while($row = $zombiesQ->fetch(PDO::FETCH_ASSOC)){

        }

        $zombiesQ->rowCount();

        $data = array();
        foreach ($zombiesL as $value){


            $data[$value['fullname']][] = array(
                "stateName"=>$value['stateName'],
                "registeredDate"=>$value['registeredDate']
            );

        }


        return $data;
    }

    public function getStatus()
    {
        $db = new baseCon();

        $statusQ = $db->runQuery("SELECT * FROM status");
        $statusQ->execute();

        $statusL = $statusQ->fetchAll(PDO::FETCH_ASSOC);

        return $statusL;
    }

    public function totalAmounts()
    {
        $db = new baseCon();

        ////////All zombies

        $totalZombQ = $db->runQuery("SELECT count() as Total FROM zombies");
        $totalZombQ->execute();

        $totalZombL = $totalZombQ->fetch(PDO::FETCH_ASSOC);


        /////////Zombies in each Status

        $totalStatusQ = $db->runQuery();
        $totalStatusQ->execute();

        $totalStatusL = $totalStatusQ->fetch(PDO::FETCH_ASSOC);

        $result = array(
            totalZombies => $totalZombL,
            totalStatus => $totalStatusL
        );


        return $result;

    }

    public function getZombiesByStatus($statusId){
        $db = new baseCon();

        if(!empty($statusId)){
            $zombiesQ = $db->runQuery("SELECT * FROM zombies_status_view WHERE id_status=:id");
            $zombiesQ->execute(array(":id"=>$statusId));

            if($zombiesQ->rowCount()>0){
                $zombiesL = $zombiesQ->fetchAll(PDO::FETCH_ASSOC);
                $total = $zombiesQ->rowCount();

                $response = array(
                    "total"=>$total,
                    "list"=>$zombiesL
                );

            }
            else{
                $response = "No data in database";
            }
        }
        else{
            $response = "Missing parameter";
        }
        return $response;
    }
}