<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .post {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <h1>
        Mini Blog
        <a class="btn btn-success" href={{url('post/create')}}>+ Create a new post</a>
    </h1>
    <div class="container">
        @foreach($posts as $post)
        @php($post = explode(",", $post))
        @if(count($post) >= 4) <!-- Periksa jika ada cukup elemen dalam array $post -->
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $post[1] }}</h5>
                <p class="card-text">{{ $post[2] }}</p>
                <p class="card-text"><small class="text-muted">Terakhir diperbarui pada {{ date('d M Y H:i', strtotime($post[3] )) }}</small></p>
                <a href="{{ url("post/{$post[0]}")}}"class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</body>
</html>
