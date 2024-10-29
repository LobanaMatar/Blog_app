<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <h2 style="text-align:center; color:rgb(0,243,231);"><b>Create Your blog</b></h2>
    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group"> 
            <label for="exampleFormControlInput1" class="mb-2">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $blog->title }}"id="exampleFormControlInput1"placeholder="Enter text">
        </div>
        <div class="form-group mt-4">
            <label for="exampleFormControlTextarea1"class="mb-2">body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">save</a>
        <button type="submit" class="btn btn-secondary" style="margin-top: 10px;">Cancel</a>
    </form>
</div>
</body>
</html>