<?php

namespace App\Models;

class Listing {

  public static function all() {
    return [
      [
        'id' => '1',
        'title' => 'Listing Number One',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos velit vel ipsa, odio in consectetur corporis nobis cupiditate deleniti dolorum laboriosam minima. Officia tempore numquam, aliquid eaque fugit optio laboriosam neque et eius dolorem quia facilis, fuga doloremque. Non deserunt itaque at reprehenderit totam fugiat temporibus officia dicta est aut.'
      ],
      [
        'id' => '2',
        'title' => 'Listing Number Two',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos velit vel ipsa, odio in consectetur corporis nobis cupiditate deleniti d.'
      ],
      [
        'id' => '3',
        'title' => 'Listing Number Three',
        'description' => 'Dolorum laboriosam minima. Officia tempore numquam, aliquid eaque fugit optio laboriosam neque et eius dolorem quia facilis, fuga doloremque. Non deserunt itaque at reprehenderit totam fugiat temporibus officia dicta est aut.'
      ]

    ];
  }



  public static function find($id) {
    $listings = self::all();

    foreach ( $listings as $listing) {
      if($listing['id'] === $id ) {
        return $listing;
      }
    }
  }

}