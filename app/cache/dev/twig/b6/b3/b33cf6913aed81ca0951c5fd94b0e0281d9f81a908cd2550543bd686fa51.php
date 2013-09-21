<?php

/* WebProfilerBundle:Collector:logger.html.twig */
class __TwigTemplate_b6b3b33cf6913aed81ca0951c5fd94b0e0281d9f81a908cd2550543bd686fa51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );

        $this->macros = array(
            "display_message" => array(
                'method' => "getDisplay_message",
                'arguments' => array(
                    "log_index" => null,
                    "log" => null,
                ),
            ),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            ";
            // line 9
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            echo twig_escape_filter($this->env, (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") || $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"))) {
            // line 40
            echo "        ";
            $context["error_count"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "counterrors") + $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        $context["priority"] = $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
            echo ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (((((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) >= 0) && ($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))) || (((isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")) < 0) && ((($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)) == (isset($context["priority"]) ? $context["priority"] : $this->getContext($context, "priority")))))) {
                    // line 77
                    echo "                <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index")), "html", null, true);
                    if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    echo $this->callMacro((isset($context["logger"]) ? $context["logger"] : $this->getContext($context, "logger")), "display_message", array(0 => $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), 1 => (isset($context["log"]) ? $context["log"] : $this->getContext($context, "log"))));
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getDisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 95
                $context["id"] = ("sf-call-stack-" . (isset($context["log_index"]) ? $context["log_index"] : $this->getContext($context, "log_index")));
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "', document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on'), document.getElementById('";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\" />
            <img class=\"toggle\" id=\"";
                // line 98
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\" />
        </a>
        ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) > 1)) {
                        // line 101
                        echo "            ";
                        if (((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            $context["from"] = $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        echo ((($this->getAttribute((isset($context["call"]) ? $context["call"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["call"]) ? $context["call"] : null), "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "file"), $this->getAttribute((isset($context["call"]) ? $context["call"] : $this->getContext($context, "call")), "line"), (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")))) : ((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 116
                        echo ((((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
                echo "
        ";
                // line 120
                if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "context", array(), "any", true, true) && (!twig_test_empty($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"))))) {
                    // line 121
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 123
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "context"), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 126
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 123,  363 => 121,  361 => 120,  334 => 113,  316 => 107,  268 => 94,  184 => 65,  1506 => 736,  1503 => 735,  1497 => 738,  1495 => 735,  1490 => 733,  1486 => 731,  1483 => 730,  1477 => 722,  1473 => 720,  1466 => 716,  1462 => 715,  1456 => 712,  1452 => 711,  1448 => 710,  1444 => 708,  1442 => 707,  1421 => 689,  1413 => 684,  1403 => 677,  1391 => 668,  1342 => 624,  1339 => 623,  1337 => 622,  1301 => 589,  1294 => 584,  1292 => 579,  1283 => 573,  1279 => 572,  1274 => 570,  1270 => 569,  1267 => 568,  1264 => 567,  1257 => 725,  1255 => 567,  1251 => 566,  1247 => 564,  1245 => 563,  1242 => 562,  1228 => 546,  1222 => 542,  1207 => 529,  1205 => 528,  1188 => 514,  1185 => 513,  1181 => 511,  1171 => 505,  1169 => 504,  1162 => 499,  1160 => 494,  1154 => 491,  1151 => 490,  1148 => 489,  1141 => 557,  1139 => 489,  1135 => 488,  1131 => 486,  1129 => 485,  1126 => 484,  1119 => 479,  1112 => 474,  1110 => 473,  1105 => 471,  1100 => 469,  1095 => 466,  1092 => 465,  1089 => 464,  1086 => 463,  1083 => 461,  1080 => 460,  1077 => 459,  1075 => 458,  1072 => 457,  1069 => 456,  1066 => 455,  1064 => 454,  1061 => 453,  1058 => 452,  1055 => 451,  1053 => 450,  1050 => 449,  1047 => 448,  1044 => 447,  1042 => 446,  1039 => 445,  1036 => 444,  1033 => 443,  1030 => 442,  1028 => 441,  1026 => 440,  1023 => 439,  1016 => 431,  1012 => 430,  1008 => 429,  1005 => 428,  1002 => 427,  995 => 434,  993 => 427,  988 => 425,  984 => 423,  982 => 422,  979 => 421,  972 => 416,  966 => 412,  964 => 411,  959 => 408,  953 => 406,  945 => 401,  942 => 400,  940 => 399,  935 => 397,  931 => 396,  927 => 394,  925 => 393,  922 => 392,  915 => 387,  905 => 379,  903 => 378,  900 => 377,  889 => 368,  887 => 367,  882 => 364,  876 => 362,  870 => 361,  867 => 360,  862 => 359,  859 => 358,  851 => 353,  848 => 352,  846 => 351,  838 => 345,  833 => 342,  821 => 332,  819 => 331,  810 => 325,  806 => 324,  802 => 322,  800 => 321,  797 => 320,  788 => 313,  782 => 312,  776 => 311,  773 => 310,  768 => 309,  765 => 308,  759 => 306,  757 => 305,  751 => 301,  746 => 299,  742 => 298,  737 => 296,  733 => 295,  720 => 293,  715 => 291,  710 => 289,  702 => 284,  697 => 282,  690 => 278,  685 => 276,  681 => 275,  676 => 273,  672 => 272,  667 => 270,  660 => 266,  655 => 264,  650 => 262,  645 => 260,  640 => 258,  635 => 256,  630 => 254,  625 => 252,  620 => 250,  615 => 248,  609 => 245,  604 => 243,  598 => 240,  593 => 238,  587 => 235,  582 => 233,  573 => 230,  569 => 229,  564 => 227,  560 => 226,  555 => 224,  551 => 223,  546 => 221,  542 => 220,  539 => 219,  535 => 217,  529 => 215,  521 => 212,  515 => 208,  509 => 205,  498 => 200,  489 => 196,  472 => 187,  469 => 186,  452 => 173,  429 => 158,  414 => 149,  402 => 142,  393 => 136,  389 => 135,  385 => 134,  348 => 111,  329 => 105,  326 => 104,  323 => 103,  321 => 102,  315 => 100,  310 => 105,  287 => 92,  200 => 76,  523 => 213,  511 => 164,  506 => 163,  503 => 162,  496 => 158,  494 => 198,  492 => 197,  490 => 155,  485 => 153,  483 => 152,  480 => 151,  465 => 142,  462 => 181,  449 => 138,  434 => 160,  428 => 133,  425 => 132,  419 => 130,  413 => 128,  410 => 127,  401 => 124,  399 => 123,  382 => 117,  371 => 113,  356 => 107,  345 => 104,  342 => 116,  333 => 107,  312 => 97,  309 => 92,  304 => 94,  286 => 82,  284 => 97,  270 => 82,  262 => 71,  275 => 96,  244 => 110,  214 => 92,  156 => 54,  127 => 39,  170 => 76,  252 => 90,  245 => 85,  228 => 79,  187 => 31,  388 => 119,  384 => 161,  380 => 160,  376 => 130,  340 => 140,  336 => 139,  332 => 137,  319 => 108,  313 => 106,  290 => 117,  267 => 109,  251 => 69,  235 => 58,  216 => 49,  208 => 85,  201 => 82,  132 => 41,  155 => 52,  303 => 111,  299 => 119,  295 => 94,  285 => 105,  273 => 95,  259 => 70,  247 => 94,  205 => 84,  178 => 32,  360 => 156,  355 => 113,  352 => 106,  347 => 105,  341 => 109,  337 => 114,  331 => 112,  328 => 111,  320 => 25,  314 => 22,  305 => 16,  301 => 102,  294 => 12,  288 => 98,  282 => 89,  280 => 88,  256 => 91,  255 => 96,  234 => 81,  231 => 82,  215 => 74,  168 => 75,  151 => 69,  113 => 22,  116 => 55,  236 => 100,  226 => 53,  204 => 44,  188 => 71,  153 => 51,  149 => 49,  584 => 379,  580 => 378,  571 => 372,  562 => 366,  549 => 356,  544 => 354,  537 => 350,  532 => 216,  525 => 344,  520 => 168,  513 => 338,  508 => 336,  497 => 328,  484 => 320,  473 => 311,  454 => 298,  447 => 296,  444 => 295,  438 => 291,  431 => 134,  421 => 286,  416 => 150,  403 => 281,  391 => 277,  386 => 118,  374 => 114,  369 => 271,  365 => 109,  358 => 267,  353 => 145,  292 => 211,  209 => 45,  73 => 89,  229 => 54,  219 => 50,  197 => 75,  189 => 36,  181 => 80,  173 => 77,  158 => 75,  129 => 40,  578 => 232,  574 => 376,  565 => 370,  556 => 364,  543 => 354,  538 => 352,  531 => 348,  526 => 214,  519 => 342,  514 => 340,  507 => 336,  502 => 201,  491 => 326,  481 => 319,  478 => 190,  467 => 308,  463 => 307,  461 => 306,  445 => 137,  439 => 292,  432 => 290,  417 => 286,  412 => 285,  407 => 126,  404 => 125,  398 => 281,  379 => 131,  370 => 122,  366 => 271,  359 => 114,  351 => 118,  297 => 125,  293 => 100,  232 => 57,  210 => 71,  194 => 67,  177 => 62,  164 => 13,  137 => 52,  130 => 28,  103 => 33,  121 => 729,  87 => 29,  80 => 10,  61 => 17,  84 => 47,  68 => 14,  93 => 32,  79 => 17,  56 => 10,  140 => 65,  117 => 59,  100 => 41,  26 => 1,  264 => 72,  258 => 118,  253 => 92,  239 => 77,  218 => 93,  213 => 86,  198 => 21,  193 => 77,  183 => 34,  175 => 13,  163 => 10,  107 => 51,  37 => 3,  493 => 327,  487 => 321,  482 => 167,  474 => 188,  470 => 144,  466 => 160,  457 => 158,  453 => 139,  450 => 297,  448 => 297,  443 => 153,  440 => 152,  436 => 161,  426 => 143,  422 => 131,  420 => 152,  415 => 139,  411 => 148,  406 => 282,  400 => 131,  397 => 280,  394 => 121,  392 => 278,  387 => 277,  381 => 132,  378 => 273,  375 => 273,  373 => 126,  368 => 115,  354 => 119,  350 => 112,  335 => 110,  327 => 95,  325 => 110,  322 => 109,  318 => 101,  311 => 129,  307 => 104,  298 => 101,  296 => 85,  291 => 83,  281 => 80,  277 => 87,  271 => 125,  265 => 93,  260 => 92,  254 => 70,  248 => 62,  242 => 103,  237 => 106,  221 => 51,  195 => 74,  191 => 88,  180 => 33,  172 => 29,  143 => 66,  135 => 42,  131 => 60,  110 => 52,  64 => 12,  41 => 6,  276 => 112,  272 => 75,  257 => 92,  246 => 66,  243 => 60,  241 => 83,  238 => 62,  233 => 92,  230 => 102,  227 => 53,  224 => 52,  222 => 78,  220 => 88,  211 => 81,  207 => 72,  182 => 84,  162 => 12,  146 => 48,  138 => 62,  122 => 36,  105 => 17,  74 => 130,  70 => 19,  66 => 19,  62 => 12,  199 => 42,  186 => 35,  174 => 81,  169 => 79,  166 => 62,  161 => 79,  159 => 11,  154 => 70,  145 => 54,  141 => 45,  139 => 12,  124 => 61,  120 => 19,  108 => 30,  94 => 50,  65 => 13,  52 => 10,  97 => 34,  92 => 28,  88 => 32,  78 => 43,  71 => 15,  59 => 11,  90 => 49,  29 => 9,  96 => 47,  91 => 31,  81 => 26,  49 => 8,  30 => 4,  31 => 3,  27 => 3,  47 => 9,  34 => 3,  28 => 35,  24 => 2,  22 => 1,  82 => 18,  75 => 9,  72 => 40,  50 => 8,  43 => 6,  40 => 5,  25 => 2,  249 => 68,  160 => 58,  148 => 57,  142 => 63,  134 => 61,  126 => 59,  123 => 20,  118 => 45,  114 => 32,  111 => 31,  104 => 43,  101 => 420,  99 => 48,  86 => 44,  77 => 27,  69 => 39,  58 => 14,  55 => 10,  53 => 29,  46 => 7,  44 => 10,  38 => 5,  35 => 6,  32 => 3,  212 => 77,  206 => 23,  202 => 43,  196 => 85,  192 => 33,  190 => 84,  185 => 85,  179 => 69,  176 => 65,  171 => 63,  167 => 61,  165 => 74,  157 => 71,  152 => 73,  150 => 20,  147 => 50,  144 => 70,  136 => 3,  133 => 10,  128 => 59,  125 => 37,  119 => 35,  115 => 43,  112 => 63,  109 => 45,  106 => 34,  102 => 27,  98 => 25,  95 => 24,  89 => 21,  85 => 19,  83 => 30,  76 => 16,  67 => 13,  63 => 69,  60 => 12,  57 => 34,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 5,  36 => 4,  33 => 3,);
    }
}
