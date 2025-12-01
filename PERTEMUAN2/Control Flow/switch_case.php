<?php

$hari = "senin";

switch ($hari) {
    case "senin":
        echo "awal minggu";
        break;
    case "jumat":
        echo "hampir weekend";
        break;
    case "minggu";
        echo "hari libur";
        break;
    default:
        echo "hari biasa";
}

?>