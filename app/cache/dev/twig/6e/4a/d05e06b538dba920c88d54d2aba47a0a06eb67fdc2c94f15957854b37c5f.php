<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_6e4ad05e06b538dba920c88d54d2aba47a0a06eb67fdc2c94f15957854b37c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        echo "  
";
        // line 5
        echo "<div class=\"hero-unit\">
    <h1>Bienvenidos!</h1>
    <p>Este es un sistema de administracion de contenidos, para conocer mas al respecto favor de dar click en el siguiente boton para conocer mas sobre el.</p>
    <p><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_navegar"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-large\">Navegar &raquo;</a></p>
</div>
<div class=\"row-fluid\">
    <div class=\"span4\">
        <h2>Galerias</h2>
        <p>Administrar las galerias </p>
        <p><a class=\"btn\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_seleccionar"), "html", null, true);
        echo "\">Galerias &raquo;</a></p>
    </div><!--/span-->
    <div class=\"span4\">
        <h2>Publicaciones</h2>
        <p>Administrar las publicaciones </p>
        <p><a class=\"btn\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicaciones_seleccionar"), "html", null, true);
        echo "\">Publicaciones &raquo;</a></p>
    </div><!--/span-->
    <div class=\"span4\">
        <h2>Botellas</h2>
        <p>Administrar las botellas. </p>
        <p><a class=\"btn\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("botellas"), "html", null, true);
        echo "\">Botellas &raquo;</a></p>
    </div><!--/span-->
    
</div><!--/row-->
<div class=\"row-fluid\">
    <div class=\"span4\">
        <h2>Configuracion</h2>
        <p>Configuraciones especiales de la pagina. </p>
        <p><a class=\"btn\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_configuraciones"), "html", null, true);
        echo "\">Configuraciones &raquo;</a></p>
    </div><!--/span-->
</div><!--/row-->

";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 68,  37 => 5,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 96,  110 => 36,  64 => 15,  41 => 8,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  122 => 42,  105 => 32,  74 => 20,  70 => 15,  66 => 24,  62 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 11,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 144,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 27,  65 => 23,  52 => 10,  97 => 28,  92 => 20,  88 => 25,  78 => 17,  71 => 14,  59 => 9,  90 => 25,  29 => 6,  96 => 28,  91 => 6,  81 => 21,  49 => 7,  30 => 4,  31 => 3,  27 => 3,  47 => 12,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 25,  50 => 14,  43 => 8,  40 => 10,  25 => 2,  249 => 80,  160 => 56,  148 => 46,  142 => 45,  134 => 52,  126 => 47,  123 => 90,  118 => 43,  114 => 37,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 33,  77 => 32,  69 => 24,  58 => 19,  55 => 26,  53 => 19,  46 => 8,  44 => 9,  38 => 5,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 22,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 12,  167 => 59,  165 => 57,  157 => 5,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 138,  128 => 44,  125 => 92,  119 => 41,  115 => 42,  112 => 81,  109 => 78,  106 => 32,  102 => 66,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 50,  76 => 19,  67 => 16,  63 => 6,  60 => 13,  57 => 10,  54 => 11,  51 => 8,  48 => 10,  45 => 7,  42 => 9,  39 => 5,  36 => 5,  33 => 3,);
    }
}
