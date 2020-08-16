<?php
  include '../configurations/config.php';
  include '../configurations/retrieve.php';
  include '../configurations/displayUsers.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

    body{
      background-color: darkolivegreen;
      font-family: 'Voltaire';
    }

    table{
      border: #ffffff 2px solid;
      border-radius: 2px;
      width: 500px;
      height: auto;
    }

  </style>

</head>

<body>

  <header>

  </header>

  <main>
    <section>
      <div class="dbstuff">
        <?php
          $users = new DisplayUser();
          $users->DisplayUsers();
        ?>
      </div>
    </section>
    <section>
      <table>
        <thead>
          <tr>
            <th>
              ID
            </th>
            <th>
              NAME
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> </td>
            <td> </td>
            <td> </td>
          </tr>
        </tbody>
      </table>
    </section>
    <section>
      <form action="" method="post">
        <div>

        <?php

        include '../configurations/insert.php';

        $insert = new InsertUser();
        $thee = $insert->insert();

        echo $thee;
        
        ?>

          <br><br>
          <input type="text" name="fname" id="fname" placeholder="first name">
          <br><br>
          <input type="text" name="lname" id="lname" placeholder="last name">
          <br><br>
          <input type="text" name="email" id="email" placeholder="Email">
          <br><br>
          <textarea name="comment" id="comment" cols="20" rows="5" placeholder="comment"></textarea>
          <br><br>
          <button type="submit" name="submit">SUBMIT</button>
        </div>
      </form>
    </section>
  </main>
  
</body>
</html>