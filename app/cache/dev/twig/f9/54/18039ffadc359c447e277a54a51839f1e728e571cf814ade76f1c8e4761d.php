<?php

/* FrontendBundle:Default:contacto.html.twig */
class __TwigTemplate_f95418039ffadc359c447e277a54a51839f1e728e571cf814ade76f1c8e4761d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/form_contacto.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if ((!array_key_exists("error", $context))) {
            // line 11
            echo "    ";
            $context["error"] = false;
        }
        // line 13
        if ((!array_key_exists("ok", $context))) {
            // line 14
            echo "    ";
            $context["ok"] = false;
        }
        // line 16
        if ((!array_key_exists("mensaje", $context))) {
            // line 17
            echo "    ";
            $context["mensaje"] = "";
        }
        // line 19
        echo "
";
        // line 20
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale");
        // line 21
        echo "<section>
    <article class=\"contacto\">
        <figure id=\"logo-contacto\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_contacto.png"), "html", null, true);
        echo "\" alt=\"La niña del mezcal\"/>
        </figure>
        <div>
            ";
        // line 27
        if ($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "texto")) {
            // line 28
            echo "            ";
            echo $this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "texto");
            echo "
            ";
        }
        // line 30
        echo "        </div>
    </article>
    <article class=\"form contacto\">
        <form onsubmit=\"return false;\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\" method=\"post\" class=\"form-contacto ";
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true)) {
            echo "invalid";
        }
        echo " ";
        if (((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true)) {
            echo "sent";
        }
        echo "\" novalidate=\"novalidate\">
          <div>
             <label for=\"richpolis_backendbundle_contactotype_name\" class=\"required\">";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Name", array(), "messages");
        echo "</label>
             <span class=\"form-contacto-control-wrap Name ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
             </span>
         </div>
         <div>
             ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
             <span class=\"form-contacto-control-wrap E-mail ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-email form-validates-as-required form-validates-as-email", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
             </span>    
         </div>
          <div>
             <label for=\"richpolis_backendbundle_contactotype_telefono\" class=\"required\">";
        // line 53
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telephone", array(), "messages");
        echo "</label> 
             <span class=\"form-contacto-control-wrap telefono ";
        // line 54
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "
             </span>
         </div>    
         <div>
             <label for=\"richpolis_backendbundle_contactotype_body\" class=\"required\">";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("Message", array(), "messages");
        echo "</label>
             <span class=\"form-contacto-control-wrap message ";
        // line 63
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("class" => "form-contacto-control form-textarea form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
        echo "
             </span>
         </div>
         <div>
             <input type=\"submit\" value=\"";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Send", array(), "messages");
        echo "\" class=\"form-contacto-control form-submit\">
             <img class=\"ajax-loader\" src=\"/images/ajax-loader.gif\" alt=\"Enviando ...\" style=\"visibility: hidden;\">
         </div>
         ";
        // line 74
        if ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == false))) {
            echo "    
         <div class=\"form-response-output form-mail-sent-ok\">
             ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "
         </div>
         ";
        } elseif ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == false) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true))) {
            // line 79
            echo "         <div class=\"form-response-output form-mail-sent-ng form-validation-errors\">
             ";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
         </div>    
         ";
        }
        // line 82
        echo "    
         ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
     </form>   
    </article>
</section>
";
    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        // line 90
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\$(document).ready( function() {   
    \$(\"input.form-submit\").click( function() {
        \$('img.ajax-loader').css({visibility: 'visible'});
        \$(\"img.ajax-loader\").fadeIn(\"fast\",function(){
            \$.post(\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto", array("_locale" => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))), "html", null, true);
        echo "\",\$(\"form.form-contacto\").serialize(),
            function(data){
                \$(\"#contacts\").html(data).fadeIn(\"fast\");
            });    
        });
    });    
});
</script>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 55,  151 => 49,  113 => 47,  116 => 36,  236 => 100,  226 => 93,  204 => 71,  188 => 69,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 20,  229 => 96,  219 => 89,  197 => 67,  189 => 70,  181 => 62,  173 => 60,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 213,  293 => 212,  232 => 96,  210 => 74,  194 => 72,  177 => 63,  164 => 56,  137 => 51,  130 => 41,  103 => 29,  121 => 42,  87 => 22,  80 => 24,  61 => 13,  84 => 29,  68 => 15,  93 => 30,  79 => 28,  56 => 12,  140 => 53,  117 => 36,  100 => 24,  26 => 1,  264 => 96,  258 => 91,  253 => 90,  239 => 77,  218 => 87,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 83,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 64,  172 => 60,  143 => 65,  135 => 44,  131 => 59,  110 => 31,  64 => 16,  41 => 7,  276 => 96,  272 => 94,  257 => 92,  246 => 90,  243 => 89,  241 => 85,  238 => 83,  233 => 74,  230 => 81,  227 => 71,  224 => 80,  222 => 76,  220 => 75,  211 => 83,  207 => 72,  182 => 69,  162 => 54,  146 => 52,  138 => 53,  122 => 37,  105 => 36,  74 => 18,  70 => 19,  66 => 17,  62 => 12,  199 => 90,  186 => 111,  174 => 58,  169 => 71,  166 => 11,  161 => 58,  159 => 87,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 30,  94 => 30,  65 => 12,  52 => 10,  97 => 29,  92 => 35,  88 => 28,  78 => 27,  71 => 26,  59 => 13,  90 => 23,  29 => 6,  96 => 30,  91 => 24,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 2,  47 => 6,  34 => 3,  28 => 5,  24 => 2,  22 => 1,  82 => 18,  75 => 21,  72 => 23,  50 => 9,  43 => 8,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 46,  142 => 51,  134 => 43,  126 => 52,  123 => 48,  118 => 37,  114 => 33,  111 => 37,  104 => 37,  101 => 27,  99 => 33,  86 => 27,  77 => 19,  69 => 18,  58 => 13,  55 => 11,  53 => 9,  46 => 8,  44 => 7,  38 => 4,  35 => 4,  32 => 3,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 71,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 57,  152 => 55,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 42,  112 => 35,  109 => 33,  106 => 43,  102 => 33,  98 => 30,  95 => 26,  89 => 30,  85 => 31,  83 => 29,  76 => 17,  67 => 25,  63 => 15,  60 => 14,  57 => 14,  54 => 11,  51 => 14,  48 => 12,  45 => 8,  42 => 7,  39 => 4,  36 => 4,  33 => 3,);
    }
}
