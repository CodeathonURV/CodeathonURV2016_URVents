<?php
if (isset($_POST['op'])){
    if ($_POST['op'] == "get_events"){
        $filtre = $_POST['filtre'];
        $result = getEventos($filtre);
        echo json_encode($result);
    }
}
