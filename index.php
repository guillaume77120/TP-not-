<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
        <?php

        $link = mysqli_connect("localhost", "root", "root", "Pokedex");
        if(!$link){
              //echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;
      //  echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
        //echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
        exit;
       }
    //echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée my_db est géniale." . PHP_EOL;
    //echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
    $req = " SELECT * FROM pokemon;";
    $result = mysqli_query($link,$req);
      if ($result) {
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


                      echo "<tbody>";
                      echo "<tr>";
                      echo "<td><img src='sprites/" . $row['identifier'] . ".png' alt='" . $row['identifier'] . "'></td>";
                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td> " . $row["identifier"] . " </td>";
                      echo "<td> " . $row["height"] . "</td>";
                      echo "<td> " . $row["weight"] . "</td>";
                      echo "<td> " . $row["base_experience"] . "</td>";
                      echo "</tr>";
                      echo"</tbody>";
          }
      }
         ?>

      </tbody>
    </table>
  </body>
</html>
