<?php
include './database/connection.php';

$sql = "SELECT `Customer_ID`, `Firstname`, `Lastname`, `Cardnumber`, `Cvc`, `Expiration_Date` FROM `customer` ORDER BY Customer_ID DESC";
$result = $con->query($sql);

?>


<table class = "table datatable">
    
<thead>
    <tr>
        <th>Customer_ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Cardnumber</th>
        <th>Cvc</th>
        <th>Expiration_Date</th>
        <th colspan=2>action</th>
    </tr>
</thead>
<tbody>
<?php while($row = $result ->fetch_assoc()):?>
    <tr>
        <td> <?php echo $row['Customer_ID']?> </td>
        <td> <?php echo $row['Firstname']?> </td>
        <td> <?php echo $row['Lastname']?> </td>
        <td> <?php echo $row['Cardnumber']?> </td>
        <td> <?php echo $row['Cvc']?> </td>
        <td> <?php echo $row['Expiration_Date']?> </td>
        <td>
            <button class="btn btn-success">edit</button>
            <button class="btn btn-danger">delete</button>
        </td>
<?php endwhile;?>
</tbody>
</table>