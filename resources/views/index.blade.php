<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card" style="margin: 30px">
        <div class="card-body">
            <h2>Account List</h2>
            <a href="{{route('account.create')}}" class="btn btn-success">Create</a>
            <table class="table">
            <div class="">
            </div>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User Name</th>
                    <th scope="col">user Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($account as $key => $acc)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$acc->user_name}}</td>
                        <td>{{$acc->user_email}}</td>
                        <td>                     
                            <form method="POST" action="{{route('account.delete', $acc->id)}}" onsubmit="return confirm('Apakah Anda Yakin?');" >
                                <a href="{{route('account.edit', $acc->id)}}" class="btn-edit">Edit</a>
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @empty
                    <div>
                        <h1>Tidak Ada Akun Yang TerRegister!</h1>
                        <h6>Yahaha Webnya Kosong aowkwkwwk</h6>
                    </div>
                    @endforelse
            </tbody>
        </table>
    </div>
</div>
</body>
</html>