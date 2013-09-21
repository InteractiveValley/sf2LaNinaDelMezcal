<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_73019cc04ab0be3fd29f20aa793ce1c9be37a92b373677e2315aa97e4200d531 extends Twig_Template
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

        $this->macros = array(
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
        return array (  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 312,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 282,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 270,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 135,  385 => 134,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 100,  310 => 96,  287 => 92,  200 => 37,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 123,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 103,  333 => 107,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 81,  270 => 82,  262 => 71,  275 => 126,  244 => 110,  214 => 92,  156 => 54,  127 => 38,  170 => 27,  252 => 90,  245 => 88,  228 => 79,  187 => 31,  388 => 119,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 94,  313 => 130,  290 => 117,  267 => 109,  251 => 69,  235 => 58,  216 => 49,  208 => 85,  201 => 82,  132 => 52,  155 => 22,  303 => 111,  299 => 119,  295 => 94,  285 => 105,  273 => 98,  259 => 70,  247 => 94,  205 => 84,  178 => 32,  360 => 156,  355 => 113,  352 => 106,  347 => 105,  341 => 109,  337 => 108,  331 => 32,  328 => 31,  320 => 25,  314 => 22,  305 => 16,  301 => 15,  294 => 12,  288 => 106,  282 => 89,  280 => 88,  256 => 91,  255 => 96,  234 => 80,  231 => 82,  215 => 74,  168 => 59,  151 => 49,  113 => 46,  116 => 561,  236 => 100,  226 => 53,  204 => 44,  188 => 71,  153 => 9,  149 => 50,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 281,  391 => 277,  386 => 118,  374 => 114,  369 => 271,  365 => 109,  358 => 267,  353 => 145,  292 => 211,  209 => 45,  73 => 89,  229 => 54,  219 => 50,  197 => 67,  189 => 36,  181 => 62,  173 => 62,  158 => 23,  129 => 54,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 214,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 126,  404 => 125,  398 => 281,  379 => 131,  370 => 122,  366 => 271,  359 => 114,  351 => 264,  297 => 125,  293 => 118,  232 => 57,  210 => 71,  194 => 67,  177 => 62,  164 => 13,  137 => 52,  130 => 39,  103 => 23,  121 => 729,  87 => 32,  80 => 10,  61 => 50,  84 => 186,  68 => 79,  93 => 161,  79 => 148,  56 => 30,  140 => 55,  117 => 36,  100 => 21,  26 => 1,  264 => 72,  258 => 118,  253 => 103,  239 => 77,  218 => 93,  213 => 86,  198 => 21,  193 => 77,  183 => 34,  175 => 13,  163 => 10,  107 => 24,  37 => 11,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 132,  378 => 273,  375 => 273,  373 => 158,  368 => 115,  354 => 265,  350 => 112,  335 => 110,  327 => 95,  325 => 135,  322 => 106,  318 => 101,  311 => 129,  307 => 95,  298 => 98,  296 => 85,  291 => 83,  281 => 80,  277 => 87,  271 => 125,  265 => 78,  260 => 92,  254 => 70,  248 => 62,  242 => 103,  237 => 106,  221 => 51,  195 => 75,  191 => 66,  180 => 33,  172 => 29,  143 => 62,  135 => 44,  131 => 1,  110 => 3,  64 => 51,  41 => 8,  276 => 112,  272 => 75,  257 => 92,  246 => 66,  243 => 60,  241 => 63,  238 => 62,  233 => 92,  230 => 102,  227 => 53,  224 => 52,  222 => 76,  220 => 88,  211 => 81,  207 => 72,  182 => 69,  162 => 12,  146 => 49,  138 => 79,  122 => 36,  105 => 1,  74 => 130,  70 => 19,  66 => 86,  62 => 19,  199 => 42,  186 => 35,  174 => 30,  169 => 16,  166 => 11,  161 => 74,  159 => 11,  154 => 72,  145 => 54,  141 => 4,  139 => 12,  124 => 730,  120 => 50,  108 => 2,  94 => 320,  65 => 14,  52 => 13,  97 => 29,  92 => 28,  88 => 150,  78 => 102,  71 => 129,  59 => 31,  90 => 33,  29 => 8,  96 => 391,  91 => 319,  81 => 185,  49 => 9,  30 => 4,  31 => 9,  27 => 1,  47 => 47,  34 => 10,  28 => 5,  24 => 2,  22 => 1,  82 => 12,  75 => 9,  72 => 18,  50 => 11,  43 => 19,  40 => 8,  25 => 2,  249 => 68,  160 => 58,  148 => 57,  142 => 51,  134 => 2,  126 => 741,  123 => 49,  118 => 45,  114 => 484,  111 => 483,  104 => 421,  101 => 420,  99 => 392,  86 => 195,  77 => 19,  69 => 87,  58 => 59,  55 => 14,  53 => 48,  46 => 8,  44 => 1,  38 => 7,  35 => 4,  32 => 9,  212 => 76,  206 => 23,  202 => 43,  196 => 85,  192 => 33,  190 => 32,  185 => 72,  179 => 69,  176 => 65,  171 => 28,  167 => 61,  165 => 72,  157 => 60,  152 => 68,  150 => 20,  147 => 50,  144 => 48,  136 => 3,  133 => 10,  128 => 8,  125 => 37,  119 => 562,  115 => 43,  112 => 63,  109 => 439,  106 => 438,  102 => 33,  98 => 167,  95 => 38,  89 => 196,  85 => 30,  83 => 112,  76 => 147,  67 => 22,  63 => 69,  60 => 24,  57 => 14,  54 => 11,  51 => 10,  48 => 41,  45 => 6,  42 => 36,  39 => 35,  36 => 1,  33 => 3,);
    }
}
