<?php
//$admin = $_REQUEST['admin'];
if ($admin!="Edmilson")
{
        echo "Não Autorizado";
 //        break;
} 
else {
echo"<frameset rows='26*,390*' cols='*' framespacing='0' frameborder='no' border='0'>
<frame src='menu/menu.html' name='top' scrolling='NO' noresize>
<frame src='relatorio/index.php' name='main'>
</frameset><noframes></noframes>";
}


