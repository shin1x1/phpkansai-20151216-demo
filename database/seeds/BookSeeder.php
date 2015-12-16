<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'asin' => '4844339451',
                'name' => 'Laravel リファレンス[Ver.5.1 LTS 対応] Web職人好みの新世代PHPフレームワーク',
            ],
            [
                'asin' => 'B00WHEJDKK',
                'name' => 'Laravelエキスパート養成読本 [モダンな開発を実現するPHPフレームワーク！]',
            ],
            [
                'asin' => 'B00F418SQ8',
                'name' => 'Vagrant入門ガイド',
            ],
        ];

        foreach ($books as $book) {
            Book::updateOrCreate($book);
        }
    }
}
