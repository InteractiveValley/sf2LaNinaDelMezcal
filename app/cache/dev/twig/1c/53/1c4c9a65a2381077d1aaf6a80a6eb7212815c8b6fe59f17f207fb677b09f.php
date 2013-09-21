<?php

/* PublicacionesBundle:CategoriasPublicacion:galeria.html.twig */
class __TwigTemplate_1c531c4c9a65a2381077d1aaf6a80a6eb7212815c8b6fe59f17f207fb677b09f extends Twig_Template
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
        echo "<div id=\"image-loader\" style=\"display: none;\">
     <img src=\"/images/loader.gif\"/>
</div>
<div class=\"row-fluid\">
    <ul id=\"gallery";
        // line 5
        if (((isset($context["gallery_status"]) ? $context["gallery_status"] : $this->getContext($context, "gallery_status")) == false)) {
            echo "_para_aprobar";
        }
        echo "\" class=\"gallery\">
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 7
            echo "         <li id=\"registro-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\" class=\"galeria-item-li\">    
         ";
            // line 8
            $this->env->loadTemplate("CategoriasGaleriaBundle:Categorias:item.html.twig")->display(array_merge($context, array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
            // line 9
            echo "         </li><!--/span-->        
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "        Sin registros
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "   </ul>     
</div>
<!--/row-->
";
    }

    public function getTemplateName()
    {
        return "PublicacionesBundle:CategoriasPublicacion:galeria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  229 => 96,  219 => 89,  197 => 75,  189 => 70,  181 => 65,  173 => 60,  158 => 55,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 309,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 132,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 49,  103 => 29,  121 => 42,  87 => 23,  80 => 13,  61 => 13,  84 => 29,  68 => 21,  93 => 30,  79 => 27,  56 => 13,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 31,  37 => 6,  493 => 327,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 120,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 52,  135 => 51,  131 => 96,  110 => 32,  64 => 12,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 90,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 61,  146 => 52,  138 => 53,  122 => 42,  105 => 36,  74 => 17,  70 => 14,  66 => 20,  62 => 12,  199 => 90,  186 => 111,  174 => 61,  169 => 71,  166 => 11,  161 => 75,  159 => 87,  154 => 54,  145 => 59,  141 => 144,  139 => 56,  124 => 54,  120 => 45,  108 => 42,  94 => 25,  65 => 16,  52 => 7,  97 => 26,  92 => 35,  88 => 32,  78 => 19,  71 => 18,  59 => 9,  90 => 25,  29 => 6,  96 => 26,  91 => 24,  81 => 21,  49 => 8,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 6,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 26,  72 => 23,  50 => 11,  43 => 5,  40 => 6,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 50,  126 => 52,  123 => 31,  118 => 43,  114 => 37,  111 => 33,  104 => 32,  101 => 35,  99 => 27,  86 => 23,  77 => 26,  69 => 16,  58 => 15,  55 => 12,  53 => 12,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 62,  167 => 61,  165 => 76,  157 => 5,  152 => 55,  150 => 53,  147 => 53,  144 => 48,  136 => 50,  133 => 49,  128 => 33,  125 => 43,  119 => 48,  115 => 42,  112 => 36,  109 => 33,  106 => 33,  102 => 39,  98 => 28,  95 => 35,  89 => 32,  85 => 39,  83 => 22,  76 => 17,  67 => 14,  63 => 18,  60 => 17,  57 => 8,  54 => 10,  51 => 8,  48 => 10,  45 => 10,  42 => 6,  39 => 4,  36 => 4,  33 => 3,);
    }
}
