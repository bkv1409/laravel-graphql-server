# laravel-graphql-server

This is a Laravel example repo for adding a GraphQL endpoint to your existing Laravel app, developed for https://www.modernjsforphpdevs.com/

## Requirements

* PHP 7.1.3 or higher
* [Node.js](https://nodejs.org/en/download/) 6.0.0 or higher
* [Docker](https://www.docker.com/community-edition)
* and the [usual Laravel application requirements][1].

## Installation

Clone with submodules

```bash
$ git clone --recursive git@github.com:zorfling/laravel-graphql-server.git
```

Use docker to spin up nginx, mysql and the workspace image.

```bash
$ cd laradock
$ cp env-example .env
$ docker-compose up -d nginx mysql workspace
```

Enter the `workspace` image to run commands

```bash
$ docker-compose exec workspace bash
```

Install the composer dependencies:

```bash
root@a99b46dd3004:/var/www# composer install
```

Then install the node dependencies:

```bash
root@a99b46dd3004:/var/www# yarn

# OR

root@a99b46dd3004:/var/www# npm install
```

## Usage

Initialise Laravel

```bash
# in the workspace image
root@a99b46dd3004:/var/www# cp .env.sample .env
root@a99b46dd3004:/var/www# ./artisan key:generate
```

Run migrations and seed data

```bash
# in the workspace image
root@a99b46dd3004:/var/www# ./artisan migrate
root@a99b46dd3004:/var/www# ./artisan db:seed
```

Navigate to http://localhost/graphiql to see the GraphiQL explorer.

Try out some queries:

Get the username, first name and last name of all users, as well as their friends' usernames.

```
{
  allPeople {
    username
    first_name
    last_name
    friends {
      username
    }
  }
}
```

Get the username of user id 1, along with the username, first name, last name and email of all his friends.

```
{
  person (id: 1) {
    username
    friends {
      username
      first_name
      last_name
      email
    }
  }
}
```

[1]: https://laravel.com/docs/5.6#installation
