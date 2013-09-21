<?php

/* CategoriasGaleriaBundle:Categorias:item.html.twig */
class __TwigTemplate_dca5ba4d7485c167d961e2f5a31e068f736c1979490b697e0323fa0407a17238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tituloCorto"), "html", null, true);
        echo "</h5>
<img id=\"image-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" 
     entity=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "\" 
     src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "thumbnailWebPath"), "html", null, true);
        echo "\" 
     class=\"image-sorteable\" 
     title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "\" 
     descripcion=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "\" 
     url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"
     style=\"max-width: 120px; max-height: 120px;\" 
     />
<p>
    <button style=\"float: left;\"
            type=\"button\"
            data-target=\"#editarFormModal\" 
            class=\"btn editar-item\" 
            data-toggle=\"modal\" 
            onclick=\"javascript:titularizar('";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "')\">
        <i class=\"icon-edit\"></i>
    </button>
    ";
        // line 20
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive") == false)) {
            // line 21
            echo "    <button style=\"float: left;\"
            type=\"button\"
            data-target=\"#confirmarActivarFormModal\" 
            class=\"btn activar-item\" 
            data-toggle=\"modal\" 
            onclick=\"javascript:activar('";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_activar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "')\">
        <i class=\"icon-thumbs-up\"></i>
    </button>
    ";
        }
        // line 29
        echo "    
        
    <button style=\"float: right;\" type=\"button\"
            data-target=\"#confirmarFormModal\" 
            class=\"btn eliminar-item\" 
            data-toggle=\"modal\" 
            onclick=\"javascript:eliminar('";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("galerias_delete_registro", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "')\">
        <i class=\"icon-remove\"></i>
    </button>
</p>
";
    }

    public function getTemplateName()
    {
        return "CategoriasGaleriaBundle:Categorias:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 11,  229 => 96,  219 => 89,  197 => 75,  189 => 70,  181 => 65,  173 => 60,  158 => 86,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 49,  103 => 29,  121 => 42,  87 => 23,  80 => 21,  61 => 11,  84 => 29,  68 => 21,  93 => 30,  79 => 27,  56 => 10,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 52,  135 => 46,  131 => 45,  110 => 30,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 61,  146 => 52,  138 => 53,  122 => 39,  105 => 36,  74 => 17,  70 => 14,  66 => 20,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 87,  154 => 54,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 30,  94 => 25,  65 => 12,  52 => 10,  97 => 26,  92 => 35,  88 => 32,  78 => 19,  71 => 17,  59 => 9,  90 => 25,  29 => 6,  96 => 30,  91 => 24,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 6,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 26,  72 => 23,  50 => 11,  43 => 5,  40 => 6,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 50,  126 => 52,  123 => 31,  118 => 37,  114 => 37,  111 => 33,  104 => 29,  101 => 35,  99 => 27,  86 => 23,  77 => 20,  69 => 13,  58 => 12,  55 => 11,  53 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 73,  192 => 71,  190 => 19,  185 => 110,  179 => 14,  176 => 65,  171 => 62,  167 => 61,  165 => 76,  157 => 5,  152 => 55,  150 => 53,  147 => 53,  144 => 48,  136 => 50,  133 => 49,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 33,  102 => 33,  98 => 27,  95 => 26,  89 => 23,  85 => 22,  83 => 22,  76 => 17,  67 => 14,  63 => 15,  60 => 17,  57 => 14,  54 => 10,  51 => 8,  48 => 8,  45 => 10,  42 => 6,  39 => 4,  36 => 3,  33 => 3,);
    }
}
