<?php
class Course{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getCourse()
    {
        $sql = "SELECT * FROM sci_cs";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    public function getCourseDetail($cs_id)
    {
        $sql = "SELECT * FROM sci_cs WHERE cs_id = ".$cs_id ;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            // echo ($result);
            return $result;
        }else {
            return false;
        }
    }
    
    // public function getCoursePro($pro_id)
    // {
    //     $sql = "SELECT * FROM agency WHERE `agency_pro_id` = '". $pro_id ."'";
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetchAll(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    // public function getAgencyID($a_id)
    // {
    //     $sql = "SELECT * FROM agency where agency_id=".$a_id;
    //     $query = $this->ConDB->prepare($sql);
    //     if( $query->execute()){
    //         $result = $query->fetch(PDO::FETCH_ASSOC);
    //         return $result;
    //     }else {
    //         return false;
    //     }
    // }

    public function addCourse($id, $name, $img, $date,$wallet,$time)
    {
        //$sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `agency_context`, `agency_pic`, `agency_location`, `agency_pro_id`) VALUES (NULL, '$a_name', '$a_context', '$a_pic', '$a_location', '$a_pro');";
        $sql = "INSERT INTO `sci_cs` (`cs_id`, `cs_name`, `cs_img`, `cs_date`, `cs_wallet`, `cs_time`) VALUES ('$id', '$name', '$img',' $date','$wallet','$time');";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function delCourse($c_id)
    {
        $sql = "DELETE FROM `sci_cs` WHERE `cs_id`='".$c_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourse($id, $name, $img, $date, $wallet)
    {
        //$sql = "UPDATE `sci_cs` SET `cs_id` = '". $id ."', `cs_name` = '". $name ."', `cs_img` = '". $img ."', `cs_date` = '". $date ."', `cs_wallet` = '". $wallet ."', `cs_time` = '". $time ."' WHERE `cs_id` = '". $id ."'";
        $sql = "UPDATE `sci_cs` SET `cs_id` = '". $id ."', `cs_name` = '". $name ."', `cs_img` = '". $img ."', `cs_date` = '". $date ."', `cs_wallet` = '". $wallet ."' WHERE `cs_id` = '". $id ."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            echo "Hello123";
            return true;
        }else {

            return false;
        }
    }
	
}
?>