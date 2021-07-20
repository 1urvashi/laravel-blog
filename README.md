# CMS


## Demo login info

user: admin@gmail.com | password: password


## Installation

```
git clone https://github.com/1urvashi/laravel-blog.git 

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

If you want dummy data, then run this-

```
php artisan db:seed --class=DummyDataSeeder
```

## API Endpoints

This projects exposes some API endpoints. You could request those endpoints with the `api_token` passed as query parameters, like this- `/api/posts?api_token=YOUR_API_KEY`. You can also pass the token as a Authorization Bearer token. The API key could be obtained from `/api/auth/token` endpoint. Available endpoints are-

```
/api/auth/token

/api/posts
/api/posts/{id}
/api/editposts/{id}
```

These endpoints are also available as a [Postman](https://www.postman.com/) collection [here](./Blog.postman_collection.json).

Feel free to email me, if you have any question.
