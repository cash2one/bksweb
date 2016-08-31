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
        echo "
    <div class=\"mid-col\">
    <div class=\"mid-col-container\">
        <div id=\"content\" class=\"inner\">
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "            <article class=\"post animated scaleIn\">
                
                        ";
            // line 8
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
                // line 9
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 10
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
                    echo "\" class=\"blog-photo-container\">
                                <img src=\"";
                    // line 11
                    echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                    echo "\" />  
                            </a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "                        ";
            }
            // line 15
            echo "                        
                    
                        
                    
              
                <div class=\"meta\">
                <ul class=\"acticle-about\">
                    <li>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "Y-m-d"), "html", null, true);
            echo "</li>
                    <li>作者：互联网</li>
                    <li>责编：小文</li>
                </ul>
                    <!-- <div class=\"date\">
                        <time >";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "Y-m-d"), "html", null, true);
            echo "</time>
                    </div>
                        ";
            // line 29
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
                // line 30
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 31
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
                // line 33
                echo "                        ";
            }
            // line 34
            echo "                    </div> -->

                    <a class=\"article-title\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a>
                <p class=\"entry-content\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "intro"), "html", null, true);
            echo "
                </p>    
                        <a class=\"read-more\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
            echo "\">点击阅读</a>
                
                <br>
            </article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            <!-- ";
        $this->env->loadTemplate("include/paginator.html")->display($context);
        echo " -->
        </div>
    </div>
    <!-- ";
        // line 48
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
        return array (  134 => 48,  127 => 45,  116 => 40,  111 => 38,  104 => 36,  100 => 34,  97 => 33,  86 => 31,  81 => 30,  79 => 29,  74 => 27,  66 => 22,  57 => 15,  54 => 14,  45 => 11,  40 => 10,  35 => 9,  33 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
