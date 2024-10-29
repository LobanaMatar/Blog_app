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
<div class="container mt-4">
    < class="row row-sm mt-2">
    <a href="{{ route('blogs.create') }}" class="btn -mb-2" style="background-color: aqua">add new</a>
    @foreach ($blogs as $blog)
    <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
        <div class="card" style="margin-bottom: 20px">
            <div class="card-body">
            <h5 class="card-title" style="font-weight:bold">{{ $blog->title }}</h5>
            <p class="card-text">{{ $blog->body }}</p>
            <form action="{{ route('blogs.delete',$blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('blogs.edit', $blog->id)}}" class="btn" style="background-color:aqua">edit</a>
                <a href="{{route('blogs.show', $blog->id)}}" class="btn" style="background-color:aqua">show</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
        </div>
    </div>
    @endforeach

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    

</body>
</html>