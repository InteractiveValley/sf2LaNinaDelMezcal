<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_210690e3ec67bfddd87725dc7ab671b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 420
        echo "
";
        // line 421
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 438
        echo "
";
        // line 439
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 483
        echo "
";
        // line 484
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 561
        echo "
";
        // line 562
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 729
        echo "
";
        // line 730
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 741
        echo "
";
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genemu_base64"), "html", null, true);
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 52
        ob_start();
        // line 53
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 54
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url"))));
            // line 57
            echo "    ";
        } else {
            // line 58
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 66
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 68
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 69
            echo "
            var \$textarea = jQuery('#";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 78
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 82
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 92
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
        ";
        // line 94
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 125
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 94
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 95
        echo "
        ";
        // line 96
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 97
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage"))));
            // line 100
            echo "        ";
        }
        // line 101
        echo "
        ";
        // line 102
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 103
            echo "            ";
            $context["culture"] = "en-GB";
            // line 104
            echo "        ";
        }
        // line 105
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 111
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 112
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), "vars"), "id"), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), "vars"), "id"), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), "vars"), "id"), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 122
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 130
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 135
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 136
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 148
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 149
        ob_start();
        // line 150
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 158
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 160
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 161
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 173
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 181
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 186
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 187
        ob_start();
        // line 188
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 196
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 197
        ob_start();
        // line 198
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
";
        // line 205
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            echo "                // get first (and only one) element from object
                for (first in \$val) break;
                \$val = \$val[first];";
        }
        // line 208
        echo "
                \$field.val(JSON.stringify(\$val));
            };

";
        // line 212
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 213
            echo "            ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 214
                echo "                ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 215
                echo "            ";
            } else {
                // line 216
                echo "                ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 217
                echo "            ";
            }
        }
        // line 219
        echo "            var \$configs = {
";
        // line 220
        if (array_key_exists("method", $context)) {
            echo "                // The HTTP method (eg. GET, POST) to use for the server request. default: “GET”.
                method: '";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "',
";
        }
        // line 223
        if (array_key_exists("queryParam", $context)) {
            echo "                // The name of the query param which you expect to contain the search term on the server-side. default: “q”.
                queryParam: '";
            // line 224
            echo twig_escape_filter($this->env, (isset($context["queryParam"]) ? $context["queryParam"] : $this->getContext($context, "queryParam")), "html", null, true);
            echo "',
";
        }
        // line 226
        if (array_key_exists("searchDelay", $context)) {
            echo "                // The delay, in milliseconds, between the user finishing typing and the search being performed. default: 300
                searchDelay: ";
            // line 227
            echo twig_escape_filter($this->env, (isset($context["searchDelay"]) ? $context["searchDelay"] : $this->getContext($context, "searchDelay")), "html", null, true);
            echo ",
";
        }
        // line 229
        if (array_key_exists("minChars", $context)) {
            echo "                // The minimum number of characters the user must enter before a search is performed. default: 1
                minChars: ";
            // line 230
            echo twig_escape_filter($this->env, (isset($context["minChars"]) ? $context["minChars"] : $this->getContext($context, "minChars")), "html", null, true);
            echo ",
";
        }
        // line 232
        if (array_key_exists("propertyToSearch", $context)) {
            echo "                // The javascript/json object attribute to search. default: “name”
                propertyToSearch: '";
            // line 233
            echo twig_escape_filter($this->env, (isset($context["propertyToSearch"]) ? $context["propertyToSearch"] : $this->getContext($context, "propertyToSearch")), "html", null, true);
            echo "',
";
        }
        // line 235
        if (array_key_exists("tokenValue", $context)) {
            echo "                // The value of the token input when the input is submitted.
                // Set it to id in order to get a concatenation of token IDs, or to name in order to get a concatenation of names.
                // default: id
                tokenValue: '";
            // line 238
            echo twig_escape_filter($this->env, (isset($context["tokenValue"]) ? $context["tokenValue"] : $this->getContext($context, "tokenValue")), "html", null, true);
            echo "',
";
        }
        // line 240
        if (array_key_exists("jsonContainer", $context)) {
            echo "                // The name of the json object in the response which contains the search results. This is typically used
                // when your endpoint returns other data in addition to your search results. Use null to use the top level
                // response object. default: null.
                jsonContainer: '";
            // line 243
            echo twig_escape_filter($this->env, (isset($context["jsonContainer"]) ? $context["jsonContainer"] : $this->getContext($context, "jsonContainer")), "html", null, true);
            echo "',
";
        }
        // line 245
        if (array_key_exists("crossDomain", $context)) {
            echo "                // Force JSONP cross-domain communication to the server instead of a normal ajax request.
                // Note: JSONP is automatically enabled if we detect the search request is a cross-domain request.
                // default: false.
                crossDomain: ";
            // line 248
            echo twig_escape_filter($this->env, (isset($context["crossDomain"]) ? $context["crossDomain"] : $this->getContext($context, "crossDomain")), "html", null, true);
            echo ",
";
        }
        // line 250
        if (array_key_exists("prePopulate", $context)) {
            echo "                // Prepopulate the tokeninput with existing data. Set to an array of JSON objects,
                // eg: [{id: 3, name: \"test\"}, {id: 5, name: \"awesome\"}] to pre-fill the input. default: null.
                prePopulate: ";
            // line 252
            echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
            echo ",
";
        }
        // line 254
        if (array_key_exists("hintText", $context)) {
            echo "                // The text to show in the dropdown label which appears when you first click in the search field.
                // default: “Type in a search term”
                hintText: '";
            // line 256
            echo twig_escape_filter($this->env, (isset($context["hintText"]) ? $context["hintText"] : $this->getContext($context, "hintText")), "html", null, true);
            echo "',
";
        }
        // line 258
        if (array_key_exists("noResultsText", $context)) {
            echo "                // The text to show in the dropdown label when no results are found which match the current query.
                // default: “No results”.
                noResultsText: '";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["noResultsText"]) ? $context["noResultsText"] : $this->getContext($context, "noResultsText")), "html", null, true);
            echo "',
";
        }
        // line 262
        if (array_key_exists("searchingText", $context)) {
            echo "                // The text to show in the dropdown label when a search is currently in progress.
                // default: “Searching…”.
                searchingText: '";
            // line 264
            echo twig_escape_filter($this->env, (isset($context["searchingText"]) ? $context["searchingText"] : $this->getContext($context, "searchingText")), "html", null, true);
            echo "',
";
        }
        // line 266
        if (array_key_exists("deleteText", $context)) {
            echo "                // The text to show on each token which deletes the token when clicked.
                // If you wish to hide the delete link, provide an empty string here.
                // Alternatively you can provide a html string here if you would like to show an image for deleting tokens.
                // default: ×.
                deleteText: '";
            // line 270
            echo twig_escape_filter($this->env, (isset($context["deleteText"]) ? $context["deleteText"] : $this->getContext($context, "deleteText")), "html", null, true);
            echo "',
";
        }
        // line 272
        if (array_key_exists("animateDropdown", $context)) {
            echo "                // Set this to false to disable animation of the dropdown default: true.
                animateDropdown: ";
            // line 273
            echo twig_escape_filter($this->env, (isset($context["animateDropdown"]) ? $context["animateDropdown"] : $this->getContext($context, "animateDropdown")), "html", null, true);
            echo ",
";
        }
        // line 275
        if (array_key_exists("theme", $context)) {
            echo "                // Set this to a string, eg “facebook” when including theme css files to set the css class suffix.
                theme: '";
            // line 276
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
            echo "',
";
        }
        // line 278
        if (array_key_exists("resultsFormatter", $context)) {
            echo "                // A function that returns an interpolated HTML string for each result.
                // Use this function with a templating system of your choice, such as jresig microtemplates or mustache.js.
                // Use this when you want to include images or multiline formatted results
                // default: function(item){ return “<li>” + item.propertyToSearch + “</li>” }.
                resultsFormatter: ";
            // line 282
            echo twig_escape_filter($this->env, (isset($context["resultsFormatter"]) ? $context["resultsFormatter"] : $this->getContext($context, "resultsFormatter")), "html", null, true);
            echo ",
";
        }
        // line 284
        if (array_key_exists("tokenFormatter", $context)) {
            echo "                // A function that returns an interpolated HTML string for each token.
                // Use this function with a templating system of your choice, such as jresig microtemplates or mustache.js.
                // Use this when you want to include images or multiline formatted tokens.
                // Quora’s people invite token field that returns avatar tokens is a good example of what can be done this option.
                // default: function(item){ return “<li><p>” + item.propertyToSearch + “</p></li>” }.
                tokenFormatter: ";
            // line 289
            echo twig_escape_filter($this->env, (isset($context["tokenFormatter"]) ? $context["tokenFormatter"] : $this->getContext($context, "tokenFormatter")), "html", null, true);
            echo ",
";
        }
        // line 291
        if ((array_key_exists("tokenLimit", $context) || (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            echo "                // The maximum number of results allowed to be selected by the user. Use null to allow unlimited selections.
                // default: null.
                tokenLimit: ";
            // line 293
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                if (array_key_exists("tokenLimit", $context)) {
                    echo twig_escape_filter($this->env, (isset($context["tokenLimit"]) ? $context["tokenLimit"] : $this->getContext($context, "tokenLimit")), "html", null, true);
                } else {
                    echo "null";
                }
            } else {
                echo "1";
            }
            echo ",
";
        }
        // line 295
        if (array_key_exists("tokenDelimiter", $context)) {
            echo "                // The separator to use when sending the results back to the server. default: “,”.
                tokenDelimiter: '";
            // line 296
            echo twig_escape_filter($this->env, (isset($context["tokenDelimiter"]) ? $context["tokenDelimiter"] : $this->getContext($context, "tokenDelimiter")), "html", null, true);
            echo "',
";
        }
        // line 298
        if (array_key_exists("preventDuplicates", $context)) {
            echo "                // Prevent user from selecting duplicate values by setting this to true. default: false.
                preventDuplicates: ";
            // line 299
            echo twig_escape_filter($this->env, (isset($context["preventDuplicates"]) ? $context["preventDuplicates"] : $this->getContext($context, "preventDuplicates")), "html", null, true);
            echo ",
";
        }
        // line 301
        echo "                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            };
            \$tokeninput.tokenInput(
                ";
        // line 305
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 306
            echo "                    '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "html", null, true);
            echo "'
                ";
        } else {
            // line 308
            echo "                    ";
            $context["sourceChoices"] = array();
            // line 309
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 310
                echo "                        ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"))));
                // line 311
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 312
            echo "                    ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
                ";
        }
        // line 313
        echo ",
                \$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 320
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 321
        ob_start();
        // line 322
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 324
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 325
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 331
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 332
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 342
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 345
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 351
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 352
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 353
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "html", null, true);
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 358
            echo "                ";
            $context["sourceChoices"] = array();
            // line 359
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 360
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "value"), "label" => $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label"))));
                // line 361
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 364
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 367
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 368
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 377
        echo "
            ";
        // line 378
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 379
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 387
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 392
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 393
        ob_start();
        // line 394
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 396
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 399
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 400
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 401
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "html", null, true);
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 406
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 408
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 411
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength")))) {
            // line 412
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 416
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 421
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 422
        ob_start();
        // line 423
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 425
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 427
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 434
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 427
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 428
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 430
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 431
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
    }

    // line 439
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 440
        ob_start();
        // line 441
        echo "    ";
        // line 442
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 443
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 444
            echo "    ";
        }
        // line 445
        echo "
    ";
        // line 446
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 447
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude"), "vars"), "id"))));
            // line 448
            echo "    ";
        }
        // line 449
        echo "
    ";
        // line 450
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 451
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude"), "vars"), "id"))));
            // line 452
            echo "    ";
        }
        // line 453
        echo "
    ";
        // line 454
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 455
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality"), "vars"), "id"))));
            // line 456
            echo "    ";
        }
        // line 457
        echo "
    ";
        // line 458
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 459
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country"), "vars"), "id"))));
            // line 460
            echo "    ";
        }
        // line 461
        echo "
    ";
        // line 463
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 464
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 465
            echo "    ";
        }
        // line 466
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 469
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), "vars"), "id"), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 471
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 473
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 474
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 479
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 484
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 485
        ob_start();
        // line 486
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 489
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 557
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 489
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 490
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 494
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 499
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 504
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 505
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 511
            echo "                        var value = data.file;
                    ";
        }
        // line 513
        echo "
                    \$('#";
        // line 514
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 528
        if (((!$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true)) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto") === false))) {
            // line 529
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 542
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 546
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 562
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 563
        ob_start();
        // line 564
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 566
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 567
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 725
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 567
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 568
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 569
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 570
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder")), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 573
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder"), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 579
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf")), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg")), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script")), "queueID" => ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 584
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 589
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 622
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail"), "width")) : (500));
        // line 623
        echo "
                \$ratio = data.image.width > ";
        // line 624
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 668
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 677
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 684
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genemu_form_image"), "html", null, true);
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 689
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 707
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 708
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 710
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file")) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 711
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width")) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 712
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height")) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 715
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 716
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 720
            echo "        \$options.hide();
    ";
        }
        // line 722
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 730
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 731
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 733
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 735
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 738
        echo "    });
    </script>
";
    }

    // line 735
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 736
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1503 => 736,  1500 => 735,  1494 => 738,  1492 => 735,  1487 => 733,  1483 => 731,  1480 => 730,  1474 => 722,  1470 => 720,  1463 => 716,  1459 => 715,  1453 => 712,  1449 => 711,  1445 => 710,  1441 => 708,  1439 => 707,  1418 => 689,  1410 => 684,  1400 => 677,  1388 => 668,  1339 => 624,  1336 => 623,  1334 => 622,  1298 => 589,  1291 => 584,  1289 => 579,  1280 => 573,  1276 => 572,  1271 => 570,  1267 => 569,  1264 => 568,  1261 => 567,  1254 => 725,  1252 => 567,  1248 => 566,  1244 => 564,  1242 => 563,  1239 => 562,  1225 => 546,  1219 => 542,  1204 => 529,  1202 => 528,  1185 => 514,  1182 => 513,  1178 => 511,  1168 => 505,  1166 => 504,  1159 => 499,  1157 => 494,  1151 => 491,  1148 => 490,  1145 => 489,  1138 => 557,  1136 => 489,  1132 => 488,  1128 => 486,  1126 => 485,  1123 => 484,  1116 => 479,  1109 => 474,  1107 => 473,  1102 => 471,  1097 => 469,  1092 => 466,  1089 => 465,  1086 => 464,  1083 => 463,  1080 => 461,  1077 => 460,  1074 => 459,  1072 => 458,  1069 => 457,  1066 => 456,  1063 => 455,  1061 => 454,  1058 => 453,  1055 => 452,  1052 => 451,  1050 => 450,  1047 => 449,  1044 => 448,  1041 => 447,  1039 => 446,  1036 => 445,  1033 => 444,  1030 => 443,  1027 => 442,  1025 => 441,  1023 => 440,  1020 => 439,  1013 => 431,  1009 => 430,  1005 => 429,  1002 => 428,  999 => 427,  992 => 434,  990 => 427,  985 => 425,  981 => 423,  979 => 422,  976 => 421,  969 => 416,  963 => 412,  961 => 411,  956 => 408,  950 => 406,  942 => 401,  939 => 400,  937 => 399,  932 => 397,  928 => 396,  924 => 394,  922 => 393,  919 => 392,  912 => 387,  902 => 379,  900 => 378,  897 => 377,  886 => 368,  884 => 367,  879 => 364,  873 => 362,  867 => 361,  864 => 360,  859 => 359,  856 => 358,  848 => 353,  845 => 352,  843 => 351,  835 => 345,  830 => 342,  818 => 332,  816 => 331,  807 => 325,  803 => 324,  799 => 322,  797 => 321,  794 => 320,  785 => 313,  779 => 312,  773 => 311,  770 => 310,  765 => 309,  762 => 308,  756 => 306,  754 => 305,  748 => 301,  743 => 299,  739 => 298,  734 => 296,  730 => 295,  717 => 293,  712 => 291,  707 => 289,  699 => 284,  694 => 282,  687 => 278,  682 => 276,  678 => 275,  673 => 273,  669 => 272,  664 => 270,  657 => 266,  652 => 264,  647 => 262,  642 => 260,  637 => 258,  632 => 256,  627 => 254,  622 => 252,  617 => 250,  612 => 248,  606 => 245,  601 => 243,  595 => 240,  590 => 238,  584 => 235,  579 => 233,  575 => 232,  570 => 230,  566 => 229,  561 => 227,  557 => 226,  552 => 224,  548 => 223,  543 => 221,  539 => 220,  536 => 219,  532 => 217,  529 => 216,  526 => 215,  523 => 214,  520 => 213,  518 => 212,  512 => 208,  506 => 205,  499 => 201,  495 => 200,  491 => 198,  489 => 197,  486 => 196,  475 => 190,  471 => 188,  469 => 187,  466 => 186,  459 => 181,  449 => 173,  433 => 161,  431 => 160,  426 => 158,  417 => 152,  413 => 150,  411 => 149,  408 => 148,  399 => 142,  390 => 136,  386 => 135,  382 => 134,  378 => 132,  376 => 131,  373 => 130,  367 => 122,  356 => 114,  352 => 113,  347 => 112,  345 => 111,  338 => 109,  334 => 108,  330 => 107,  326 => 105,  323 => 104,  320 => 103,  318 => 102,  315 => 101,  312 => 100,  309 => 97,  307 => 96,  304 => 95,  301 => 94,  294 => 125,  292 => 94,  284 => 92,  279 => 89,  277 => 88,  274 => 87,  267 => 82,  251 => 70,  243 => 66,  238 => 63,  235 => 62,  232 => 58,  229 => 57,  226 => 54,  223 => 53,  221 => 52,  189 => 33,  184 => 31,  166 => 16,  159 => 12,  156 => 11,  150 => 9,  133 => 3,  131 => 2,  123 => 741,  121 => 730,  116 => 562,  113 => 561,  108 => 483,  106 => 439,  103 => 438,  101 => 421,  98 => 420,  96 => 392,  93 => 391,  91 => 320,  88 => 319,  78 => 185,  73 => 147,  71 => 130,  68 => 129,  66 => 87,  56 => 31,  272 => 126,  268 => 125,  262 => 78,  255 => 118,  248 => 69,  241 => 110,  215 => 93,  211 => 92,  198 => 82,  190 => 77,  182 => 72,  176 => 69,  161 => 13,  153 => 54,  146 => 50,  143 => 49,  138 => 4,  127 => 39,  124 => 38,  119 => 36,  104 => 24,  100 => 23,  90 => 16,  86 => 196,  83 => 195,  81 => 186,  79 => 12,  76 => 148,  70 => 9,  58 => 50,  53 => 30,  48 => 10,  44 => 47,  41 => 1,  39 => 36,  36 => 35,  34 => 11,  31 => 10,  29 => 9,  26 => 8,  24 => 1,  258 => 101,  249 => 95,  246 => 68,  237 => 88,  234 => 106,  227 => 102,  224 => 84,  218 => 51,  213 => 79,  203 => 72,  197 => 37,  191 => 68,  187 => 32,  180 => 63,  174 => 60,  168 => 59,  164 => 58,  157 => 54,  151 => 51,  145 => 50,  141 => 48,  134 => 45,  128 => 1,  122 => 37,  118 => 729,  111 => 484,  105 => 33,  99 => 32,  95 => 31,  82 => 29,  72 => 22,  67 => 19,  63 => 86,  61 => 51,  57 => 14,  55 => 13,  51 => 11,  49 => 10,  46 => 9,  43 => 8,  37 => 5,  33 => 4,  30 => 3,);
    }
}
