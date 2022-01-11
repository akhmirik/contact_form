<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div>
    <p><b>Name</b>: {{ $data['first_name'] . ' ' . $data['last_name'] }} </p>
    <p><b>age</b>: {{ $data['age'] }} </p>
    <p><b>City</b>: {{ $data['city'] }} </p>
    <p><b>Phone</b>: {{ $data['phone'] }} </p>
    <p><b>Email</b>: {{ $data['email'] }} </p>
    <p><b>Description</b>: {{ $data['description'] }} </p>
    <p><b>Comment</b>: {{ $data['comment'] }} </p>
</div>

</body>
</html>