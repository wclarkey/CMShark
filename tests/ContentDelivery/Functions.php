<?php
require 'db.php';
// Data taken from db
function getLinkContent($type=null){
    $con = dbConnect();
    $sql = 'SELECT linkID,linkTitle,linkDescription,link FROM tests';
    $result = $con->query($sql);
    if ($result->num_rows > 0 ){
        while ($row = $result->fetch_assoc()){
            echo "id:". $row['linkID']."<br>
            Link title:". $row['linkTitle']."<br>
            Link Description:". $row['linkDescription']."<br>
            Link:".$row['link'];
        }
    }
}
