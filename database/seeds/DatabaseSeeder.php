<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@admin.com',
                'name' => 'Admin',
                'password' => Hash::make('admin'),
                'gender' => 'male',
                'dob' => '10/02/1999',
                'address' => 'Admin address',
                'manager' => 1
            ],
            [
                'email' => 'garry@gmail.com',
                'name' => 'Garry',
                'password' => Hash::make('qwerasdf'),
                'gender' => 'male',
                'dob' => '10/02/1999',
                'address' => 'Garry address',
                'manager' => 0
            ]
        ]);

        DB::table('categories')->insert([
            [
                'name' => 'Hand Bouquet (gift)',
                'image' => '1.png'
            ],
            [
                'name' => 'Fresh Flower',
                'image' => '2.png'
            ],
            [
                'name' => 'Table Arrangement',
                'image' => '3.png'
            ],
            [
                'name' => 'Standing Flower',
                'image' => '4.png'
            ]
        ]);

        DB::table('flowers')->insert([
        //Hand Bouquet
            [
                'name' => 'Amorous de Fleur',
                'image' => '1.png',
                'category' => 1,
                'price' => 485000,
                'description' => "Pelengkap Momen Spesial, Rangkaian Mawar Merah dan Lily Merah Muda,  Melambangkan Cinta dan Kesejahteraan yang Berlimpah",
            ],
            [
                'name' => 'Lily Belle Bouquet',
                'image' => '5.png',
                'category' => 1,
                'price' => 2185000,
                'description' => "Rangkaian Bunga Lily Putih, Mawar Cokelat, Pompom, dan Baby's Breath, Dikemas Cantik dalam Wrapping Paper Premium, Melambangkan Kasih Sayang, Gelora Cinta, dan Keanggunan",
            ],
            [
                'name' => 'Majestic Blue Romance Bouquet',
                'image' => '6.png',
                'category' => 1,
                'price' => 435000,
                'description' => "15 Mawar Biru, Dihiasi dengan Baby Breath dan Caspia Flowers, Dibungkus dengan Kertas Pembungkus Abu-abu, Cocok dengan Busur Biru, Melambangkan Cinta, Kepercayaan dan Kegembiraan, Hadiah Sempurna untuk Orang Yang Anda Cintai",
            ],
            [
                'name' => 'Midnight Sun Bouquet',
                'image' => '7.png',
                'category' => 1,
                'price' => 1285000,
                'description' => "Rangkaian Giant Bouquet Mewah untuk Ungkapan Spesial, Berisi Bunga Matahari dan Baby Breath, Dirangkai Cantik dengan Wrapping Paper Premium, Melambangkan Kemegahan Cinta, Keriangan, dan Kebahagiaan",
            ],
            [
                'name' => 'Pink Amethyst Bouquet',
                'image' => '8.png',
                'category' => 1,
                'price' => 285000,
                'description' => "Buket Bunga Premium dalam Nuansa Warna Pink, Rangkaian Bunga Mawar Putih, Mawar Pink, Daisy, Krisan, dan Fillers, Dikemas Cantik dalam Wrapping Paper Premium, Melambangkan Kasih Sayang, Gelora Cinta, dan Keanggunan",
            ],            
            [
                'name' => 'Secret Admirer',
                'image' => '9.png',
                'category' => 1,
                'price' => 485000,
                'description' => "Pengaturan Indah Mawar Merah, Dihiasi dengan Daun Ruscus, Dibungkus dengan Kertas Pembungkus Dua Sisi Merah Muda dan Abu-abu, Cocok dengan Busur Hitam, Melambangkan Cinta dan Kasih Sayang, Hadiah Sempurna untuk Gadis atau Orang yang Anda Cintai",
            ],
            [
                'name' => 'Sugar Plum Bouquet',
                'image' => '10.png',
                'category' => 1,
                'price' => 735000,
                'description' => "Buket Bunga Premium dalam Nuansa Warna Ungu Putih, Rangkaian Bunga Lily Ungu, Mawar Ungu, Mawar Putih, Daisy, Krisan, dan Fillers, Dikemas Cantik dalam Wrapping Paper Premium, Melambangkan Kasih Sayang, Gelora Cinta, dan Keanggunan",
            ],            [
                'name' => 'The Azure Bouquet',
                'image' => '11.png',
                'category' => 1,
                'price' => 385000,
                'description' => "Buket Bunga Premium dalam Nuansa Warna Biru, Rangkaian Bunga Mawar Biru, Mawar Putih, Daisy, Krisan, dan Fillers, Dikemas Cantik dalam Wrapping Paper Premium, Melambangkan Kasih Sayang, Gelora Cinta, dan Keanggunan",
            ],
        //Fresh Flower
            [
                'name' => 'Blooming Red',
                'image' => '2.png',
                'category' => 2,
                'price' => 380000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa Warna Merah",
            ],
            [
                'name' => 'Dreamy Luxurious',
                'image' => '12.png',
                'category' => 2,
                'price' => 1800000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa Warna Merah dan Pink yang sangat indah",
            ],
            [
                'name' => 'Magical Blue Majesty',
                'image' => '13.png',
                'category' => 2,
                'price' => 2000000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa berbagai macam arna yang indah",
            ],
            [
                'name' => 'Pink Elena',
                'image' => '14.png',
                'category' => 2,
                'price' => 555000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa warna Pink",
            ],
            [
                'name' => 'Romantic Blushing',
                'image' => '15.png',
                'category' => 2,
                'price' => 991000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa Warna Merah, Pink dan Putih",
            ],
            [
                'name' => 'Sunset Love Tulips',
                'image' => '16.png',
                'category' => 2,
                'price' => 950000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa Warna Orange",
            ],            
            [
                'name' => 'Tosca Skies',
                'image' => '17.png',
                'category' => 2,
                'price' => 2200000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa berbagai macam warna yang menarik dan juga sangat soft",
            ],
            [
                'name' => 'White and Wild',
                'image' => '18.png',
                'category' => 2,
                'price' => 790000,
                'description' => "Pelengkap Momen Spesial, Buket Bunga Premium dalam Nuansa warna Putih",
            ],
        //Table Flower
            [
                'name' => 'Bright Sweet Lemon',
                'image' => '3.png',
                'category' => 3,
                'price' => 2500000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa Warna Kuning dan Putih",
            ],
            [
                'name' => 'Caramel Antique',
                'image' => '19.png',
                'category' => 3,
                'price' => 2500000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa campuran beberapa warna",
            ],
            [
                'name' => 'Dreamy Unicorn Luxury',
                'image' => '20.png',
                'category' => 3,
                'price' => 200000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa berbagai macam warna yang soft",
            ],
            [
                'name' => 'Luxury Blush Delight',
                'image' => '21.png',
                'category' => 3,
                'price' => 3000000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa warna Pink dan Putih",
            ],
            [
                'name' => 'Peachy Perfect Luxury',
                'image' => '22.png',
                'category' => 3,
                'price' => 5000000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa banyak perpaduan warnah yang indah",
            ],
            [
                'name' => 'Red Rhapsody',
                'image' => '23.png',
                'category' => 3,
                'price' => 2300000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa berbagai macam warna yang indah",
            ],
            [
                'name' => 'Sunset Paradise Luxury',
                'image' => '24.png',
                'category' => 3,
                'price' => 2800000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa berbagai macam warna yang soft",
            ],
            [
                'name' => 'Sweet Elegance Luxury',
                'image' => '25.png',
                'category' => 3,
                'price' => 3200000,
                'description' => "Pelengkap Momen Spesial, Bunga Premium dalam Nuansa berbagai macam warna yang soft",
            ],
        //Standing Flower
            [
                'name' => 'Flaming Fortune',
                'image' => '4.png',
                'category' => 4,
                'price' => 2385000,
                'description' => "Standing Flower Spesial, Terdiri dari Mawar Merah, Mawar Orange, Lily Merah, Hortensia, Cymbidium, dan Baby's Breath, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'Alluring Blooms',
                'image' => '26.png',
                'category' => 4,
                'price' => 2185000,
                'description' => "Standing Flower Spesial, Terdiri dari Mawar Putih, Mawar Ungu, Mawar Pink,Lily, Hortensia, Amarantus, Bresika, Krisan, Cymbidium, dan Baby's Breath, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'Blooming Pursuits',
                'image' => '27.png',
                'category' => 4,
                'price' => 1850000,
                'description' => "Standing Flower Spesial, Terdiri dari Calla Lily Hijau, Lily Merah, Lily Putih, Mawar Kuning, Mawar Merah, Krisan Kuning, Carnation, Baby Rose Merah, Cymbidium, dan Daun Evi, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'Bright Blaze',
                'image' => '28.png',
                'category' => 4,
                'price' => 1685000,
                'description' => "Standing Flower Spesial, Terdiri dari Mawar Merah, Mawar Orange, Lily, Carnation, Baby Rose, Carnation, Cymbidium, Hortensia, dan Baby's Breath, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'Charmign Blossom',
                'image' => '29.png',
                'category' => 4,
                'price' => 1985000,
                'description' => "Standing Flower Spesial, Terdiri dari Mawar Merah Muda, Cymbidium, Lily Merah Muda, Baby's Breath, Carnation, Antorium, dan Hortensia, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'Eve Vintage Callali Rose',
                'image' => '30.png',
                'category' => 4,
                'price' => 985000,
                'description' => "3 Cymbidium, 3 Callalili, 15 Rose , 2 Baby Rose, Dihiasi dengan Babys Breath dan Daun, Dikemas dalam Standing Vase, Melambangkan Keromantisan, Simpati, dan Cinta, Cocok untuk Dihadiahi kepada Orang Tercinta",
            ],
            [
                'name' => 'Serenity',
                'image' => '31.png',
                'category' => 4,
                'price' => 1785000,
                'description' => "Standing Flower Spesial, Terdiri dari Mawar Putih, Lily Putih, Carnation, Hortensia, Cymbidium, Lisiantus, Baby's Breath, dan Daun Evi, Diletakkan pada Standing Vase, Cocok Sebagai Ungkapan Ucapan Selamat",
            ],
            [
                'name' => 'White Radiance Luxury',
                'image' => '32.png',
                'category' => 4,
                'price' => 785000,
                'description' => "2 Lili dan 15 Mawar, Dihiasi dengan 15 Chrysant Jumbo, Daun, dan Babys Breath, Dirangkai dalam Standing Vase, Melambangkan Kelembutan, Kesucian, dan Rasa Sayang, Cocok untuk Dihadiahkan pada Orang Tersayang",
            ]

        ]);
    }
}
