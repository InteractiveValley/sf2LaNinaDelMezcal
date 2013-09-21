<?php

/* BackendBundle:Configuraciones:index.html.twig */
class __TwigTemplate_bc5a211ec52668df47a71e9a7d1f323d7986b000728235193f0752bb9834dcd7 extends Twig_Template
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
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "configuraciones")));
    }

    // line 7
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
    ";
        // line 8
        $this->env->loadTemplate("BackendBundle:Default:siderbar.html.twig")->display(array_merge($context, array("pagina" => "configuraciones")));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "page", array(), "any", true, true))) {
            // line 13
            echo "        ";
            $context["page"] = 1;
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        ";
            $context["page"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "page");
            // line 16
            echo "    ";
        }
        // line 17
        echo "
<h1>Configuraciones</h1>

<table class=\"table table-hover records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Configuracion</th>
            <th>Tipo</th>
            <th>Texto</th>
            <th>Actiones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 32
            echo "        <tr>
            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "configuracion"), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "stringtipoconfiguracion"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "texto");
            echo "</td>
            <td>
                <ul class=\"nav\">
                    <li>
                        <a class=\"btn btn-mini\"  href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Mostrar registro\">
                            <i class=\"icon-eye-open\"></i>
                        </a>
                    </li>
                    <li>
                        <a class=\"btn btn-mini\"  href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" title=\"Editar registro\">
                            <i class=\"icon-edit\"></i>
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
        // line 53
        echo "    </tbody>
</table>
<div class=\"row\">
        <div class=\"span4\">    
            <ul class=\"btn-group\">
                <li>
                    <a class=\"btn btn-primary\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("configuraciones_select"), "html", null, true);
        echo "\">
                        Nueva configuracion
                    </a>
                </li>
             </ul>
        </div>
        <div class=\"span4\">
            <div class=\"navigation\"> ";
        // line 66
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo " </div>
        </div>   
</div>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Configuraciones:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  68 => 17,  93 => 35,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 68,  37 => 6,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 96,  110 => 36,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 36,  74 => 31,  70 => 15,  66 => 24,  62 => 15,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 11,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 40,  94 => 23,  65 => 16,  52 => 15,  97 => 34,  92 => 20,  88 => 32,  78 => 18,  71 => 14,  59 => 14,  90 => 25,  29 => 6,  96 => 47,  91 => 33,  81 => 21,  49 => 7,  30 => 4,  31 => 3,  27 => 3,  47 => 8,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 15,  72 => 23,  50 => 11,  43 => 7,  40 => 10,  25 => 2,  249 => 80,  160 => 56,  148 => 46,  142 => 59,  134 => 53,  126 => 47,  123 => 31,  118 => 43,  114 => 37,  111 => 47,  104 => 32,  101 => 35,  99 => 31,  86 => 31,  77 => 32,  69 => 14,  58 => 11,  55 => 26,  53 => 12,  46 => 8,  44 => 9,  38 => 7,  35 => 4,  32 => 5,  212 => 76,  206 => 23,  202 => 22,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 12,  167 => 59,  165 => 57,  157 => 5,  152 => 66,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 138,  128 => 33,  125 => 92,  119 => 41,  115 => 42,  112 => 40,  109 => 78,  106 => 32,  102 => 41,  98 => 28,  95 => 21,  89 => 21,  85 => 39,  83 => 20,  76 => 19,  67 => 10,  63 => 23,  60 => 13,  57 => 10,  54 => 10,  51 => 8,  48 => 9,  45 => 10,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
