<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog || title: {{$post[1]}} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>

.blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
    font-size: 2.25rem;
  }

  .blog-header-logo:hover {
    text-decoration: none;
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif/*rtl:Amiri, Georgia, "Times New Roman", serif*/;
  }

  .flex-auto {
    flex: 0 0 auto;
  }

  .h-250 { height: 250px; }
  @media (min-width: 768px) {
    .h-md-250 { height: 250px; }
  }

  /* Pagination */
  .blog-pagination {
    margin-bottom: 4rem;
  }

  /*
   * Blog posts
   */
  .blog-post {
    margin-bottom: 4rem;
  }
  .blog-post-meta {
    margin-bottom: 1.25rem;
    color: #727272;
  }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
     <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">{{$post[1]}}</h2>
        <p class="blog-post-meta">{{$post[3]}}></p>
        <p>{{$post[2]}}</p>
     </article>
     <a href="{{url("post")}}">Go Back</a>
    </div>
</body>
</html>
