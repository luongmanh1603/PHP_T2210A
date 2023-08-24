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
    <?php include("head.php"); ?>

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
  </ul>
    <a href="form.php" class="btn btn-primary"> Create a new student</a>
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
</body>
</html>
