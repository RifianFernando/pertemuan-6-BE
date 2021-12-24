<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Jaket Baseball',
                'description' => 'Nike Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=10166cce582754280a122583310890965&authkey=AUzOU13dFoU7n0aPwC-Wd_w&e=nffcrk',
                'price' => 150
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=1839285941e8e4d7bb2f36d4ecd513840&authkey=Af0SJX3uTrbLCfLn_hLDF1A&e=lNcBaG',
                'price' => 20.299
            ],
            [
                'name' => 'Web Cam Xiaovv',
                'description' => 'xiaomi Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=1d489da6da8384dd6906ef39c952c3f0f&authkey=AaRvbr7x7P2Qs5skqxba5ow&e=QKGTQH',
                'price' => 240
            ],
            [
                'name' => 'Raket Yonex speed lightning',
                'description' => 'Yonex Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/Documents/image/rakte.jpg?csf=1&web=1&e=OSeVQJ',
                'price' => 830
            ]
            ,
            [
                'name' => 'ABC BATERAI ALKALIN AAA/ A3 ISI 7pcs',
                'description' => 'Alkaline Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=1eeb24e75ea2146b4b5a3e1e3a9f17191&authkey=AWQmomYXwfHAmba9so7hgRc&e=H5eMNs',
                'price' => 15
            ]
            ,
            [
                'name' => 'VGA Gigabyte GeForce RTX 3090 Aorus Master 2.0 | 24GB GDDR6X | Ampere',
                'description' => 'Aorus Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=1f13c55534733430a96944e4453c79442&authkey=AY3KMHU1j1GETD5H9hdxypo&e=AVG4iJ',
                'price' => 45.990
            ]
            ,
            [
                'name' => "Nike Blazer mid '77 vintage sneakers",
                'description' => 'Nike Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=153979f621c25453981515aae0f4559ca&authkey=AXSxo2lyK0wpw8QjFcIG8xk&e=tPgHu7',
                'price' => 1.100
            ]
            ,
            [
                'name' => 'Tenda AC10U AC1200 MU-MIMO Smart Dual-Band Gigabit WiFi',
                'description' => 'Tenda Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=156a5de2133954148996bbd59d8e8bae3&authkey=ATxhlGdPQ7UwbO-QhqpWSP8&e=6CME3M',
                'price' => 579
            ]
            ,
            [
                'name' => 'MSI LAPTOP MODERN 14-B11MO-622 I7-1165G7 | 8GB | 512GB | UMA | 14″ | W10',
                'description' => 'MSI Brand',
                'image' => 'https://binusianorg-my.sharepoint.com/personal/rifian_fernando_binus_ac_id/_layouts/15/guestaccess.aspx?docid=1022f87defaf74cc8ad0545b947ea64da&authkey=AcftagKsiyDh4VjRrQHdm6Q&e=9aaExu',
                'price' => 11.999
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
