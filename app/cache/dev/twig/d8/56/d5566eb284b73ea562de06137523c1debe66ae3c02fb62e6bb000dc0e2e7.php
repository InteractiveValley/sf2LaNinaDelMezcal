<?php

/* PublicacionesBundle:Publicacion:show.html.twig */
class __TwigTemplate_d856d5566eb284b73ea562de06137523c1debe66ae3c02fb62e6bb000dc0e2e7 extends Twig_Template
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
        $this->env->loadTemplate("BackendBundle:Default:menu_horizontal.html.twig")->display(array_merge($context, array("pagina" => "publicacion")));
    }

    // line 7
    public function block_siderbar($context, array $blocks = array())
    {
        echo "  
    ";
        // line 8
        $this->env->loadTemplate("BackendBundle:Default:siderbar.html.twig")->display(array_merge($context, array("pagina" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "categoria"), "slug"))));
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<h1>Publicacion \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "\"</h1>

<table class=\"record_properties table table-bordered\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Titulo</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titulo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Descripcion Ingles</th>
            <td>";
        // line 26
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEn");
        echo "</td>
        </tr>
        <tr>
            <th>Descripcion Español</th>
            <td>";
        // line 30
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionEs");
        echo "</td>
        </tr>
        ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "archivo")) > 0)) {
            // line 33
            echo "        <tr>
            <th>Imagen</th>
            <td><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('imagine')->applyFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webPath"), "platillos_imagen"), "html", null, true);
            echo "\"/></td>
        </tr>
        <tr>
            <th>Thumbnail</th>
            <td><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ThumbnailWebPath"), "html", null, true);
            echo "\" /></td>
        </tr>
        ";
        }
        // line 42
        echo "        <tr>
            <th>Posicion</th>
            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "posicion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Activo</th>
            <td>";
        // line 48
        echo $this->env->getExtension('is_active_extension')->isActiveFilter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "isactive"));
        echo "</td>
        </tr>
        <tr>
            <th>Creado</th>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat"), "d/m/Y H:i"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Actualizado</th>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedat"), "d/m/Y H:i"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions nav nav-pills\">
        <li>
            <button class=\"btn\" onclick=\"location.href='";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion"), "html", null, true);
        echo "'\">
                Regresar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <button class=\"btn btn-success\" onclick=\"location.href='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "'\">
                Editar
            </button>
        </li>
        <li>&nbsp;</li>
        <li>
            <form action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicacion_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                    <button class=\"btn btn-danger\" type=\"submit\">Eliminar</button>
            </form>
        </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:Publicacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  87 => 23,  80 => 19,  61 => 11,  84 => 30,  68 => 17,  93 => 25,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 68,  37 => 6,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 63,  135 => 51,  131 => 96,  110 => 36,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 36,  74 => 18,  70 => 22,  66 => 16,  62 => 16,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 66,  154 => 63,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 42,  94 => 23,  65 => 16,  52 => 11,  97 => 34,  92 => 20,  88 => 32,  78 => 19,  71 => 14,  59 => 14,  90 => 25,  29 => 6,  96 => 47,  91 => 33,  81 => 21,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 8,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 18,  72 => 23,  50 => 11,  43 => 7,  40 => 10,  25 => 2,  249 => 80,  160 => 56,  148 => 46,  142 => 59,  134 => 53,  126 => 52,  123 => 31,  118 => 43,  114 => 37,  111 => 47,  104 => 32,  101 => 35,  99 => 26,  86 => 31,  77 => 26,  69 => 17,  58 => 15,  55 => 12,  53 => 12,  46 => 8,  44 => 9,  38 => 4,  35 => 3,  32 => 5,  212 => 76,  206 => 23,  202 => 22,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 12,  167 => 59,  165 => 76,  157 => 5,  152 => 69,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 56,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 44,  109 => 33,  106 => 32,  102 => 39,  98 => 28,  95 => 35,  89 => 32,  85 => 39,  83 => 20,  76 => 19,  67 => 14,  63 => 18,  60 => 13,  57 => 10,  54 => 10,  51 => 8,  48 => 8,  45 => 10,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
