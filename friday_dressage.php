<?php
include("connect.php");

$read = "SELECT *
FROM FEST_entries
INNER JOIN FEST_nations
ON FEST_entries.nation = FEST_nations.nation_id";

$result = $conn->query($read);

if (!$result) {
    echo $conn->error;
}


?>

<div class="container-fluid">
        <div class="mx-auto" style="width: 75%;">

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>Rider</th>
                            <th>Horse</th>
                            <th>Nationality</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                    
                    while ($row = $result->fetch_assoc()) {

                        $riderFirstName = $row['riderFirstName'];
                        $riderLastName = $row['riderLastName'];
                        $horseName = $row['horseName'];
                        $nationality = $row['nationality'];
                        $riderNumber = $row['competitionNumber'];
                        $riderid = $row['id'];


                        echo " 
                        <tr>
                        <th scope='row'>$riderNumber</th>
                        <td><a href='riderinfo.php?riderinfo=$riderid' title='View riders biography'>$riderFirstName $riderLastName</a></td>
                        <td>$horseName</td>
                        <td>$nationality</td>
                        </tr>
                        
                        ";
                    }

                    ?>
                
                       

                    </tbody>
                </table>
            </div>

        </div>
    </div>