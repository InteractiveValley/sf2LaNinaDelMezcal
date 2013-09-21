<?php

/* FrontendBundle:Default:botella.html.twig */
class __TwigTemplate_c4a8a93715a77bf5184f0a8a13fae744127bd4ec8639f5756a1836bf8a12fd10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'redes_sociales' => array($this, 'block_redes_sociales'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.qtip.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
";
    }

    // line 11
    public function block_redes_sociales($context, array $blocks = array())
    {
        // line 12
        echo "        <meta property=\"og:title\" content=\"La niña del mezcal\" />
        <meta property=\"og:type\" content=\"album\" />
        <meta property=\"og:url\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" />
        <meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"laninadelmezcal.com\" />
        <!--meta property=\"fb:admins\" content=\"USER_ID1,USER_ID2\"/-->
        <meta property=\"og:description\" content=\"La niña del mezcal.\" />

        <meta name=\"twitter:card\" value=\"summary\">
        <meta name=\"twitter:url\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:title\" value=\"La niña del mezcal\">
        <meta name=\"twitter:description\" value=\"La niña del mezcal.\"/>
        <meta name=\"twitter:image\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:site\" value=\"@laninadelmezcal\"/>
        <meta name=\"twitter:creator\" value=\"@richpolis\"/>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "<section id=\"contenido\" class=\"botellas\" ng-controller=\"BotellasController\">
   <div class=\"galeria\">
      <figure class=\"control-galeria-izquierda\">
          <a class=\"bx-prev\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["botella_anterior"]) ? $context["botella_anterior"] : $this->getContext($context, "botella_anterior")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">&nbsp;</a>
      </figure>
      <article id=\"botella\">
      
            <div class=\"descripcion-botella\">
               <header>
                  <h1>";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("bottle tour", array(), "messages");
        echo "</h1>
                  <h2 class=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "clase"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "botella"), "html", null, true);
        echo "</h2>   
               </header>
               <div id=\"descripcion-botella-cuerpo\">
                  ";
        // line 45
        echo $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "descripcion", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method");
        echo "  
               </div>
            </div>
            <figure class=\"botella\">
                <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "botella"), "html", null, true);
        echo "\">
            </figure>
              ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "mensajes"));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 52
            echo "                ";
            if ((!$this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "isHowToMix"))) {
                // line 53
                echo "                <div class=\"mensaje-toltip espadin ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "clase"), "html", null, true);
                echo "\" rel=\"tip\" title=\"";
                echo $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "mensaje", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method");
                echo "\" style=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "style"), "html", null, true);
                echo "\">
                      ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "titulo", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method"), "html", null, true);
                echo "
                </div>
                ";
            } else {
                // line 57
                echo "                <div id=\"howToMix\" class=\"mensaje-toltip espadin ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "clase"), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "style"), "html", null, true);
                echo "\">
                    <span onclick=\"javascript:generarHowToMix(";
                // line 58
                echo (isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias"));
                echo ")\" style=\"cursor:pointer;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "titulo", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method"), "html", null, true);
                echo "</span>
                </div>
                ";
            }
            // line 61
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              
      </article>
      <figure class=\"control-galeria-derecha\">
            <a class=\"bx-next\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["botella_siguiente"]) ? $context["botella_siguiente"] : $this->getContext($context, "botella_siguiente")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">&nbsp;</a>
      </figure>   
   </div>
   <figure id=\"boton-comprar\">
      <a href=\"\">
         ";
        // line 70
        echo $this->env->getExtension('translator')->getTranslator()->trans("buy now", array(), "messages");
        // line 71
        echo "      </a>
      <ul class=\"menu-comprar\">
        <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "linkShopMexico"), "html", null, true);
        echo "\" target=\"_blank\">méxico</a></li>
        <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["botella"]) ? $context["botella"] : $this->getContext($context, "botella")), "linkShopUsa"), "html", null, true);
        echo "\" target=\"_blank\">usa</a></li>
      </ul>
   </figure>

   <div id=\"redes-sociales-pagina\" class=\"derecha\">
         <figure id=\"red-social-pagina-facebook\">
            <a target=\"_blank\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "&t=";
        echo twig_escape_filter($this->env, twig_urlencode_filter("sitio interesante para brindar por ello", true), "html", null, true);
        echo "\">
                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook_share.png"), "html", null, true);
        echo "\" alt=\"compartir en facebook\">     
            </a>
         </figure>
         <figure id=\"red-social-pagina-twitter\">
              <a href=\"http://twitter.com/home?status=";
        // line 85
        echo twig_escape_filter($this->env, twig_urlencode_filter("Estoy leyendo ", true), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")), array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo twig_escape_filter($this->env, twig_urlencode_filter("en el sitio www.laninadelmezcal.com", true), "html", null, true);
        echo ".\" target=\"_blank\">
                  <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter_share.png"), "html", null, true);
        echo "\" alt=\"compartir en twitter\">
              </a>
         </figure>
   </div>
   <figure id=\"menus-botellas\">
      <ul>
         <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botella_espadin", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "botella_espadin")) {
            echo "active";
        }
        echo " espadin\">espadin</a></li>
         <li><a href=\"\" class=\"";
        // line 93
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "madrecuixe")) {
            echo "active";
        }
        echo " madrecuixe\">madrecuixe</a></li>
         <li><a href=\"\" class=\"";
        // line 94
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "tobala")) {
            echo "active";
        }
        echo " tobala\">tobala</a></li>
         <li><a href=\"\" class=\"";
        // line 95
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "tepextate")) {
            echo "active";
        }
        echo " tepextate\">tepextate</a></li>
         <li><a href=\"\" class=\"";
        // line 96
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "pechuga")) {
            echo "active";
        }
        echo " pechuga\">pechuga</a></li>
         <li><a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botella_primario", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "botella_primario")) {
            echo "active";
        }
        echo " primario-mezcal\">primario mezcal</a></li>
         <li><a href=\"\" class=\"";
        // line 98
        if (((isset($context["pagina_actual"]) ? $context["pagina_actual"] : $this->getContext($context, "pagina_actual")) == "primario-licor")) {
            echo "active";
        }
        echo " primario-licor\">primario licor</a></li>
      </ul>
   </figure>
</section>

";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<!--script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js\">
   </script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["app_angular"]) ? $context["app_angular"] : $this->getContext($context, "app_angular"))), "html", null, true);
        echo "\"></script-->   
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.qtip.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>  
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\"></script>  
<script>
function generarHowToMix(objImagenes){
  var titulos=[],imagenes=[],descripciones=[],contador;
  for(contador=0;contador<objImagenes.length;contador++){
    titulos[contador]=\"Imagen \"+(contador+1);
    imagenes[contador]=objImagenes[contador].imagen;
    descripciones[contador] =\"\";
  }
  \$.prettyPhoto.open(imagenes,titulos,descripciones);
} 
\$(document).ready(function() {
  \$.configPrettyPhoto();
  \$('[rel=tip]').qtip({
      content: { 
        text: true
             },
      position: {
        my: 'top center',  // Position my top left...
        at: 'bottom center', // at the bottom right of...
        target: 'event'
      },
      show: {
        event: 'click mouseenter',
        solo: true
      },
      hide: {
        event: 'unfocus'
      },
      style: {
        classes: 'qtip-light qtip-bootstrap'
      }
    });
});

</script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:botella.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 111,  299 => 110,  295 => 109,  285 => 105,  273 => 98,  259 => 96,  247 => 94,  205 => 80,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 154,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 89,  151 => 49,  113 => 47,  116 => 45,  236 => 100,  226 => 93,  204 => 71,  188 => 71,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 13,  293 => 212,  232 => 96,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 53,  130 => 51,  103 => 60,  121 => 42,  87 => 31,  80 => 24,  61 => 23,  84 => 29,  68 => 15,  93 => 40,  79 => 24,  56 => 12,  140 => 53,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 95,  239 => 77,  218 => 85,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 97,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 64,  172 => 60,  143 => 65,  135 => 44,  131 => 59,  110 => 31,  64 => 15,  41 => 12,  276 => 96,  272 => 149,  257 => 92,  246 => 132,  243 => 89,  241 => 93,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 75,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 54,  138 => 79,  122 => 69,  105 => 36,  74 => 50,  70 => 19,  66 => 25,  62 => 12,  199 => 90,  186 => 70,  174 => 58,  169 => 71,  166 => 11,  161 => 85,  159 => 58,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 57,  65 => 12,  52 => 10,  97 => 58,  92 => 35,  88 => 38,  78 => 27,  71 => 26,  59 => 13,  90 => 32,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 9,  30 => 4,  31 => 9,  27 => 4,  47 => 6,  34 => 7,  28 => 5,  24 => 2,  22 => 1,  82 => 53,  75 => 21,  72 => 23,  50 => 9,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 82,  142 => 51,  134 => 52,  126 => 70,  123 => 49,  118 => 37,  114 => 33,  111 => 37,  104 => 41,  101 => 27,  99 => 33,  86 => 27,  77 => 19,  69 => 18,  58 => 13,  55 => 11,  53 => 11,  46 => 12,  44 => 13,  38 => 4,  35 => 4,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 84,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 62,  106 => 61,  102 => 33,  98 => 30,  95 => 35,  89 => 30,  85 => 54,  83 => 35,  76 => 31,  67 => 25,  63 => 15,  60 => 14,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 8,  42 => 7,  39 => 4,  36 => 3,  33 => 3,);
    }
}
