<?php

/* FrontendBundle:Default:contacto.html.twig */
class __TwigTemplate_24beb83cb83dc4db58489cd24e8ee14a extends Twig_Template
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
        echo "<section>
    <article class=\"contacto\">
        <figure id=\"logo-contacto\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_contacto.png"), "html", null, true);
        echo "\" alt=\"La niña del mezcal\"/>
        </figure>
        <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, beatae eius distinctio modi doloremque illo laudantium porro asperiores facilis iste. Architecto, sit, neque quisquam tempore libero temporibus commodi laborum iste.
        </div>
    </article>
    <article class=\"form contacto\">
        <form onsubmit=\"return false;\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto"), "html", null, true);
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
             ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
             <span class=\"form-contacto-control-wrap Name ";
        // line 32
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'errors');
        echo "
             </span>
         </div>
         <div>
             ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "
             <span class=\"form-contacto-control-wrap E-mail ";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-email form-validates-as-required form-validates-as-email", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
        echo "
             </span>    
         </div>
          <div>
             ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'label');
        echo " 
             <span class=\"form-contacto-control-wrap subject ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'errors');
        echo "
             </span>
         </div>
         <div>
             ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'label');
        echo " 
             <span class=\"form-contacto-control-wrap telefono ";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("attr" => array("class" => "form-contacto-control form-text form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'errors');
        echo "
             </span>
         </div>    
         <div>
             ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'label');
        echo "
             <span class=\"form-contacto-control-wrap message ";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), "vars"), "errors")) > 0)) {
            echo "form-not-valid";
        }
        echo "\">
                 ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'widget', array("attr" => array("class" => "form-contacto-control form-textarea form-validates-as-required", "size" => "40", "aria-requiered" => "true")));
        echo "
             </span>
             <span class=\"form-not-valid-tip-no-ajax\"> 
                 ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'errors');
        echo "
             </span>
         </div>
         <div>
             <input type=\"submit\" value=\"Enviar\" class=\"form-contacto-control form-submit\">
             <img class=\"ajax-loader\" src=\"/images/ajax-loader.gif\" alt=\"Enviando ...\" style=\"visibility: hidden;\">
         </div>
         ";
        // line 79
        if ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == false))) {
            echo "    
         <div class=\"form-response-output form-mail-sent-ok\">
             ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "
         </div>
         ";
        } elseif ((((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == false) && ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true))) {
            // line 84
            echo "         <div class=\"form-response-output form-mail-sent-ng form-validation-errors\">
             ";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
         </div>    
         ";
        }
        // line 87
        echo "    
         ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
     </form>   
    </article>
</section>
";
    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        // line 95
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
\$(document).ready( function() {   
    \$(\"input.form-submit\").click( function() {
        \$('img.ajax-loader').css({visibility: 'visible'});
        \$(\"img.ajax-loader\").fadeIn(\"fast\",function(){
            \$.post(\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_contacto"), "html", null, true);
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
        return array (  258 => 101,  249 => 95,  246 => 94,  237 => 88,  234 => 87,  227 => 85,  224 => 84,  218 => 81,  213 => 79,  203 => 72,  197 => 69,  191 => 68,  187 => 67,  180 => 63,  174 => 60,  168 => 59,  164 => 58,  157 => 54,  151 => 51,  145 => 50,  141 => 49,  134 => 45,  128 => 42,  122 => 41,  118 => 40,  111 => 36,  105 => 33,  99 => 32,  95 => 31,  82 => 29,  72 => 22,  67 => 19,  63 => 17,  61 => 16,  57 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  33 => 4,  30 => 3,);
    }
}
