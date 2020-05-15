<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'user',
        'description' => 'A type',
        'model'=>User::class
    ];

    public function fields(): array
    {
        
        return [
            'name'=>['type'=>Type::string(),'description'=>'este campo es el nombre del usuario'],
            'email'=>['type'=>Type::string(),'description'=>'este campo es el email del usuario'],
            'password'=>['type'=>Type::string(),'description'=>'este campo es el password del usuario']
        ];
    }
}
