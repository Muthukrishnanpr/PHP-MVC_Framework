<?php

class framework
{

    public function view($viewName, $data = [])
    {
        if (file_exists("../application/views/" . $viewName . ".php")) {

            require_once "../application/views/" . $viewName . ".php";
        } else {

            echo "<div style='margin:0; padding:10px; background-color:silver;color:white;font-size:32px';>
            Sorry " . $viewName . ".php not found</div>";
        }
    }

    public function model($modelName)
    {
        if (file_exists("../application/models/" . $modelName . ".php")) {

            require_once "../application/models/" . $modelName . ".php";
            return new $modelName;
        } else {

            echo "<div style='margin:0; padding:10px; background-color:silver;color:white;font-size:32px';>
            Sorry " . $modelName . ".php not found</div>";
        }
    }
}
