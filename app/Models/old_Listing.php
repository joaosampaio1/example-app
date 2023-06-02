<?php
    namespace App\Models;

    class old_Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'L1',
                    'description' => 'dummy 1'
                ],
                [
                    'id' => 2,
                    'title' => 'L2',
                    'description' => 'dummy 2'
                ]
                ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }