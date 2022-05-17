<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    <h3><a href="{{ route ('home') }}">Home</a></h3>
    
    <h3><a href="{{ route ('about') }}">About</a></h3>
    <h3><a href="{{ route ('stud') }}">Contact</a></h3>
    <img src="images/c1.jpg" alt="">

    @yield ('content') 

    <h2>
        value: <?php echo $c; ?></h2>
        <h2><?php echo $name; ?></h2>
</body>
</html>