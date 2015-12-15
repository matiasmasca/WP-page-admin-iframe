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

/*
* Función para añadir una página al menú de administrador de wordpress
*/
function admin_page_plugin_menu(){
  //Añade una página de menú a wordpress
  add_menu_page('iFram Page Simple Pluggin',     //Título de la página
          'iFrame Page',            //Título del menú
          'administrator',              //Rol que puede acceder
            'admin_page-settings',    //Id de la página de opciones
            'admin_page_settings', //Función que pinta la página de configuración del plugin
            'dashicons-admin-generic');         //Icono del menú
}
add_action('admin_menu','admin_page_plugin_menu');

/*
* Función que pinta la página de configuración del plugin
*/
function admin_page_settings(){
?>
  <div class="wrap">
  <h2>Titulo Pagina</h2>
  <script type="text/javascript">// <![CDATA[
    function preloader(){ document.getElementById("preload").style.display = "none"; document.getElementById("iframe").style.display = "block"; } //preloader window.onload = preloader;
// ]]></script>
  <div id="preload"><img src="/media/terlogo1101.png" alt="Terciar" /></div>
  <!-- ACA configurar la URL para el iframe -->
  <div id="iframe"><iframe id="app-iframe" src="http://www.comunidadtic.com.ar/" width="100%" height="800" frameborder="0">Si ves este mensaje, significa que tu navegador no tiene soporte para marcos o el mismo está deshabilitado. Puedes acceder a la información mostrada en este marco aquí: <a href="http://www.comunidadtic.com.ar/">Ingresar a la aplicación</a>.</iframe></div>
</div>
<?php
}

/*
* Función que registra las opciones del formulario en una lista blanca para que puedan ser guardadas
*/
function admin_page_settings(){
  /* register_setting('admin_page-settings-group',
           'admin_page_url_value',
           'intval'); */
}
add_action('admin_init','admin_page_settings');

/*
* Función que devuelve el contenido de un post limitado a la longitud configurada en la página de opciones 
*/
function admin_page_action($content){
  /*
  $url = get_option('admin_page_url_value');
  return $url  
  */
}
add_filter('the_content','admin_page_action');

//Basado en este post: http://www.conasa.es/como-crear-un-plugin-para-wordpress-con-pagina-de-opciones/
?>