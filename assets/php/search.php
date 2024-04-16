<?php
    if(isset($_POST['query'])){
        $query = $_POST['query'];
        echo "search.php?query=". $query;
    }else{
        
    }
?>