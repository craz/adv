<?php

namespace Admin;

class Test extends Appmodel {

    public static $table = 'tests';
    public $index = array();
    public $new = array();
    public $edit = array(
        "book_id" => array(
            "type" => "dropDown",
            "dropDownOptions" => array(
                "class" => "user",
                "valueField" => "id",
                "titleField" => "login",
                "blankLabel" => "Choose User"
            )
        ),
        "password",
       /* "active" => array("type" => "radioButton",
            "radioButtonOption" => array(
                "options" => array("active" => "Active Data", "desactive" => "Not Active Data")
            )
        ),*/
        /*"optionNoTableData" => array("type" => "dropDown",
            "dropDownOptions" => array(
                "options" => array("active" => "Active Data", "desactive" => "Not Active Data")
            )
        ),*/        
        /*"observation" => array("type" => "textarea"),
        "lunch_hour" => array("class" => "time"),
        "birth" => array("class" => "date"),
        "modified_at" => array("class" => "datetime"),
        "image" => array(
            "type" => "file",
            "uploadOptions" => array(
                "path" => "storage",
                "directory" => "dataImages",
                "sizes" => array("small" => "120x123")
            )
        ),*/
        "state" => array("type" => "checkbox")
    );
    public $show = array();
    public $rules = array("state" => "required");
    public $multipartFormData = true;

}

?> 