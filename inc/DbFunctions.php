<?php
/**
 * Author: Lynford A. Lagondi
 * Date: October 02, 2019
 */
    /**
     * DbFunction class
     */
    class DbFunctions{

        private $conn;  

        /**
         * Constructor
         */
        function __construct(){
            
            require_once 'DbConfig.php';
            $database = new DbConfig();
            $this->conn = $database->database_connect();

        }

    /**
     * User Login
     *  */    
    public function user_login($username,$password){

        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($username,$password));
        $result = $stmt->fetch();
        return $result;

    }

     /**
     * User Information
     *  */    
    public function user_information($username){

        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($username));
        $result = $stmt->fetchAll();
        return $result;

    }

         /**
     * Add new Alumni records
     */
    public function add_new_alumni($familyname,$firstname,$middlename,$degree,$age,$nationality,$status,
                         $year_graduated,$present_address,$present_employment,$employment_status,
                        $office_address,$contact_number,$email,$facebook,$name_of_classmate,$classmate_address){

        $sql = "INSERT INTO alumni(familyname,firstname,middlename,degree,age,nationality,status,
        year_graduated,present_address,present_employment,employment_status,
        office_address,contact_number,email,facebook,name_of_classmate,classmate_address)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($familyname,$firstname,$middlename,$degree,$age,$nationality,$status,
        $year_graduated,$present_address,$present_employment,$employment_status,
        $office_address,$contact_number,$email,$facebook,$name_of_classmate,$classmate_address));
        $result = $stmt->fetch();
        return $result;
    }

    //get all alumni records
    public function get_all_alumni($start,$limit){

        $sql = "SELECT * FROM alumni LIMIT $start,$limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($start,$limit));
        $result = $stmt->fetchAll();
        return $result;
    }

    /**
     * Search By Year
     */
    public function search_all_alumni_by_year($keyword){

        $keyword = '%'. $keyword . '%';


        $sql = "SELECT * FROM alumni WHERE year_graduated LIKE ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($keyword));
        $search_result = $stmt->fetchAll();
        return $search_result;
    }
    //get all alumni records
    public function download_file(){

        $sql = "SELECT * FROM alumni";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    //get single row
    public function get_single_row($rowID){

        $sql = "SELECT * FROM alumni WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($rowID));
        $result = $stmt->fetch();
        return $result;

    }

    //delete
    public function delete_single_alumni_records($rowID){

        $sql = "DELETE FROM alumni WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($rowID));
        $result = $stmt->fetch();
        return $result;
    }

    

    //Udpate Row
    public function update_alumni($rowID,$familyname,$firstname,$middlename,$degree,$age,$nationality,
    $status,$year_graduated,$present_address,$present_employment,$employment_status,$office_address,
    $contact_number,$email,$facebook,$name_of_classmate,$classmate_address){

        $sql = "UPDATE alumni SET familyname = ?, firstname = ?, middlename = ?, degree = ?, age = ?,
        nationality = ?, status = ?, year_graduated = ?, present_address = ?, present_employment = ?,
        employment_status = ?, office_address = ?, contact_number = ?, email = ?, facebook = ?, 
        name_of_classmate = ?, classmate_address = ? WHERE id = ? ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array($familyname,$firstname,$middlename,$degree,$age,$nationality,
        $status,$year_graduated,$present_address,$present_employment,$employment_status,$office_address,
        $contact_number,$email,$facebook,$name_of_classmate,$classmate_address,$rowID));

        $result = $stmt->fetch();

        return $result;
    }
     


}
?>