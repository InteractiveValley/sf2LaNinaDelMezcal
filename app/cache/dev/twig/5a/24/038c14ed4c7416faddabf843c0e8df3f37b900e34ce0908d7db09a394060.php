<?php

/* FrontendBundle:Default:find.html.twig */
class __TwigTemplate_5a24038c14ed4c7416faddabf843c0e8df3f37b900e34ce0908d7db09a394060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        // line 18
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\">
<style type=\"text/css\">
.bx-wrapper .bx-viewport{
  background: none;
  border: none;
  box-shadow: none;
  -webkit-box-shadow: none;
}

</style>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "<section id=\"contenido\">
   <article>
         <h2 class=\"titulo-article\">";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("where to find la niña", array(), "messages");
        echo "</h2>
         <h2 class=\"titulo-galeria\" style=\"margin: 16px 0 24px 0;\">
             méxico
             <span>";
        // line 26
        echo $this->env->getExtension('translator')->getTranslator()->trans("retail", array(), "messages");
        echo "</span>
         </h2>
         <div id=\"galeria-mexico\" class=\"galeria\">
               <div class=\"contenedor-galeria\">
                  <ul class=\"slider1\">
                     ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 32
            echo "                      ";
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug") == "galeria-tiendas-mxico")) {
                // line 33
                echo "                       ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "galerias"));
                foreach ($context['_seq'] as $context["_key"] => $context["galeria"]) {
                    // line 34
                    echo "                        <li class=\"item-small\">
                         <a href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "webPath"), "html", null, true);
                    echo "\" rel=\"prettyPhoto\">
                             <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "thumbnailWebPath"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "titulo"), "html", null, true);
                    echo "\">
                         </a>
                        </li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galeria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                     ";
            }
            // line 41
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                  </ul>
               </div>
               <figure id=\"control-1\" class=\"control-galeria-izquierda\">
               </figure>
               <figure id=\"control-2\" class=\"control-galeria-derecha\">
               </figure>
         </div>
         <h2 class=\"titulo-galeria\">
             ";
        // line 50
        echo $this->env->getExtension('translator')->getTranslator()->trans("restaurants & bars", array(), "messages");
        // line 51
        echo "         </h2>
         <div id=\"galeria-mexico-distribuidores\" class=\"galeria distribuidores\">
               <div class=\"contenedor-galeria\">
                  <ul class=\"slider-distribuidores-1\">
                     ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriasPublicacion"]) ? $context["categoriasPublicacion"] : $this->getContext($context, "categoriasPublicacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo "  
                     ";
            // line 56
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug") == "where-to-find-mexico")) {
                // line 57
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "publicaciones"));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    // line 58
                    echo "                        <li class=\"item-distribuidores\">
                            <div class=\"contenido-galeria-distribuidores\">
                                <h3>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "titulo"), "html", null, true);
                    echo "</h3>
                                ";
                    // line 61
                    echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method");
                    echo "
                            </div>
                        </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                     ";
            }
            // line 66
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                  </ul>
               </div>
               <figure id=\"control-3\" class=\"control-galeria-izquierda\">
               </figure>
               <figure id=\"control-4\" class=\"control-galeria-derecha\">
               </figure>
         </div>
   </article>
   <article>
         <h2 class=\"titulo-galeria titulo-galeria-find\">
            USA
            <span>";
        // line 78
        echo $this->env->getExtension('translator')->getTranslator()->trans("retail", array(), "messages");
        echo "</span>
         </h2>
         <div id=\"galeria-usa\" class=\"galeria\">
               <div class=\"contenedor-galeria\">
                  <ul class=\"slider2\">
                     ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 84
            echo "                      ";
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug") == "galeria-tiendas-usa")) {
                // line 85
                echo "                       ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "galerias"));
                foreach ($context['_seq'] as $context["_key"] => $context["galeria"]) {
                    // line 86
                    echo "                        <li class=\"item-small\">
                         <a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "webPath"), "html", null, true);
                    echo "\" rel=\"prettyPhoto\">
                             <img src=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "thumbnailWebPath"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["galeria"]) ? $context["galeria"] : $this->getContext($context, "galeria")), "titulo"), "html", null, true);
                    echo "\">
                         </a>
                        </li>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galeria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "                     ";
            }
            // line 93
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                  </ul>
               </div>
               <figure id=\"control-5\" class=\"control-galeria-izquierda\">
               </figure>
               <figure id=\"control-6\" class=\"control-galeria-derecha\">
               </figure>
         </div>
         <h2 class=\"titulo-galeria\">
             ";
        // line 102
        echo $this->env->getExtension('translator')->getTranslator()->trans("restaurants & bars", array(), "messages");
        // line 103
        echo "         </h2>
         <div id=\"galeria-usa-distribuidores\" class=\"galeria distribuidores\">
               <div class=\"contenedor-galeria\">
                  <ul class=\"slider-distribuidores-2\">
                     ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriasPublicacion"]) ? $context["categoriasPublicacion"] : $this->getContext($context, "categoriasPublicacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo "  
                     ";
            // line 108
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug") == "where-to-find-usa")) {
                // line 109
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "publicaciones"));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    // line 110
                    echo "                        <li class=\"item-distribuidores\">
                            <div class=\"contenido-galeria-distribuidores\">
                                <h3>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "titulo"), "html", null, true);
                    echo "</h3>
                                ";
                    // line 113
                    echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method");
                    echo "
                            </div>
                        </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "                     ";
            }
            // line 118
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                  </ul>
               </div>
               <figure id=\"control-7\" class=\"control-galeria-izquierda\">
               </figure>
               <figure id=\"control-8\" class=\"control-galeria-derecha\">
               </figure>
         </div>
   </article>
   <article>
         <h2 class=\"titulo-galeria titulo-galeria-find\">
             ";
        // line 129
        echo $this->env->getExtension('translator')->getTranslator()->trans("distribution", array(), "messages");
        // line 130
        echo "         </h2>
         <div id=\"galeria-distribution-distribuidores\" class=\"galeria distribuidores\">
               <div class=\"contenedor-galeria\">
                  <ul class=\"slider-distribuidores-3\">
                     ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriasPublicacion"]) ? $context["categoriasPublicacion"] : $this->getContext($context, "categoriasPublicacion")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            echo "  
                     ";
            // line 135
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "slug") == "where-to-find-distribuidores")) {
                // line 136
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "publicaciones"));
                foreach ($context['_seq'] as $context["_key"] => $context["publicacion"]) {
                    // line 137
                    echo "                        <li class=\"item-distribuidores\">
                            <div class=\"contenido-galeria-distribuidores\">
                                <h3>";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "titulo"), "html", null, true);
                    echo "</h3>
                                ";
                    // line 140
                    echo $this->getAttribute((isset($context["publicacion"]) ? $context["publicacion"] : $this->getContext($context, "publicacion")), "descripcion", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method");
                    echo "
                            </div>
                        </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publicacion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "                     ";
            }
            // line 145
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                  </ul>
               </div>
               <figure id=\"control-9\" class=\"control-galeria-izquierda\">
               </figure>
               <figure id=\"control-10\" class=\"control-galeria-derecha\">
               </figure>
         </div>
   </article>
</section>

";
    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        // line 159
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>  
<script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/sfrichpolis.js"), "html", null, true);
        echo "\"></script> 
<script>
   \$(document).ready(function(){
    \$.configPrettyPhoto();
     \$('.slider1').bxSlider({
       slideWidth: 195,
       minSlides: 1,
       maxSlides: 4,
       slideMargin: 10,
       nextSelector: '#control-1',
       prevSelector: '#control-2',
       nextText: 'Next',
       prevText: 'Prev',
       pager:false

     });
     \$('.slider-distribuidores-1').bxSlider({
       slideWidth: 300,
       minSlides: 1,
       maxSlides: 4,
       slideMargin: 5,
       nextSelector: '#control-3',
       prevSelector: '#control-4',
       nextText: 'Next',
       prevText: 'Prev',
       infiniteLoop: false,
       hideControlOnEnd: true,
       pager:false
     });
     \$('.slider2').bxSlider({
       slideWidth: 195,
       minSlides: 1,
       maxSlides: 4,
       slideMargin: 10,
       nextSelector: '#control-5',
       prevSelector: '#control-6',
       nextText: 'Next',
       prevText: 'Prev',
       pager:false
     });
     \$('.slider-distribuidores-2').bxSlider({
       slideWidth: 300,
       minSlides: 1,
       maxSlides: 4,
       slideMargin: 5,
       nextSelector: '#control-7',
       prevSelector: '#control-8',
       nextText: 'Next',
       prevText: 'Prev',
       infiniteLoop: false,
       hideControlOnEnd: true,
       pager:false
     });
     \$('.slider-distribuidores-3').bxSlider({
       slideWidth: 300,
       minSlides: 1,
       maxSlides: 4,
       slideMargin: 5,
       nextSelector: '#control-9',
       prevSelector: '#control-10',
       nextText: 'Next',
       prevText: 'Prev',
       infiniteLoop: false,
       hideControlOnEnd: true,
       pager:false
     });
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:find.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 162,  384 => 161,  380 => 160,  376 => 159,  340 => 140,  336 => 139,  332 => 137,  319 => 134,  313 => 130,  290 => 117,  267 => 109,  251 => 102,  235 => 93,  216 => 87,  208 => 85,  201 => 83,  132 => 50,  155 => 66,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 107,  247 => 94,  205 => 84,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 73,  151 => 49,  113 => 40,  116 => 41,  236 => 100,  226 => 93,  204 => 71,  188 => 71,  153 => 58,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 145,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 92,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 53,  130 => 51,  103 => 60,  121 => 42,  87 => 31,  80 => 24,  61 => 20,  84 => 27,  68 => 23,  93 => 40,  79 => 24,  56 => 12,  140 => 55,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 103,  239 => 77,  218 => 85,  213 => 86,  198 => 21,  193 => 78,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 136,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 108,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 67,  172 => 60,  143 => 57,  135 => 54,  131 => 59,  110 => 31,  64 => 21,  41 => 5,  276 => 112,  272 => 110,  257 => 92,  246 => 132,  243 => 89,  241 => 94,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 56,  138 => 79,  122 => 42,  105 => 36,  74 => 26,  70 => 19,  66 => 25,  62 => 12,  199 => 90,  186 => 70,  174 => 66,  169 => 71,  166 => 11,  161 => 61,  159 => 58,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 34,  65 => 12,  52 => 10,  97 => 35,  92 => 30,  88 => 38,  78 => 27,  71 => 26,  59 => 13,  90 => 32,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 7,  30 => 18,  31 => 9,  27 => 4,  47 => 6,  34 => 7,  28 => 5,  24 => 2,  22 => 1,  82 => 31,  75 => 21,  72 => 23,  50 => 9,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 37,  104 => 41,  101 => 36,  99 => 33,  86 => 32,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 11,  46 => 6,  44 => 13,  38 => 4,  35 => 3,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 65,  167 => 61,  165 => 72,  157 => 60,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 39,  106 => 61,  102 => 33,  98 => 30,  95 => 35,  89 => 33,  85 => 54,  83 => 35,  76 => 31,  67 => 18,  63 => 15,  60 => 14,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 6,  42 => 5,  39 => 4,  36 => 4,  33 => 3,);
    }
}
