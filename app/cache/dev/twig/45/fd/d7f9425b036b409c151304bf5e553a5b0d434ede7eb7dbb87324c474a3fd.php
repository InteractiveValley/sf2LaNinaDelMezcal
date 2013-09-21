<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45fdd7f9425b036b409c151304bf5e553a5b0d434ede7eb7dbb87324c474a3fd extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 31,  65 => 23,  52 => 19,  97 => 22,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  59 => 9,  90 => 20,  29 => 3,  96 => 9,  91 => 6,  81 => 40,  49 => 11,  30 => 4,  31 => 3,  27 => 3,  47 => 10,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 25,  50 => 18,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 38,  111 => 37,  104 => 39,  101 => 40,  99 => 31,  86 => 25,  77 => 14,  69 => 24,  58 => 13,  55 => 21,  53 => 8,  46 => 8,  44 => 7,  38 => 4,  35 => 12,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 12,  63 => 6,  60 => 14,  57 => 21,  54 => 20,  51 => 9,  48 => 17,  45 => 6,  42 => 16,  39 => 7,  36 => 5,  33 => 3,);
    }
}
