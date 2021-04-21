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
<!-- <h1 style="text-align:center"><a class="btn btn-success" href="ordernow">Order Now</a></h1> -->
<div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Amount</th>
        <th>${{$total}}</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tax</td>
        <td>$0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total +10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="{{route('order-place')}}" method="post">
  @csrf
  <div class="form-group">
    <textarea name="address" type="text" placeholder="enter your address" for="email"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment method</label>
    <p><input type="radio" value="cash" name="payment"><span>Online payment</span></p>
    <p><input type="radio" value="cash" name="payment"><span>Delivery payment</span></p>
  </div>
  
  <button type="submit" class="btn btn-default">Order now</button>
</form>
  </div>
</body>

</html>