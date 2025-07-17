<!DOCTYPE html>
<html>
<head>
    <title>Post CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('posts.index') }}">Posts</a>
    </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
