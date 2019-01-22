<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link href="/asset/css/style.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="/asset/js/script.js"></script>
        <title>test</title>
        <style>
            /* width */
            ::-webkit-scrollbar {
            width: 12px;
            height: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey; 
            border-radius: 5px;
            }
            
            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, rgba(2,37,43,1) 0%, rgba(0,60,140,1) 100%);
            border-radius: 5px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, rgba(2,37,43,1) 0%, rgba(0,60,140,1) 100%);
            }
        </style>
    </head>
    <body>
        <header>
            @include('components.navbar')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('components.footer')
        </footer>
    </body>
</html>