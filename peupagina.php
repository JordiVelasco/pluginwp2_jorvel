<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI: Escriu l'adreça URL completa del teu plugin dins de Github
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Jordi Velasco
Author URI: https://github.com/JordiVelasco
License: GNU GPLv3
*/
function admin_menu_peu_pagina(){
	$titolPagina="Peu de pàgina per defecte";
	$titolEntrada="Peu de pàgina per defecte";
	$role="administrator";
	$id="peu_pagina_per_defecte";
	$nom_funcio="nouPeuPagDef";
	add_menu_page($titolPagina, $titolEntrada, $role, $id, $nom_funcio); ;
}
function nouPeuPagDef(){
	include_once('formPeuPag.php');
}
function afegPeuPagDef(){    
echo '<a href="http://www.formacioprofessional.com/ca/programes/desenvolupament-daplicacions-web-inclou-modul-de-programacio-daplicacions-en-entorns-mobil">'.get_option('footer_text').'</a>';
echo '<a href="https://clot.fje.edu/ca"><img src="logo_clot_fje.png"/></a>';
}
add_action('admin_menu', 'admin_menu_peu_pagina');
add_action('wp_footer','afegPeuPagDef');
?>
