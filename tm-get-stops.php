<div class="control-group">
    <label for="stopnumber" class="control-label">Stop Number</label>

    <div class="controls">

        <select name="stopnumber" id="select2" class='input-large'>
            <?php
            require_once "praveenlib.php";
            require_once "datas.php";

            $dbconnection = connectSQL($dbdetails);

            if (mysqli_connect_errno()) //Check if any error occurred on connection
            {
                echo "db_connection_fail";
            } else {
                $sql = "select * from tm_bus_stop where route=" . $_POST['route'] . " and institute_id=" . $institutionId;

                $result = mysqli_query($dbconnection, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['id'] . '">' . $row['id'] . " (" . $row['name'] . ')</option>';

                }
            }
            ?>


        </select>
    </div>
</div>
