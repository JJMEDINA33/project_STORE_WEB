<?php
namespace App\Http\DTOs;

class AuthProductsDTO {

    private int $productId;    
    private string $name;
    private string $image;
    private string $price;

    public function getProductId(){
        return $this->productId;
    }
    public function setProductId(int $productId){
        $this->productId = $productId;
    }

    public function getName(){
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }

    public function getImage(){
        return $this->image;
    }
    public function setImage(string $image){
        $this->image = $image;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setPrice(string $price){
        $this->price = $price;
    }
}
