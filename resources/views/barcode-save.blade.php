<!DOCTYPE html>
<html>
<head>
    <title>How to Generate Bar Code in Laravel 11? - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="card mt-5">
        <h3 class="card-header p-3">Generate Barcode PNG/HTML</h3>
        <div class="card-body">
            {!! $image !!}
        </div>
    </div>

    <form action="{{ route('generateBarcode') }}" method="POST">
    @csrf
<div>
</div>
    <input type="text" name="id" placeholder="Enter ID">
    <button type="submit">Generate Barcode</button>
</form>

</div>
  
</body>
</html>