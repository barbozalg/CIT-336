<?php

$nav = '';    
for($i=0;$i<count($menu);$i++){
    $nav.= '
    <li'.(($i==$actual)? ' class="active"' : '').'><a href="'.$menu[$i][0].'" title="'.$menu[$i][1].'">'.$menu[$i][1].'</a></li>';
}

?>
<nav class="clearfix">
    <button onclick="toggleMenu();"><b>&#9776;</b>&nbsp;&nbsp;Menu</button>
    <ul id="iMenu" class="hide"><?=$nav?>
    </ul>
</nav>