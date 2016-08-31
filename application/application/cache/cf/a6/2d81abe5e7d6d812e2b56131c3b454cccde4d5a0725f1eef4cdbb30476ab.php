<?php

/* include/paginator.html */
class __TwigTemplate_cfa62d81abe5e7d6d812e2b56131c3b454cccde4d5a0725f1eef4cdbb30476ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_previous") || $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_next"))) {
            // line 2
            echo "<nav id=\"pagenavi\">
    ";
            // line 3
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_previous")) {
                // line 4
                echo "        <a class=\"prev\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previous_page_url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, lang("prev"), "html", null, true);
                echo "</a>
    ";
            }
            // line 6
            echo "\t";
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_next")) {
                // line 7
                echo "        <a class=\"next\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "next_page_url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, lang("next"), "html", null, true);
                echo "</a>
    ";
            }
            // line 9
            echo "<div class=\"center\"><a href=\"/archive\">";
            echo twig_escape_filter($this->env, lang("archive"), "html", null, true);
            echo "</a></div>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "include/paginator.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  34 => 6,  26 => 4,  97 => 30,  95 => 29,  88 => 26,  74 => 20,  69 => 18,  58 => 14,  55 => 13,  44 => 11,  39 => 10,  37 => 7,  33 => 8,  28 => 5,  24 => 3,  19 => 1,  233 => 105,  230 => 104,  223 => 5,  214 => 106,  212 => 104,  205 => 99,  199 => 96,  195 => 95,  192 => 94,  190 => 93,  183 => 88,  177 => 86,  175 => 85,  172 => 84,  166 => 82,  164 => 81,  161 => 80,  155 => 78,  153 => 77,  150 => 76,  144 => 74,  142 => 73,  139 => 72,  133 => 70,  131 => 69,  120 => 61,  116 => 60,  112 => 59,  108 => 57,  102 => 55,  99 => 54,  93 => 52,  91 => 27,  85 => 48,  73 => 39,  66 => 35,  62 => 16,  41 => 16,  27 => 5,  21 => 2,  38 => 6,  35 => 5,  29 => 3,);
    }
}
