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
    <div class="container">
        <div class="container_box">
        <h1>{{ __("My order")}}:</h1>
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Status</th>
                        <th scope="col">PayMethod</th>
                        <th scope="col">PayStatus</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $item)
                    <tr>
                        <th> {{ $item->id }} </th>
                        <th> {{ $item->name }} </th>
                        <th> {{ $item->status }} </th>
                        <th> {{ $item->payMethod }} </th>
                        <th> {{ $item->payStatus }} </th>
                        <th> {{ $item->address }} </th>
                        <th> <img src="/front/img/{{ $item->image }}" width=230px height=300px alt=""> </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>