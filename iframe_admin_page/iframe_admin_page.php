<?php
/**

Plugin Name:  iFrame Admin Page
Plugin URI:   http://www.terciar.info/
Description:  Plugin para mostrar una pagina web dentro de un iframe. Agrega un menú para el administrador del sitio.
Version:      0.1
Author:       Mascazzini Matias
Autor URI:    http://about.me/matiasmasca
License:      MIT
**/
//Basado en este post: http://www.conasa.es/como-crear-un-plugin-para-wordpress-con-pagina-de-opciones/
/*
* Función para añadir una página al menú de administrador de wordpress
*/
function admin_page_plugin_menu(){
  //Añade una página de menú a wordpress
  add_menu_page('iFram Page Simple Pluggin',     //Título de la página
          'iFrame Page',              //Título del menú
          'administrator',            //Rol que puede acceder
          'admin_page-settings',      //Id de la página de opciones
          'admin_page_settings',      //Función que pinta la página de configuración del plugin
          'dashicons-admin-generic'); //Icono del menú
}
add_action('admin_menu','admin_page_plugin_menu');

/*
* Función que pinta la página de configuración del plugin
*/
function admin_page_settings(){
?>
  <div class="wrap">
  <h2>Titulo Pagina (edita el pluggin para cambiar)</h2>
  <script type="text/javascript">// <![CDATA[
    function preloader(){ document.getElementById("preload").style.display = "none"; document.getElementById("iframe").style.display = "block"; } //preloader window.onload = preloader;
// ]]></script>
  <div id="preload"><img src="/wp-content/plugins/iframe_admin_page/media/logo.png" alt="www.Terciar.info" /></div>
  <!-- ACA configurar la URL para el iframe -->
  <div id="iframe"><iframe id="app-iframe" src="http://www.comunidadtic.com.ar/" width="100%" height="800" frameborder="0">Si ves este mensaje, significa que tu navegador no tiene soporte para marcos o el mismo está deshabilitado. Puedes acceder a la información mostrada en este marco aquí: <a href="http://www.comunidadtic.com.ar/">Ingresar a la aplicación</a>.</iframe></div>
</div>
<?php
  }
?>