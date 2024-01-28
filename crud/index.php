<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <div class="card mt-5 col-lg-5 mx-auto">

    <div class="card-header">Add Post</div>
    <div class="card-body">

            <form action="./controller/storePost.php" method="POST">
                <input name="title"  type="text" placeholder="Ënter Post Name" class="form-control my-2">
                <input name="address" type="text" placeholder="Ënter Address" class="form-control my-2">
                <button class="btn btn-primary">Submit</button>
            </form>
    </div>

    </div>


</body>
</html>