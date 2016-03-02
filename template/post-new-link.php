<?php

$as_post_prev = get_adjacent_post('', '', FALSE);
$as_post_next = get_adjacent_post('', '', TRUE);

echo as_next_prev($as_post_prev, 'prev', 'angle-left');
echo as_next_prev($as_post_next, 'next', 'angle-right');
?>