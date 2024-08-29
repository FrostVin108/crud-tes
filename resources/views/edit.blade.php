<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="card" style="margin: 30px; margin-left: 100px; margin-right: 400px;">
        <div class="card-body">
            <form method="POST" action="{{ route('account.update', $account->id) }}">
                @csrf
                @method('put')
                    <div class="form-group">
                        <label for="exampleInputEmail">Nama User</label><br>
                        <input class="form-control" type="text" placeholder="Masukkan Nama User" name="user_name" value="{{ old('user_name', $account->user_name) }}">
                    </div >
        
                    <div class="form-group">
                        <label for="exampleInputEmail">User Email</label><br>
                        <input class="form-control" type="email" placeholder="Masukkan Email" name="user_email" value="{{ old('user_name', $account->user_email) }}">
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputEmail">User Password</label><br>
                        <input class="form-control" type="password" placeholder="Masukkan Passowrd" name="user_password" value="{{ old('user_name', $account->user_name) }}">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-warning" href="{{ route('account.index')}}">Return</a>
                    </div>  
            </form> 
        </div>
    </div>
</body>
</html>