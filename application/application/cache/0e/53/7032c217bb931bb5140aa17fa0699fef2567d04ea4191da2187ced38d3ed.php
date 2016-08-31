<?php

/* base.html */
class __TwigTemplate_0e537032c217bb931bb5140aa17fa0699fef2567d04ea4191da2187ced38d3ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
<!-- <!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en-us\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title> -->

    <!-- http://t.co/dKP3o1e -->
  <!--   
    <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"> -->


<!doctype html>
<html>
<head>
    <!-- Basic Page Needs -->
    <meta charset=\"utf-8\">
    <title>Bankeys 收付宝科技有限公司</title>
    <meta name=\"description\" content=\"Web site of Bankeys 收付宝科技有限公司\">
    <meta name=\"keywords\" content=\"Bankeys, 收付宝科技有限公司, 收付宝, 手机盾\">
    <meta name=\"author\" content=\"Qoli Wong\">
    <!-- Mobile Specific Metas-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"telephone=no\" name=\"format-detection\">
    <!-- Fonts -->
    <!-- SourceSansPro -->
    <link href='//fonts.useso.com/css?family=Source+Sans+Pro:400,700,400italic' rel='stylesheet' type='text/css'>
    <!-- Icomoon -->
    <link href=\"/css/icomoon.css\" rel=\"stylesheet\"/>
    <!-- overall situation -->

        <!-- extra -->
    <link rel=\"stylesheet\" href=\"/css/news3.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/overall.css\">
    <!-- individual -->
    <link rel=\"stylesheet\" href=\"css/certificate.css\"/>
    <!--  Font awesome 4-->
    <link href=\"/css/font-awesome.css\" rel=\"stylesheet\"/>
    <!-- Stylesheets -->
    <!-- Bootstrap 3 -->
    <link href=\"//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\"/>
    <!-- Mobile navigation menu-->
    <link href=\"/css/gozha-nav.css\" rel=\"stylesheet\"/>
    <!-- Custom -->
    <link href=\"/css/base.css?v=1\" rel=\"stylesheet\"/>
    <link href=\"/css/style.css?v=1\" rel=\"stylesheet\"/>

    <!-- Basic JavaScript-->
    <!-- Modernizr -->
    <script src=\"/js/modernizr.custom.05768.js\"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js\"></script>
    <script src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js\"></script>
    <![endif]-->


   <!--  <link rel='alternate' type='application/rss+xml' title='atom 1.0' href='/feed' />
    
    <link href=\"/favicon.png\" rel=\"shortcut icon\">
    
\t<link href=\"/templates/";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "template"), "html", null, true);
        echo "/css/highlight.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\">

    <link href=\"/templates/rock/css/screen.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/templates/rock/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
     -->



";
        // line 72
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "highlight")) {
            echo "      

";
        }
        // line 75
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mathjax");
        echo "
</head>
<body>
<div class=\"wrapper\">
    <header class='header'>
        <div class='container'>
            <p class='call-number'>热线电话 <span>400-890-8583</span></p>

            <div class='top-navigation'>
                <div class=\"navigation-front\">
                    <a href=\"index.html\" class='logo'>Bankeys 收付宝</a>

                    <div id=\"navigation-box\">
                        <a href=\"#\" id=\"navigation-toggle\">
                            <span class=\"menu-icon\"></span>
                        </a>
                        <ul id=\"navigation\" class=\"hover-link\">
                            <li><a href=\"index.html\" class='' data-hover='首页'>首页</a></li>
                            <!-- <li><a href=\"product-shield.html\" data-hover='手机盾'>手机盾</a></li> -->
                            <li>
                                <span class=\"sub-nav-toggle plus\"></span>
                                <a href=\"#\" data-hover='手机盾'>手机盾</a>
                                <ul>
                                    <li><a href=\"product-shield.html\">手机盾</a></li>
                                    <li><a href=\"product-shield.html#demo-top\">演示程序</a></li>
                                    <li><a href=\"product-shield.html#bksdemo\">网银演示</a></li>
                                </ul>
                            </li>
                            <li><a href=\"qc固定式.html\" data-hover='资质认证'>资质认证</a></li>
                            <li><a href=\"index.php\" data-hover='新闻热点'>新闻热点</a></li>
                            <li><a href=\"contact.html\" data-hover='联系我们'>联系我们</a></li>
                            <li><a href=\"about.html\" data-hover='关于'>关于</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='main-zone'>
                <div class=\"corner\"></div>
                <div class='corner-line'></div>
                <div class='current-page'>
                    <hr class=\"top-devider\"/>
                    <h1>新闻热点</h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"index.html\">Bankeys</a></li>
                        <li class=\"active\">新闻热点</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container\">



<!--         <div class=\"left-col\">
            <div class=\"intrude-less\">
            <header id=\"header\" class=\"inner\">
                <div class=\"profilepic\">
<a href='/'> <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "avatar"), "html", null, true);
        echo "\" alt='Profile Picture' style='width: 160px;' id='ProfilePicture' /> </a>
                </div>

                ";
        // line 137
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title")) {
            // line 138
            echo "                <h2><a href=\"/\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title"), "html", null, true);
            echo "</a></h2>
                ";
        }
        // line 140
        echo "                ";
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "intro")) {
            // line 141
            echo "                <p class=\"subtitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "intro"), "html", null, true);
            echo "</p>
                ";
        }
        // line 143
        echo "                <nav id=\"main-nav\">
                    <ul class=\"main-navigation\">
                        <li><a href=\"/\">";
        // line 145
        echo twig_escape_filter($this->env, lang("home"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"/tags\">";
        // line 146
        echo twig_escape_filter($this->env, lang("tags"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"/archive\">";
        // line 147
        echo twig_escape_filter($this->env, lang("archive"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"/feed\">RSS</a></li>                        

                    </ul>
                </nav>
                <nav id=\"sub-nav\">
                <div class=\"social\">
                  
                    ";
        // line 155
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "github")) {
            // line 156
            echo "                    <a class=\"github\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "github"), "html", null, true);
            echo "\" title=\"GitHub\" target=\"_blank\">GitHub</a>
                    ";
        }
        // line 158
        echo "
                    ";
        // line 159
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "twitter")) {
            // line 160
            echo "                    <a class=\"twitter\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "twitter"), "html", null, true);
            echo "\" title=\"Twitter\" target=\"_blank\">Twitter</a>
                    ";
        }
        // line 162
        echo "                    
                    ";
        // line 163
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "rss")) {
            // line 164
            echo "                    <a class=\"rss\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "rss"), "html", null, true);
            echo "\" title=\"RSS\" target=\"_blank\">RSS</a>
                    ";
        }
        // line 166
        echo "                    
                    ";
        // line 167
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "facebook")) {
            // line 168
            echo "                    <a class=\"facebook\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "facebook"), "html", null, true);
            echo "\" title=\"Facebook\" target=\"_blank\">Facebook</a>
                    ";
        }
        // line 170
        echo "                    
                    ";
        // line 171
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "email")) {
            // line 172
            echo "                    <a class=\"email\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "email"), "html", null, true);
            echo "\" title=\"e-Mail\" target=\"_blank\">e-Mail</a>
                    ";
        }
        // line 174
        echo "                    
                </div>
                </nav>

                <br/>
                ";
        // line 179
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "author")) {
            // line 180
            echo "                <section>
                    <h2>";
            // line 181
            echo twig_escape_filter($this->env, lang("aboutme"), "html", null, true);
            echo "</h2>
                    <p>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "aboutme"), "html", null, true);
            echo "</p>
                </section>
                ";
        }
        // line 185
        echo "                </br>

            </header>               
            </div>
        </div>   -->
        ";
        // line 190
        $this->displayBlock('content', $context, $blocks);
        // line 192
        echo "

    </div>
        <footer class='footer'>
        <div class='container'>
            <div class='col-sm-8 col-md-8 col-lg-8'>
                <h2>联系我们</h2>

                <p class=\"footer-info\"></p>

                <div class='col-xs-4 col-sm-4 col-md-3 col-lg-3 contact-info'>
                    <h4><i class='icon-location'></i>地址</h4>

                    <p>国投尚科大厦 4 层 DF01
                        <br/>
                        四惠桥东惠河南街<br/>
                        北京市朝阳区
                    </p>
                </div>
                <div class='col-xs-4 col-sm-4 col-md-3 col-lg-3 contact-info'>
                    <h4><i class='icon-mail'></i>邮件</h4>

                    <p>
                        service@bankeys.com</p>
                </div>
                <div class='col-xs-4 col-sm-4 col-md-3 col-lg-3 contact-info'>
                    <h4><i class='icon-mobile'></i>电话</h4>

                    <p>400-890-8583
                        <br/>
                        010-87706664</p>
                </div>
            </div>
            <div class='col-sm-4 col-md-4 col-lg-4 mobile-clear'>
                <h2>寄望</h2>

                <p class=\"footer-info\">在互联网全球化的浪潮中<br>我们从不随波逐流<br>
                    一派善意地执着与专注<br>
                    以创意<br>
                    打造金融互联网世界</p>
            </div>
            <div class='clearfix'></div>
            <div class='devider'></div>
            <p class='copy'>© Bankeys, 2013 ~ 2015. 版权所有</p>
        </div>
    </footer>
</div>
    
</body>
</html>


";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title"), "html", null, true);
        echo " ";
    }

    // line 190
    public function block_content($context, array $blocks = array())
    {
        // line 191
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 191,  360 => 190,  353 => 6,  297 => 192,  295 => 190,  288 => 185,  282 => 182,  278 => 181,  275 => 180,  273 => 179,  266 => 174,  260 => 172,  258 => 171,  255 => 170,  249 => 168,  247 => 167,  244 => 166,  238 => 164,  236 => 163,  233 => 162,  227 => 160,  225 => 159,  222 => 158,  216 => 156,  214 => 155,  203 => 147,  199 => 146,  195 => 145,  191 => 143,  185 => 141,  182 => 140,  176 => 138,  174 => 137,  168 => 134,  106 => 75,  100 => 72,  89 => 64,  28 => 6,  21 => 1,);
    }
}
