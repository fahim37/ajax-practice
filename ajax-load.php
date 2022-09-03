<?php
    $conn = mysqli_connect("localhost","root","","test") or die("connection failed");
    $sql = "SELECT * FROM users";
    $results = mysqli_query($conn,$sql) or die("Query failed");
    $output = '';
    if(mysqli_num_rows($results)>0){
        $output = "<table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>";
                    while($row = mysqli_fetch_assoc($results)){
                        $output .= "<tr>
                        <td>{$row["name"]}</td>
                        <td>{$row["email"]}</td>
                        </tr>";
                    }
                    $output .="</table>";
        mysqli_close($conn);
        echo $output;
                    
    }else{
        echo "<h2>Not found</h2>";
    }

?>