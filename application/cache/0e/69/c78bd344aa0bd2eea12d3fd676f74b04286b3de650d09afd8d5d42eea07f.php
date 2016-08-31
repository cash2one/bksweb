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
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        if ($this->getAttribute($_config_, "author")) {
            // line 4
            echo "\tCopyright © 2013 - ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_config_, "author"), "html", null, true);
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
        return array (  26 => 4,  23 => 3,  50 => 9,  41 => 7,  37 => 6,  28 => 4,  25 => 3,  22 => 2,  146 => 45,  139 => 42,  127 => 37,  121 => 35,  111 => 32,  107 => 30,  91 => 27,  85 => 26,  82 => 25,  76 => 23,  67 => 18,  61 => 14,  58 => 13,  48 => 10,  42 => 9,  33 => 6,  24 => 4,  19 => 1,  461 => 190,  458 => 189,  450 => 5,  317 => 191,  315 => 189,  308 => 184,  301 => 181,  297 => 180,  294 => 179,  291 => 178,  284 => 173,  277 => 171,  274 => 170,  271 => 169,  264 => 167,  261 => 166,  258 => 165,  251 => 163,  248 => 162,  245 => 161,  238 => 159,  235 => 158,  232 => 157,  225 => 155,  222 => 154,  211 => 146,  207 => 145,  203 => 144,  199 => 142,  192 => 140,  188 => 139,  181 => 137,  178 => 136,  171 => 133,  108 => 75,  104 => 29,  101 => 72,  90 => 65,  27 => 5,  21 => 1,  39 => 6,  36 => 8,  29 => 5,);
    }
}
