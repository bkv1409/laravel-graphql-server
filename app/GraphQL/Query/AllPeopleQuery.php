<?php

namespace App\GraphQL\Query;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use App\Person;

class AllPeopleQuery extends Query
{
    protected $attributes = [
        'name' => 'allPeople'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Person'));
    }

    public function args()
    {
        return [];
    }

    public function resolve($root, $args)
    {
        return Person::all();
    }
}
