<?php
include "dbconnection.php";

$sql = "SELECT jobtitle, jobdes, jobreq, jobpay, jobskills, info ,position FROM jobs";
$result = $conn->query($sql);

// Display the fetched data
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Job Title</th>
                <th>Job Description</th>
                <th>Job Requirements</th>
                <th>Job Pay</th>
                <th>Job Skills</th>
                <th>Additional Info</th>
                <th>Position Available</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['jobtitle']}</td>
                <td>{$row['jobdes']}</td>
                <td>{$row['jobreq']}</td>
                <td>{$row['jobpay']}</td>
                <td>{$row['jobskills']}</td>
                <td>{$row['info']}</td>
                <td>{$row['position']}</td>
                  
            </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

$html=$html."</table></html>";
	echo $html;

mysqli_close($conn);




?>