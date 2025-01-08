<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="navbar text-xl flex justify-between w-[100%] px-10">
        <a href="#HOME" class="text-2xl font-bold">KABITA</a>
        <div class=" flex gap-7 ">
            <a href="#" class="title">Home</a>
            <a href="{{ route('blog.index') }}" class="title">Blogpost</a>
            <a href="{{ route('shop.index') }}" class="title">Shop</a>
            <a href="{{ route('shop.index') }}" class="title">Kritik & Saran</a>
        </div>
        <button type="button" class="p-2 ">Login</button>
    </nav>
</body>
</html>