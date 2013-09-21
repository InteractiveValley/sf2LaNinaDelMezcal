<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_c7c6862d6aa8d9b3087385fb28db29c7f2c0bdeab99dfc32b393c545c455764a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 27
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : $this->getContext($context, "autocompleter_value"));
        // line 56
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" => (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), "class" => "chzn-select"), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("field_widget", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width")) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) > (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) ? (((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file")) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('assets')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : $this->getContext($context, "tokeninput_value"));
        // line 158
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "</p>
    </div>
";
    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  523 => 169,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 157,  492 => 156,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 141,  449 => 138,  434 => 135,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 123,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 103,  333 => 98,  312 => 93,  309 => 92,  304 => 90,  286 => 82,  284 => 81,  270 => 74,  262 => 71,  275 => 126,  244 => 110,  214 => 92,  156 => 54,  127 => 38,  170 => 27,  252 => 90,  245 => 88,  228 => 79,  187 => 65,  388 => 119,  384 => 161,  380 => 160,  376 => 115,  340 => 140,  336 => 139,  332 => 137,  319 => 94,  313 => 130,  290 => 117,  267 => 109,  251 => 66,  235 => 56,  216 => 49,  208 => 85,  201 => 82,  132 => 52,  155 => 22,  303 => 111,  299 => 119,  295 => 109,  285 => 105,  273 => 98,  259 => 70,  247 => 94,  205 => 84,  178 => 32,  360 => 156,  355 => 155,  352 => 106,  347 => 105,  341 => 35,  337 => 34,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 158,  280 => 113,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 59,  151 => 49,  113 => 46,  116 => 37,  236 => 100,  226 => 93,  204 => 44,  188 => 71,  153 => 21,  149 => 50,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 348,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 129,  403 => 281,  391 => 277,  386 => 118,  374 => 114,  369 => 271,  365 => 109,  358 => 267,  353 => 145,  292 => 211,  209 => 45,  73 => 89,  229 => 54,  219 => 50,  197 => 67,  189 => 36,  181 => 62,  173 => 62,  158 => 23,  129 => 54,  578 => 377,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 346,  519 => 342,  514 => 340,  507 => 336,  502 => 334,  491 => 326,  481 => 319,  478 => 318,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 126,  404 => 125,  398 => 281,  379 => 274,  370 => 272,  366 => 271,  359 => 146,  351 => 264,  297 => 13,  293 => 118,  232 => 55,  210 => 71,  194 => 67,  177 => 62,  164 => 25,  137 => 52,  130 => 39,  103 => 23,  121 => 4,  87 => 32,  80 => 10,  61 => 60,  84 => 13,  68 => 79,  93 => 161,  79 => 11,  56 => 49,  140 => 55,  117 => 36,  100 => 21,  26 => 1,  264 => 72,  258 => 118,  253 => 103,  239 => 77,  218 => 93,  213 => 86,  198 => 21,  193 => 77,  183 => 34,  175 => 13,  163 => 10,  107 => 24,  37 => 11,  493 => 327,  487 => 321,  482 => 167,  474 => 164,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 131,  420 => 140,  415 => 139,  411 => 284,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 121,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 144,  335 => 110,  327 => 95,  325 => 135,  322 => 106,  318 => 104,  311 => 129,  307 => 91,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 93,  271 => 125,  265 => 122,  260 => 92,  254 => 86,  248 => 62,  242 => 103,  237 => 106,  221 => 51,  195 => 75,  191 => 66,  180 => 33,  172 => 29,  143 => 62,  135 => 44,  131 => 9,  110 => 3,  64 => 18,  41 => 8,  276 => 112,  272 => 75,  257 => 92,  246 => 61,  243 => 60,  241 => 94,  238 => 127,  233 => 92,  230 => 102,  227 => 53,  224 => 86,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 54,  146 => 49,  138 => 79,  122 => 36,  105 => 1,  74 => 25,  70 => 19,  66 => 70,  62 => 19,  199 => 42,  186 => 35,  174 => 30,  169 => 26,  166 => 11,  161 => 74,  159 => 58,  154 => 72,  145 => 54,  141 => 47,  139 => 12,  124 => 49,  120 => 50,  108 => 2,  94 => 27,  65 => 14,  52 => 13,  97 => 29,  92 => 28,  88 => 150,  78 => 102,  71 => 80,  59 => 13,  90 => 33,  29 => 8,  96 => 162,  91 => 151,  81 => 103,  49 => 7,  30 => 4,  31 => 9,  27 => 1,  47 => 47,  34 => 10,  28 => 5,  24 => 2,  22 => 1,  82 => 12,  75 => 9,  72 => 18,  50 => 11,  43 => 19,  40 => 8,  25 => 2,  249 => 80,  160 => 58,  148 => 57,  142 => 51,  134 => 51,  126 => 48,  123 => 49,  118 => 45,  114 => 33,  111 => 42,  104 => 41,  101 => 168,  99 => 30,  86 => 113,  77 => 19,  69 => 17,  58 => 59,  55 => 14,  53 => 48,  46 => 20,  44 => 46,  38 => 7,  35 => 4,  32 => 9,  212 => 76,  206 => 23,  202 => 43,  196 => 85,  192 => 73,  190 => 19,  185 => 72,  179 => 69,  176 => 65,  171 => 28,  167 => 61,  165 => 72,  157 => 60,  152 => 68,  150 => 20,  147 => 50,  144 => 48,  136 => 60,  133 => 10,  128 => 8,  125 => 37,  119 => 48,  115 => 43,  112 => 63,  109 => 37,  106 => 42,  102 => 33,  98 => 167,  95 => 38,  89 => 15,  85 => 30,  83 => 112,  76 => 90,  67 => 22,  63 => 69,  60 => 24,  57 => 14,  54 => 2,  51 => 42,  48 => 41,  45 => 6,  42 => 36,  39 => 35,  36 => 1,  33 => 3,);
    }
}
