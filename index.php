<?php
    session_start();
    require("database.php");

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>RealConnect</title>
</head>
<body>
  <?php include("header.php"); ?>
  <main>
    <h2>Find Your Ideal Propery</h2>
    <form action="Save_lead.php" method="post">
      <label>Name:</label>
      <input type="text" name="name" required><br>

      <label>Email:</label>
      <input type="text" name="email" required><br>

      <label>Phone:</label>
      <input type="text" name="Phone" required><br>

      <label>Location Preference:</label>
      <input type="text" name="Location" required><br>

      <label>Budget:</label>
      <input type="text" name="Budget" required><br>

      <select name="Property Type" required>
         <option value=""> -- Select Type -- </option>
         <option value="Detached">Detached</option>
         <option value="Sami-Detached">Sami-Detached</option>
         <option value="TownHome">TownHome</option>
         <option value="Banglow">Banglow</option>
         <option value="Condo">Condo</option>
         <option value="Commercial">Commercial</option>
         <option value="Investment">Investment</option>
         <option value="PreConstruction">PreConstruction</option>
      </select><br>

      <input type="submit" value="Submit"><br>
    </form>

    <table>

    </table>
</main>

<?php include("footer.php"); ?>
  
</body>
</html>