<?php

/* include/footer.html */
class __TwigTemplate_0e69c78bd344aa0bd2eea12d3fd676f74b04286b3de650d09afd8d5d42eea07f extends Twig_Template
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
        echo "
<footer id=\"footer\" class=\"inner\"><p>
  \t";
        // line 3
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "author")) {
            // line 4
            echo "\tCopyright © 2013 - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "author"), "html", null, true);
            echo " -
\t";
        }
        // line 6
        echo "<span class=\"credit\">Powered By <a target='_blank' href=\"http://github.com/hjue/JustWriting\">JustWriting</a> - Theme By <a href=\"http://rock.farbox.com\" target=\"_blank\">Rock</a> 
   </span> 
</footer>

";
    }

    public function getTemplateName()
    {
        return "include/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 4,  23 => 3,  45 => 9,  34 => 6,  26 => 4,  97 => 30,  95 => 29,  88 => 26,  74 => 20,  69 => 18,  58 => 14,  55 => 13,  44 => 11,  39 => 10,  37 => 7,  33 => 8,  28 => 5,  24 => 3,  19 => 1,  233 => 105,  230 => 104,  223 => 5,  214 => 106,  212 => 104,  205 => 99,  199 => 96,  195 => 95,  192 => 94,  190 => 93,  183 => 88,  177 => 86,  175 => 85,  172 => 84,  166 => 82,  164 => 81,  161 => 80,  155 => 78,  153 => 77,  150 => 76,  144 => 74,  142 => 73,  139 => 72,  133 => 70,  131 => 69,  120 => 61,  116 => 60,  112 => 59,  108 => 57,  102 => 55,  99 => 54,  93 => 52,  91 => 27,  85 => 48,  73 => 39,  66 => 35,  62 => 16,  41 => 16,  27 => 5,  21 => 2,  38 => 6,  35 => 5,  29 => 3,);
    }
}
