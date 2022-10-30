<?php


namespace App\classes;


class products
{
    public $products;
    public function allProducts(){
        $this->products = [
            0 => [
                'id' => 1,
                'name' => 'White Shirt',
                'price' => '5000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
            1 => [
                'id' => 2,
                'name' => 'White Pant',
                'price' => '6000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
            2 => [
                'id' => 3,
                'name' => 'White Shoe',
                'price' => '2000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
            3 => [
                'id' => 4,
                'name' => 'White kisu akta',
                'price' => '5000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
            4 => [
                'id' => 5,
                'name' => 'White 2nd kisu akta',
                'price' => '5000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
            5 => [
                'id' => 6,
                'name' => 'White ',
                'price' => '5000',
                'iamge' => 'assets/img/11.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, quos.'
            ],
        ];
        return $this->products;
    }

}