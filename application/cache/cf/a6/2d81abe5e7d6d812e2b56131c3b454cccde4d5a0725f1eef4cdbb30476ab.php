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
            echo "<nav id=\"pagenavi\" style=\"text-align: -webkit-center;text-align: center;\">
    ";
            // line 3
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_previous")) {
                // line 4
                echo "    <a class=\"prev\" style=\"width: 118px;height: 40px;background-color: #ebedee;text-align: center;color: #26455f;display: inline-block;font-family: 'novecento_sans_widenormal';font-size: 12px;top: 0;margin: 0;padding-top: 11px;\" onmouseover=\"this.style.color='#fff';this.style.background='#f25549'\" onmouseout=\"this.style.color='#26455f';this.style.background='#ebedee'\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previous_page_url"), "html", null, true);
                echo "\">上一页</a>
    ";
            }
            // line 6
            echo "    ";
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "has_next")) {
                // line 7
                echo "    <a class=\"next\" style=\"width: 118px;height: 40px;background-color: #ebedee;text-align: center;color: #26455f;display: inline-block;font-family: 'novecento_sans_widenormal';font-size: 12px;top: 0;margin: 0;padding-top: 11px;\" onmouseover=\"this.style.color='#fff';this.style.background='#f25549'\" onmouseout=\"this.style.color='#26455f';this.style.background='#ebedee'\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "next_page_url"), "html", null, true);
                echo "\">下一页</a>
    ";
            }
            // line 9
            echo "</nav>
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
        return array (  41 => 9,  35 => 7,  26 => 4,  21 => 2,  131 => 45,  127 => 43,  124 => 42,  113 => 37,  108 => 35,  100 => 32,  96 => 30,  93 => 29,  82 => 27,  77 => 26,  75 => 25,  70 => 23,  62 => 18,  56 => 14,  53 => 13,  44 => 10,  39 => 9,  34 => 8,  32 => 6,  28 => 5,  24 => 3,  19 => 1,);
    }
}
