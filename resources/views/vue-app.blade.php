<!-- This file is used to render the vue application. There should be no need to modify it.  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
    <link href="{{ env('APP_ENV') == 'development' ? mix('css/app.css') : asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ env('APP_ENV') == 'development' ? mix('js/app.js') : asset('js/app.js') }}" defer></script>
</head>

<body>
    <div id="app"></div>
</body>

</html>