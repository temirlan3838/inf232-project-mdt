<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/front/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div style="text-align:center" class="header_logo"> <a href="/mdt"><img src="/front/img/logo/one lone mdt.png" alt="mdtLogo" width="230" height="30"></a> </div>
    <div class="container login">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="{{ route('add-reg') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __("User name")}}</label>
                    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">{{ __("Email address")}}</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">{{ __("Password")}}</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">{{ __("Register")}}</button>
            </form>
        </div>
    </div>
</body>

</html>