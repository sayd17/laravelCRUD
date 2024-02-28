<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>USERS</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Affiliation</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->affiliation}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                
            </tr>

            @endforeach
    </table>
</body>
</html>