<?php

function calc($x, $y, $operation)
{
    if ('+' == $operation || '-' == $operation || '*' == $operation || '/' == $operation) {
        if ('+' == $operation) {
            return $x + $y;
        } elseif ('-' == $operation) {
            return $x - $y;
        } elseif ('*' == $operation) {
            return $x * $y;
        } elseif ('/' == $operation && $y != 0) {
            return $x / $y;
        } else {
            //исправила, теперь return возвращает результат
            return false;
        }
    }

}

assert(10 == calc(5, 5, '+'));
assert(26 == calc(30, 4, '-'));
assert(40 == calc(5, 8, '*'));
assert(2 == calc(16, 8, '/'));

?>