<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["place_id"])) {
    $query = "SELECT * FROM places WHERE placeID = '" . $_POST["place_id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>==Select Station==</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["id"]; ?>"><?php echo $state["name"]; ?></option>
<?php
    }
}
?>