<?php
    class TeacherController extends BaseController{
        public function index(){
            return $this->view("frontend.giangvien.index");
        }
        public function login(){
            return $this->view("frontend.giangvien.login");
        }
    }
?>