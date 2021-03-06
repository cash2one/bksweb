<?php

/* base.html */
class __TwigTemplate_0e537032c217bb931bb5140aa17fa0699fef2567d04ea4191da2187ced38d3ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge,chrome=1\">
    <title></title>
</head>
<body>

</body>
</html>
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


    <!-- Pagination -->
        <link rel=\"stylesheet\" href=\"/css/jPages.css\">
         <!-- Gallery change page amination -->
        <link rel=\"stylesheet\" href=\"/css/animate-switch.css\">

    <!-- extra -->


    <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/overall.css\">
    <!-- individual -->
    <link rel=\"stylesheet\" href=\"/css/certificate.css\"/>
    <!--     <link rel=\"stylesheet\" href=\"/css/news2.css\"/> -->

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

   

    ";
        // line 58
        if ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "highlight")) {
            // line 59
            echo "
    ";
        }
        // line 61
        echo "    ";
        echo $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "mathjax");
        echo "
    <script src=\"/js/modernizr.custom.05768.js\"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    \t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js\"></script>
\t\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js\"></script>
    <![endif]-->

    <!--[if IE 9]>
    <link href=\"css/ie9.css?v=1\" rel=\"stylesheet\" />
    <![endif]-->
</head>
<body class='blog'>
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
                            <li><a href=\"/index.html\" class='' data-hover='首页'>首页</a></li>
                            <!-- <li><a href=\"product-shield.html\" data-hover='手机盾'>手机盾</a></li> -->
                            <li>
                                <span class=\"sub-nav-toggle plus\"></span>
                                <a href=\"#\" data-hover='手机盾'>手机盾</a>
                                <ul>
                                    <li><a href=\"/product-shield.html\">手机盾</a></li>
                                    <li><a href=\"/product-shield.html#demo-top\">演示程序</a></li>
                                    <li><a href=\"/product-shield.html#bksdemo\">网银演示</a></li>
                                    <li><a href=\"/manual.html\">产品手册</a></li>
                                </ul>
                            </li>
                            <li><a href=\"/qc.html\" data-hover='资质认证'>资质认证</a></li>
                            <li><a href=\"/index.php\" class='active' data-hover='新闻热点'>新闻热点</a></li>
                            <li><a href=\"/contact.html\" data-hover='联系我们'>联系我们</a></li>
                            <li><a href=\"/about.html\" data-hover='关于'>关于</a></li>
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
                        <li><a href=\"/index.html\">Bankeys</a></li>
                        <li class=\"active\">新闻热点</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>

    <div class=\"container waypoint\">


      
        ";
        // line 128
        $this->displayBlock('content', $context, $blocks);
        // line 132
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
            <p class='copy'>© Bankeys, 2013 ~ 2016. 版权所有 
            \t<script type=\"text/javascript\">
                    var cnzz_protocol = ((\"https:\" == document.location.protocol) ? \" https://\" : \" http://\");document.write(unescape(\"%3Cspan id='cnzz_stat_icon_1257155980'%3E%3C/span%3E%3Cscript src='\" + cnzz_protocol + \"s11.cnzz.com/z_stat.php%3Fid%3D1257155980%26show%3Dpic' type='text/javascript'%3E%3C/script%3E\"));
                    var oSpan=document.getElementById(\"cnzz_stat_icon_1257155980\");
                    oSpan.style.marginLeft=\"10px\";
                </script>
\t\t\t\t\t\t</p>
        </div>
    </footer>

</div>

<script type=\"text/javascript\">
  
    window.onload = function () {

        var oDiv = document.getElementsByTagName(\"div\")[3];

        window.onscroll = function () {
            var t = document.documentElement.scrollTop || document.body.scrollTop;
            if (t > 180) {
                oDiv.className = \"navigation-front fixed-pos nav-show\";

            } else {
                oDiv.className = \"navigation-front nav-strict\";

            }

        }

      }  
</script>
\t<!-- JavaScript-->
        <!-- jQuery 1.9.1-->
        <script src=\"//cdn.bootcss.com/jquery/1.11.3/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"/js/jquery-1.10.1.min.js\"><\\/script>')</script>
        <!-- Bootstrap 3-->
        <script src=\"//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        <!-- Event that will trigger when the element is scrolled in to the viewport.-->
        <script type=\"text/javascript\" src=\"/js/jquery.inview.js\"></script>
        <!-- jQuery REVOLUTION Slider  -->
        <script type=\"text/javascript\" src=\"rs-plugin/js/jquery.themepunch.plugins.min.js\"></script>
        <script type=\"text/javascript\" src=\"rs-plugin/js/jquery.themepunch.revolution.min.js\"></script>
        <!-- Image loader (gallery) -->
        <script src=\"/js/jquery.loadImage.js\"></script>
        <!-- Animated gallery -->
        <script src=\"/js/animated-gallery.js\"></script>
        <!-- Swipebox (popup) -->
        <script src=\"/js/jquery.swipebox.js\"></script>
        <!-- Mobile navigation menu-->
        <script src=\"/js/jquery.mobile.menu.js\"></script>
        <!-- Form -->
        <script src=\"/js/jquery.form.js\"></script>
        <!-- Waypoint -->
        <script src=\"/js/waypoints.min.js\"></script>

    <!-- Page specific scritpts-->
        <!-- Animated progress bar -->
        <script src=\"/js/jquery.donutchart.js\"></script>
        
        <!-- Pagination -->
        <script src=\"/js/jPages.js\"></script>
        
        <!-- Custom -->
        <script src=\"/js/custom.js\"></script>


\t\t<script type=\"text/javascript\">
        \$(document).ready(function() {
            initHome();
            initSliderRevFull();
        });
\t\t</script>

        




</body>
</html>
";
    }

    // line 128
    public function block_content($context, array $blocks = array())
    {
        // line 129
        echo "

        ";
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
        return array (  289 => 129,  286 => 128,  158 => 132,  156 => 128,  85 => 61,  81 => 59,  79 => 58,  20 => 1,);
    }
}
