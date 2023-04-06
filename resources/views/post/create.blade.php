<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <a href="{{ route('post.index') }}" type="button">
        <button>Kembali</button>
    </a>
    <form action="{{ route('post.store') }}" method="post">
        @csrf {{-- wajib hukumnya, kalo bikin form. untuk keamanan soalnya, kalo ga gini nanti error --}}
        <label for="">Title</label>
        <input type="text" name="title"> {{-- kalo namanya panjang dikasih underscore ex.title_ --}}
        <br>
        <label for="">Description</label>
        <input type="text" name="description">
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>