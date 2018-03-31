<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class PersonType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Person',
        'description' => 'A person'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the user'
            ],
            'firstName' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The firstName of the user'
            ],
            'lastName' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The lastName of the user'
            ],
            'username' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The username of the user'
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The email of user'
            ]
        ];
    }
}
