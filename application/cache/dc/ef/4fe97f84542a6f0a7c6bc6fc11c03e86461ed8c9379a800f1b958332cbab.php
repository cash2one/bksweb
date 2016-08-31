<?php

/* include/posts_list.html */
class __TwigTemplate_dcef4fe97f84542a6f0a7c6bc6fc11c03e86461ed8c9379a800f1b958332cbab extends Twig_Template
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
        echo "<div class=\"mid-col\">
    <div class=\"mid-col-container\">
        <div id=\"content\" class=\"inner\">
            ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "            <article id=\"post\" class=\"post animated scaleIn\">

                ";
            // line 7
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
                // line 8
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 9
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
                    echo "\" class=\"blog-photo-container\">
                    <img src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                    echo "\"/>
                </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                ";
            }
            // line 14
            echo "

                <div class=\"meta\">
                    <ul class=\"acticle-about\">
                        <li>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "Y-m-d"), "html", null, true);
            echo "</li>
                        <li>作者：互联网</li>
                        <li>责编：小文</li>
                    </ul>
                    <!-- <div class=\"date\">
                        <time >";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "Y-m-d"), "html", null, true);
            echo "</time>
                    </div>
                        ";
            // line 25
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
                // line 26
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 27
                    echo "                                <a class='category' href=\"/tags/";
                    echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                    echo "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                        ";
            }
            // line 30
            echo "                    </div> -->

                    <a class=\"article-title\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a>

                    <p class=\"entry-content\">
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "intro"), "html", null, true);
            echo "
                    </p>
                    <a class=\"read-more\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
            echo "\">点击阅读</a>

                    <br>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "             ";
        $this->env->loadTemplate("include/paginator.html")->display($context);
        // line 43
        echo "        </div>
    </div>
    <!-- ";
        // line 45
        $this->env->loadTemplate("include/footer.html")->display($context);
        echo " -->
</div>

";
    }

    public function getTemplateName()
    {
        return "include/posts_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  127 => 43,  124 => 42,  113 => 37,  108 => 35,  100 => 32,  96 => 30,  93 => 29,  82 => 27,  77 => 26,  75 => 25,  70 => 23,  62 => 18,  56 => 14,  53 => 13,  44 => 10,  39 => 9,  34 => 8,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
