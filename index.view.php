
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>asgn10</title>
</head>
<body>

<ul>
    <?php foreach($names as $name) : ?>
        <li>
          <?= $name->firstName; ?>
          <?= $name->lastName; ?>
          <?php endforeach; ?> 
        </li>

</ul>    
</body>
</html>