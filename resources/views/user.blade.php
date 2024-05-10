<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">UserId</th>
            <th scope="col">UserName</th>
            <th scope="col">Password</th>
            <th scope="col">Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tbl as $item)
            <tr>
                <td>{{ $item['userid'] }}</td>
                <td>{{ $item['username'] }}</td>
                <td>{{ $item['userpassword'] }}</td>
                <td>{{ $item['photo'] }}</td>
            </tr>
        @endforeach
        <hr>
    </tbody>
</table>
