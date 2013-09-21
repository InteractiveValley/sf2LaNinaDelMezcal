<?php

/* FrontendBundle:Default:lastTweets.html.twig */
class __TwigTemplate_4593b6ca1e27907d00cd7c4da6597391a0ead5043042ddabb88d5021b37d5776 extends Twig_Template
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
        echo "<div class=\"knp_last_tweets\">
    ";
        // line 2
        if ((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets"))) {
            // line 3
            echo "        <ul class=\"tweets-lista\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) ? $context["tweets"] : $this->getContext($context, "tweets")));
            foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
                // line 5
                echo "            <li class=\"tweet-item\">
                <div class=\"tweet-item-contenedor\">
                <div class=\"tweet-item-imagen\">
                    <img src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/keyarts/logo_contacto.png"), "html", null, true);
                echo "\" width=\"60\" height=\"60\"/>
                </div>
                <div class=\"tweet-item-contenido\">
                    <span class=\"tweet-item-tiempo\">
                        <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/bird_16_gray.png"), "html", null, true);
                echo "\" />
                        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('twitter_time_extension')->twitterTimeFilter($this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "createdAt")), "html", null, true);
                echo "
                    </span>
                        
                    ";
                // line 16
                echo $this->env->getExtension('knp_tweet_urlize')->filterTweet(twig_escape_filter($this->env, $this->getAttribute((isset($context["tweet"]) ? $context["tweet"] : $this->getContext($context, "tweet")), "text"), "html", null, true));
                echo "
                </div>    
                </div>
                <!--div class=\"tweet-item-controles\">
                    <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/twitter2.png"), "html", null, true);
                echo "\"/>
                </div-->    
                    
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    ";
        } else {
            // line 27
            echo "        No tweets
    ";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:lastTweets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 162,  384 => 161,  380 => 160,  376 => 159,  340 => 140,  336 => 139,  332 => 137,  319 => 134,  313 => 130,  290 => 117,  267 => 109,  251 => 102,  235 => 93,  216 => 87,  208 => 85,  201 => 83,  132 => 50,  155 => 66,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 107,  247 => 94,  205 => 84,  178 => 65,  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 73,  151 => 49,  113 => 40,  116 => 41,  236 => 100,  226 => 93,  204 => 71,  188 => 71,  153 => 58,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 145,  292 => 211,  209 => 131,  73 => 21,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 62,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 92,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 53,  130 => 51,  103 => 60,  121 => 42,  87 => 31,  80 => 24,  61 => 20,  84 => 27,  68 => 23,  93 => 40,  79 => 24,  56 => 16,  140 => 55,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 103,  239 => 77,  218 => 85,  213 => 86,  198 => 21,  193 => 78,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 136,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 112,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 108,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 67,  172 => 60,  143 => 57,  135 => 54,  131 => 59,  110 => 31,  64 => 21,  41 => 5,  276 => 112,  272 => 110,  257 => 92,  246 => 132,  243 => 89,  241 => 94,  238 => 127,  233 => 92,  230 => 122,  227 => 71,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 56,  138 => 79,  122 => 42,  105 => 36,  74 => 25,  70 => 19,  66 => 25,  62 => 12,  199 => 90,  186 => 70,  174 => 66,  169 => 71,  166 => 11,  161 => 61,  159 => 58,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 42,  94 => 34,  65 => 12,  52 => 10,  97 => 35,  92 => 30,  88 => 38,  78 => 27,  71 => 26,  59 => 13,  90 => 32,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 7,  30 => 4,  31 => 9,  27 => 3,  47 => 6,  34 => 5,  28 => 5,  24 => 2,  22 => 1,  82 => 29,  75 => 21,  72 => 23,  50 => 13,  43 => 5,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 37,  104 => 41,  101 => 36,  99 => 33,  86 => 32,  77 => 19,  69 => 18,  58 => 11,  55 => 10,  53 => 11,  46 => 12,  44 => 13,  38 => 4,  35 => 3,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 74,  192 => 73,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 65,  167 => 61,  165 => 72,  157 => 60,  152 => 57,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 39,  106 => 61,  102 => 33,  98 => 30,  95 => 35,  89 => 33,  85 => 54,  83 => 35,  76 => 31,  67 => 18,  63 => 20,  60 => 14,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 6,  42 => 5,  39 => 8,  36 => 4,  33 => 3,);
    }
}
