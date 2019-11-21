<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["places_id"])) {
    $query = "SELECT * FROM class WHERE placesID = '" . $_POST["places_id"] . "' order by name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Class</option>
<?php
    foreach ($results as $city) {
        ?>
<option value="<?php echo $city["id"]; ?>"><?php echo $city["name"]; ?></option>
<?php
    }
}
?>