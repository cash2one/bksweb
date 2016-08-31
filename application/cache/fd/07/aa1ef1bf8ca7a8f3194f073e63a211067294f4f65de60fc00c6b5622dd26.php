<?php

/* include/comments.html */
class __TwigTemplate_fd07aa1ef1bf8ca7a8f3194f073e63a211067294f4f65de60fc00c6b5622dd26 extends Twig_Template
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
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "comment")) {
            // line 2
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "duoshuo_short_name")) {
                // line 3
                echo "<!-- 多说评论框 start -->
\t<div class=\"ds-thread\" data-title=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "link"), "html", null, true);
                echo "\"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type=\"text/javascript\">
var duoshuoQuery = {short_name:\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "duoshuo_short_name"), "html", null, true);
                echo "\"};
\t(function() {
\t\tvar ds = document.createElement('script');
\t\tds.type = 'text/javascript';ds.async = true;
\t\tds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
\t\tds.charset = 'UTF-8';
\t\t(document.getElementsByTagName('head')[0] 
\t\t || document.getElementsByTagName('body')[0]).appendChild(ds);
\t})();
\t</script>
<!-- 多说公共JS代码 end -->    
";
            }
            // line 20
            if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "disqus_short_name")) {
                // line 21
                echo "<div id=\"disqus_thread\"></div>
  <script type=\"text/javascript\">
      var disqus_shortname = \"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "disqus_short_name"), "html", null, true);
                echo "\"; 
      (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
      })();
  </script>
  <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
</div>
";
            }
            // line 32
            echo "  
";
        }
    }

    public function getTemplateName()
    {
        return "include/comments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  52 => 21,  50 => 20,  35 => 8,  26 => 4,  23 => 3,  21 => 2,  19 => 1,  139 => 54,  127 => 45,  125 => 44,  122 => 43,  120 => 42,  117 => 41,  115 => 40,  110 => 37,  105 => 34,  94 => 32,  90 => 31,  86 => 30,  83 => 29,  81 => 28,  73 => 23,  69 => 32,  65 => 20,  63 => 19,  53 => 12,  47 => 9,  41 => 5,  38 => 4,  29 => 2,);
    }
}
