<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
     <x-partials.head />
</head>
<body>
    <x-header />
    <div class="container-fluid p-3 d-flex">
        <h1 class="text-center">Mensajes recibidos</h1>
        <p class="text-center"><strong> Nombre:</strong> {{ $msg['name_mess'] }}</p>
        <p class="text-center"><strong> Email:</strong> {{ $msg['email_mess'] }}</p>
        <p class="text-center"><strong> Asunto:</strong> {{ $msg['subject'] }}</p>
        <p class="text-center"><strong> Mensaje:</strong> {{ $msg['message'] }}</p>
    </div>

</body>
</html>