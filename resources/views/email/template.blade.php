<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Form</title>
</head>
<body>

<div class="bg-blue-400 py-24 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-2xl w-3/4">

        <img src="{{asset('img/pexels-ivan-babydov-7788009.jpg')}}" class="rounded-t-lg h-60 w-full object-cover"
             alt="">

        <header class="bg-gray-100 rounded-t-lg py-3 px-8 text-xl font-extrabold">
            Message from: {{ $data['first_name'] . ' ' . $data['last_name'] }}
        </header>

        <div class="p-8">
            <p> this is a card</p>

            <p class="bg-blue-400 text-blue-50 rounded-lg py-2 px-4 mt-5">
                <b>age</b>: {{ $data['age'] }}
            </p>
            <p class="bg-blue-400 text-blue-50 rounded-lg py-2 px-4 mt-5">
                <b>City</b>: {{ $data['city'] }}
            </p>
            <p class="bg-blue-400 text-blue-50 rounded-lg py-2 px-4 mt-5">
                <b>Phone Number</b>: {{ $data['phone'] }}
            </p>
            <p class="bg-blue-400 text-blue-50 rounded-lg py-2 px-4 mt-5">
                <b>Email</b>: {{ $data['email'] }}
            </p>

        </div>

        <footer class="text-center rounded-b-lg py-3 px-8 text-sm text-gray-500">
            <p><b>Qaysi yo'nalishda tajribaga egasiz</b>: {{ $data['description'] }} </p>
            <p><b>Bizga qanday xizmat turini taklif qilasiz</b>: {{ $data['comment'] }} </p>
        </footer>
    </div>
</div>

</body>
</html>