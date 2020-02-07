<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>
<div class="container">

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <p> {{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session('messeger'))
            <div class="alert alert-danger">
                <p> {{session('messeger')}}</p>
            </div>
    @endif

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label>Usename:</label>
            <input type="text" class="form-control" id="user"  name="user">
        </div>
        @if($errors->has('user'))
            <div class = "alert alert-danger">
                <p> {{$errors->first('user')}}</p>
            </div>
        @endif

        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @if($errors->has('password'))
            <div class = "alert alert-danger">
                <p> {{$errors->first('password')}}</p>
            </div>
        @endif


        <input type="submit" class="btn btn-primary" value="Submit" name="submit">


    </form>
</div>
</body>
</html>
