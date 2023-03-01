<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Aqui es la vista desde las Views </h1>

@foreach($products as $product)

<p>{{$product->name}} cuesta {{$product->price}}€</p>

@endforeach


    
</body>
</html>