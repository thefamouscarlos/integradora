<?php
/**
 * Created With PhpStorm.
 * User: Juan Carlos Martinez
 * Date: 7/6/2017
 * Time: 9:38 PM
 */

function fetch_sql_data(){
    $query1 = "SELECT facebook FROM links";
    $query2 = "SELECT twitter FROM links";
    $query3 = "SELECT whatsapp FROM links";
    $query4 = "SELECT telefono FROM links";
    $query5 = "SELECT correo FROM links";
    $query6 = "SELECT mapas FROM links";
    $query7 = "SELECT ubicacion FROM links";
    $query8 = "SELECT googlep FROM links";

    $result_fa = mysqli_query($query1);
    $result_tw = mysqli_query($query2);
    $result_wa = mysqli_query($query3);
    $result_tf = mysqli_query($query4);
    $result_ce = mysqli_query($query5);
    $result_ma = mysqli_query($query6);
    $result_ub = mysqli_query($query7);
    $result_gp = mysqli_query($query8);
}


?>


