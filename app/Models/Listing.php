<?php 
    namespace App\Models;

    class Listing{
        public static function all(){
            return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, corrupti fugit fuga amet inventore omnis nostrum laborum, excepturi delectus suscipit, dignissimos quis molestias saepe neque rerum. Explicabo, eum nam itaque, facere cumque voluptatem a dolorum blanditiis totam ut numquam provident ducimus, omnis molestiae! Quae id modi nam error, omnis doloremque?"
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, corrupti fugit fuga amet inventore omnis nostrum laborum, excepturi delectus suscipit, dignissimos quis molestias saepe neque rerum. Explicabo, eum nam itaque, facere cumque voluptatem a dolorum blanditiis totam ut numquam provident ducimus, omnis molestiae! Quae id modi nam error, omnis doloremque?"
            ]
            ];
        }

        public static function find($id){
            $listings = self::all();
            
            foreach ($listings as $listing) {
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }
?>