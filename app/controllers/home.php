<?php
class home{
    public function index(){
        require_once '../app/views/sinhvien/index.php';
    }
    public function about(){
        echo "Đây là trang giới thiệu";
    }
    public function create(){
        require_once __DIR__.'../app/views/sinhvien/home/login.php';
    }
}
?>