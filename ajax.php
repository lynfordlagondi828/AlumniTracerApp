<?php
require_once 'inc/DbFunctions.php';
$database = new DbFunctions();


    /**
     * POST METHOD
     */
    if(isset($_POST["key"])){

        ////////////Add new//////////////////////////
        if($_POST["key"] == "addNew"){

            $familyname = trim($_POST["familyname"]);
            $firstname = trim($_POST["firstname"]);
            $middlename = trim($_POST["middlename"]);
            $degree = trim($_POST["degree"]);
            $age = trim($_POST["age"]);
            $nationality = trim($_POST["nationality"]);
            $status = trim($_POST["status"]);
            $year_graduated = trim($_POST["year_graduated"]);
            $present_address = trim($_POST["present_address"]);
            $present_employment = trim($_POST["present_employment"]);
            $employment_status = trim($_POST["employment_status"]);
            $office_address = trim($_POST["office_address"]);
            $contact_number = trim($_POST["contact_number"]);
            $email = trim($_POST["email"]);
            $facebook = trim($_POST["facebook"]);
            $name_of_classmate = trim($_POST["name_of_classmate"]);
            $classmate_address = trim($_POST["classmate_address"]);

            $database->add_new_alumni($familyname,$firstname,$middlename,$degree,$age,$nationality,$status,
                $year_graduated,$present_address,$present_employment,$employment_status,
                $office_address,$contact_number,$email,$facebook,$name_of_classmate,$classmate_address);
                exit('success');
        }
        /////end add ///////////////////////////

        //display all  list
        if($_POST["key"] == "list_of_alumni"){

            $start = trim($_POST["start"]);
            $limit = trim($_POST["limit"]);
    
            $result = $database->get_all_alumni($start,$limit);

            if(count($result)>0){

                $response ="";
    
                foreach($result as $key){
    
                    $response .='
                        <tr>
                            <td>'.$key['familyname'].'</td>
                            <td>'.$key['firstname'].'</td>
                            <td>'.$key['middlename'].'</td>
                            <td>'.$key['degree'].'</td>
                            <td>'.$key['age'].'</td>
                            <td>'.$key['nationality'].'</td>
                            <td>'.$key['status'].'</td>
                            <td>'.$key['year_graduated'].'</td>
                            <td>'.$key['present_address'].'</td>
                            <td>'.$key['present_employment'].'</td>
                            <td>'.$key['employment_status'].'</td>
                            <td>'.$key['office_address'].'</td>
                            
                            <td>
                             <input type="button" onClick="ViewOreditRow('.$key['id'].', \'edit\')" value="Edit" class="btn btn-primary">
                             </td>
                             <td>
                                <input class="btn btn-danger" type="button" onClick="deleteRow('.$key['id'].')" value="Delete">
                             </td>
                            <td>
                                <input type="button" onClick="ViewOreditRow('.$key['id'].', \'view\')" value="View" class="btn btn-success">
						
                            </td>
                        </tr>
                    ';
                }
                exit($response);
            } else {
                exit("reachedMax");
            }
            
        }
        ////////end of list

        //get single row
        if($_POST["key"] == "get_single_row"){

            $rowID = trim($_POST["rowID"]);
            $rows = $database->get_single_row($rowID);
    
            $jsonArray = array(
                
                "familyname" => $rows["familyname"],
                "firstname" => $rows["firstname"],
                "middlename" =>$rows["middlename"],
                "degree" => $rows["degree"],
                "age" => $rows["age"],
                "nationality" => $rows["nationality"],
                "status" => $rows["status"],
                "year_graduated" => $rows["year_graduated"],
                "present_address" => $rows["present_address"],
                "present_employment" =>$rows["present_employment"],
                "employment_status" =>$rows["employment_status"],
                "office_address" => $rows["office_address"],
                "contact_number" =>$rows["contact_number"],
                "email" =>$rows["email"],
                "facebook" =>$rows["facebook"],
                "name_of_classmate" => $rows["name_of_classmate"],
                "classmate_address" => $rows["classmate_address"],
    
            );
            exit(json_encode($jsonArray));
        }

        ///end get single row////////

        //update
        if($_POST["key"] == "updateRow"){

            $rowID = trim($_POST["rowID"]);
            $familyname = trim($_POST["familyname"]);
            $firstname = trim($_POST["firstname"]);
            $middlename = trim($_POST["middlename"]);
            $degree = trim($_POST["degree"]);
            $age = trim($_POST["age"]);
            $nationality = trim($_POST["nationality"]);
            $status = trim($_POST["status"]);
            $year_graduated = trim($_POST["year_graduated"]);
            $present_address = trim($_POST["present_address"]);
            $present_employment = trim($_POST["present_employment"]);
            $employment_status = trim($_POST["employment_status"]);
            $office_address = trim($_POST["office_address"]);
            $contact_number = trim($_POST["contact_number"]);
            $email = trim($_POST["email"]);
            $facebook = trim($_POST["facebook"]);
            $name_of_classmate = trim($_POST["name_of_classmate"]);
            $classmate_address = trim($_POST["classmate_address"]);

            $database->update_alumni($rowID,$familyname,$firstname,$middlename,$degree,$age,$nationality,
            $status,$year_graduated,$present_address,$present_employment,$employment_status,$office_address,
            $contact_number,$email,$facebook,$name_of_classmate,$classmate_address);
            exit('success');
        }

        //delete
        if($_POST["key"] == "delete"){

            $rowID = trim($_POST["rowID"]);
            $database->delete_single_alumni_records($rowID);
            exit('success');
        }
    }
?>