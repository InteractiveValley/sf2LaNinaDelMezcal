<?php

/* FrontendBundle:Default:pagina1.html.twig */
class __TwigTemplate_0453634156699598f785a98318db92da69a6bd47c21446ac2ca05ee3c2643572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::splash.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::splash.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<section id=\"contenedor\">
\t\t<article>
\t\t\t<figure class=\"splash\" id=\"cara\">
\t\t\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/cara_splash.jpg"), "html", null, true);
        echo "\" alt=\"splash\"/>
\t\t\t</figure>
\t\t\t<figure class=\"splash\" id=\"frase\">
\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/leyenda_splash.jpg"), "html", null, true);
        echo "\" alt=\"splash\"/>
\t\t\t</figure>
\t\t\t<figure class=\"splash\" id=\"leyenda\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/leyenda.png"), "html", null, true);
        echo "\" alt=\"splash\"/>
\t\t\t</figure>
\t\t\t<div id=\"botones\" class=\"splash\">
\t\t\t\t<figure id=\"boton-yes\">
\t\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/yes.png"), "html", null, true);
        echo "\" alt=\"yes\">
\t\t\t\t\t</a>
\t\t\t\t</figure>
\t\t\t\t<figure id=\"boton-no\">
\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("splash", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/no.png"), "html", null, true);
        echo "\" alt=\"no\">\t\t
\t\t\t\t\t</a>
\t\t\t\t</figure>
\t\t\t</div>\t\t
\t\t</article>
\t</section>
";
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "\t<footer>
\t    <div id=\"contenido-footer\">
\t    \tCopyright 2013 La Niña del Mezcal info@laniñadelmezcal.com\t
\t    </div>
\t    <figure id=\"facebook-footer\">
            <a href=\"https://www.facebook.com/ninadelmezcal\" target=\"_blank\">
               <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
        </figure>
        <figure id=\"twitter-footer\">
            <a href=\"https://twitter.com/LaNinadelMezcal\" target=\"_blank\">
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\">
            </a>
        </figure>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:pagina1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 90,  245 => 88,  228 => 79,  187 => 65,  388 => 162,  384 => 161,  380 => 160,  376 => 159,  340 => 140,  336 => 139,  332 => 137,  319 => 134,  313 => 130,  290 => 117,  267 => 109,  251 => 102,  235 => 93,  216 => 87,  208 => 85,  201 => 83,  132 => 50,  155 => 66,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 107,  247 => 94,  205 => 84,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 59,  151 => 49,  113 => 40,  116 => 37,  236 => 100,  226 => 93,  204 => 70,  188 => 71,  153 => 49,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 145,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 92,  210 => 71,  194 => 67,  177 => 62,  164 => 58,  137 => 53,  130 => 51,  103 => 33,  121 => 42,  87 => 32,  80 => 24,  61 => 19,  84 => 27,  68 => 23,  93 => 40,  79 => 26,  56 => 16,  140 => 55,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 103,  239 => 77,  218 => 85,  213 => 86,  198 => 21,  193 => 78,  183 => 63,  175 => 13,  163 => 10,  107 => 36,  37 => 6,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 136,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 108,  260 => 92,  254 => 86,  248 => 89,  242 => 103,  237 => 80,  221 => 75,  195 => 75,  191 => 66,  180 => 67,  172 => 60,  143 => 57,  135 => 44,  131 => 59,  110 => 31,  64 => 21,  41 => 5,  276 => 112,  272 => 110,  257 => 92,  246 => 132,  243 => 89,  241 => 94,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 56,  138 => 79,  122 => 38,  105 => 36,  74 => 25,  70 => 19,  66 => 25,  62 => 19,  199 => 68,  186 => 70,  174 => 66,  169 => 71,  166 => 11,  161 => 61,  159 => 58,  154 => 54,  145 => 46,  141 => 45,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 34,  65 => 20,  52 => 10,  97 => 35,  92 => 30,  88 => 38,  78 => 27,  71 => 26,  59 => 18,  90 => 33,  29 => 3,  96 => 41,  91 => 56,  81 => 21,  49 => 7,  30 => 4,  31 => 9,  27 => 3,  47 => 6,  34 => 5,  28 => 5,  24 => 2,  22 => 1,  82 => 29,  75 => 21,  72 => 24,  50 => 13,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 35,  104 => 41,  101 => 36,  99 => 32,  86 => 32,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 11,  46 => 12,  44 => 6,  38 => 4,  35 => 3,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 72,  157 => 60,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 42,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 39,  106 => 44,  102 => 33,  98 => 39,  95 => 30,  89 => 29,  85 => 54,  83 => 35,  76 => 25,  67 => 22,  63 => 20,  60 => 14,  57 => 14,  54 => 15,  51 => 18,  48 => 12,  45 => 6,  42 => 9,  39 => 8,  36 => 4,  33 => 3,);
    }
}
