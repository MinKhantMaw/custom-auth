<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Login</h1>
            <form action="{{ route('passcode') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label >PassCode</label>
                    <input type="number" class="form-control"  name="pass_code" placeholder="passcode" required>

                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
