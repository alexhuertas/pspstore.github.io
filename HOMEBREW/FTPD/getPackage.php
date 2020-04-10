<?php
header('Content-disposition: attachment; filename=game.xpd');
header('Content-type: text/plain');
readfile('TEST.XPD');
?> 