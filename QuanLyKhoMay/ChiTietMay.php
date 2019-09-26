<?php
//declare a product information.
//declare a group of product information.
//declare a "daddy of everyone" class , so the "children" classes can use.

//1st , need a general interface for all classes to use.


class ChiTietMay{
    public $maso;

     public function NhapThongTin(){
         do {
             $this->maso = readline("Nhap ma so:");
             // ep kieu ve so
             if(is_numeric($this->maso)) {
                 $this->maso += 0.0; //cach ep kieu tu string ve so
             }

             if(!is_float($this->maso)) {
                 echo "Ma so phai la so nguyen , hoac so thap phan cung duoc nha anh \n";
             }

             if (($this->maso) < 0)
             {
                 echo "Ma so khong the la so am duoc anh oi \n";
             }
         }
         while (!is_numeric($this->maso) || !is_float($this->maso) || $this->maso < 0 );
     }

     public function XuatThongTin(){
         return ($this->maso);

     }

}

