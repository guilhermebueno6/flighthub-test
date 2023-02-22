
## Requirements

- [Docker](https://docs.docker.com/engine/install/)
- If on a Windows platform you may need to enable WSL 2

If facing any issues getting the project started, following [Laravel's documentation](https://laravel.com/docs/10.x/installation#laravel-and-docker) on installation with docker might be useful.

## Instructions

- Clone the project into the directory of your choice and cd into it (On windows you will need to cd this project inside your preferred distro for WSL)
- Run the following commands: 
    - ```./vendor/bin/sail up -d```
    - ```composer install```
    - ```./vendor/bin/sail artisan migrate --seed```
    - ```npm install```
    - ```npm run dev```

You will be able to access this application on your [localhost](http://localhost/).
On the application you're able to see a list of planets, starships and people from the starwars universe as well as search for specific people.

## Information

Technologies/Frameworks used:
- [Docker](https://docs.docker.com/)
- [Laravel](https://laravel.com/docs/10.x)
- [Vue.js](https://vuejs.org/guide/introduction.html)


