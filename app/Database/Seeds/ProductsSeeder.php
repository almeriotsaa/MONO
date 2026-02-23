<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
   public function run()
{
    $tops = $this->db->table('categories')
        ->where('category_type', 'Tops')
        ->where('category_gender', 'Men')
        ->get()->getRow();

    $outwear = $this->db->table('categories')
        ->where('category_type', 'Outwear')
        ->where('category_gender', 'Men')
        ->get()->getRow();

    $bottom = $this->db->table('categories')
        ->where('category_type', 'Bottom')
        ->where('category_gender', 'Men')
        ->get()->getRow();

    $accessories = $this->db->table('categories')
        ->where('category_type', 'Accessories')
        ->where('category_gender', 'Men')
        ->get()->getRow();

    $womenTop = $this->db->table('categories')
        ->where('category_type', 'Top')
        ->where('category_gender', 'Women')
        ->get()->getRow();


    $data = [
        [
            'product_id' => 2001,
            'category_id' => $tops->category_id,
            'image' => 'nike.jpg',
            'name_product'=> 'Polar Skate Co. Mitchell Flannel Shirt',
            'description' => 'Polar Skate Co. Mitchell Flannel Shirt brings a classic touch to a casual look. Made from soft, high-quality flannel fabric, it offers comfort for everyday wear. The shirt features a small dark check pattern that’s easy to pair with any outfit. Designed with a full button-up front, classic collar, and a chest pocket with the signature Polar logo. The relaxed fit gives it a laid-back feel while keeping a clean appearance. Perfect to wear on its own or layered over your favorite tee.',
            'details' => 'Made from premium genuine leather or synthetic leather, Lightweight foam midsole, Durable solid rubber outsole',
            'price' => 249000.00,
            'stock' => 39,
            'size' => 'XS,S,M,L,XL,XXL'
        ],
        [
            'product_id' => 2002,
            'category_id' => $outwear->category_id,
            'image' => 'nike.jpg',
            'name_product'=> 'Vintage Washed Work Jacket Beige Brown',
            'description' => 'This Vintage Washed Work Jacket combines a timeless workwear look with a relaxed fit. Made from durable cotton canvas, it features a soft brown corduroy collar, front zip closure, and roomy pockets for practicality. The beige-brown tone gives it a classic, worn-in feel that pairs easily with everyday outfits. Perfect for layering in cooler weather.',
            'price' => 899000.00,
            'stock' => 25,
            'size' => 'XS,S,M,L,XL,XXL'
        ],
        [
            'product_id' => 2003,
            'category_id' => $bottom->category_id,
            'image' => 'nike.jpg',
            'name_product'=> 'Chino Baggy Pants in Parisian Night Blue',
            'description' => 'These navy wide-leg pants feature a relaxed silhouette made from soft, durable cotton. Designed for comfort and easy movement, they pair well with casual tops and sneakers for an effortless everyday look.',
            'details' => 'Made from premium genuine leather or synthetic leather, Lightweight foam midsole, Durable solid rubber outsole',
            'price' => 500000.00,
            'stock' => 20,
            'size' => 'XS,S,M,L,XL,XXL'
        ],
        [
            'product_id' => 2004,
            'category_id' => $accessories->category_id,
            'image' => 'nike.jpg',
            'name_product'=> 'Polarized sunglasses',
            'description' => 'Stylish polarized sunglasses that reduce glare and block UV rays. Lightweight, durable, and perfect for outdoor activities or everyday wear.',
            'details' => 'Made from premium genuine leather or synthetic leather, Lightweight foam midsole, Durable solid rubber outsole',
            'price' => 200000.00,
            'stock' => 20,
            'size' => 'no size'
        ],
        [
            'product_id' => 2005,
            'category_id' => $womenTop->category_id,
            'image' => 'nike.jpg',
            'name_product'=> 'Women Long Sleeve Striped Sweater',
            'description' => 'This Women Long Sleeve Striped Sweater features a classic stripe pattern with a cozy, relaxed fit. Made from soft knit fabric, it’s perfect for everyday wear and easy to pair with jeans or skirts for a casual yet polished look.',
            'details' => 'Made from premium genuine leather or synthetic leather, Lightweight foam midsole, Durable solid rubber outsole',
            'price' => 300000.00,
            'stock' => 15,
            'size' => 'XS,S,M,L,XL,XXL'
        ],
    ];

    $this->db->table('products')->insertBatch($data);
}
}
