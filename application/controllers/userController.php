<?php

class userController extends framework
{
    public function index()
    {
        echo "WELCOME METHOD..!";
    }

    public function userMethod()
    {
        $myModel = $this->model('userModel');

        if ($myModel->myData()) {
            // echo "User Registered Successsfully...!";
            $result = $myModel->myData();
            echo json_encode($result);
        } else echo "Sorry Issue";

        // print_r($myModel->myData());

        //    $mydata = [
        //         "title" => "THIS IS MY FIRST POST",
        //         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad reprehenderit<br>
        //         recusandae cumque vitae officia ipsam neque culpa? Enim nostrum sequi sit ut magni.<br>
        //         In eaque nobis sequi, vel omnis possimus!"
        //     ];
        //   $this->view("userView", $result);
    }
}
