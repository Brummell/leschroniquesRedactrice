<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background:#ccc;padding:5em 5em;">
        <ul style="color:#fff;">
            <li style="margin-bottom:5px;">Nom & Prénom : {{$data['fullname']}}</li>
            <li style="margin-bottom:5px;">Email : {{$data['email']}}</li>
            <li style="margin-bottom:5px;">Téléphone : {{$data['tel']}}</li>
            <li style="margin-bottom:5px;">Message : {{$data['message']}}</li>
        </ul>
    </div>
</body>
</html>