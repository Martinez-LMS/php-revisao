<?php
function criarFormulario($nomesCampos)
{
 
echo '<form method="get">';
 
foreach ($nomesCampos as $nomeCampo) {
 
echo '<label for="' . $nomeCampo . '">' . $nomeCampo . ':</label>';
 
echo '<input type="text" id="' . $nomeCampo . '" name="' . $nomeCampo . '" /><br>';
 
}
 
echo '<input type="submit" value="Enviar" />';
 
echo '</form>';
}
$nomesCampos = array("nome", "bairro", "cidade", "telefone", "municipio");
criarFormulario($nomesCampos);