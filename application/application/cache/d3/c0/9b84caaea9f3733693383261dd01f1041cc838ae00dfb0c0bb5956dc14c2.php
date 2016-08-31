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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title"), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"content\" class=\"col-sm-8\">
    <div class=\"mid-col\">
    <div class=\"mid-col-container\">
        <div id=\"content\" class=\"inner\">
            <article class=\"post\" id=\"posts\">
                <h1 class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "</h1>

<!--                 <div class=\"time\">
                    <span class=\"date\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date"), "Y-m-d"), "html", null, true);
        echo "</span>
                </div>
 -->

                <div class=\"entry-content\">
                    <div class=\"p_part\">

";
        // line 20
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "toc")) {
            // line 21
            echo "<div class=\"toc\"></div>  
";
        }
        // line 22
        echo "  

";
        // line 24
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "html");
        echo "
                    </div>
                </div>
                </br>
<!--                 <div class=\"category\">
                    ";
        // line 29
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags")) {
            // line 30
            echo "                        <div class=\"tags\">
                            ";
            // line 31
            echo twig_escape_filter($this->env, lang("tags"), "html", null, true);
            echo "：
                            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 33
                echo "                                <a href=\"/tags/";
                echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
                echo "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        </div>
                        </br>
                    ";
        }
        // line 38
        echo "                </div> -->
            </article>
        </div>
    ";
        // line 41
        $this->env->loadTemplate("include/comments.html")->display($context);
        // line 42
        echo "    </div>
</div>


<!--     ";
        // line 46
        $this->env->loadTemplate("include/footer.html")->display($context);
        echo " -->
</div>

<aside class=\"col-sm-4\">
            <div class=\"sitebar\">
                <form id=\"search-form\" method=\"get\">
                    <input type=\"text\" id=\"search\" class=\"search-field\" name=\"s\" maxlength=\"120\" placeholder='请输入搜索内容'>

                    <div class=\"search-submit\">
                        <input type=\"submit\" class=\"search-submit-buttom\" value=''>
                    </div>
                </form>

                <h2>其他新闻</h2>
                <ul class=\"style-five\" id=\"otherNews\">
                
                    
                    
                        <li><a class=\"article-title\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "link"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "title"), "html", null, true);
        echo "</a></li>
                    

                    
          <!--           <li><a href=\"#\">Bankeys 收付宝科技有限公司</a></li>
                    <li><a href=\"#\">Bankeys 收付宝科技有限公司</a></li>
                    <li><a href=\"#\">Bankeys 收付宝科技有限公司</a></li>
                    <li><a href=\"#\">Bankeys 收付宝科技有限公司</a></li> -->

                </ul>

            </div>
        </aside>
";
        // line 77
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "toc")) {
            // line 78
            echo "<script type=\"text/javascript\" src=\"/templates/rock/js/toc.min.js\"></script>      
<script>
  \$('.toc').toc({
    'container': '.entry-content',
    'anchorName': function(i, heading, prefix) { //custom function for anchor name
         return prefix+i;
     }    
  });

  
</script>
";
        }
        // line 89
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
        return array (  179 => 89,  165 => 78,  163 => 77,  145 => 64,  124 => 46,  118 => 42,  116 => 41,  111 => 38,  106 => 35,  95 => 33,  91 => 32,  87 => 31,  84 => 30,  82 => 29,  74 => 24,  70 => 22,  66 => 21,  64 => 20,  54 => 13,  48 => 10,  41 => 5,  38 => 4,  29 => 2,);
    }
}
