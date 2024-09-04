<?php

include_once('model.php');

class Control extends model
{

    function __construct()
    {

        model::__construct();


        $path = $_SERVER['PATH_INFO'];

        switch ($path) {

            case '/dashboard':
                include_once('index.php');
                break;

            case '/add_data':

                $data_arr = json_decode(file_get_contents("php://input"), true);
                $first_name = $data_arr["first_name"];
                $last_name = $data_arr["last_name"];
                $email = $data_arr["email"];
                $m_no = $data_arr["m_no"];
                $profile_pic = $data_arr["profile_pic"];


                $data = array("first_name" => $first_name, "last_name" => $last_name, "email" => $email, "m_no" => $m_no, "profile_pic" => $profile_pic);

                $res = $this->insert('students_details', $data);

                if ($res or die("Insert Query Failed")) {
                    echo json_encode(array("message" => "Students Data Inserted Successfully", "status" => true));
                } else {
                    echo json_encode(array("message" => "Data Not Succesfully Inserted ", "status" => false));
                }
                break;

            case '/view_data':

                $res = $this->table_select('students_details');
                $count = count($res); // data count
                if ($count > 0) {
                    echo json_encode($res) . "<br>";
                } else {
                    echo json_encode(array("message" => "No Contact Found.", "status" => false));
                }
                break;

            case '/edit_data':
                $data_arr = json_decode(file_get_contents("php://input"), true);
                $id = $data_arr['id'];
                $first_name = $data_arr["first_name"];
                $last_name = $data_arr["last_name"];
                $email = $data_arr["email"];
                $m_no = $data_arr["m_no"];
                $profile_pic = $data_arr["profile_pic"];

                // store the data of updated
                $data = array("first_name" => $first_name, "last_name" => $last_name, "email" => $email, "m_no" => $m_no, "profile_pic" => $profile_pic);
                $where = array("id" => $id);

                $res = $this->update_where('students_details', $data, $where);

                if ($res or die("Update Query Failed")) {
                    echo json_encode(array("message" => "Contacts Update Successfully", "status" => true));
                } else {
                    echo json_encode(array("message" => "Failed Contacts Not Update", "status" => false));
                }
                break;

            case '/delete':
                $data_arr = json_decode(file_get_contents("php://input"), true);
                $id = $data_arr['id'];

                $where = array("id" => $id);
                $res = $this->delete_where('students_details', $where);
                if ($res or die("Delete Query Failed")) {
                    echo json_encode(array("message" => "Student Delete Successfully !", "status" => true));
                } else {
                    echo json_encode(array("message" => "Data Not Deleted", "status" => false));
                }
                break;
        }
    }

}

$obj = new Control;

?>