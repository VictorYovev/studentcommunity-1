<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* jumpbox.html */
class __TwigTemplate_935f6ad6d1c1e7b67d0db459f897e3f5c2946047c4b0a15ed8990fd10d6dcfb3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<div class=\"action-bar actions-jump\">
\t";
        // line 3
        // line 28
        echo "
\t";
        // line 29
        if (($context["S_DISPLAY_JUMPBOX"] ?? null)) {
            // line 30
            echo "\t<div class=\"jumpbox dropdown-container dropdown-container-right";
            if ( !($context["S_IN_MCP"] ?? null)) {
                echo " dropdown-up";
            }
            echo " dropdown-";
            echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
            echo " dropdown-button-control\" id=\"jumpbox\">
\t\t\t<span title=\"";
            // line 31
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            }
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t\t<span>";
            // line 32
            if ((($context["S_IN_MCP"] ?? null) && ($context["S_MERGE_SELECT"] ?? null))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_TOPICS_FROM");
            } elseif (($context["S_IN_MCP"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATE_FORUM");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("JUMP_TO");
            }
            echo "</span>
\t\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "jumpbox_forums", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 39
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_ID", [], "any", false, false, false, 39) !=  -1)) {
                    // line 40
                    echo "\t\t\t\t<li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "LINK", [], "any", false, false, false, 40);
                    echo "\" class=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 40)) {
                        echo "jumpbox-sub-link";
                    } elseif (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "S_IS_CAT", [], "any", false, false, false, 40)) {
                        echo "jumpbox-cat-link";
                    } else {
                        echo "jumpbox-forum-link";
                    }
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 40));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "<span class=\"spacer\"></span>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <span>";
                    if (twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "level", [], "any", false, false, false, 40)) {
                        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
                            echo "&#8626;";
                        } else {
                            echo "&#8627;";
                        }
                        echo " &nbsp;";
                    }
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["jumpbox_forums"], "FORUM_NAME", [], "any", false, false, false, 40);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t</ul>
\t\t</div>
\t</div>

\t";
        } else {
            // line 48
            echo "\t<br /><br />
\t";
        }
        // line 50
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 50,  213 => 48,  206 => 43,  200 => 42,  166 => 40,  163 => 39,  159 => 38,  144 => 32,  134 => 31,  125 => 30,  123 => 29,  120 => 28,  111 => 24,  103 => 23,  100 => 22,  98 => 21,  90 => 18,  84 => 17,  81 => 16,  79 => 15,  71 => 12,  65 => 11,  62 => 10,  60 => 9,  52 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jumpbox.html", "");
    }
}
