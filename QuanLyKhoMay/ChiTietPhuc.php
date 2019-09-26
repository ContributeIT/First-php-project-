<?php
require_once "ChiTietDon.php";

class ChiTietPhuc extends ChiTietMay
{
    private $arrTemp = [];
    public $loai = "phuc";

    public function NhapThongTin()
    {

        parent::NhapThongTin();

        do {
            $soLuongChiTiet = readline("Nhap so luong chi tiet: ");
            // ep kieu ve so
            if(is_numeric($soLuongChiTiet)) {
                $soLuongChiTiet += 0; //cach ep kieu tu string ve so
            }

            if(!is_int($soLuongChiTiet)) {
                echo "Vui long nhap lai so luong chi tiet (phai la so nguyen va khong duoc la so thap phan)\n";
            }
        }
        while (!is_numeric($soLuongChiTiet) || !is_int($soLuongChiTiet));

        for ($i = 0; $i < $soLuongChiTiet; $i++) {
            do {
                $_loai = readline("Nhap loai cua chi tiet thu " . ($i+1) . " : " ."[1:Don || 2: Phuc]" );
                // ep kieu ve so
                if(is_numeric($_loai)) {
                    $_loai += 0; //cach ep kieu tu string ve so
                }

                if(!is_int($_loai) && ($_loai != 1 || $_loai != 2)) {
                    echo "anh nhap dung theo quy dinh nha: [1:Don || 2: Phuc]\n";
                }
            }
            while (!is_numeric($_loai) || !is_int($_loai));
            $chitietcon = null;
            if ($_loai == 1) {
                $chitietcon = new ChiTietDon();
            } else if ($_loai == 2) {
                $chitietcon = new ChiTietPhuc();
            }
            $chitietcon->NhapThongTin();
            $this->arrTemp[] = $chitietcon;
            echo "---------------\n";
        }
    }

    public function XuatThongTin()
    {
        return [
            parent::XuatThongTin(),
            "loai" => $this->loai,
            "DSCT" => $this->arrTemp,
        ];
    }

    public function TinhTongTien()
    {
        $tong = 0;
        foreach ($this->arrTemp as $ct) {
            if ($ct->loai == "don") {
                $tong += $ct->getDonGia();
            }
            if ($ct->loai == "phuc") {
                $tong += $ct->TinhTongTien();
            }
        }
        return $tong;
    }

    public function TinhTongKL()
    {
        $tong = 0;
        foreach ($this->arrTemp as $ct) {
            if ($ct->loai == "don") {
                $tong += $ct->getKhoiLuong();
            }
            if ($ct->loai == "phuc") {
                $tong += $ct->TinhTongKL();
            }
        }
        return $tong;
    }
}
//$_ctp = new ChiTietPhuc();
//$_ctp->NhapThongTin();
//print_r($_ctp->XuatThongTin());
//print($_ctp->TinhTongTien()."\n");
//print($_ctp->TinhTongKL() . "\n");
