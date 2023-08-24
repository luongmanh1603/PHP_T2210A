<?php
   $sv = [
       "name"=>"Luong Van Manh",
       "age"=>19,
   ];

   $list = [
       [
     "name"=>"A",
     "age"=>18
   ],
[
    "name"=>"B",
    "age"=>19
    ],
       [
               "name"=>"Chien",
               "age"=>20
       ]
];
   $counter = 1;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Student List</h1>
    <h2>Ten sinh vien: <?php echo $sv["name"];?></h2>
    <h2>Tuoi sinh vien: <?php echo $sv["age"];?></h2>
    <?php if ($sv["age"]==19) : ?>
        <h3>Sinh vien vua nhap hoc</h3>
    <?php endif; ?>
  <ul>
      <?php foreach ($list as $item) : ?>
      <li><?php echo $item["name"]."-".$item["age"];?></li>
      <?php endforeach;?>
      <table class="table">
          <thead>
          <tr>
              <th scope="col">STT</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>

          </tr>
          </thead>
          <tbody>
          <?php foreach ($list as $item) : ?>
          <tr>
              <td><?php echo $counter; ?></td>
              <td><?php echo $item["name"];?></td>
              <td><?php echo $item["age"]?></td>
          </tr>
          <?php $counter++; ?>

          <?php endforeach; ?>
          </tbody>
      </table>
  </ul>
</body>
</html>
