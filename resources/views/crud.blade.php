<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
    {{-- <style>
        nav .w-5{
            display: none;
        }
    </style> --}}
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6"><br>
                <h1>All Users Data</h1>
                <a href="/newuser" class="btn btn-success">Add New</a><br><br>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>CITY</th>
                        <th>AGE</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->age}}</td>
                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a>
                                        <a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                        <a href="{{ route('update.user', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pagination mt-5">
                    {{-- for simple pagination --}}
                    {{-- {{$data->links('pagination::simple-bootstrap-4')}} --}}
                    {{-- {{$data->links()}} --}}
                    {{-- for paginate() --}}
                    {{$data->links('pagination::bootstrap-5')}}
                </div>
                <div class="alert alert-light d-flex justify-content-between flex-wrap py-2 px-3">
                    <div>Total Records: <strong>{{ $data->total() }}</strong></div>
                    <div>Current Page: <strong>{{ $data->currentPage() }}</strong></div>
                    <div>Per Page: <strong>{{ $data->perPage() }}</strong></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>