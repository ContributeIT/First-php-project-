<?php

require_once "May.php";

class Kho extends ChiTietMay
{
    private $kho = [];
    public $maKho;
    public $tenkho;

    public function NhapThongTinKho()
    {
        do {
            $this->maKho = readline("Nhap ma so kho:");
            // ep kieu ve so
            if(is_numeric($this->maKho)) {
                $this->maKho += 0.0; //cach ep kieu tu string ve so
            }

            if(!is_float($this->maKho)) {
                echo "Ma so kho phai la so nguyen , hoac so thap phan cung duoc nha anh \n";
            }

            if (($this->maKho) < 0)
            {
                echo "Ma so kho khong the la so am duoc anh oi \n";
            }
        }
        while (!is_numeric($this->maKho) || !is_float($this->maKho));

        $this->tenkho = readline("Nhap ten kho: ");
        do {
            $soLuongMayTrongKho = readline("Nhap so luong may cua kho ".$this->tenkho." : ");
            // ep kieu ve so
            if(is_numeric($soLuongMayTrongKho)) {
                $soLuongMayTrongKho += 0; //cach ep kieu tu string ve so
            }

            if(!is_int($soLuongMayTrongKho)) {
                echo "anh vui long nhap lai so luong chi tiet a (phai la so nguyen va khong duoc la so thap phan hoac so am)\n";
            }

            if ($soLuongMayTrongKho < 0)
            {
                echo "so luong may khong the am duoc nha a";
            }
        }while (!is_numeric($soLuongMayTrongKho) || (!is_int($soLuongMayTrongKho)));
        for ($i = 0; $i < $soLuongMayTrongKho; $i++) {
            echo("Nhap thong tin cua may thu ".($i+1)." : " ."\n");
            $_may = new May();
            $_may->NhapThongTinMay();
            $this->kho[] = $_may;
            echo "--------------\n";
        }
        return $this->kho;
    }

    public function XuatThongTinKho()
    {
        return [
            "MaKho" => $this->maKho,
            "TenKho" => $this->tenkho,
            "KHO" => $this->kho,
        ];
    }

    public function TinhTongTienKho()
    {
        $tong = 0;
        foreach ($this->kho as $__may) {
            $tong += $__may->TinhTongTienMay();
        }
        return $tong;
    }

    public function TinhTongKLKho()
    {
        $tong = 0;
        foreach ($this->kho as $__may) {
            $tong += $__may->TinhTongKLMay();
        }
        return $tong;
    }
}


//$_kho = new Kho();
//$_kho->NhapThongTinKho();
//print_r($_kho->XuatThongTin());
//print_r($_kho->TinhTongTienKho()."\n");
//print_r($_kho->TinhTongKLKho() . "\n");