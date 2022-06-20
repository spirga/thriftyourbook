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
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'listing_description' => 'Read it one time, has some markings with pencil.',
            'price' => 6,
            'condition' => 'Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 10,
            'listing_description' => 'Spilled coffee on it but everything is readable.',
            'price' => 3,
            'condition' => 'Acceptable',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 11,
            'price' => 10,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 24,
            'price' => 7.5,
            'listing_description' => 'Haven\'t read it, still has plastic wrap.',
            'condition' => 'New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD Post', 
        ]);
        $user = User::where('name', 'user2')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'listing_description' => 'It\'s been read many times, so there\'s some obvious signs of usage',
            'price' => 7,
            'condition' => 'Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'listing_description' => 'It\'s been read many times, there\'s markings with pencil as well',
            'price' => 7,
            'condition' => 'Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 2,
            'price' => 5,
            'condition' => 'Like New',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 12,
            'price' => 7.5,
            'condition' => 'New',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 18,
            'price' => 10,
            'condition' => 'Very Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 18,
            'price' => 10,
            'condition' => 'Very Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 20,
            'price' => 6,
            'condition' => 'Very Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 23,
            'price' => 7,
            'condition' => 'New',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user->listings()->create([
            'edition_id' => 8,
            'price' => 5,
            'condition' => 'Acceptable',
            'ship_incl_price' => true,
            'shipping_type' => 'Post', 
        ]);
        $user = User::where('name', 'user3')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'listing_description' => 'No signs of damage except bent cover',
            'price' => 8,
            'condition' => 'Very Good',
            'ship_incl_price' => true,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 6,
            'price' => 8,
            'condition' => 'New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 7,
            'price' => 8,
            'condition' => 'New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 13,
            'price' => 7,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 15,
            'price' => 9,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 21,
            'price' => 5,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 17,
            'price' => 5,
            'condition' => 'Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user = User::where('name', 'user4')->first();
        $user->listings()->create([
            'edition_id' => 1,
            'price' => 8,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 3,
            'price' => 6,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 5,
            'price' => 7,
            'condition' => 'Like New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 9,
            'price' => 7,
            'condition' => 'Very Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 14,
            'price' => 7,
            'listing_description' => 'I have three of these books, so I\'m selling this',
            'condition' => 'New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 14,
            'price' => 7,
            'listing_description' => 'I have three of these books, so I\'m selling this',
            'condition' => 'New',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 16,
            'price' => 7,
            'condition' => 'Very Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 19,
            'price' => 7,
            'condition' => 'Very Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 22,
            'price' => 7,
            'condition' => 'Very Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
        $user->listings()->create([
            'edition_id' => 25,
            'price' => 7,
            'condition' => 'Very Good',
            'ship_incl_price' => false,
            'shipping_type' => 'Omniva DPD', 
        ]);
    }
}