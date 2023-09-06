<?php
function my_is_multiple(int $divider, int $multiple) {

    if ($multiple % $divider) {
        return false;
    } else {
        return true;
    }

}

?>