<?php



require_once 'ChiTietMay.php';



class ChiTietDon extends ChiTietMay
{
    public $loai = "don";
    public $DonGia;
    public $TrongLuong;

    public function NhapThongTin()
    {
        parent::NhapThongTin();
        $this->DonGia = readline("Nhap gia: ");
        while (!is_numeric($this->DonGia)|| $this->DonGia < 0)
        {
            $this->DonGia = readline("Vui long nhap lai gia: ");
        }
        $this->TrongLuong = readline("Nhap trong luong:");
        while (!is_numeric($this->TrongLuong) || $this->TrongLuong < 0)
        {
            $this->TrongLuong = readline("Vui long nhap lai trong luong: ");
        }

    }

    public function getDonGia()
    {
        return $this->DonGia;
    }

    public function getKhoiLuong()
    {
        return $this->TrongLuong;
    }

    public function XuatThongTin()
    {
        return[
            "MaSo" => parent::XuatThongTin(),
            "Loai" => $this->loai,
            "Gia" => $this->DonGia,
            "TrongLuong" => $this->TrongLuong,
            ];
    }
}

