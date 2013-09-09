<?php

/* FrontendBundle:Default:botella.html.twig */
class __TwigTemplate_6efcfdd533d33e209fceac26ee61319e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FrontendBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<section id=\"contenido\" class=\"botellas\">
   <div class=\"galeria\">
      <figure class=\"control-galeria-izquierda\">
         <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/arrow_left.png"), "html", null, true);
        echo "\" alt=\"control galeria izquierda\">
      </figure>
      <article id=\"botella\">
            <div class=\"descripcion-botella\">
               <header>
                  <h1>bottle tour</h1>
                  <h2 class=\"espadin\">espadin</h2>   
               </header>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, mollitia, minima nisi quae repellendus eligendi dolorem molestiae aliquam unde. Harum, consequatur non modi possimus ab sit voluptatibus quae quaerat qui.
               </p>
            </div>
            <figure class=\"botella\">
                  <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/espadin.png"), "html", null, true);
        echo "\" alt=\"espadin\">
                  <div class=\"texto-floante-derecha\">
                     <a href=\"\">
                        proof
                        <span class=\"tooltip\">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, expedita corrupti facilis molestias iste nemo.
                        </span>   
                     </a>
                  </div>
            </figure>
            
      </article>
      <figure class=\"control-galeria-derecha\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/arrow_right.png"), "html", null, true);
        echo "\" alt=\"control galeria derecha\">
      </figure>   
   </div>
   <figure id=\"boton-comprar\">
      <a href=\"\">
         comprar
      </a>
   </figure>

   <div id=\"redes-sociales-pagina\" class=\"derecha\">
         <figure id=\"red-social-pagina-facebook\">
               <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook_share.png"), "html", null, true);
        echo "\" alt=\"compartir en facebook\">
         </figure>
         <figure id=\"red-social-pagina-twitter\">
               <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter_share.png"), "html", null, true);
        echo "\" alt=\"compartir en twitter\">
         </figure>
   </div>
   <figure id=\"menus-botellas\">
      <ul>
         <li><a href=\"\" class=\"espadin\">espadin</a></li>
         <li><a href=\"\" class=\"madrecuixe\">madrecuixe</a></li>
         <li><a href=\"\" class=\"tobala\">tobala</a></li>
         <li><a href=\"\" class=\"tepextate\">tepextate</a></li>
         <li><a href=\"\" class=\"pechuga\">pechuga</a></li>
         <li><a href=\"\" class=\"primario-mezcal\">primario mezcal</a></li>
         <li><a href=\"\" class=\"primario-licor\">primario licor</a></li>
      </ul>
   </figure>
</section>

";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
   <!--script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js\">
   </script-->

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:botella.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 66,  110 => 65,  89 => 47,  83 => 44,  69 => 33,  53 => 20,  37 => 7,  32 => 4,  29 => 3,);
    }
}
