<?php 
header('Content-disposition: attachment; filename=game.xpd');
header('Content-type: application/pspdownloadfile');
readfile('GBA.XPD');
 ?>
