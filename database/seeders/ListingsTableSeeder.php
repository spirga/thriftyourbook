<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Listing;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('name', 'user1')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'listing_description' => 'I bought this book years ago but I\'m not planning to read it. It has been sitting in my bookshelf since then, so there are some minor flaws.',
            'price' => 9,
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD, Post', 
            'image_url' => 'https://images.squarespace-cdn.com/content/v1/5bd0d577755be21b6c237d35/1579228743887-MOH288VFBCOW1AQEQOX1/20200116_203540.jpg?format=1000w'
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'listing_description' => 'Read it one time, has some markings with pencil.',
            'price' => 6,
            'condition' => 'Good',
            'shipping_type' => 'Omniva, DPD, Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 10,
            'listing_description' => 'Spilled coffee on it but everything is readable.',
            'price' => 3,
            'condition' => 'Acceptable',
            'shipping_type' => 'Omniva, DPD, Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 11,
            'price' => 10,
            'listing_description' => 'Everything is great',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD, Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 24,
            'price' => 7.5,
            'listing_description' => 'Haven\'t read it, still has plastic wrap.',
            'condition' => 'New',
            'shipping_type' => 'Omniva, DPD, Post', 
        ]);
        $user = User::where('name', 'user2')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'listing_description' => 'It\'s been read many times, so there\'s some obvious signs of usage',
            'price' => 7,
            'condition' => 'Good',
            'shipping_type' => 'Post', 
            'image_url' => 'https://media.karousell.com/media/photos/products/2021/11/14/harry_potter_sorcerers_stone_b_1636887816_70261b7e_progressive.jpg'
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'listing_description' => 'It\'s been read many times, there\'s markings with pencil as well',
            'price' => 7,
            'condition' => 'Good',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 2,
            'price' => 5,
            'listing_description' => 'Everything is in great condition, read only once',
            'condition' => 'Like New',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 12,
            'price' => 7.5,
            'listing_description' => 'Bought it but haven\'t gotten to reading it, not planning to either',
            'condition' => 'New',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 18,
            'price' => 10,
            'listing_description' => 'Has been read once, everything is good but the spine is broken in',
            'condition' => 'Very Good',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 18,
            'price' => 10,
            'listing_description' => 'Good condition',
            'condition' => 'Very Good',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 20,
            'price' => 6,
            'listing_description' => 'DNF\'t it, has pencil markings in the first pages',
            'condition' => 'Very Good',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 23,
            'price' => 7,
            'listing_description' => 'Been sitting in my shelf for years, has not even been opened',
            'condition' => 'New',
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 8,
            'price' => 5,
            'listing_description' => 'The spine is damaged, some pages are folded, the cover has a bit of water damage, but text is readable',
            'condition' => 'Acceptable',
            'shipping_type' => 'Post', 
        ]);
        $user = User::where('name', 'user3')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'listing_description' => 'No signs of damage except bent cover',
            'price' => 8,
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 6,
            'price' => 8,
            'listing_description' => 'No signs of use',
            'condition' => 'New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 7,
            'price' => 8,
            'listing_description' => 'No signs of use',
            'condition' => 'New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 13,
            'price' => 7,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 15,
            'price' => 9,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 21,
            'price' => 5,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 17,
            'price' => 5,
            'listing_description' => 'My dog chewed on it for a few seconds, but everything else except the cover is in good condition.',
            'condition' => 'Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user = User::where('name', 'user4')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'price' => 8,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 3,
            'price' => 6,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'price' => 7,
            'listing_description' => 'Read it once, has been sitting in my shelf for years',
            'condition' => 'Like New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 9,
            'price' => 7,
            'listing_description' => 'Good condition',
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 14,
            'price' => 7,
            'listing_description' => 'I have three of these books, so I\'m selling this',
            'condition' => 'New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 14,
            'price' => 7,
            'listing_description' => 'I have three of these books, so I\'m selling this',
            'condition' => 'New',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 16,
            'price' => 7,
            'listing_description' => 'Read it once, has been sitting in my shelf for years, spine is bent',
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 19,
            'price' => 7,
            'listing_description' => 'Read it once, has been sitting in my shelf for years. Cover is bent.',
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 22,
            'price' => 7,
            'listing_description' => 'Read it once, has been sitting in my shelf for years, so it has some scratches from other books etc.',
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 25,
            'price' => 7,
            'listing_description' => 'Good condition, except the pages are a bit yellow.',
            'condition' => 'Very Good',
            'shipping_type' => 'Omniva, DPD', 
        ]);
    }
}