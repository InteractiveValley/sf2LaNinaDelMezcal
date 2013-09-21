<?php

/* CategoriasGaleriaBundle:Galerias:new.html.twig */
class __TwigTemplate_1db1dafb1c14975239e97e2843ff7b0678aecba8f160163551e5a9f9ae457af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'menu_horizontal' => array($this, 'block_menu_horizontal'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_menu_horizontal($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "galerias")));
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'stylesheet');
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 14
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
    ";
        // line 15
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<h1>Galerias</h1>

<form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p style=\"margin-top: 10px;\">
        <ul class=\"record_actions\">
            <li style=\" list-style: none; display: inline;\">
                <button class=\"btn btn-primary\" type=\"submit\">Guardar</button>
            </li>
            <li style=\" list-style: none;  display: inline;\">
                <a class=\"btn\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"))), "html", null, true);
        echo "\">
                    Regresar
                </a>
            </li>
        </ul>
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "CategoriasGaleriaBundle:Galerias:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  116 => 43,  236 => 100,  226 => 93,  204 => 79,  188 => 69,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 11,  229 => 96,  219 => 89,  197 => 75,  189 => 70,  181 => 65,  173 => 60,  158 => 86,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 41,  103 => 29,  121 => 42,  87 => 22,  80 => 13,  61 => 13,  84 => 29,  68 => 15,  93 => 30,  79 => 28,  56 => 12,  140 => 53,  117 => 36,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 87,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 30,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 64,  172 => 60,  143 => 65,  135 => 46,  131 => 59,  110 => 31,  64 => 14,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 61,  146 => 52,  138 => 53,  122 => 34,  105 => 36,  74 => 18,  70 => 14,  66 => 21,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 58,  159 => 87,  154 => 54,  145 => 59,  141 => 144,  139 => 64,  124 => 54,  120 => 34,  108 => 30,  94 => 25,  65 => 12,  52 => 10,  97 => 29,  92 => 35,  88 => 32,  78 => 27,  71 => 26,  59 => 13,  90 => 23,  29 => 6,  96 => 30,  91 => 24,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 3,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 27,  72 => 23,  50 => 9,  43 => 8,  40 => 7,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 43,  126 => 52,  123 => 48,  118 => 37,  114 => 33,  111 => 33,  104 => 37,  101 => 27,  99 => 39,  86 => 23,  77 => 19,  69 => 18,  58 => 18,  55 => 11,  53 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 71,  190 => 19,  185 => 110,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 57,  152 => 55,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 43,  102 => 33,  98 => 34,  95 => 26,  89 => 30,  85 => 31,  83 => 29,  76 => 17,  67 => 25,  63 => 15,  60 => 23,  57 => 14,  54 => 10,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 4,  36 => 4,  33 => 3,);
    }
}
