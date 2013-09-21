<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_05c16962b1736493aeec0f7f5f9e3d8f2d0b21b796ff2c2ba142537679d98348 extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  96 => 9,  91 => 6,  81 => 40,  49 => 10,  30 => 4,  31 => 3,  27 => 2,  47 => 9,  34 => 5,  28 => 5,  24 => 2,  22 => 1,  82 => 21,  75 => 13,  72 => 12,  50 => 18,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 33,  101 => 40,  99 => 31,  86 => 25,  77 => 14,  69 => 11,  58 => 16,  55 => 21,  53 => 14,  46 => 8,  44 => 5,  38 => 5,  35 => 6,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 29,  89 => 24,  85 => 22,  83 => 41,  76 => 19,  67 => 19,  63 => 6,  60 => 12,  57 => 11,  54 => 9,  51 => 9,  48 => 17,  45 => 6,  42 => 8,  39 => 7,  36 => 4,  33 => 3,);
    }
}
