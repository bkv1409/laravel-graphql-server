<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Person;

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
        // this allows us to query a particular id
        // it is passed to resolve() below
        return [
            'id' => ['name' => 'id', 'type' => Type::nonNull(Type::int())],
        ];
    }

    public function resolve($root, $args)
    {
        if (isset($args['id'])) {
            return Person::where('id', $args['id'])->get()->first();
        }
    }
}
