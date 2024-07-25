<?php
    require("./Core/Database.php");
    class GiangVienModel extends BaseModel{
        public $MaGiangVien;
        public $TenGiangVien;
        public $NgaySinh;
        public $Email;
        public $SoDienThoai;
        public $ChucVu;

        // public function __construct($MaGiangVien,$TenGiangVien,$NgaySinh,$Email,$SoDienThoai,$ChucVu) {
        //     $this->MaGiangVien = $MaGiangVien;
        //     $this->TenGiangVien = $TenGiangVien;
        //     $this->NgaySinh = $NgaySinh;    
        //     $this->Email = $Email;
        //     $this->SoDienThoai = $SoDienThoai;
        //     $this->ChucVu = $ChucVu;
        // }
        public function __construct(){

        }

        public function getAll(){
            return __METHOD__;
        }
    }
?>