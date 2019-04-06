<?php
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=laporan.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Image</th>
        <th>Firs tname</th>
        <th>Last name</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($users_data as $user) { ?>
        <tr>
          <td><img src="upload/<?=$user->image?>" height="10px" width="10px"/></td>
          <td><?=$user->first_name?></td>
          <td><?=$user->last_name?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
