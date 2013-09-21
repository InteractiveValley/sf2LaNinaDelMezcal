<?php

/* CategoriasGaleriaBundle:Categorias:index.html.twig */
class __TwigTemplate_f40eef5171be153a7612c2c21eb0e96b95798620587200065d51c53575cf757a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'menu_horizontal' => array($this, 'block_menu_horizontal'),
            'siderbar' => array($this, 'block_siderbar'),
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
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
<ul class=\"nav nav-list\">
    <li class=\"nav-header\">Categorias</li>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 11
            echo "    ";
            if (((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")) != (isset($context["tipo_categoria"]) ? $context["tipo_categoria"] : $this->getContext($context, "tipo_categoria")))) {
                echo "    
    <li class=\"tipo-categoria\" tipo=\"";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_por_tipo", array("tipo" => (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</a>
    </li>
    ";
            } else {
                // line 16
                echo "    <li class=\"tipo-categoria active\" tipo=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
                echo "\">
        <a href=\"#\">";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
    <li class=\"nav-header\">Papelera</li>
    <li id=\"papelera\">
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/trash_grande.png"), "html", null, true);
        echo "\"/>
    </li>
</ul>
";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
        echo "
";
        // line 30
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "page", array(), "any", true, true))) {
            // line 31
            echo "    ";
            $context["page"] = 1;
        } else {
            // line 33
            echo "    ";
            $context["page"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "page");
        }
        // line 35
        echo "
<h1>Registros ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")), (isset($context["tipo_categoria"]) ? $context["tipo_categoria"] : $this->getContext($context, "tipo_categoria")), array(), "array"), "html", null, true);
        echo "</h1>

<table class=\"table table-hover records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Categoria</th>     
            <th>Tipo</th>
            <th>Orden</th>
            <th>Activa?</th>
            <th>Creada</th>
            <th>Actualizacion</th>
            <th>Actiones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "            <tr>
                <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringtipocategoria"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"));
            echo "</td>
                <td>";
            // line 59
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 60
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat"), "d/m/Y H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul class=\"nav\">
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Mostrar registro\">
                            <i class=\"icon-eye-open\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Editar registro\">
                            <i class=\"icon-edit\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" title=\"Subir registro\">
                            <i class=\"icon-hand-up\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" title=\"Bajar registro\">
                            <i class=\"icon-hand-down\"></i>
                        </a>
                    </li>
                </ul>    
                </td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"span4\">    
            <ul class=\"btn-group\">
                <li>
                    <a class=\"btn btn-primary\" href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorias_new", array("tipo" => (isset($context["tipo_categoria"]) ? $context["tipo_categoria"] : $this->getContext($context, "tipo_categoria")))), "html", null, true);
        echo "\">
                        Nueva galeria
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"span4\">
            <div class=\"navigation\"> ";
        // line 100
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo " </div>
        </div>   
    </div>
";
    }

    public function getTemplateName()
    {
        return "CategoriasGaleriaBundle:Categorias:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 100,  226 => 93,  204 => 79,  188 => 69,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 11,  229 => 96,  219 => 89,  197 => 75,  189 => 70,  181 => 65,  173 => 60,  158 => 86,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 49,  103 => 29,  121 => 42,  87 => 23,  80 => 20,  61 => 13,  84 => 29,  68 => 21,  93 => 30,  79 => 27,  56 => 10,  140 => 53,  117 => 36,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 87,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 64,  172 => 60,  143 => 54,  135 => 46,  131 => 45,  110 => 33,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 61,  146 => 52,  138 => 53,  122 => 39,  105 => 36,  74 => 17,  70 => 14,  66 => 20,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 58,  159 => 87,  154 => 54,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 30,  94 => 25,  65 => 12,  52 => 11,  97 => 26,  92 => 35,  88 => 32,  78 => 19,  71 => 17,  59 => 9,  90 => 23,  29 => 6,  96 => 30,  91 => 24,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 6,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 26,  72 => 23,  50 => 11,  43 => 5,  40 => 6,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 50,  126 => 52,  123 => 31,  118 => 37,  114 => 35,  111 => 33,  104 => 30,  101 => 29,  99 => 27,  86 => 23,  77 => 20,  69 => 16,  58 => 12,  55 => 11,  53 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 71,  190 => 19,  185 => 110,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 57,  152 => 55,  150 => 53,  147 => 53,  144 => 48,  136 => 52,  133 => 49,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 31,  102 => 33,  98 => 28,  95 => 26,  89 => 23,  85 => 22,  83 => 22,  76 => 17,  67 => 14,  63 => 15,  60 => 17,  57 => 12,  54 => 10,  51 => 8,  48 => 10,  45 => 10,  42 => 6,  39 => 4,  36 => 4,  33 => 3,);
    }
}
