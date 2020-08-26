
server side auth way
- user visits browser
- user logs with form from browser
- laravel keeps user auth info (session)

api side way
- user visits browser
- user logs in with form

- laravel authenticates user and gives a token (JWT)
- user requests info from api with JWT

- HTTP Header Authorization


Start
- composer require tymon/jwt-auth

Utilities:
- theme: monokai.pro
- font: cascadia code