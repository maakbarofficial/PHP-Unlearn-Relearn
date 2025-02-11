<?php
include("config/database.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo $_SESSION["name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body style="font-family: Arial, sans-serif; text-align: center; padding: 20px;">

    <h2 style="color: #333;">All Users</h2>

    <table style="width: 80%; margin: 0 auto; border-collapse: collapse; border: 1px solid #ccc;">
        <tr style="background-color: #f2f2f2;">
            <th style="border: 1px solid #ccc; padding: 10px;">Username</th>
            <th style="border: 1px solid #ccc; padding: 10px;">Created At</th>
            <th style="border: 1px solid #ccc; padding: 10px;">Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td style="border: 1px solid #ccc; padding: 10px;"><?php echo $row["username"] ?></td>
                    <td style="border: 1px solid #ccc; padding: 10px;"><?php echo date("d-m-Y H:i A", strtotime($row["created_at"])) ?></td>
                    <td style="border: 1px solid #ccc; padding: 10px;">
                        <button style="padding: 5px 10px; background-color: #ffc107; color: black; border: none; border-radius: 5px; cursor: pointer;"><a href="update-user.php?id=<?php echo $row["id"] ?>">Edit</a></button>
                        <button style="padding: 5px 10px; background-color: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;"><a href="delete-user.php?id=<?php echo $row["id"] ?>">Delete</a></button>
                    </td>
                </tr>
        <?php }
        } else {
            echo "<tr><td colspan='3'>No Record Found</td></tr>";
        }  ?>
    </table>

    <br>

    <button style="padding: 10px 20px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;"><a href="add-user.php">Add User</a></button>

</body>

</html>