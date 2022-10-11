<?php
class Sinhvien {
    private String $id;
    private String $mssv;
    private String $hoten;
    private String $ngaysinh;



    function Sinhvien($id, $mssv, $hoten, $ngaysinh) {
        $this->id = $id;
        $this->mssv = $mssv;
        $this->hoten = $hoten;
        $this->ngaysinh = $ngaysinh;
    }
    // Methods
    function set_id($id) {
        $this->id = $id;
    }
    function set_mssv($mssv) {
        $this->mssv = $mssv;
    }
    function set_hoten($hoten) {
        $this->hoten = $hoten;
    }
    function set_ngaysinh($ngaysinh) {
        $this->ngaysinh = $ngaysinh;
    }

    function get_id($id) {
        $this->id = $id;
    }
    function get_mssv($mssv) {
        $this->mssv = $mssv;
    }
    function get_hoten($hoten) {
        $this->hoten = $hoten;
    }
    function get_ngaysinh($ngaysinh) {
        $this->ngaysinh = $ngaysinh;
    }


    // $b2012046 = new Sinhvien("0","b2012046","DO KHANH TOAN", "12/09/2002");
    // echo $b2012046->get_id();
    // echo "<br>";
    // echo $b2012046->get_mssv();
    // echo "<br>";
    // echo $b2012046->get_hoten();
    // echo "<br>";
    // echo $b2012046->get_ngaysinh();
    // echo "<br>";
}
?>