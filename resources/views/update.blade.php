<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update.user',$data->id)}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <br><br>
                    <h1>Update Record</h1><br><br>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" value="{{$data->name}}" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{$data->email}}" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" value="{{$data->city}}" class="form-control" name="city" id="city" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" value="{{$data->age}}" class="form-control" name="age" id="age" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button><br><br>
                </div>
            </div>
        </div>
    </form>
</body>
</html>