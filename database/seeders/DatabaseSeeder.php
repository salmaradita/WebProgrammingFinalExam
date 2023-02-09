<?php

namespace Database\Seeders;

use App\Models\Gender;
use App\Models\Item;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();
        Role::create([
            'role_name' => "admin"
        ]);
        Role::create([
            'role_name' => "user"
        ]);

        Gender::create([
            'gender_desc' => "Laki-laki"
        ]);
        Gender::create([
            'gender_desc' => "Perempuan"
        ]);

        Item::create([
            'item_name' => "Bayam Singapur",
            'item_desc' => "Bayam adalah tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau. Tumbuhan ini berasal dari Amerika tropik namun sekarang tersebar ke seluruh dunia. Tumbuhan ini dikenal sebagai sayuran sumber zat besi yang penting bagi tubuh",
            'price' => 20000
        ]);

        Item::create([
            'item_name' => "Brokoli Jepang",
            'item_desc' => "Brokoli adalah tanaman yang sering dibudidayakan sebagai sayur. Brokoli adalah kultivar dari spesies yang sama dengan kubis dan kembang kol, yaitu Brassica oleracea. Brokoli berasal dari daerah Laut Tengah dan sudah sejak masa Yunani Kuno dibudidayakan.",
            'price' => 25000
        ]);

        Item::create([
            'item_name' => "Cabai Mexico",
            'item_desc' => "Cabai adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana pemanfaatannya. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa untuk makanan.",
            'price' => 22000
        ]);

        Item::create([
            'item_name' => "Daun Bawang",
            'item_desc' => "Daun bawang merupakan jenis sayuran dari kelompok bawang yang banyak digunakan dalam masakan. Dalam masakan Indonesia, daun bawang bisa ditemukan misalnya dalam martabak telur, sebagai bagian dari sup, atau sebagai bumbu tabur seperti pada soto.",
            'price' => 23000
        ]);

        Item::create([
            'item_name' => "Kubis Korea",
            'item_desc' => "Kubis adalah tanaman dua tahunan hijau atau ungu berdaun, ditanam sebagai tanaman tahunan sayuran untuk kepala padat berdaunnya. Erat kaitannya dengan tanaman cole lainnya, seperti brokoli, kembang kol, dan kubis brussel, itu diturunkan dari B. oleracea var. oleracea, kubis lapangan liar.",
            'price' => 21000
        ]);

        Item::create([
            'item_name' => "Kangkung",
            'item_desc' => "Kangkung adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Kangkung banyak dijual di pasar-pasar. Kangkung banyak terdapat di kawasan Asia, tempat asalnya tidak diketahui. dan merupakan tumbuhan yang dapat dijumpai hampir di mana-mana terutama di kawasan berair.",
            'price' => 28000
        ]);

        Item::create([
            'item_name' => "Kembang Kol",
            'item_desc' => "Kembang kol atau bunga kol merupakan tumbuhan yang termasuk dalam kelompok botrytis dari jenis Brassica oleracea. Selain itu, tumbuhan ini sebagai sayuran juga lazim dikenal sebagai kubis bunga yang merupakan terjemahan harfiah dari bahasa Belanda bloemkool. Kata blumkol juga dikenal secara lazim.",
            'price' => 22000
        ]);

        Item::create([
            'item_name' => "Pakcoy Amerika",
            'item_desc' => "Pakcoy atau bok choy merupakan jenis sayuran yang populer. Sayuran yang dikenal pula sebagai sawi sendok ini mudah dibudidayakan dan dapat dimakan segar atau diolah menjadi asinan.",
            'price' => 25000
        ]);

        Item::create([
            'item_name' => "Terong Belanda",
            'item_desc' => "Terung adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India dan Sri Lanka. Terung berkerabat dekat dengan kentang dan leunca, dan agak jauh dari tomat. Terung ialah terna yang sering ditanam secara tahunan. Tanaman ini tumbuh hingga 40–150 cm tingginya.",
            'price' => 26000
        ]);

        Item::create([
            'item_name' => "Jagung Malaysia",
            'item_desc' => "Jagung adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan, bulir jagung adalah pangan pokok, sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia.",
            'price' => 21000
        ]);


        Item::create([
            'item_name' => "Bayam Singapur",
            'item_desc' => "Bayam adalah tumbuhan yang biasa ditanam untuk dikonsumsi daunnya sebagai sayuran hijau. Tumbuhan ini berasal dari Amerika tropik namun sekarang tersebar ke seluruh dunia. Tumbuhan ini dikenal sebagai sayuran sumber zat besi yang penting bagi tubuh",
            'price' => 20000
        ]);

        Item::create([
            'item_name' => "Brokoli Jepang",
            'item_desc' => "Brokoli adalah tanaman yang sering dibudidayakan sebagai sayur. Brokoli adalah kultivar dari spesies yang sama dengan kubis dan kembang kol, yaitu Brassica oleracea. Brokoli berasal dari daerah Laut Tengah dan sudah sejak masa Yunani Kuno dibudidayakan.",
            'price' => 25000
        ]);

        Item::create([
            'item_name' => "Cabai Mexico",
            'item_desc' => "Cabai adalah buah dan tumbuhan anggota genus Capsicum. Buahnya dapat digolongkan sebagai sayuran maupun bumbu, tergantung bagaimana pemanfaatannya. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa untuk makanan.",
            'price' => 22000
        ]);

        Item::create([
            'item_name' => "Daun Bawang",
            'item_desc' => "Daun bawang merupakan jenis sayuran dari kelompok bawang yang banyak digunakan dalam masakan. Dalam masakan Indonesia, daun bawang bisa ditemukan misalnya dalam martabak telur, sebagai bagian dari sup, atau sebagai bumbu tabur seperti pada soto.",
            'price' => 23000
        ]);

        Item::create([
            'item_name' => "Kubis Korea",
            'item_desc' => "Kubis adalah tanaman dua tahunan hijau atau ungu berdaun, ditanam sebagai tanaman tahunan sayuran untuk kepala padat berdaunnya. Erat kaitannya dengan tanaman cole lainnya, seperti brokoli, kembang kol, dan kubis brussel, itu diturunkan dari B. oleracea var. oleracea, kubis lapangan liar.",
            'price' => 21000
        ]);

        Item::create([
            'item_name' => "Kangkung",
            'item_desc' => "Kangkung adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Kangkung banyak dijual di pasar-pasar. Kangkung banyak terdapat di kawasan Asia, tempat asalnya tidak diketahui. dan merupakan tumbuhan yang dapat dijumpai hampir di mana-mana terutama di kawasan berair.",
            'price' => 28000
        ]);

        Item::create([
            'item_name' => "Kembang Kol",
            'item_desc' => "Kembang kol atau bunga kol merupakan tumbuhan yang termasuk dalam kelompok botrytis dari jenis Brassica oleracea. Selain itu, tumbuhan ini sebagai sayuran juga lazim dikenal sebagai kubis bunga yang merupakan terjemahan harfiah dari bahasa Belanda bloemkool. Kata blumkol juga dikenal secara lazim.",
            'price' => 22000
        ]);

        Item::create([
            'item_name' => "Pakcoy Amerika",
            'item_desc' => "Pakcoy atau bok choy merupakan jenis sayuran yang populer. Sayuran yang dikenal pula sebagai sawi sendok ini mudah dibudidayakan dan dapat dimakan segar atau diolah menjadi asinan.",
            'price' => 25000
        ]);

        Item::create([
            'item_name' => "Terong Belanda",
            'item_desc' => "Terung adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India dan Sri Lanka. Terung berkerabat dekat dengan kentang dan leunca, dan agak jauh dari tomat. Terung ialah terna yang sering ditanam secara tahunan. Tanaman ini tumbuh hingga 40–150 cm tingginya.",
            'price' => 26000
        ]);

        Item::create([
            'item_name' => "Jagung Malaysia",
            'item_desc' => "Jagung adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi. Bagi penduduk Amerika Tengah dan Selatan, bulir jagung adalah pangan pokok, sebagaimana bagi sebagian penduduk Afrika dan beberapa daerah di Indonesia.",
            'price' => 21000
        ]);

        User::create([
            'first_name' => 'Fisalma',
            'last_name' => 'Maradita',
            'email' => 'salma@admin.com',
            'role_id' => 1,
            'gender_id' => 2,
            'password' => Hash::make('admin123'),
            'display_picture_link' => 'salma.jpg'
        ]);

    }
}
