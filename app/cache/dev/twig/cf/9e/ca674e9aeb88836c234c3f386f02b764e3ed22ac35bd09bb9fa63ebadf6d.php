<?php

/* PublicacionesBundle:Publicacion:index.html.twig */
class __TwigTemplate_cf9eca674e9aeb88836c234c3f386f02b764e3ed22ac35bd09bb9fa63ebadf6d extends Twig_Template
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
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "publicaciones")));
    }

    // line 7
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
<ul class=\"nav nav-list\">
    <li class=\"nav-header\">Publicaciones</li>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 11
            echo "    ";
            if (($this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id") != $this->getAttribute((isset($context["categoria_actual"]) ? $context["categoria_actual"] : $this->getContext($context, "categoria_actual")), "id"))) {
                echo "    
    <li class=\"categoria-publicacion\" categoria=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
                echo "\">
        <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_por_categoria", array("categoria" => $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
                echo "</a>
    </li>
    ";
            } else {
                // line 16
                echo "    <li class=\"categoria-publicacion active\" categoria=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id"), "html", null, true);
                echo "\">
        <a href=\"#\">";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "html", null, true);
                echo "</a>
    </li>
    ";
            }
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
</ul>
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "page", array(), "any", true, true))) {
            // line 27
            echo "    ";
            $context["page"] = 1;
        } else {
            // line 29
            echo "    ";
            $context["page"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "page");
        }
        // line 31
        echo "

<h1>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["categoria_actual"]) ? $context["categoria_actual"] : $this->getContext($context, "categoria_actual")), "html", null, true);
        echo "</h1>

<table class=\"table table-hover records_list\">
    <thead>
        <tr>
            <th>Orden</th>
            <th>Titulo</th>
            <th>slug</th>
            <th>Imagen</th>
            <th>Activo</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 50
            echo "        <tr class=\"list-registro\">
            <td class=\"list-registro-posicion\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
            echo "</a></td>
            <td class=\"list-registro-titulo\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
            echo "</td>
            <td class=\"list-registro-slug\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug"), "html", null, true);
            echo "</td>
            <td class=\"list-registro-imagen\">
                ";
            // line 55
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "archivo")) > 0)) {
                // line 56
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "thumbnailWebPath"), "html", null, true);
                echo "\" style=\"max-height: 120px; max-width: 120px;\"/>
                ";
            } else {
                // line 58
                echo "                    Sin imagen
                ";
            }
            // line 60
            echo "            </td>
            <td>";
            // line 61
            echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"));
            echo "</td>
            <td>";
            // line 62
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>";
            // line 63
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
            <td>
                <ul class=\"nav\">
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Mostrar registro\">
                            <i class=\"icon-eye-open\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Editar registro\">
                            <i class=\"icon-edit\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_up", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\" title=\"Subir registro\">
                            <i class=\"icon-hand-up\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_down", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
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
        // line 90
        echo "    </tbody>
</table>
<div class=\"row\">
        <div class=\"span4\">    
            <ul class=\"btn-group\">
                <li>
                    <a class=\"btn btn-primary\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_new"), "html", null, true);
        echo "\">
                        Nuevo registro
                    </a>
                </li>
             </ul>
        </div>
        <div class=\"span4\">
            <div class=\"navigation\"> ";
        // line 103
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo " </div>
        </div>   
</div>

";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:Publicacion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 96,  210 => 82,  194 => 72,  177 => 63,  164 => 60,  137 => 51,  130 => 49,  103 => 29,  121 => 42,  87 => 23,  80 => 20,  61 => 13,  84 => 30,  68 => 17,  93 => 25,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 52,  135 => 51,  131 => 96,  110 => 36,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 36,  74 => 17,  70 => 22,  66 => 16,  62 => 16,  199 => 90,  186 => 67,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 66,  154 => 56,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 42,  94 => 25,  65 => 16,  52 => 11,  97 => 26,  92 => 20,  88 => 32,  78 => 19,  71 => 14,  59 => 14,  90 => 25,  29 => 6,  96 => 47,  91 => 24,  81 => 21,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 8,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 18,  72 => 23,  50 => 11,  43 => 7,  40 => 10,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 59,  134 => 50,  126 => 52,  123 => 31,  118 => 43,  114 => 37,  111 => 33,  104 => 32,  101 => 35,  99 => 27,  86 => 31,  77 => 26,  69 => 16,  58 => 15,  55 => 12,  53 => 12,  46 => 8,  44 => 9,  38 => 4,  35 => 3,  32 => 5,  212 => 76,  206 => 23,  202 => 77,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 62,  167 => 61,  165 => 76,  157 => 5,  152 => 55,  150 => 58,  147 => 53,  144 => 48,  136 => 55,  133 => 56,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 44,  109 => 33,  106 => 32,  102 => 39,  98 => 28,  95 => 35,  89 => 32,  85 => 39,  83 => 20,  76 => 19,  67 => 14,  63 => 18,  60 => 13,  57 => 12,  54 => 10,  51 => 8,  48 => 10,  45 => 10,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
