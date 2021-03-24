<?php 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, first_name last_name, email, phone, contact_message FROM tnickman_form_response")

echo "table";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?php echo $row[id]; ?></td>
    <td><?php echo $row[first_name]; ?></td>
    <td><?php echo $row[last_name]; ?></td>
    <td><?php echo $row[email]; ?></td>
    <td><?php echo $row[phone]; ?></td>
    <td><?php echo $row[contact_message]; ?></td>
</tr>
<?php }
echo "</table>";
}
catch (PDOException $e) {
    echo "Error: " . $ee->getMessage();
}
$conn = null;
?>