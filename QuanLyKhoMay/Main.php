<?php
require_once "ChiTietDon.php";
require_once "ChiTietPhuc.php";
require_once "May.php";
require_once "Kho.php";

echo "========Nhap kho may=======\n";
echo "1.---------Kho-------------\n";
echo "2.---------May-------------\n";
echo "3.-----Chi tiet phuc-------\n";
echo "4.-----Chi tiet don--------\n";



do {
    $ct = readline("Anh Nam cu vo tu ma nhap san pham di ne :v : ");
    if(is_numeric($ct))
    {
        $ct += 0;
    }

    if(!is_int($ct) && ($ct != 1 || $ct != 2 || $ct != 3 || $ct != 4) || $ct > 4 || $ct <= 0)
    {
        echo "Minh nhap theo menu moi nhan nha anh =]]\n";
    }

}while (!is_numeric($ct) || !is_int($ct) || $ct <= 0 || $ct > 4);

if ($ct == 1)
{
    $ct = new Kho();
    $ct->NhapThongTinKho();
    print_r($ct->XuatThongTinKho());
    print_r($ct->TinhTongTienKho());
    print_r($ct->TinhTongKLKho());
}

else if ($ct == 2)
{
    $ct = new May();
    $ct->NhapThongTinMay();
    print_r($ct->XuatThongTinMay());
    print_r($ct->TinhTongTienMay() . "\n");
    print_r($ct->TinhTongKLMay() . "\n");
}

else if ($ct == 3)
{
    $ct = new ChiTietPhuc();
    $ct->NhapThongTin();
    print_r($ct->XuatThongTin());
    print_r($ct->TinhTongTien());
    print_r($ct->TinhTongKL());
}

else if ($ct == 4)
{
    $ct = new ChiTietDon();
    $ct->NhapThongTin();
    print_r($ct->XuatThongTin());
}