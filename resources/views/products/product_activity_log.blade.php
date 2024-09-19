<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product Activity Log</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    
    <br>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                
            </tr>
            @foreach($activityLogs as $activityLog)
            <tr>
                <td>{{$activityLog->id}}</td>
                <td>{{$activityLog->name}}</td>
                <td>{{$activityLog->qty}}</td>
                <td>{{$activityLog->price}}</td>
                <td>{{$activityLog->description}}</td>
                
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>