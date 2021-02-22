<?php
namespace Includes\Plans;
use Includes\DB\Connection;

class FDPlan extends Connection
{
    private $allPlans;
    public function __construct()
    {
        $sql = "SELECT * FROM fd_plan";
        $stmt = (new Connection)->connect()->prepare($sql);
        $stmt->execute();
        $this->allPlans = $stmt->fetchAll();
    }

    /**
     * return All FD plans
     */
    public function getAllFDPlans():array
    {
        return $this->allPlans;
    }
    

}


?>