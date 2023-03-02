<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layouts/layout.html.twig */
class __TwigTemplate_d60f5e58451018068213bc1401996bab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/layout.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "layouts/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard | Superadmin!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "
<!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicons/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicons/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicons/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicons/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicons/manifest.json"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicons/mstile-150x150.png"), "html", null, true);
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/config.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/overlayscrollbars/OverlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/choices/choices.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flatpickr/flatpickr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/prism/prism-okaidia.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/overlayscrollbars/OverlayScrollbars.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/user-rtl.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/user.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"user-style-default\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"user-style-default\">

    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/boostrap-select/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery-ui/jquery-ui.css"), "html", null, true);
        echo "\">

    <!-- FontAwesome css -->
   <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- custom css -->
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- app css -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
    <main class=\"main\" id=\"top\">
      <div class=\"container-fluid\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        ";
        // line 76
        echo twig_include($this->env, $context, "layouts/partials/_sidebar.html.twig");
        echo "
        <div class=\"content\">
         ";
        // line 78
        echo twig_include($this->env, $context, "layouts/partials/_navbar.html.twig");
        echo "
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top=\"combo\"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          
          ";
        // line 103
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "          
          
          ";
        // line 106
        echo twig_include($this->env, $context, "layouts/partials/_footer.html.twig");
        echo "
        </div>
        
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <!-- <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script> -->
  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/anchorjs/anchor.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/is/is.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/flatpickr.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/choices/choices.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/prism/prism.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fontawesome/all.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/lodash/lodash.min.js"), "html", null, true);
        echo "\"></script>
  <!-- <script src=\"polyfill.io/v3/polyfill.min58be.js?features=window.scroll\"></script> -->
  
  <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/list.js/list.min.js"), "html", null, true);
        echo "\"></script>
  <!-- boostrap select js -->
  <!-- Latest compiled and minified JavaScript -->
  <!-- <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js\"></script> -->
  <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/boostrap-select/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tippy-bundle.umd.js"), "html", null, true);
        echo "\"></script>
  <!-- end -->
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
  </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 103
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 103,  352 => 142,  347 => 140,  343 => 139,  339 => 138,  332 => 134,  326 => 131,  322 => 130,  318 => 129,  314 => 128,  310 => 127,  306 => 126,  302 => 125,  298 => 124,  294 => 123,  290 => 122,  286 => 121,  282 => 120,  278 => 119,  262 => 106,  258 => 104,  256 => 103,  228 => 78,  223 => 76,  206 => 61,  199 => 60,  174 => 42,  169 => 40,  161 => 35,  157 => 34,  152 => 32,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  132 => 27,  126 => 24,  122 => 23,  118 => 22,  110 => 17,  106 => 16,  101 => 14,  97 => 13,  93 => 12,  89 => 11,  85 => 10,  81 => 9,  75 => 5,  68 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}Dashboard | Superadmin!{% endblock %}
{% block stylesheets %}

<!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{asset('assets/img/favicons/apple-touch-icon.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{asset('assets/img/favicons/favicon-32x32.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{asset('assets/img/favicons/favicon-16x16.png')}}\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('assets/img/favicons/favicon.ico')}}\">
    <link rel=\"manifest\" href=\"{{asset('assets/img/favicons/manifest.json')}}\">
    <meta name=\"msapplication-TileImage\" content=\"{{asset('asset/img/favicons/mstile-150x150.png')}}\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"{{asset('assets/js/config.js')}}\"></script>
    <script src=\"{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js')}}\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href=\"{{asset('vendors/choices/choices.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/flatpickr/flatpickr.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/prism/prism-okaidia.css')}}\" rel=\"stylesheet\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('assets/css/theme-rtl.min.css')}}\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"{{asset('assets/css/theme.min.css')}}\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"{{asset('assets/css/user-rtl.min.css')}}\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"{{asset('assets/css/user.min.css')}}\" rel=\"stylesheet\" id=\"user-style-default\">
    <link href=\"{{asset('assets/css/datatables.min.css')}}\" rel=\"stylesheet\" id=\"user-style-default\">

    <link rel=\"stylesheet\" href=\"{{asset('vendors/boostrap-select/bootstrap-select.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('vendors/jquery-ui/jquery-ui.css')}}\">

    <!-- FontAwesome css -->
   <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <!-- custom css -->
    <link href=\"{{asset('assets/css/custom.css')}}\" rel=\"stylesheet\">
    <!-- app css -->
    <link href=\"{{asset('assets/css/app.css')}}\" rel=\"stylesheet\">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
    
{% endblock %}
{% block body %}
<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    
    <main class=\"main\" id=\"top\">
      <div class=\"container-fluid\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        {{ include('layouts/partials/_sidebar.html.twig') }}
        <div class=\"content\">
         {{ include('layouts/partials/_navbar.html.twig') }}
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top=\"combo\"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          
          {% block content %}{% endblock %}
          
          
          {{ include('layouts/partials/_footer.html.twig') }}
        </div>
        
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <!-- <script src=\"{{asset('assets/js/jquery-3.6.0.min.js')}}\"></script> -->
  <script src=\"{{asset('assets/js/jquery-3.2.1.min.js')}}\"></script>
  <script src=\"{{asset('vendors/popper/popper.min.js')}}\"></script>
  <script src=\"{{asset('vendors/bootstrap/bootstrap.min.js')}}\"></script>
  <script src=\"{{asset('vendors/anchorjs/anchor.min.js')}}\"></script>
  <script src=\"{{asset('vendors/is/is.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/flatpickr.js')}}\"></script>
  <script src=\"{{asset('assets/js/datatables.min.js')}}\"></script>
  <script src=\"{{asset('vendors/choices/choices.min.js')}}\"></script>
  <script src=\"{{asset('vendors/dropzone/dropzone.min.js')}}\"></script>
  <script src=\"{{asset('vendors/prism/prism.js')}}\"></script>
  <script src=\"{{asset('vendors/fontawesome/all.min.js')}}\"></script>
  <script src=\"{{asset('vendors/lodash/lodash.min.js')}}\"></script>
  <!-- <script src=\"polyfill.io/v3/polyfill.min58be.js?features=window.scroll\"></script> -->
  
  <script src=\"{{asset('vendors/list.js/list.min.js')}}\"></script>
  <!-- boostrap select js -->
  <!-- Latest compiled and minified JavaScript -->
  <!-- <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js\"></script> -->
  <script src=\"{{asset('vendors/boostrap-select/bootstrap-select.min.js')}}\"></script>
  <script src=\"{{asset('vendors/jquery-ui/jquery-ui.min.js')}}\"></script>
  <script src=\"{{asset('assets/js/tippy-bundle.umd.js')}}\"></script>
  <!-- end -->
    <script src=\"{{asset('assets/js/app.js')}}\"></script>
  </body>
{% endblock %}
", "layouts/layout.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/layouts/layout.html.twig");
    }
}
