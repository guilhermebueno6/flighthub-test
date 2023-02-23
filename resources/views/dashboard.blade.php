<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


        <!-- Vite req -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
        
    </head>
    <body class="antialiased">
        <div id="app">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="people-tab" data-bs-toggle="tab" data-bs-target="#people" type="button" role="tab" aria-controls="people" aria-selected="false">People</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="planet-tab" data-bs-toggle="tab" data-bs-target="#planet" type="button" role="tab" aria-controls="planet" aria-selected="true">Planets</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="starship-tab" data-bs-toggle="tab" data-bs-target="#starship" type="button" role="tab" aria-controls="starship" aria-selected="false">Starships</button>
                </li>

            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="people" role="tabpanel" aria-labelledby="people-tab">
                    <search-component></search-component>
                </div>

                <div class="tab-pane fade" id="planet" role="tabpanel" aria-labelledby="planet-tab">
                    <planet-component></<planet-component>
                </div>

                <div class="tab-pane fade" id="starship" role="tabpanel" aria-labelledby="starship-tab">
                    <starships-component></<starships-component>
                </div>

            </div>

            <div class="col-12 p-5">
                <h1>Star Wars API Demo</h1>
                <p>
                    Visualize some of the information getting accessed from the SWAPI! 
                    <br>
                    Try searching for specific characters on the People Search bar!
                </p>
            </div>

        </div>  
    </body>
</html>
