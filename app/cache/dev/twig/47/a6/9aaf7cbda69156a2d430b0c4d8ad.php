<?php

/* FrontendBundle:Default:about.html.twig */
class __TwigTemplate_47a69aaf7cbda69156a2d430b0c4d8ad extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<section id=\"contenido\">
   <article>
         <figure id=\"foto-la-nina\">
               <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nina-vintage-960x460.jpg"), "html", null, true);
        echo "\" alt=\"foto la niña\">
         </figure>
         <h2 class=\"titulo-article\">about la niña</h2>
         <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, sit, molestiae pariatur consectetur quisquam non fuga quidem et modi asperiores aliquam aliquid odio assumenda eius dolor quaerat in libero eum!
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, ea, eos dolore fuga facere similique ipsam consequuntur eaque officiis dolor esse sequi et omnis odio ratione corporis nostrum. Dolorum, eveniet.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, quod, mollitia, quidem possimus quaerat vitae expedita itaque laborum debitis laudantium eum optio earum quis deleniti asperiores cupiditate facere! Officiis, soluta!
         </p>
   </article>
   <article>
         <h2 class=\"titulo-article\">
               the story
         </h2>
         <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, non, aliquam velit eum dolor assumenda temporibus mollitia earum veritatis voluptas modi doloremque pariatur sapiente minima necessitatibus molestiae nulla illum fuga!
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, beatae, perspiciatis eius explicabo sit hic consequatur magni laudantium animi vitae labore quisquam voluptates aliquid rem qui necessitatibus minima nesciunt vero.
         </p>
         <div id=\"galeria-about\" class=\"galeria\">
               <div class=\"contenedor-galeria about\">
                  <ul class=\"slider1\">
                     <li><a href=\"\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 1\"></a></li>
                     <li><a href=\"\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 2\"></a></li>
                     <li><a href=\"\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 3\"></a></li>
                     <li><a href=\"\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 1\"></a></li>
                     <li><a href=\"\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 2\"></a></li>
                     <li><a href=\"\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/fotos/la-nacional-300x227.jpg"), "html", null, true);
        echo "\" alt=\"imagen 3\"></a></li>
                  </ul>
               </div>
               <figure class=\"control-galeria-izquierda\">
                     <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/arrow_left.png"), "html", null, true);
        echo "\" alt=\"control galeria izquierda\">
               </figure>
               <figure class=\"control-galeria-derecha\">
                     <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/arrow_right.png"), "html", null, true);
        echo "\" alt=\"control galeria derecha\">
               </figure>
         </div>
         <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, quae, atque mollitia aspernatur illo ipsum vero sed error soluta quisquam itaque tempore voluptates est in blanditiis nostrum vitae minima molestiae?
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, earum, inventore, quas, hic minima a adipisci ullam libero illum tempore doloribus nihil atque similique deserunt perferendis. Atque minus necessitatibus magnam.
         </p>
   </article>
   <div id=\"redes-sociales-pagina\">
         <figure id=\"red-social-pagina-facebook\">
               <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/facebook_share.png"), "html", null, true);
        echo "\" alt=\"compartir en facebook\">
         </figure>
         <figure id=\"red-social-pagina-twitter\">
               <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/twitter_share.png"), "html", null, true);
        echo "\" alt=\"compartir en twitter\">
         </figure>
   </div>
</section>

";
    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        // line 65
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
<script>
   \$(document).ready(function(){
     \$('.slider1').bxSlider({
       slideWidth: 290,
       minSlides: 1,
       maxSlides: 3,
       slideMargin: 5,
       nextSelector: '.control-galeria-izquierda',
       prevSelector: '.control-galeria-derecha',
       nextText: 'Next',
       prevText: 'Prev'
     });
   });
</script>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  139 => 65,  136 => 64,  126 => 57,  120 => 54,  107 => 44,  101 => 41,  94 => 37,  90 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  51 => 12,  46 => 9,  43 => 8,  37 => 5,  33 => 4,  30 => 3,);
    }
}
