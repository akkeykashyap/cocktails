<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-md">
            <img src="image/360.webp" alt="" style="height: 40px;">
            <a class="navbar-brand" style="margin-right: 90%;" href="#"><span class="text-white">Cocktail</span></a>
        </div>
    </nav>
    <div class="container mt-4 mb-5">
        <div class="card text-center bg-info">
            <div class="card-body">
                <h1>Login Here</h1>
                <div class="mb-3">
                    <label for="name" class="form-label" style="float: left">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required maxlength="50">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" style="float: left">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label" style="float: left">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" required>
                </div>
               <a href=""> <button type="submit" class="btn btn-primary">Login</button></a>
            </div>
        </div>
    </div>
</body>

</html>
