<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_f07855a6b3b1bfe8155165361c16225eab926edd7e98d944e19a74715dd47a2a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slides/animation.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slides/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tweets.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<section id=\"contenido\">
    <article id=\"content-slider\">
        <div id=\"slider\">
            <div id=\"mask\">
                <ul>
                    <li id=\"first\" class=\"firstanimation\">
                        <a href=\"#\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 0, array(), "array"), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 0, array(), "array"), "titulo"), "html", null, true);
        echo "\"/>
                        </a>
                        <div class=\"tooltip\">
                            <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 0, array(), "array"), "titulo"), "html", null, true);
        echo "</h1>
                        </div>
                    </li>

                    <li id=\"second\" class=\"secondanimation\">
                        <a href=\"#\">
                            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 1, array(), "array"), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 1, array(), "array"), "titulo"), "html", null, true);
        echo "\"/>
                        </a>
                        <div class=\"tooltip\">
                            <h1>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 1, array(), "array"), "titulo"), "html", null, true);
        echo "</h1>
                        </div>
                    </li>

                    <li id=\"third\" class=\"thirdanimation\">
                        <a href=\"#\">
                            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 2, array(), "array"), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 2, array(), "array"), "titulo"), "html", null, true);
        echo "\"/>
                        </a>
                        <div class=\"tooltip\">
                            <h1>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 2, array(), "array"), "titulo"), "html", null, true);
        echo "</h1>
                        </div>
                    </li>

                    <li id=\"fourth\" class=\"fourthanimation\">
                        <a href=\"#\">
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 3, array(), "array"), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 3, array(), "array"), "titulo"), "html", null, true);
        echo "\"/>
                        </a>
                        <div class=\"tooltip\">
                            <h1>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 3, array(), "array"), "titulo"), "html", null, true);
        echo "</h1>
                        </div>
                    </li>

                    <li id=\"fifth\" class=\"fifthanimation\">
                        <a href=\"#\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 4, array(), "array"), "webPath"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 4, array(), "array"), "titulo"), "html", null, true);
        echo "\"/>
                        </a>
                        <div class=\"tooltip\">
                            <h1>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["galerias"]) ? $context["galerias"] : $this->getContext($context, "galerias")), 4, array(), "array"), "titulo"), "html", null, true);
        echo "</h1>
                        </div>
                    </li>
                </ul>
            </div>
            <div class=\"progress-bar\"></div>
        </div>
    </article>    
    <article id=\"tweets-contenedor\">
    ";
        // line 66
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FrontendBundle:Default:lastTweets", array("username" => "LaNinadelMezcal")));
        echo "
    </article>

</section>

";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    jQuery.iniciarCircle=function(){
        \$('ul.tweets-lista li:first-child').slideUp(\"slow\",function(){
            \$('ul.tweets-lista').append(\$(this).slideDown(\"fast\"));
        });

        setTimeout(function(){
            \$.iniciarCircle();
        },6000);
    }

    jQuery.mostrarTooltip=function() {
        \$(\"#slider li .tooltip\").animate({'left':'0px','opacity':1},'fast',function(){
            \$(\"#slider li, #slider .progress-bar\").css({\"-moz-animation-play-state\":\"paused\",\"-webkit-animation-play-state\":\"paused\"});
        });

        setTimeout(function(){
            \$.ocultarTooltip();
        },5000);
    }

    jQuery.ocultarTooltip=function() {
        \$(\"#slider li .tooltip\").animate({'left':'-320px','opacity':0},'fast',function(){
            \$(\"#slider li, #slider .progress-bar\").css({\"-moz-animation-play-state\":\"running\",\"-webkit-animation-play-state\":\"running\"});
        });

        setTimeout(function(){
            \$.mostrarTooltip();
        },5000);
    }

    jQuery.iniciar=function(){
        \$.iniciarCircle();
        \$.mostrarTooltip();
    }
    
    \$(document).on(\"ready\",\$.iniciar);
    </script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  303 => 111,  299 => 110,  295 => 109,  285 => 105,  273 => 98,  259 => 96,  247 => 94,  205 => 80,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 154,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 73,  151 => 49,  113 => 47,  116 => 45,  236 => 100,  226 => 93,  204 => 71,  188 => 71,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 13,  293 => 212,  232 => 96,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 53,  130 => 51,  103 => 60,  121 => 42,  87 => 31,  80 => 24,  61 => 23,  84 => 27,  68 => 15,  93 => 40,  79 => 24,  56 => 12,  140 => 53,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 95,  239 => 77,  218 => 85,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 97,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 64,  172 => 60,  143 => 57,  135 => 54,  131 => 59,  110 => 31,  64 => 15,  41 => 5,  276 => 96,  272 => 149,  257 => 92,  246 => 132,  243 => 89,  241 => 93,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 75,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 54,  138 => 79,  122 => 69,  105 => 36,  74 => 50,  70 => 19,  66 => 25,  62 => 12,  199 => 90,  186 => 70,  174 => 58,  169 => 71,  166 => 11,  161 => 85,  159 => 58,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 57,  65 => 12,  52 => 10,  97 => 58,  92 => 30,  88 => 38,  78 => 27,  71 => 26,  59 => 13,  90 => 32,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 7,  30 => 4,  31 => 9,  27 => 4,  47 => 6,  34 => 7,  28 => 5,  24 => 2,  22 => 1,  82 => 53,  75 => 21,  72 => 23,  50 => 9,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 82,  142 => 51,  134 => 52,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 37,  104 => 41,  101 => 36,  99 => 33,  86 => 27,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 11,  46 => 12,  44 => 13,  38 => 4,  35 => 4,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 72,  157 => 84,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 39,  106 => 61,  102 => 33,  98 => 30,  95 => 35,  89 => 30,  85 => 54,  83 => 35,  76 => 31,  67 => 18,  63 => 15,  60 => 14,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 6,  42 => 7,  39 => 4,  36 => 4,  33 => 3,);
    }
}
