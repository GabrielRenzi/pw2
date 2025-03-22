<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="max-w-2xl mx-auto bg-amber-950 p-16 rounded">
        <nav class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white"></h1>
            <ul class="flex space-x-4">
                <li><a href="{{url('/')}}" class="text-white
                    hover:text-blue-500">Home</a></li>
                <li><a href="{{url('/dados')}}" class="text-white
                        hover:text-blue-500">Imc</a></li>
                <li><a href="{{url('/formssono')}}" class="text-white
                        hover:text-blue-500">Sono</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>