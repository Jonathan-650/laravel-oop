<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BS5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="p-4">
    <h1>Manage Animal Info</h1>
    <hr>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="card shadow p-4 m-2 w-auto mb-4">
                <h2>ORM</h2>
                <hr>
                <h3>Get Exam No.6</h3>
                @include('animal_info.getExamNumber6', ['data' => $getExamNumber6])
            </div>
        </div>
    </div>
</body>
</html>