<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<div style="text-align:center" class="header_logo"> <a href="/mdt"><img src="/front/img/logo/one lone mdt.png" alt="mdtLogo" width="230" height="30"></a> </div>
<h1 style="text-align:center"><a class="btn btn-success" href="ordernow">Order Now</a></h1>
    <div class="container">
        <div class="container_box">
        <h1>{{ __("In your basket")}}:</h1>
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $item)
                    <tr>
                        <th> {{ $item->id }} </th>
                        <th> {{ $item->name }} </th>
                        <th> {{ $item->title }} </th>
                        <th> {{ $item->price }} </th>
                        <th> {{ $item->rating }} </th>
                        <th> <img src="/front/img/{{ $item->image }}" width=230px height=300px alt=""> </th>
                    <th > <a href="removecart/{{$item->cart_id}}" class="btn btn-warning">Remove</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h1 style="text-align:center"><a class="btn btn-success" href="ordernow">Order Now</a></h1>
</body>

</html>