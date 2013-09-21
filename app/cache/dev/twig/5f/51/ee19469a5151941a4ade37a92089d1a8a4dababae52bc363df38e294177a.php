<?php

/* BackendBundle:Default:login.html.twig */
class __TwigTemplate_5f51ee19469a5151941a4ade37a92089d1a8a4dababae52bc363df38e294177a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BackendBundle::backend.html.twig");

        $this->blocks = array(
            'siderbar' => array($this, 'block_siderbar'),
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
    public function block_siderbar($context, array $blocks = array())
    {
        echo "";
    }

    // line 5
    public function block_menu_horizontal($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        echo " 
<div class=\"hero-unit span5 offset1\" >

";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
";
        } else {
            // line 13
            echo "    <h6>Acceso a la pagina</h6>
";
        }
        // line 15
        echo "    
<form class=\"form-signin\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_check"), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"control-group\">
    <label class=\"control-label\" for=\"username\">Username</label>
    <div class=\"controls\">
      <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    </div>
  </div>
  <div class=\"control-group\">
    <label class=\"control-label\" for=\"password\">Password</label>
    <div class=\"controls\">
      <input type=\"password\" id=\"password\" name=\"_password\" />
    </div>
  </div>
  ";
        // line 33
        echo "      
  <div class=\"control-group\">
    <div class=\"controls\">
      <button class=\"btn btn-primary\" type=\"submit\">login</button>
    </div>
  </div>
</form>
</div>        
<script>
\$(document).ready(function(){
   \$(\"div.well\").hide(); 
});    
</script>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 100,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 49,  110 => 36,  64 => 15,  41 => 6,  276 => 96,  272 => 94,  257 => 92,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  122 => 42,  105 => 32,  74 => 20,  70 => 15,  66 => 15,  62 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 62,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 27,  65 => 23,  52 => 10,  97 => 28,  92 => 20,  88 => 25,  78 => 17,  71 => 14,  59 => 9,  90 => 25,  29 => 6,  96 => 28,  91 => 6,  81 => 21,  49 => 7,  30 => 4,  31 => 3,  27 => 3,  47 => 12,  34 => 5,  28 => 4,  24 => 2,  22 => 1,  82 => 18,  75 => 16,  72 => 25,  50 => 9,  43 => 8,  40 => 10,  25 => 2,  249 => 90,  160 => 56,  148 => 46,  142 => 45,  134 => 52,  126 => 47,  123 => 40,  118 => 43,  114 => 37,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 33,  77 => 14,  69 => 24,  58 => 15,  55 => 21,  53 => 10,  46 => 8,  44 => 7,  38 => 5,  35 => 4,  32 => 3,  212 => 76,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 65,  171 => 72,  167 => 59,  165 => 57,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 44,  125 => 43,  119 => 41,  115 => 42,  112 => 34,  109 => 36,  106 => 32,  102 => 31,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 16,  63 => 6,  60 => 13,  57 => 10,  54 => 11,  51 => 8,  48 => 17,  45 => 7,  42 => 9,  39 => 5,  36 => 4,  33 => 3,);
    }
}
