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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                    <planet-component :planets="{{json_encode($planets)}}"></<planet-component>
                </div>

                <div class="tab-pane fade" id="starship" role="tabpanel" aria-labelledby="starship-tab">
                    <starships-component :starships="{{json_encode($starships)}}"></<starships-component>
                </div>


                

                
                

            </div>

            
        </div>  


    </body>
</html>
