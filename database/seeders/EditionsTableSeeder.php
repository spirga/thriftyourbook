<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Book;
use App\Models\Edition;

class EditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::where('book_title', 'Harry Potter and the Sorcerer\'s Stone')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1474154022i/3.jpg',
            'publisher' => 'Scholastic Inc.',
            'edition_year' => 2003,            
            'pages' => 309,
            'cover_type' => 'HC',
        ]);      
        
        $book = Book::where('book_title', 'Harry Potter and the Sorcerer\'s Stone')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1622222711i/22841994.jpg',
            'publisher' => 'Bloomsbury',
            'edition_year' => 2014,            
            'pages' => 332,
            'cover_type' => 'PB',
        ]);
        
        $book = Book::where('book_title', 'Harry Potter and the Sorcerer\'s Stone')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1372555797i/17372039.jpg',
            'publisher' => 'Scholastic',
            'edition_year' => 2013,            
            'pages' => 309,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Chamber of Secrets')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1474169725i/15881.jpg',
            'publisher' => 'Arthur A. Levine Books',
            'edition_year' => 1999,            
            'pages' => 341,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Prisoner of Azkaban')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1630547330i/5.jpg',
            'publisher' => 'Scholastic Inc.',
            'edition_year' => 2004,            
            'pages' => 435,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Goblet of Fire')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1554006152i/6.jpg',
            'publisher' => 'Scholastic Inc.',
            'edition_year' => 2002,            
            'pages' => 734,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Order of the Phoenix')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1546910265i/2.jpg',
            'publisher' => 'Scholastic Inc.',
            'edition_year' => 2004,            
            'pages' => 870,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Half-Blood Prince')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1587697303i/1.jpg',
            'publisher' => 'Scholastic Inc.',
            'edition_year' => 2005,            
            'pages' => 652,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Harry Potter and the Deathly Hallows')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1632235105i/22844208.jpg',
            'publisher' => 'Bloomsbury',
            'edition_year' => 2014,
            'pages' => 620,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'A Little Life')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1453060759i/25852828.jpg',
            'publisher' => 'Anchor',
            'edition_year' => 2016,
            'pages' => 816,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'The Seven Husbands of Evelyn Hugo')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1527540345i/33160963.jpg',
            'publisher' => 'Washington Square Press',
            'edition_year' => 2018,
            'pages' => 389,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Where the Crawdads Sing')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1582135294i/36809135.jpg',
            'publisher' => 'G.P. Putnam’s Sons',
            'edition_year' => 2018,
            'pages' => 370,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'Conversations with Friends')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1638729263i/32187419.jpg',
            'publisher' => 'Faber & Faber',
            'edition_year' => 2018,
            'pages' => 323,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Norwegian Wood')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1630460042i/11297.jpg',
            'publisher' => 'Vintage Books',
            'edition_year' => 2000,
            'pages' => 296,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Norwegian Wood')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1616843770i/17308035.jpg',
            'publisher' => 'Einaudi',
            'edition_year' => 2012,
            'pages' => 388,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Before the Coffee Gets Cold')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1560955053i/44421460.jpg',
            'publisher' => 'Picador',
            'edition_year' => 2019,
            'pages' => 213,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Little Women')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1400837889i/20893528.jpg',
            'publisher' => 'Puffin Classics',
            'edition_year' => 2014,
            'pages' => 816,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'The Great Gatsby')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1603742148i/55333945.jpg',
            'publisher' => 'Modern Library',
            'edition_year' => 2021,
            'pages' => 192,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Educated')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1534667345i/40060637.jpg',
            'publisher' => 'Windmill Books',
            'edition_year' => 2018,
            'pages' => 384,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Lepnums un Aizspriedumi')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1335123223i/13612903.jpg',
            'publisher' => 'Jumava',
            'edition_year' => 2011,
            'pages' => 400,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Robinsons Krūzo')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1299185050i/10661493.jpg',
            'publisher' => 'Zvaigzne ABC',
            'edition_year' => 2001,
            'pages' => 303,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'Jāzeps un viņa brāļi')->first();
        $book->editions()->create([
            'image_url' => 'https://www.zvaigzne.lv/images/books/111313/300x0_jazepsunvinabrali_978-9934-0-4915-6.jpg',
            'publisher' => 'Zvaigzne ABC',
            'edition_year' => 2015,
            'pages' => 296,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'Kalendārs mani sauc')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1609151707i/56338211.jpg',
            'publisher' => 'Orbīta',
            'edition_year' => 2020,
            'pages' => 336,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Death of a Salesman')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1554514105i/12898.jpg',
            'publisher' => 'Heinemann Library',
            'edition_year' => 1994,
            'pages' => 117,
            'cover_type' => 'HC',
        ]);
        $book = Book::where('book_title', 'Dorfpunks')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1185744325i/1603221.jpg',
            'publisher' => 'Rowohlt Taschenbuch Verlag',
            'edition_year' => 2005,
            'pages' => 204,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'The 5 AM Club: Own Your Morning. Elevate Your Life')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1545910967i/37502596.jpg',
            'publisher' => 'HarperCollins Publishers',
            'edition_year' => 2018,
            'pages' => 314,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'The Fellowship of the Ring')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1585164808i/51177733.jpg',
            'publisher' => 'HarperCollins',
            'edition_year' => 2020,
            'pages' => 415,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'On Earth We\'re Briefly Gorgeous')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1607857168i/52544164.jpg',
            'publisher' => 'Vintage',
            'edition_year' => 2020,
            'pages' => 242,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'Wuthering Heights')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1546419424i/15994537.jpg',
            'publisher' => 'Penguin Books',
            'edition_year' => 2021,
            'pages' => 360,
            'cover_type' => 'PB',
        ]);
        $book = Book::where('book_title', 'American Psycho')->first();
        $book->editions()->create([
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1436934349i/28676.jpg',
            'publisher' => 'Vintage Contemporaries',
            'edition_year' => 1991,
            'pages' => 399,
            'cover_type' => 'PB',
        ]);
    }
}