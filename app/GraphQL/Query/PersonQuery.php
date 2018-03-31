<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

// use App\User;

class PersonQuery extends Query
{
    protected $attributes = [
        'name' => 'person'
    ];

    public function type()
    {
        return GraphQL::type('Person');
    }

    public function args()
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::nonNull(Type::string())],
        ];
    }

    public function resolve($root, $args)
    {
        $fixtures = [
            [
                'id' => '1',
                'firstName' => 'Kyle',
                'lastName' => 'Reyes',
                'username' => 'kreyes',
                'email' => 'kyle.reyes@example.com',
            ],
            [
                'id' => '2',
                'firstName' => 'Emma',
                'lastName' => 'Thomsen',
                'username' => 'ethomsen',
                'email' => 'emma.thomsen@example.com',
            ],
            [
                'id' => '3',
                'firstName' => 'Crispim',
                'lastName' => 'Ramos',
                'username' => 'cramos',
                'email' => 'crispim.ramos@example.com',
            ],
        ];

        foreach ($fixtures as $person) {
            if ($person['id'] === $args['id']) {
                return $person;
            }
        }

        return null;
    }
}
