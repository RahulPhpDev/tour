<?php 

declare(strict_types=1);

namespace App\Enums;

class RoutesEnum {

    public function routes() {
       return   [
            'adminCategory' => [
                'index' =>  "admin.category.index",
                'create' =>  "admin.category.create",
                'store' =>  "admin.category.store",
                'destroy' =>  "admin.category.destroy",
                'edit' =>  "admin.category.edit",
                'update' =>  "admin.category.update",
            ],
            
            'adminSocial' => [
                'index' =>  "admin.social.index",
                'create' =>  "admin.social.create",
                'store' =>  "admin.social.store",
                'edit' =>  "admin.social.edit",
                'update' =>  "admin.social.update",
            ]
        ];
    }
}
// final class RoutesEnum 
// {
//     define("adminCategory", [
//         'index' =>  "admin.category.index",
//         'create' =>  "admin.category.create",
//         'store' =>  "admin.category.store",
//         'destroy' =>  "admin.category.destroy"
//     ]);
// }