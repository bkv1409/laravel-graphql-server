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
            ],
            'friends' => [
                'type' => Type::listOf(GraphQL::type('Person')),
                'description' => 'Person\'s friends'
            ]
        ];
    }

    public function resolveFriendsField($root, $args)
    {
        $fixtures = [
            1 => [
                'id' => 1,
                'firstName' => 'Kyle',
                'lastName' => 'Reyes',
                'username' => 'kreyes',
                'email' => 'kyle.reyes@example.com',
                'friends' => [2, 3]
            ],
            2 => [
                'id' => 2,
                'firstName' => 'Emma',
                'lastName' => 'Thomsen',
                'username' => 'ethomsen',
                'email' => 'emma.thomsen@example.com',
                'friends' => [1, 3],
            ],
            3 => [
                'id' => 3,
                'firstName' => 'Crispim',
                'lastName' => 'Ramos',
                'username' => 'cramos',
                'email' => 'crispim.ramos@example.com',
                'friends' => [1, 2],
            ],
        ];

        $friendArray = [];
        foreach ($root['friends'] as $friendId) {
            $friendArray[$friendId] = $fixtures[$friendId];
        }

        return $friendArray;
    }
}
