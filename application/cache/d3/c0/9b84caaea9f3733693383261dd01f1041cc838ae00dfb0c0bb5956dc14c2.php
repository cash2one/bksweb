<?php

/* post.html */
class __TwigTemplate_d3c09b84caaea9f3733693383261dd01f1041cc838ae00dfb0c0bb5956dc14c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo " - ";
        if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_config_, "title"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"col-sm-12\">
    <div class=\"mid-col\">
        <div class=\"mid-col-container\">
            <div id=\"content\" class=\"inner\">
                <article class=\"post\" id=\"posts\">
                    <!--                 <h1 class=\"title\">";
        // line 10
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo "</h1> -->

                    <!--                 <div class=\"time\">
                                        <span class=\"date\">";
        // line 13
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_post_, "date"), "Y-m-d"), "html", null, true);
        echo "</span>
                                    </div>
                     -->

                    <div class=\"entry-content\">
                        <div class=\"p_part\">

                            ";
        // line 20
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "toc")) {
            // line 21
            echo "                            <div class=\"toc\"></div>
                            ";
        }
        // line 23
        echo "
                            ";
        // line 24
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "html");
        echo "
                        </div>
                    </div>
                    </br>
                    <!--                 <div class=\"category\">
                                        ";
        // line 29
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "tags")) {
            // line 30
            echo "                                            <div class=\"tags\">
                                                ";
            // line 31
            echo twig_escape_filter($this->env, lang("tags"), "html", null, true);
            echo "：
                                                ";
            // line 32
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_post_, "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 33
                echo "                                                    <a href=\"/tags/";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $_tag_, "html", null, true);
                echo "\">";
                if (isset($context["tag"])) { $_tag_ = $context["tag"]; } else { $_tag_ = null; }
                echo twig_escape_filter($this->env, $_tag_, "html", null, true);
                echo "</a>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                                            </div>
                                            </br>
                                        ";
        }
        // line 38
        echo "                                    </div> -->
                </article>
            </div>
            ";
        // line 41
        $this->env->loadTemplate("include/comments.html")->display($context);
        // line 42
        echo "        </div>
    </div>


    <!--     ";
        // line 46
        $this->env->loadTemplate("include/footer.html")->display($context);
        echo " -->
</div>

<!-- <aside class=\"col-sm-4\">
    <div class=\"sitebar\"> -->
        <!-- <form id=\"search-form\" method=\"get\">
            <input type=\"text\" id=\"search\" class=\"search-field\" name=\"s\" maxlength=\"120\" placeholder='请输入搜索内容'>

            <div class=\"search-submit\">
                <input type=\"submit\" class=\"search-submit-buttom\" value=''>
            </div>
        </form> -->

<!--         <h2>其他新闻</h2>
        <ul class=\"style-five\" id=\"otherNews\"> -->


            ";
        // line 63
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 64
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "<!--             <li><a class=\"article-title\" href=\"";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_posts_, "link"), "html", null, true);
        echo "\">";
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_posts_, "title"), "html", null, true);
        echo "</a></li> -->


<!--         </ul>

    </div>
</aside> -->
";
        // line 72
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_post_, "toc")) {
            // line 73
            echo "<script type=\"text/javascript\" src=\"/templates/rock/js/toc.min.js\"></script>
<script>
    \$('.toc').toc({
        'container': '.entry-content',
        'anchorName': function (i, heading, prefix) { //custom function for anchor name
            return prefix + i;
        }
    });


</script>
";
        }
        // line 85
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 85,  182 => 73,  179 => 72,  164 => 65,  158 => 64,  153 => 63,  133 => 46,  127 => 42,  125 => 41,  120 => 38,  115 => 35,  102 => 33,  97 => 32,  93 => 31,  90 => 30,  87 => 29,  78 => 24,  75 => 23,  71 => 21,  68 => 20,  57 => 13,  50 => 10,  43 => 5,  40 => 4,  29 => 2,);
    }
}
