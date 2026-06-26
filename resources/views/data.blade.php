<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container m-3">
       
        <table class="table table-bordered">
         <thead>
      <tr>
        <th>name</th>
        <th>qty</th>
        <th>price</th>
      </tr>
       @foreach ($data as $data)
    </thead>
    <tbody>
      <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->qty}}</td>
        <td>{{$data->price}}</td>
      </tr>
      @endforeach
    </div>
</body>
</html>