<?php

require_once "ChiTietPhuc.php";

class May extends ChiTietMay
{
    private $soluongmay = [];
    public $maMay;
    public $tenmay;

    public function NhapThongTinMay()
    {
        do {
            $this->maMay = readline("Nhap ma so cua may:");
            // ep kieu ve so
            if(is_numeric($this->maMay)) {
                $this->maMay += 0.0; //cach ep kieu tu string ve so
            }

            if(!is_float($this->maMay)) {
                echo "Ma so may phai la so nguyen , hoac so thap phan cung duoc nha anh \n";
            }

            if (($this->maMay) < 0)
            {
                echo "Ma so may khong the la so am duoc anh oi \n";
            }
        }
        while (!is_numeric($this->maMay) || !is_float($this->maMay));
        $this->tenmay = readline("Nhap ten cua may: ");
        do {
            $soLuongChiTietmay = readline("Nhap so luong chi tiet cua may ".$this->tenmay." : ");
            // ep kieu ve so
            if(is_numeric($soLuongChiTietmay)) {
                $soLuongChiTietmay += 0; //cach ep kieu tu string ve so
            }

            if(!is_int($soLuongChiTietmay)) {
                echo "anh vui long nhap lai so luong chi tiet a (phai la so nguyen va khong duoc la so thap phan hoac so am)\n";
            }

            if($soLuongChiTietmay < 0)
            {
                echo "so luong thi khong duoc am nha anh";
            }
        }
        while (!is_numeric($soLuongChiTietmay) || !is_int($soLuongChiTietmay) );

        for ($i = 0; $i < $soLuongChiTietmay; $i++) {
            do {
                $_loai = readline("Nhap loai chi tiet thu " . ($i+1) . " cua may ".$this->tenmay . ": [1:Don || 2: Phuc] ");
                // ep kieu ve so
                if(is_numeric($_loai)) {
                    $_loai += 0; //cach ep kieu tu string ve so
                }

                if(!is_int($_loai) && ($_loai != 1 || $_loai != 2)) {
                    echo "Vui long nhap dung theo quy dinh [1:Don || 2: Phuc]\n";
                }
            }while (!is_numeric($_loai) || !is_int($_loai));
            $chitietmaycon = null;
            if ($_loai == 1) {
                $chitietmaycon = new ChiTietDon();
            } else if ($_loai == 2) {
                $chitietmaycon = new ChiTietPhuc();
            }
            $chitietmaycon->NhapThongTin();
            $this->soluongmay[] = $chitietmaycon;
            echo "-------------\n";
        }
        return  $this->soluongmay;
    }

    public function XuatThongTinMay()
    {
        return [
            "MaMay" => $this->maMay,
            "TenMay" => $this->tenmay,
            "MAY" => $this->soluongmay,
        ];
    }

    public function TinhTongTienMay()
    {
        $tong = 0;
        foreach ($this->soluongmay as $_may) {
            if($_may->loai == "don")
                $tong += $_may->getDonGia();
            if($_may->loai == "phuc")
                $tong += $_may->TinhTongTien();
        }
        return $tong;
    }

    public function TinhTongKLMay()
    {
        $tong = 0;
        foreach ($this->soluongmay as $_may) {
            if ($_may->loai == "don") {
                $tong += $_may->getKhoiLuong();
            }
            if ($_may->loai == "phuc") {
                $tong += $_may->TinhTongKL();
            }
        }
        return $tong;
    }
}


//$may = new May();
//$may->NhapThongTinMay();
//print_r($may->XuatThongTin());
//print_r($may->TinhTongTienMay()."\n");
//print_r($may->TinhTongKLMay() . "\n");