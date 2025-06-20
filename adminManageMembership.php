<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trainer Admin Panel</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #121212;
      color: white;
      padding: 30px;
    }

    .form-container {
      background: #1e1e1e;
      padding: 20px;
      border-radius: 12px;
      max-width: 500px;
      margin-bottom: 30px;
    }

    input, label {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
    }

    input[type="file"] {
      padding: 5px;
      background: #000;
      color: white;
    }

    button {
      background-color: crimson;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      width: 100%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #1e1e1e;
      margin-top: 40px;
      border-radius: 12px;
      overflow: hidden;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #444;
      text-align: center;
    }

    th {
      background-color: #2c2c2c;
    }

    img.preview {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }

    .edit-btn, .delete-btn {
      background-color: #444;
      padding: 6px 10px;
      border-radius: 6px;
      margin: 3px;
      cursor: pointer;
    }

    .edit-btn:hover { background-color: #3498db; }
    .delete-btn:hover { background-color: #e74c3c; }
    a {
      color: #00aced;
      text-decoration: none;
    }
  </style>
</head>
<body>
<?php
  require "./Connections/FlexConnection.php";
  ?>
  <table>
    <thead>
      <tr>
        <th>membership_id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>mobile</th>
        <th>email</th>
        <th>join_date</th>
      </tr>
    </thead>
    <tbody>
        <?php
  
    

    $membership_rs = FlexDatabase::search("SELECT * FROM `memberships`");
    $membership_num = $membership_rs->num_rows;

    for ($X = 0; $X < $membership_num; $X++) { 
        $memberData = $membership_rs->fetch_assoc();
        ?>
       
        <tr>
            <td><?php echo $memberData["membership_id"]; ?></td>
            <td><?php echo $memberData["first_name"]; ?></td>
            <td><?php echo $memberData["last_name"]; ?></td>
            <td><?php echo $memberData["mobile"]; ?></td>
            <td><?php echo $memberData["email"]; ?></td>
            <td><?php echo $memberData["join_date"]; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
  </table>

  <script src="js/script.js"></script>

</body>
</html>
