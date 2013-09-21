<?php

/* FrontendBundle:Default:contacto.json.twig */
class __TwigTemplate_9167e7f1703c96dc5ecebe56166179c0a353cb4fb06563b3e650011c91dae6d9 extends Twig_Template
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
        echo " {
\tcaptcha: null,
\tinto: '.form',
\t";
        // line 4
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) == true)) {
            // line 5
            echo "        invalids: [
            ";
            // line 6
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), "vars"), "errors")) > 0)) {
                // line 7
                echo "                {
\t\tinto:'span.Name'
\t\tmessage: 'Error'
                },
            ";
            }
            // line 12
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), "vars"), "errors")) > 0)) {
                // line 13
                echo "                {
\t\tinto:'span.Email'
\t\tmessage: 'Error'
                },
            ";
            }
            // line 18
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), "vars"), "errors")) > 0)) {
                // line 19
                echo "                {
\t\tinto:'span.subject'
\t\tmessage: 'Error'
                },
            ";
            }
            // line 23
            echo "    
            ";
            // line 24
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), "vars"), "errors")) > 0)) {
                // line 25
                echo "                {
\t\tinto:'span.telefono'
\t\tmessage: 'Error'
                },
            ";
            }
            // line 30
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), "vars"), "errors")) > 0)) {
                // line 31
                echo "                {
\t\tinto:'span.body'
\t\tmessage: 'Error'
                },
            ";
            }
            // line 35
            echo "    
            ]    
        ";
        } else {
            // line 38
            echo "        invalids: [
        ]
        ";
        }
        // line 40
        echo ",
\tmailSent: ";
        // line 41
        if (((isset($context["ok"]) ? $context["ok"] : $this->getContext($context, "ok")) == true)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
        message:'";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
        echo "'
}";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:contacto.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 156,  355 => 155,  352 => 154,  347 => 132,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 8,  282 => 158,  280 => 154,  256 => 139,  255 => 96,  234 => 83,  231 => 82,  215 => 76,  168 => 89,  151 => 49,  113 => 47,  116 => 36,  236 => 100,  226 => 93,  204 => 71,  188 => 69,  153 => 56,  149 => 55,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 342,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 289,  421 => 286,  416 => 285,  403 => 281,  391 => 277,  386 => 276,  374 => 272,  369 => 271,  365 => 270,  358 => 267,  353 => 264,  292 => 211,  209 => 131,  73 => 30,  229 => 96,  219 => 114,  197 => 67,  189 => 70,  181 => 62,  173 => 91,  158 => 53,  129 => 48,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 296,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 283,  404 => 282,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 268,  351 => 264,  297 => 13,  293 => 212,  232 => 96,  210 => 74,  194 => 72,  177 => 92,  164 => 56,  137 => 51,  130 => 41,  103 => 60,  121 => 42,  87 => 22,  80 => 24,  61 => 23,  84 => 29,  68 => 15,  93 => 40,  79 => 52,  56 => 37,  140 => 53,  117 => 36,  100 => 59,  26 => 1,  264 => 144,  258 => 91,  253 => 90,  239 => 77,  218 => 87,  213 => 26,  198 => 21,  193 => 20,  183 => 15,  175 => 13,  163 => 10,  107 => 36,  37 => 4,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 287,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 129,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 118,  368 => 115,  354 => 265,  350 => 263,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 144,  307 => 99,  298 => 98,  296 => 212,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 92,  254 => 86,  248 => 133,  242 => 103,  237 => 80,  221 => 79,  195 => 75,  191 => 64,  180 => 64,  172 => 60,  143 => 65,  135 => 44,  131 => 59,  110 => 31,  64 => 24,  41 => 12,  276 => 96,  272 => 149,  257 => 92,  246 => 132,  243 => 89,  241 => 85,  238 => 127,  233 => 74,  230 => 122,  227 => 71,  224 => 80,  222 => 76,  220 => 75,  211 => 109,  207 => 72,  182 => 69,  162 => 54,  146 => 52,  138 => 79,  122 => 69,  105 => 36,  74 => 50,  70 => 19,  66 => 25,  62 => 12,  199 => 90,  186 => 94,  174 => 58,  169 => 71,  166 => 11,  161 => 85,  159 => 87,  154 => 54,  145 => 46,  141 => 144,  139 => 45,  124 => 54,  120 => 34,  108 => 30,  94 => 57,  65 => 12,  52 => 10,  97 => 58,  92 => 35,  88 => 38,  78 => 27,  71 => 26,  59 => 13,  90 => 23,  29 => 5,  96 => 41,  91 => 56,  81 => 21,  49 => 9,  30 => 4,  31 => 3,  27 => 4,  47 => 6,  34 => 7,  28 => 5,  24 => 2,  22 => 1,  82 => 53,  75 => 21,  72 => 23,  50 => 9,  43 => 11,  40 => 5,  25 => 2,  249 => 80,  160 => 58,  148 => 82,  142 => 51,  134 => 43,  126 => 70,  123 => 48,  118 => 37,  114 => 33,  111 => 37,  104 => 42,  101 => 27,  99 => 33,  86 => 27,  77 => 19,  69 => 18,  58 => 13,  55 => 11,  53 => 9,  46 => 12,  44 => 13,  38 => 4,  35 => 4,  32 => 6,  212 => 76,  206 => 23,  202 => 77,  196 => 101,  192 => 71,  190 => 19,  185 => 63,  179 => 14,  176 => 65,  171 => 60,  167 => 61,  165 => 59,  157 => 84,  152 => 55,  150 => 53,  147 => 50,  144 => 48,  136 => 52,  133 => 49,  128 => 40,  125 => 43,  119 => 48,  115 => 64,  112 => 63,  109 => 62,  106 => 61,  102 => 33,  98 => 30,  95 => 26,  89 => 30,  85 => 54,  83 => 35,  76 => 31,  67 => 25,  63 => 15,  60 => 39,  57 => 14,  54 => 19,  51 => 18,  48 => 29,  45 => 8,  42 => 7,  39 => 4,  36 => 8,  33 => 3,);
    }
}
