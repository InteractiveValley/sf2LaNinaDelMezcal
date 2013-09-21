<?php

/* PublicacionesBundle:CategoriasPublicacion:select.html.twig */
class __TwigTemplate_cb2108f2223b9f3e90ad5898facaefa877ff3e0c4ab60531fa3e69659ca1e975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'menu_horizontal' => array($this, 'block_menu_horizontal'),
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

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Seleccionar tipo de categoria</h1>
<ul class=\"nav nav-list\">
    <li class=\"nav-header\">Categorias</li>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "        ";
            if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) != "Publicaciones")) {
                echo "   
            <li class=\"tipo-categoria\" tipo=\"";
                // line 14
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
                <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_por_tipo", array("tipo" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
    </ul>
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:CategoriasPublicacion:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  229 => 96,  219 => 89,  197 => 75,  189 => 70,  181 => 65,  173 => 60,  158 => 55,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 309,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 49,  103 => 29,  121 => 42,  87 => 23,  80 => 13,  61 => 15,  84 => 29,  68 => 21,  93 => 30,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 327,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 120,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 52,  135 => 51,  131 => 96,  110 => 32,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 61,  146 => 52,  138 => 53,  122 => 42,  105 => 36,  74 => 17,  70 => 14,  66 => 20,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 87,  154 => 54,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 42,  94 => 25,  65 => 16,  52 => 13,  97 => 26,  92 => 35,  88 => 32,  78 => 19,  71 => 18,  59 => 9,  90 => 25,  29 => 6,  96 => 26,  91 => 24,  81 => 21,  49 => 8,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 6,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 26,  72 => 23,  50 => 11,  43 => 9,  40 => 8,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 50,  126 => 52,  123 => 31,  118 => 43,  114 => 37,  111 => 33,  104 => 32,  101 => 35,  99 => 27,  86 => 23,  77 => 26,  69 => 18,  58 => 15,  55 => 12,  53 => 12,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 62,  167 => 61,  165 => 76,  157 => 5,  152 => 55,  150 => 53,  147 => 53,  144 => 48,  136 => 50,  133 => 49,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 33,  102 => 39,  98 => 28,  95 => 35,  89 => 32,  85 => 39,  83 => 22,  76 => 17,  67 => 14,  63 => 18,  60 => 17,  57 => 14,  54 => 10,  51 => 8,  48 => 12,  45 => 10,  42 => 6,  39 => 4,  36 => 4,  33 => 3,);
    }
}
