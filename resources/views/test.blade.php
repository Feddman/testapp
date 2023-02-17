<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Abonneer op de nieuwsbrief!</h3>
    <form method="POST" action="{{ route('newsletter.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Naam">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Verstuur">
    </form>

    <ul>
        @foreach($subs as $sub)
            <li> {{ $sub->name }} - <i>({{$sub->email}})</i> </li>
        @endforeach
    </ul>

</body>
</html>
