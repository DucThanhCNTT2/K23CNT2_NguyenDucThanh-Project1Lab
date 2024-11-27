<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container">
    <h1>Account-GetAll</h1>
    <hr/>
    <table border="1px", cellspacing="0", cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Password</th>
                <th>FullName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->ndt_id}}</td>
                    <td>{{$item->ndt_username}}</td>
                    <td>{{$item->ndt_password}}</td>
                    <td>{{$item->ndt_fullname}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </header>
</body>
</html>