<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<body>
    <style>
        table,tr,td,th{
            border:1px solid blue;
        }
    </style>

    <table>
        <tr>
        <th>Firstname</th>
        <th>LastName</th>

        <th>Gender</th>
        <th>Data Of Birth</th>
        <th>Email</th>
        <th>PhoneNumber</th>
        <th>Country</th>
        <th>State</th>
        <th>City</th>

        <th>Hobbies</th>
        <th>Password</th>



        <th>action</th>

        </tr>
        @foreach($details as $detail)
        <tr>
            <td>{{$detail->firstname}}</td>
            <td>{{$detail->lastanme}}</td>
            <td>{{$detail->gender}}</td>
            <td>{{$detail->dateofbirth}}</td>
            <td>{{$detail->email}}</td>
            <td>{{$detail->phonenumber}}</td>
            <td>{{$detail->Country}}</td>
            <td>{{$detail->state}}</td>
            <td>{{$detail->city}}</td>
            <td>{{$detail->hobbies}}</td>
            
            <td><img src="{{asset('storage/uploads/'.$detail->avatar)}}" width="100px" height="100px" alt=""></td>
            <td><button><a href="{{asset('/edit/'.$detail->id)}}">edit</a></button> <a href="/delete/{{$detail->id}}"><button>delete</button></a></td>

            <td>{{$detail->password}}</td>


            



        </tr>
        @endforeach

    </table>
</body>
</center>
    
</body>
</html>