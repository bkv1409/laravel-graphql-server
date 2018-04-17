<?php

namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use GraphQL;

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
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user'
            ],
            'first_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The firstName of the user'
            ],
            'last_name' => [
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
            ],
            'friends' => [
                'type' => Type::listOf(GraphQL::type('Person')),
                'description' => 'Person\'s friends'
            ]
        ];
    }
}
