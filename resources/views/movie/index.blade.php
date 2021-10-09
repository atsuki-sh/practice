<head>
    <title>映画</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <h1 class="my-3">映画リスト</h1>

    <a class="btn btn-success my-3" href="{{ route('movie.create') }}">映画登録画面</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">タイトル</th>
            <th scope="col">監督</th>
            <th scope="col">主演</th>
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row" class="align-middle">1</th>
            <td>Iron Man</td>
            <td>Jon Favreau</td>
            <td>Robert Downey Jr.</td>
            <td><a href="{{ route('movie.edit') }}" class="btn btn-primary">変更</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Captain America: The First Avenger</td>
            <td>Joe Johnston</td>
            <td>Chris Evans</td>
            <td><a href="{{ route('movie.edit') }}" class="btn btn-primary">変更</a></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
