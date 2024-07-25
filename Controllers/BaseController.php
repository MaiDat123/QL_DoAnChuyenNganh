<?php 
    class BaseController{
        const VIEW_FOLDER_NAME = "Views";
        public function view($pathView , array $data = []){
            // biến đổi key dữ liệu trong data[] thành biến 
            foreach ($data as $key => $value) {
                $$key = $value;
            }
            // thêm file view theo đường dẫn ./Views/..../*.php
            require (self::VIEW_FOLDER_NAME."/".str_replace(".","/", $pathView).".php");
        }
    }
?>