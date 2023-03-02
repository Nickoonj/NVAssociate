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

/* reset_password/check_email.html.twig */
class __TwigTemplate_ca234da0737c72210f1f20191c0e83fa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "reset_password/check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Password Reset Email Sent";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/assets/img/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/img/favicons/favicon-16x16.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicons/favicon.ico\">
    <link rel=\"manifest\" href=\"/assets/img/favicons/manifest.json\">
    <meta name=\"msapplication-TileImage\" content=\"/assets/img/favicons/mstile-150x150.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"/assets/js/config.js\"></script>
    <script src=\"/vendors/overlayscrollbars/OverlayScrollbars.min.js\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"/vendors/overlayscrollbars/OverlayScrollbars.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/theme-rtl.min.css\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"/assets/css/theme.min.css\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"/assets/css/user-rtl.min.css\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"/assets/css/user.min.css\" rel=\"stylesheet\" id=\"user-style-default\">
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

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "<!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class=\"main\" id=\"top\">
      <div class=\"container\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class=\"row flex-center min-vh-100 py-6\">
          <div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\"><a class=\"d-flex flex-center mb-4\" href=\"#\"><img class=\"me-2\" src=\"../../../assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"58\" /><span class=\"font-sans-serif fw-bolder fs-5 d-inline-block\">NV Associate</span></a>
            <div class=\"card\">
              <div class=\"card-body p-4 p-sm-5\">
                <div class=\"text-center\">
                  
                  <img class=\"d-block mx-auto mb-4\" src=\"/assets/img/icons/spot-illustrations/16.png\" alt=\"Email\" width=\"100\">
                  <h4 class=\"mb-2\">Please check your email!</h4>
                  <p>
                    If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
                    This link will expire in ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 68, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 68), twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 68, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 68), "ResetPasswordBundle"), "html", null, true);
        echo ".
                  </p>
                  <p>If you don't receive an email please check your spam folder or <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">try again</a>.</p>
                  <a class=\"btn btn-primary btn-sm mt-3\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"><svg class=\"svg-inline--fa fa-chevron-left fa-w-10 me-1\" data-fa-transform=\"shrink-4 down-1\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"chevron-left\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" data-fa-i2svg=\"\" style=\"transform-origin: 0.3125em 0.5625em;\"><g transform=\"translate(160 256)\"><g transform=\"translate(0, 32)  scale(0.75, 0.75)  rotate(0 0 0)\"><path fill=\"currentColor\" d=\"M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z\" transform=\"translate(-160 -256)\"></path></g></g></svg><!-- <span class=\"fas fa-chevron-left me-1\" data-fa-transform=\"shrink-4 down-1\"></span> Font Awesome fontawesome.com -->Return to login</a>
                </div>
                
                
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src=\"/vendors/popper/popper.min.js\"></script>
    <script src=\"/vendors/bootstrap/bootstrap.min.js\"></script>
    <script src=\"/vendors/anchorjs/anchor.min.js\"></script>
    <script src=\"/vendors/is/is.min.js\"></script>
    <script src=\"/vendors/fontawesome/all.min.js\"></script>
    <script src=\"/vendors/lodash/lodash.min.js\"></script>
    
    <script src=\"/vendors/list.js/list.min.js\"></script>
    <script src=\"/assets/js/theme.js\"></script>
  </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 71,  156 => 70,  151 => 68,  126 => 45,  119 => 44,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}Password Reset Email Sent{% endblock %}
{% block stylesheets %}
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"/assets/img/favicons/apple-touch-icon.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"/assets/img/favicons/favicon-32x32.png\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"/assets/img/favicons/favicon-16x16.png\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/assets/img/favicons/favicon.ico\">
    <link rel=\"manifest\" href=\"/assets/img/favicons/manifest.json\">
    <meta name=\"msapplication-TileImage\" content=\"/assets/img/favicons/mstile-150x150.png\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <script src=\"/assets/js/config.js\"></script>
    <script src=\"/vendors/overlayscrollbars/OverlayScrollbars.min.js\"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap\" rel=\"stylesheet\">
    <link href=\"/vendors/overlayscrollbars/OverlayScrollbars.min.css\" rel=\"stylesheet\">
    <link href=\"/assets/css/theme-rtl.min.css\" rel=\"stylesheet\" id=\"style-rtl\">
    <link href=\"/assets/css/theme.min.css\" rel=\"stylesheet\" id=\"style-default\">
    <link href=\"/assets/css/user-rtl.min.css\" rel=\"stylesheet\" id=\"user-style-rtl\">
    <link href=\"/assets/css/user.min.css\" rel=\"stylesheet\" id=\"user-style-default\">
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
<!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class=\"main\" id=\"top\">
      <div class=\"container\" data-layout=\"container\">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class=\"row flex-center min-vh-100 py-6\">
          <div class=\"col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\"><a class=\"d-flex flex-center mb-4\" href=\"#\"><img class=\"me-2\" src=\"../../../assets/img/icons/spot-illustrations/falcon.png\" alt=\"\" width=\"58\" /><span class=\"font-sans-serif fw-bolder fs-5 d-inline-block\">NV Associate</span></a>
            <div class=\"card\">
              <div class=\"card-body p-4 p-sm-5\">
                <div class=\"text-center\">
                  
                  <img class=\"d-block mx-auto mb-4\" src=\"/assets/img/icons/spot-illustrations/16.png\" alt=\"Email\" width=\"100\">
                  <h4 class=\"mb-2\">Please check your email!</h4>
                  <p>
                    If an account matching your email exists, then an email was just sent that contains a link that you can use to reset your password.
                    This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
                  </p>
                  <p>If you don't receive an email please check your spam folder or <a href=\"{{ path('app_forgot_password_request') }}\">try again</a>.</p>
                  <a class=\"btn btn-primary btn-sm mt-3\" href=\"{{ path('app_login') }}\"><svg class=\"svg-inline--fa fa-chevron-left fa-w-10 me-1\" data-fa-transform=\"shrink-4 down-1\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"chevron-left\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" data-fa-i2svg=\"\" style=\"transform-origin: 0.3125em 0.5625em;\"><g transform=\"translate(160 256)\"><g transform=\"translate(0, 32)  scale(0.75, 0.75)  rotate(0 0 0)\"><path fill=\"currentColor\" d=\"M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z\" transform=\"translate(-160 -256)\"></path></g></g></svg><!-- <span class=\"fas fa-chevron-left me-1\" data-fa-transform=\"shrink-4 down-1\"></span> Font Awesome fontawesome.com -->Return to login</a>
                </div>
                
                
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src=\"/vendors/popper/popper.min.js\"></script>
    <script src=\"/vendors/bootstrap/bootstrap.min.js\"></script>
    <script src=\"/vendors/anchorjs/anchor.min.js\"></script>
    <script src=\"/vendors/is/is.min.js\"></script>
    <script src=\"/vendors/fontawesome/all.min.js\"></script>
    <script src=\"/vendors/lodash/lodash.min.js\"></script>
    
    <script src=\"/vendors/list.js/list.min.js\"></script>
    <script src=\"/assets/js/theme.js\"></script>
  </body>
{% endblock %}

", "reset_password/check_email.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/reset_password/check_email.html.twig");
    }
}
