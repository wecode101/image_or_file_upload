<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wecode101 receiving mail tutorial</title>
    <meta content="Wecode101 upload file to storage folder in Laravel 8" name="description">
    <meta content="Wecode101" name="author">
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div>
        <h3>Upload File</h3>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{route('store.file')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputFile">File <input aria-describedby="File" id="exampleInputFile" name="file" type="file"></label>
                <input aria-describedby="DataType" id="exampleInputDataType" value={{"bloomberg_name"}} name="data-type" type="hidden">
            </div>
            <div class="form-group">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"> <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
