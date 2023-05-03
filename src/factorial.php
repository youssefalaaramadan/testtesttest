<?php
class factorial{
    function factorial($n)
    {
        if (!is_int($n) || $n < 0) {
            return null;
        }
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
?>