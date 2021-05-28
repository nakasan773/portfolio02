<?php

use Illuminate\Database\Seeder;

class M_Products_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_products')->insert([
            [
                'product_name' => 'サンプルチキン×４袋',
                'category_id' => 6,
                'price' => 3480,
                'description' => '沖縄の高級地鶏を使ったパサつきがなくみずみずしい最高のチキン。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => 'ジンギスカン6人前',
                'category_id' => 6,
                'price' => 12000,
                'description' => '１番人気の特上ラムセット。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => '【高級】 江戸前握り寿司',
                'category_id' => 1,
                'price' => 220000,
                'description' => '銀座で時代を握ってきた、江戸前の粋と誇りを食す。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => '特製たこ焼セット',
                'category_id' => 3,
                'price' => 10,
                'description' => 'この価格は今だけ!本場の味がお取り寄せで味わえます。',
                'sale_status_id' => 2,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => '【国産うなぎ】 名古屋名物うな富士　肝入ひつまぶし',
                'category_id' => 1,
                'price' => 7800,
                'description' => 'お店で1本1本こだわりの手焼き。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => 'むなかた牛 塩もつ鍋セット',
                'category_id' => 5,
                'price' => 3480,
                'description' => 'ふるさと納税サイト「ふるさとチョイス」ににて「鍋部門ランキング」全国1位も獲得した「むなかた牛塩もつ鍋セット」。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => '希少なアスパラ2Lサイズ',
                'category_id' => 7,
                'price' => 3080,
                'description' => '甘くて柔らかい！抜群の食べ応えと極太さ！（朝採り即日出荷しています。つまりは鮮度抜群！）',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => '山形県産！サンプルみかん700g×4袋',
                'category_id' => 2,
                'price' => 5000,
                'description' => '外皮も薄くて実がぷりっぷり！甘いだけでなく、甘味と酸味のバランスがとれて大人気商品です。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
            [
                'product_name' => 'ザ・地元の日本酒1瓶',
                'category_id' => 4,
                'price' => 2800,
                'description' => '地元の伝統を引き継いだ確かな味。まさに日本を代表するような味わいに仕上がっております。【注意】未成年の販売は固くお断りしております。',
                'sale_status_id' => 1,
                'product_status_id' => 1,
                'regist_date' => new DateTime(),
                'user_id' => 1,
            ],
        ]);
    }
}
