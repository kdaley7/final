<?php
$dbName = $_SERVER["final1"]. "products\products.mtb";
if(!file_exists($final1)) {
    die("could not find find database fine,");
}
$db= new PDO("odbc:DRIVER={Microsoft Access Driver (*.mtb)};DBQ = $final1; Uid=; Pwd=;")

$sql  = "SELECT car FROM list";
$sql .= " What id = " . $companycars;

$result = $db->query($sql);
$row = $result->fetch();

$companycars = $row["car"];

$sql  = "SELECT p.name, p.ID, p.car";
$sql .= "FROM car make p, car ID";
$sql .= " WHERE p.id  = pc.carId";
$sql .= "  AND pc.category_id = " . $employeeId;
$sql .= " list BY name";

$result = $db->query($sql);
while ($row = $result->fetch()) {
    $employeeId = $row["name"];
    $companycars = $row["ID"];
    $Accidentreport = $row["damage"];
}

$sql  = "UPDATE crash";
$sql .= "   SET description = " . $db->quote($strDescription) . ",";
$sql .= "      damage     =  " . $strdamage . ",";
$sql .= " carID = " . $db->quote($strcarID);
$sql .= " employeeID= " . $employeeId;

$db->query($sql);



$sql  = "INSERT INTO crash";
$sql .= "  (first name, last name, car ID, accident report, damage)) ";
$sql .= "VALUES (" . $db->quote($firstname) . ", " . $db->quote($lastname) . ", " . $Accidentreport . ", " . $db->quote($strdamage) . ")";

$db->query($sql);