<?php
$CSVfp = fopen("list.csv", "r");
if ($CSVfp !== FALSE) {
    ?>
    <div class="phppot-container">
        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>class</th>
                </tr>
            </thead>
<?php
    while (! feof($CSVfp)) {
        $data = fgetcsv($CSVfp, 1000, ",");
        if (! empty($data)) {
            ?>
            <tr class="data">
                <td><?php echo $data[0]; ?></td>
                <td><div class="property-display"
               
                        <?php echo $data[0]?>;><?php echo $data[1]; ?><?php echo $data[2]; ?>
            </tr>
 <?php }?>
<?php
    }
    ?>
        </table>
    </div>
<?php
}
fclose($CSVfp);
?>