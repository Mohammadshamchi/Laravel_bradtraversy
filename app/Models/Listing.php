<?php
    namespace App\Models;

class Listing {
    public static function all(){
        // Actually this comes  from thre database but for Now
        return [
        [
        'id'=>1,
        'title'=>'Listing One',
        'description'=>'Lorem ipsum dolor sit amet',
        ],
        [
        'id'=>2,
        'title'=>'Listing two',
        'description'=>'Lorem ipsum 2 dolor sit amet',
        ]
        ];
    }
    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }
        }
    }
}
