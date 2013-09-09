<?php

/* FrontendBundle::layout.html.twig */
class __TwigTemplate_b66643834eb53a86e1419cd12f2e9e4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"es\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       
        <meta property=\"og:title\" content=\"La niña del mezcal\" />
        <meta property=\"og:type\" content=\"album\" />
        <meta property=\"og:url\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("homepage"), "html", null, true);
        echo "\" />
        <meta property=\"og:image\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_header.jpg"), "html", null, true);
        echo "\" />
        <meta property=\"og:site_name\" content=\"laninadelmezcal.com\" />
        <!--meta property=\"fb:admins\" content=\"USER_ID1,USER_ID2\"/-->
        <meta property=\"og:description\" content=\"La niña del mezcal.\" />

        <meta name=\"twitter:card\" value=\"summary\">
        <meta name=\"twitter:url\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("homepage"), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:title\" value=\"La niña del mezcal\">
        <meta name=\"twitter:description\" value=\"La niña del mezcal.\"/>
        <meta name=\"twitter:image\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_header.jpg"), "html", null, true);
        echo "\"/>
        <meta name=\"twitter:site\" value=\"@laninadelmezcal\"/>
        <meta name=\"twitter:creator\" value=\"@richpolis\"/>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src=\"";
        // line 35
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
        <div id=\"contenedor\">
            <header>
            <figure id=\"logo\">
                <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_header.png"), "html", null, true);
        echo "\" alt=\"\">
                </a>
            </figure>
            <span id=\"nav-left\">
                &nbsp;
            </span>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("about_la_nina"), "html", null, true);
        echo "\">about la niña</a></li>
                    <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("the_mezcal"), "html", null, true);
        echo "\">the mezcal</a></li>
                    <li><a href=\"\">the blog</a></li>
                    <li><a href=\"\">events</a></li>
                    <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("find_la_nina"), "html", null, true);
        echo "\">find la niña</a></li>
                    <li><a href=\"\">shop online</a></li>
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto"), "html", null, true);
        echo "\">contact</a></li>
                </ul>
            </nav>
            <span id=\"nav-right\">
                &nbsp;
            </span>
            <div id=\"lenguajes\">
                <span id=\"lenguaje-es\">
                    <a href=\"\">
                        español    
                    </a>
                </span>
                <span id=\"lenguaje-en\">
                    <a href=\"\">
                        english    
                    </a>
                </span>
            </div>
            <div id=\"redes-sociales\">
                <figure id=\"red-social-twitter\">
                    <a href=\"\">
                        <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter.png"), "html", null, true);
        echo "\" alt=\"\"/>    
                    </a>
                </figure>
                <figure id=\"red-social-facebook\">
                    <a href=\"\">
                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook.png"), "html", null, true);
        echo "\" alt=\"\"/>    
                    </a>
                </figure>
            </div>
        </header>
        ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "        <footer>
            <div id=\"contenido-footer\">
                Copyright 2013 La Niña del Mezcal info@laniñadelmezcal.com  
            </div>
            <figure id=\"desarrollado\">
                <a href=\"mailto:rafael@interactivevalley.com\">
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/developed_negro.png"), "html", null, true);
        echo "\" alt=\"developed for Interactive Valley\">
                </a>
            </figure>
            <figure id=\"facebook-footer\">
                <a href=\"\">
                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                </a>
            </figure>
            <figure id=\"twitter-footer\">
                <a href=\"\">
                    <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\">
                </a>
            </figure>
        </footer>    
        </div>
        ";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "   </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "La Niña del Mezcal";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 94
    public function block_body($context, array $blocks = array())
    {
    }

    // line 116
    public function block_javascripts($context, array $blocks = array())
    {
        // line 117
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 118
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
        return array (  238 => 118,  233 => 117,  230 => 116,  225 => 94,  219 => 31,  213 => 29,  210 => 28,  204 => 8,  198 => 120,  196 => 116,  188 => 111,  180 => 106,  172 => 101,  164 => 95,  162 => 94,  154 => 89,  146 => 84,  122 => 63,  117 => 61,  111 => 58,  107 => 57,  96 => 49,  92 => 48,  76 => 35,  72 => 33,  70 => 28,  65 => 26,  58 => 22,  52 => 19,  39 => 12,  32 => 8,  23 => 1,  131 => 63,  127 => 62,  124 => 61,  114 => 54,  108 => 51,  95 => 41,  88 => 37,  84 => 36,  80 => 35,  73 => 31,  51 => 12,  46 => 9,  43 => 13,  37 => 5,  33 => 4,  30 => 3,);
    }
}
