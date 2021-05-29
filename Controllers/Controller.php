<?php

//https://www.youtube.com/watch?v=04aTM01Y3uQ

    class Controller extends Database {

            public static function CreateView($viewName){
                require_once("./Views/$viewName.php");
        }
    }

?>