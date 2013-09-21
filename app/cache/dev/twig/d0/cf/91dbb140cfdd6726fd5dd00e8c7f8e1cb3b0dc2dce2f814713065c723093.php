<?php

/* PublicacionesBundle:CategoriasPublicacion:show.html.twig */
class __TwigTemplate_d0cf91dbb140cfdd6726fd5dd00e8c7f8e1cb3b0dc2dce2f814713065c723093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript_adicional' => array($this, 'block_javascript_adicional'),
            'menu_horizontal' => array($this, 'block_menu_horizontal'),
            'siderbar' => array($this, 'block_siderbar'),
            'body' => array($this, 'block_body'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendBundle::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fileuploader.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

";
    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fileuploader.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 17
    public function block_javascript_adicional($context, array $blocks = array())
    {
        echo " 
<script>
  \$(function () {
   \$('#tabCategoriasGaleria a').click(function (e) {
        e.preventDefault();
        \$(this).tab('show');
    })
  })
</script>
<script>
    function createUploader(){
    var uploader = new qq.FileUploader({
            element: document.getElementById('upload'),
            template: '";
        // line 30
        $this->env->loadTemplate("BackendBundle:Default:templateUploader.html.twig")->display($context);
        echo "',
            action: '";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_upload", array("categoria_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "',
            params: { },
            onComplete: function(id, file, responseJson){
                    \$.get(\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_galeria", array("categoria" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "isActive" => true)), "html", null, true);
        echo "\",
                    {},
                    function(data)
                    {
                        \$(\"#lista_imagenes\").html(data);
                        inicializarGaleria();
                        \$('#status').removeClass(\"loading\");
                        \$('#status').addClass(\"success\");
                    });

                },
            onSubmit: function(id, fileName){
                },
            onProgress: function(id, fileName){
                    \$('#status').addClass(\"success\");
                    \$('#status').addClass(\"loading\");
                }
            });

    }
    window.onload = createUploader;
</script>
<script>
    function eliminar(idImg,url){
        var imagen=\$(\"#image-\"+idImg);
        var inputText=\$(\"#field-eliminar\");
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:idImg});
        inputText.val(url);
        //\$( \"#confimarFormModal\" ).modal( \"show\" );
    }
    
    function activar(idImg,url){
        var imagen=\$(\"#image-\"+idImg);
        var inputText=\$(\"#field-activar\");
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:idImg});
        inputText.val(url);
        //\$( \"#confirmarActivarFormModal\" ).modal( \"show\" );
    }

    function titularizar(idImg){
        var imagen=\$(\"#image-\"+idImg);
        var \$ImgTitulo=\$(\"#field-titulo\");
        var \$ImgDescripcion=\$(\"#field-contenido\");
        var \$ImgUrl=\$(\"#field-url\");
        \$(\".image-dialog\").attr({src:imagen.attr(\"src\"),id:idImg});
        \$ImgTitulo.val(imagen.attr(\"title\"));
        \$ImgDescripcion.val(imagen.attr(\"descripcion\"));
        \$ImgUrl.val(imagen.attr(\"url\"));
       
        //\$( \"#editarFormModal\" ).modal( \"show\" );
    }
    function updateRegistroGaleria(Id,Title,Description){
        \$('#image-loader').show();
        var url='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_update_registro"), "html", null, true);
        echo "';
        \$.post(url,
            {'id':Id,'titulo':Title,'contenido':Description},
            function(data){
                 setTimeout(function(){
                        \$('#image-loader').hide();
                 }, 1000);
                 \$(\"#registro-\"+Id).html(data);
                 inicializarGaleria();
            });
    }

    function ajaxRegistroEdition(url){
       \$.post(url,
       {},
       function(data){
           alert(data)
          \$(\"#lista_imagenes\").html(data);
       });
    }
    
    function cambiarTipoCategoria( \$item ,\$tipo) {
\t\$item.fadeOut(function() {
            \$('#image-loader').show();
            var url='";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_cambiar_tipo_categoria"), "html", null, true);
        echo "';
            \$.get(url,{'id':\$item.attr('id'),'tipo':\$tipo.attr('tipo')},
                function(data){
                    if(data.ok=\"ok\"){
                        setTimeout(function(){
                            \$('#image-loader').hide();
                        }, 1000);
                        inicializarGaleria();
                    }else{
                        \$('#image-loader').hide();
                        alert(\"No se pudo cambiar de tipo de categoria\")
                        \$item.fadeIn();
                    }
                     
                });
\t});
    }
    
    function cambiarArchivoCategoria( \$item ,\$archivo) {
\t\$item.fadeOut(function() {
            \$('#image-loader').show();
            var url='";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_cambiar_archivo_categoria"), "html", null, true);
        echo "';
            \$.get(url,{'id':\$item.attr('id'),'categoria':\$archivo.attr('categoria')},
                function(data){
                    if(data.ok=\"ok\"){
                        setTimeout(function(){
                            \$('#image-loader').hide();
                        }, 1000);
                        inicializarGaleria();
                    }else{
                        \$('#image-loader').hide();
                        alert(\"No se pudo cambiar al archivo de categoria\")
                        \$item.fadeIn();
                    }
                     
                });
\t});
    }

    function guardarEditarFormModal(){
        var bValid = true;
        var fieldTitle=\$(\"#field-titulo\"),
            fieldDescription=\$(\"#field-contenido\");
        bValid=(fieldTitle.val().length>0 && fieldTitle.val()!=\"Titulo de Imagen\")?true:false;
        /*bValid=(fieldDescription.val().length>0 && fieldDescription.val()!=\"Descripcion\")?true:false;*/
        if ( bValid ) {
            updateRegistroGaleria(
               \$(\".image-dialog\").attr(\"id\"), 
               fieldTitle.val(),
               fieldDescription.val()
        );
\t\$(\"#editarFormModal\").modal( \"hide\" );
       } 
    }

    function avanzadaEditarFormModal(){
        location.href=\$(\"#field-url\").val();
    }
    
    function eliminarConfirmarFormModal(){
        var url=\$(\"#field-eliminar\").val();
        \$.post(url,{},function(data){
          if(data.ok==\"ok\"){
            \$(\"#registro-\"+data.id).fadeOut(\"fast\",function(){
                \$(this).remove();
            });
          }else{
            alert(\"El registro no pudo ser eliminado\");
          }
        });
\t\$(\"#confirmarFormModal\").modal( \"hide\" );
    }
    
    function activarConfirmarFormModal(){
        var url=\$(\"#field-activar\").val();
        \$.post(url,{},function(data){
          if(data.ok==\"ok\"){
            \$(\"#registro-\"+data.id).fadeOut(\"fast\",function(){
                \$(\"#gallery\").append(data.html);
            });
          }else{
            alert(\"El registro no se pudo activar\");
          }
        });
\t\$(\"#confirmarActivarFormModal\").modal( \"hide\" );
    }
    
    
    
    function inicializarGaleria(){
        \$.configPrettyPhoto();
    
        var \$gallery = \$( \"#gallery\" ),
        \$trash = \$( \"#papelera\" );
   
        \$gallery.sortable({
                handle: '.image-sorteable',
                placeholder: \"ui-state-highlight\",
                update: function(){
                    \$('#image-loader').show();
                    var order = \$gallery.sortable('serialize');
                    \$.post('";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_ordenar"), "html", null, true);
        echo "?'+order,
                     {'categoria':'";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "'},
                     function(data){
                       \$('#image-loader').hide();
                    });
                }
             });

        \$gallery.disableSelection();

        \$trash.droppable({
          accept: \"#gallery > li,#gallery_para_aprobar > li\",
          activeClass: \"ui-state-default\",
          hoverClass: \"ui-state-highlight\",
          drop: function( event, ui ) {
            ui.draggable.find(\".eliminar-item\").click();
          }
        });

        \$(\"li.tipo-categoria\").each(function(){
           var \$tipo=\$(this);
           \$tipo.droppable({
                accept: \"#gallery > li\",
                activeClass: \"ui-state-default\",
                hoverClass: \"ui-state-highlight\",
                drop: function( event, ui ) {
                    cambiarTipoCategoria(ui.draggable,\$tipo);
                }
           }); 
        });

        \$(\"li.archivo-categoria\").each(function(){
           var \$tipo=\$(this);
           \$tipo.droppable({
                accept: \"#gallery > li\",
                activeClass: \"ui-state-default\",
                hoverClass: \"ui-state-highlight\",
                drop: function( event, ui ) {
                    cambiarArchivoCategoria(ui.draggable,\$tipo);
                }
           }); 
        });
    }
    
    
    
\$(function() {
    inicializarGaleria();
});
</script>
";
    }

    // line 264
    public function block_menu_horizontal($context, array $blocks = array())
    {
        // line 265
        echo "    ";
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "galerias")));
    }

    // line 268
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
<ul class=\"nav nav-list\">
    <li class=\"nav-header\">Galerias</li>
    ";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 272
            echo "    ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipocategoria"))) {
                echo "    
    <li class=\"tipo-categoria\" tipo=\"";
                // line 273
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <a href=\"";
                // line 274
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show_tipo", array("tipo" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</a>
    </li>
    ";
            } else {
                // line 277
                echo "    <li class=\"tipo-categoria active\" tipo=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <a href=\"#\">";
                // line 278
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            // line 281
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "    <li class=\"nav-header\">Papelera</li>
    <li id=\"papelera\"><img src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/trash_grande.png"), "html", null, true);
        echo "\"/></li>
    <li class=\"nav-header\">Archivos</li>
    ";
        // line 285
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 286
            echo "    <li class=\"archivo-categoria\" categoria=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
            echo "\">
        <a href=\"";
            // line 287
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "categoria"), "html", null, true);
            echo "</a>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 290
            echo "     <li>Sin mas galerias</li>   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "    
</ul>
";
    }

    // line 296
    public function block_body($context, array $blocks = array())
    {
        // line 297
        echo "<h1>Galeria: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringtipocategoria"), "html", null, true);
        echo "</h1>
<ul class=\"nav nav-tabs\" id=\"tabCategoriasGaleria\">
  <li class=\"active\"><a href=\"#galeria\">Imagenes</a></li>
  <li><a href=\"#aprobar_imagenes\">Inactivas</a></li>
  <li><a href=\"#sistema\">Sistema</a></li>
</ul>
<div class=\"tab-content\">
    <div class=\"tab-pane  active\" id=\"galeria\">
       <div id=\"lista_imagenes\" style=\" min-height: 400px;\">
         ";
        // line 306
        echo $this->env->getExtension('actions')->renderUri("CategoriasGaleriaBundle:Categorias:galeria", array());
        // line 307
        echo "       </div>
       <div id=\"upload\" style=\"margin: 30px 150px;\">
           <!--a href=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_new", array("categoria" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
               Agregar archivos
           </a-->
       </div>
       Extenciones disponibles:   \"jpeg\",\"png\",\"gif\",\"jpg\"
     <!--List Files-->
     <ul id=\"files\" ></ul>
    <div class=\"clear\"></div>
   ";
        // line 318
        echo "     <div id=\"upload\" style=\"margin: 30px 150px;\">
           <a href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_new", array("categoria" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "tipoArchivo" => 2)), "html", null, true);
        echo "\">
               Agregar videos
           </a>
       </div>       
  </div>
  <div class=\"tab-pane\" id=\"aprobar_imagenes\">
      <div id=\"lista_imagenes_aprobar\" style=\" min-height: 400px;\">
          ";
        // line 326
        echo $this->env->getExtension('actions')->renderUri("CategoriasGaleriaBundle:Categorias:galeria", array());
        // line 327
        echo "      </div>
  </div>
  <div class=\"tab-pane\" id=\"sistema\">
        <table class=\"record_properties table table-bordered\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
                    <th>Categoria</th>
                    <td>";
        // line 336
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <td>";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringtipocategoria"), "html", null, true);
        echo "</td>
                    <th>Posicion</th>
                    <td>";
        // line 342
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Activa?</th>
                    <td>";
        // line 346
        echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"));
        echo "</td>
                    <th>Es categoria?</th>
                    <td>";
        // line 348
        echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "iscategoria"));
        echo "</td>
                </tr>
                <tr>
                    <th>Creada</th>
                    <td>";
        // line 352
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                    <th>Actualizada</th>
                    <td>";
        // line 354
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat"), "d/m/Y H:i"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>      
</div>


<ul class=\"record_actions nav nav-pills\">
        <li>
            <button class=\"btn\" onclick=\"location.href='";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias"), "html", null, true);
        echo "'\">
                Regresar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <button class=\"btn btn-success\" onclick=\"location.href='";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "'\">
                Editar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <form action=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 377
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                    <button class=\"btn btn-danger\" type=\"submit\">Eliminar</button>
            </form>
        </li>
</ul>

<!-- Modal -->
<div id=\"editarFormModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"editarModalLabel\">Editar registro</h3>
  </div>
  <div class=\"modal-body\">
    <div style=\"float: right; height: 120px;\">
            <img class=\"image-dialog\" src=\"\" id=\"\"/>
    </div>

    <p>Indique el titulo y/o descripcion</p>
    <div style=\"clear: both;\"></div>
    <div style=\"padding-top: 30px;\">
            <div class=\"control-group\">
                <label for=\"field-titulo\">Titulo</label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"field-titulo\" value=\"00071.jpg\" id=\"field-titulo\" />
                </div>
            </div>
            <div class=\"control-group\">
                <label for=\"field-contenido\">Contenido</label>
                <div class=\"controls\">
                    <textarea name=\"field-contenido\" id=\"field-contenido\"></textarea>
                </div>
            </div>
            <input name=\"field-url\" id=\"field-url\" type=\"hidden\" value=\"\"/>
    </div>
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cerrar</button>
    <button class=\"btn btn-primary\" onclick=\"javascript:guardarEditarFormModal();\">Guardar</button>
    <button class=\"btn\" onclick=\"javascript:avanzadaEditarFormModal();\">Avanzado</button>
  </div>
</div>

<div id=\"confirmarFormModal\"  class=\"modal hide fade\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
    <h3>Confimar eliminar registro</h3>
  </div>
  <div class=\"modal-body\">
    <div style=\"float: right; height: 120px;\">
            <img class=\"image-dialog\" src=\"\" id=\"\"/>
        </div>
        <div style=\"clear: both;\"></div>
        <p style=\"margin-top:20px;\">¿Confirmar eliminar el siguiente registro?</p>
        <input id=\"field-eliminar\" type=\"hidden\" value=\"\"/>
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
    <button class=\"btn btn-danger\" onclick=\"javascript:eliminarConfirmarFormModal();\">Eliminar</button>
  </div>
</div>

<div id=\"confirmarActivarFormModal\"  class=\"modal hide fade\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
    <h3>Confirmar activar registro</h3>
  </div>
  <div class=\"modal-body\">
    <div style=\"float: right; height: 120px;\">
            <img class=\"image-dialog\" src=\"\" id=\"\"/>
        </div>
        <div style=\"clear: both;\"></div>
        <p style=\"margin-top:20px;\">¿Confirmar activar el registro?</p>
        <input id=\"field-activar\" type=\"hidden\" value=\"\"/>
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancelar</button>
    <button class=\"btn btn-success\" onclick=\"javascript:activarConfirmarFormModal();\">Activar</button>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:CategoriasPublicacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 309,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 60,  137 => 51,  130 => 49,  103 => 34,  121 => 42,  87 => 23,  80 => 19,  61 => 11,  84 => 22,  68 => 17,  93 => 30,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 327,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 120,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 52,  135 => 51,  131 => 96,  110 => 36,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 36,  74 => 17,  70 => 14,  66 => 13,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 87,  154 => 56,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 42,  94 => 25,  65 => 16,  52 => 9,  97 => 31,  92 => 20,  88 => 32,  78 => 19,  71 => 18,  59 => 14,  90 => 25,  29 => 6,  96 => 26,  91 => 24,  81 => 21,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 18,  72 => 23,  50 => 11,  43 => 5,  40 => 8,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 59,  134 => 50,  126 => 52,  123 => 31,  118 => 43,  114 => 37,  111 => 33,  104 => 32,  101 => 35,  99 => 26,  86 => 23,  77 => 26,  69 => 16,  58 => 15,  55 => 12,  53 => 12,  46 => 8,  44 => 9,  38 => 4,  35 => 3,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 62,  167 => 61,  165 => 76,  157 => 5,  152 => 55,  150 => 58,  147 => 53,  144 => 48,  136 => 55,  133 => 56,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 33,  102 => 39,  98 => 28,  95 => 35,  89 => 32,  85 => 39,  83 => 22,  76 => 17,  67 => 14,  63 => 18,  60 => 13,  57 => 11,  54 => 10,  51 => 8,  48 => 12,  45 => 10,  42 => 6,  39 => 4,  36 => 3,  33 => 3,);
    }
}
