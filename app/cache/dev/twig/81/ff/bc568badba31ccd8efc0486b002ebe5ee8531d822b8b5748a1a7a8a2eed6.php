<?php

/* FrontendBundle::layout.html.twig */
class __TwigTemplate_81ffbc568badba31ccd8efc0486b002ebe5ee8531d822b8b5748a1a7a8a2eed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'redes_sociales' => array($this, 'block_redes_sociales'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" ng-app> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" ng-app> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" ng-app> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"es\" ng-app> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
       ";
        // line 10
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale");
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('redes_sociales', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <![endif]--> 
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class=chromeframe>Your browser is <em>ancient!</em> 
        <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or 
        <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.
        </p>
        <![endif]-->

        ";
        // line 50
        $context["route"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method");
        // line 51
        echo "        ";
        $context["about_la_nina"] = "";
        // line 52
        echo "        ";
        $context["mezcal"] = "";
        // line 53
        echo "        ";
        $context["find_la_nina"] = "";
        // line 54
        echo "        ";
        $context["frontend_contact"] = "";
        // line 55
        echo "        ";
        if (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "about_la_nina")) {
            // line 56
            echo "            ";
            $context["about_la_nina"] = "class='active'";
            // line 57
            echo "        ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "find_la_nina")) {
            // line 58
            echo "            ";
            $context["find_la_nina"] = "class='active'";
            // line 59
            echo "        ";
        } elseif ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "botella_espadin") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "botella_primario"))) {
            // line 60
            echo "            ";
            $context["mezcal"] = "class='active'";
            // line 61
            echo "        ";
        } elseif (((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "frontend_contacto")) {
            // line 62
            echo "            ";
            $context["frontend_contact"] = "class='active'";
            // line 63
            echo "        ";
        }
        // line 64
        echo "

        <div id=\"contenedor\">
            <header>
                <figure id=\"logo\">
                    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\" alt=\"\">
                    </a>
                </figure>
                <span id=\"nav-left\">
                    &nbsp;
                </span>
                <nav>
                    <ul>
                        <li>
                            <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about_la_nina", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" ";
        echo (isset($context["about_la_nina"]) ? $context["about_la_nina"] : $this->getContext($context, "about_la_nina"));
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("about la niña", array(), "messages");
        echo "</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botella_espadin", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" ";
        echo (isset($context["mezcal"]) ? $context["mezcal"] : $this->getContext($context, "mezcal"));
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("the mezcal", array(), "messages");
        echo "</a>
                            <!--ul>
                                <li><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botella_espadin", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">Espadin</a></li>
                                <li><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botella_primario", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\">Primario mazcal joven</a></li>
                            </ul-->    
                        </li>
                        <li>
                            <a href=\"#\">";
        // line 89
        echo $this->env->getExtension('translator')->getTranslator()->trans("the blog", array(), "messages");
        echo "</a>
                        </li>
                        <li><a href=\"#\">";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("events", array(), "messages");
        echo "</a></li>
                        <li><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("find_la_nina", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\"  ";
        echo (isset($context["find_la_nina"]) ? $context["find_la_nina"] : $this->getContext($context, "find_la_nina"));
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("find la niña", array(), "messages");
        echo "</a></li>
                        <li>
                            <a href=\"?shop\">";
        // line 94
        echo $this->env->getExtension('translator')->getTranslator()->trans("shop online", array(), "messages");
        echo "</a>
                            <ul>
                                <li><a target=\"_blank\" href=\"http://bacus-3.myshopify.com/products/la-ni-a-del-mezcal-espadin\">México</a></li>
                                <li><a target=\"_blank\" href=\"http://www.klwines.com/detail.asp?sku=1120562\">USA</a></li>
                            </ul>
                        </li>

                        <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\"  ";
        echo (isset($context["frontend_contact"]) ? $context["frontend_contact"] : $this->getContext($context, "frontend_contact"));
        echo ">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("contact", array(), "messages");
        echo "</a></li>
                    </ul>
                </nav>
                <span id=\"nav-right\">
                    &nbsp;
                </span>
                <div id=\"lenguajes\">
                    <span id=\"lenguaje-es\">
                        <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), array("_locale" => "es")), "html", null, true);
        echo "\" style=\"cursor: pointer;\">
                            español  
                        </a>
                    </span>
                    <span id=\"lenguaje-en\">
                        <a href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), array("_locale" => "en")), "html", null, true);
        echo "\" style=\"cursor: pointer;\">
                            english
                        </a>
                    </span>
                </div>
                <div id=\"redes-sociales\">
                    <figure id=\"red-social-twitter\">
                        <a href=\"https://twitter.com/LaNinadelMezcal\" target=\"_blank\">
                            <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter.png"), "html", null, true);
        echo "\" alt=\"\"/>    
                        </a>
                    </figure>
                    <figure id=\"red-social-facebook\">
                        <a href=\"https://www.facebook.com/ninadelmezcal\" target=\"_blank\">
                            <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook.png"), "html", null, true);
        echo "\" alt=\"\"/>    
                        </a>
                    </figure>
                </div>
            </header>
        ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "            <footer>
                <div id=\"contenido-footer\">
                    Copyright © 2013 La Niña del Mezcal  • <a href=\"mailto:info@laninadelmezcal.com\">info@laninadelmezcal.com</a>
                </div>
                <figure id=\"desarrollado\">
                    <a href=\"mailto:rafael@interactivevalley.com\">
                        <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/interactivevalley.png"), "html", null, true);
        echo "\" alt=\"developed for Interactive Valley\">
                    </a>
                </figure>
                <figure id=\"facebook-footer\">
                    <a href=\"https://www.facebook.com/ninadelmezcal\" target=\"_blank\">
                        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                    </a>
                </figure>
                <figure id=\"twitter-footer\">
                    <a href=\"https://twitter.com/LaNinadelMezcal\" target=\"_blank\">
                        <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\">
                    </a>
                </figure>
            </footer>    
        </div>
        ";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "La Niña del Mezcal";
    }

    // line 12
    public function block_redes_sociales($context, array $blocks = array())
    {
        // line 13
        echo "        <meta property=\"og:title\" content=\"La niña del mezcal\" />
        <meta property=\"og:type\" content=\"album\" />
        <meta property=\"og:url\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("homepage", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" />
        <meta property=\"og:image\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"laninadelmezcal.com\" />
        <!--meta property=\"fb:admins\" content=\"USER_ID1,USER_ID2\"/-->
        <meta property=\"og:description\" content=\"La niña del mezcal.\" />

        <meta name=\"twitter:card\" value=\"summary\">
        <meta name=\"twitter:url\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("homepage", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:title\" value=\"La niña del mezcal\">
        <meta name=\"twitter:description\" value=\"La niña del mezcal.\"/>
        <meta name=\"twitter:image\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:site\" value=\"@laninadelmezcal\"/>
        <meta name=\"twitter:creator\" value=\"@richpolis\"/>
        ";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fuentes.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        // line 155
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "FrontendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 8,  282 => 158,  280 => 154,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 89,  151 => 49,  113 => 47,  116 => 36,  236 => 100,  226 => 93,  204 => 71,  188 => 69,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 20,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 91,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 13,  293 => 212,  232 => 96,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 51,  130 => 41,  103 => 60,  121 => 42,  87 => 22,  80 => 24,  61 => 13,  84 => 29,  68 => 15,  93 => 30,  79 => 52,  56 => 37,  140 => 53,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 90,  239 => 77,  218 => 87,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 64,  172 => 60,  143 => 65,  135 => 44,  131 => 59,  110 => 31,  64 => 16,  41 => 10,  276 => 96,  272 => 149,  257 => 92,  246 => 132,  243 => 89,  241 => 85,  238 => 127,  233 => 74,  230 => 122,  227 => 71,  224 => 80,  222 => 76,  220 => 75,  211 => 109,  207 => 72,  182 => 69,  162 => 54,  146 => 52,  138 => 79,  122 => 69,  105 => 36,  74 => 50,  70 => 19,  66 => 17,  62 => 12,  199 => 90,  186 => 94,  174 => 58,  169 => 71,  166 => 11,  161 => 85,  159 => 87,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 30,  94 => 57,  65 => 12,  52 => 10,  97 => 58,  92 => 35,  88 => 55,  78 => 27,  71 => 26,  59 => 13,  90 => 23,  29 => 6,  96 => 30,  91 => 56,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 1,  47 => 6,  34 => 3,  28 => 5,  24 => 2,  22 => 1,  82 => 53,  75 => 21,  72 => 23,  50 => 9,  43 => 11,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 82,  142 => 51,  134 => 43,  126 => 70,  123 => 48,  118 => 37,  114 => 33,  111 => 37,  104 => 37,  101 => 27,  99 => 33,  86 => 27,  77 => 19,  69 => 18,  58 => 13,  55 => 11,  53 => 9,  46 => 12,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 101,  192 => 71,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 84,  152 => 55,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 62,  106 => 61,  102 => 33,  98 => 30,  95 => 26,  89 => 30,  85 => 54,  83 => 29,  76 => 51,  67 => 25,  63 => 15,  60 => 39,  57 => 14,  54 => 31,  51 => 14,  48 => 29,  45 => 8,  42 => 7,  39 => 4,  36 => 8,  33 => 3,);
    }
}
