<?php
session_start();

require_once 'inc/DbFunctions.php';
$database = new DbFunctions();


$search_year =  $_SESSION["search_year"];

$result = $database->search_all_alumni_by_year($search_year);

?>

<html>
<head>
    <title>NORSU-BSC <?php echo $search_year ?> Alumni </title>
</head>
<body>
  
<h4>List of <?php echo $search_year;  ?> Alumni</h4>
<?php if(count($result)>0): ?>
        
            <table border="1">
                <tr>
                    <th>Family Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Degree</th>
                    <th>Age</th>
                    <th>Nationality</th>
                    <th>Status</th>
                    <th>Year Graduated</th>
                    <th>Present Address</th>
                    <th>Present Employment</th>
                    <th>Employment Status</th>
                    <th>Office Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Facebook</th>
                    <th>Name of Classmate</th>
                    <th>Classmate Address</th>
                </tr>

                <?php foreach($result as $row): ?>
                    <tr>
                        <td><?php echo htmlentities($row["familyname"]); ?></td>
                        <td><?php echo htmlentities($row["firstname"]); ?></td>
                        <td><?php echo htmlentities($row["middlename"]); ?></td>
                        <td><?php echo htmlentities($row["degree"]); ?></td>
                        <td><?php echo htmlentities($row["age"]); ?></td>
                        <td><?php echo htmlentities($row["nationality"]); ?></td>
                        <td><?php echo htmlentities($row["status"]); ?></td>
                        <td><?php echo htmlentities($row["year_graduated"]); ?></td>
                        <td><?php echo htmlentities($row["present_address"]); ?></td>
                        <td><?php echo htmlentities($row["present_employment"]); ?></td>
                        <td><?php echo htmlentities($row["employment_status"]); ?></td>
                        <td><?php echo htmlentities($row["office_address"]); ?></td>
                        <td><?php echo htmlentities($row["contact_number"]); ?></td>
                        <td><?php echo htmlentities($row["email"]); ?></td>
                        <td><?php echo htmlentities($row["facebook"]); ?></td>
                        <td><?php echo htmlentities($row["name_of_classmate"]); ?></td>
                        <td><?php echo htmlentities($row["classmate_address"]); ?></td>

                    </tr>
                <?php endforeach ?>
            </table>
    <?php else: ?>
        <p>No Record Found</p>
    <?php endif ?>
</body>
</html>