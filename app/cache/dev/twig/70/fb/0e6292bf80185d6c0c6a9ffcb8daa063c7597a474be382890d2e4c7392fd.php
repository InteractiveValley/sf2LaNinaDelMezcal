<?php

/* ::base.html.twig */
class __TwigTemplate_70fb0e6292bf80185d6c0c6a9ffcb8daa063c7597a474be382890d2e4c7392fd extends Twig_Template
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

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  140 => 37,  117 => 30,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 68,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 68,  37 => 6,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 69,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 96,  110 => 36,  64 => 15,  41 => 6,  276 => 96,  272 => 94,  257 => 92,  246 => 79,  243 => 78,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 38,  138 => 53,  122 => 42,  105 => 26,  74 => 31,  70 => 15,  66 => 24,  62 => 6,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 11,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 144,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 23,  65 => 13,  52 => 15,  97 => 28,  92 => 20,  88 => 25,  78 => 18,  71 => 14,  59 => 12,  90 => 25,  29 => 6,  96 => 47,  91 => 6,  81 => 21,  49 => 7,  30 => 4,  31 => 3,  27 => 3,  47 => 11,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 11,  50 => 12,  43 => 7,  40 => 10,  25 => 2,  249 => 80,  160 => 56,  148 => 46,  142 => 45,  134 => 34,  126 => 47,  123 => 31,  118 => 43,  114 => 37,  111 => 27,  104 => 32,  101 => 31,  99 => 31,  86 => 33,  77 => 32,  69 => 24,  58 => 19,  55 => 26,  53 => 19,  46 => 8,  44 => 9,  38 => 7,  35 => 4,  32 => 5,  212 => 76,  206 => 23,  202 => 22,  196 => 73,  192 => 71,  190 => 19,  185 => 70,  179 => 14,  176 => 65,  171 => 12,  167 => 59,  165 => 57,  157 => 5,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 138,  128 => 33,  125 => 92,  119 => 41,  115 => 42,  112 => 81,  109 => 78,  106 => 32,  102 => 66,  98 => 28,  95 => 21,  89 => 21,  85 => 39,  83 => 20,  76 => 19,  67 => 10,  63 => 23,  60 => 13,  57 => 10,  54 => 10,  51 => 8,  48 => 9,  45 => 10,  42 => 9,  39 => 5,  36 => 6,  33 => 3,);
    }
}
