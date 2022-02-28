<HTML>

<body>

<?php
include "SousVue_Menu.php";
?>

<H1>Accueil Public</H1>

<?php
if(isset($msgVue))
{
    echo "<H3>$msgVue</H3>";
}

?>
</body>
</HTML>
