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

/* security/login.html.twig */
class __TwigTemplate_213b9e23d8e7f9997df860b44b985445 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
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
                <div class=\"row flex-between-center mb-2\">
                  <div class=\"col-auto\">
                    <h5>Log in</h5>
                  </div>
                  
                </div>
                <form method=\"post\">
                ";
        // line 69
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })())) {
            // line 70
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "messageKey", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 70, $this->source); })()), "messageData", [], "any", false, false, false, 70), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 72
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "userIdentifier", [], "any", false, false, false, 74), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </div>
                ";
        }
        // line 77
        echo "                  <div class=\"mb-3\"><input class=\"form-control\" type=\"email\" placeholder=\"Email address\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus/></div>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required/></div>
                  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                  <div class=\"row flex-between-center\">
                    <div class=\"col-auto\">
                      <div class=\"form-check mb-0\"><input class=\"form-check-input\" type=\"checkbox\" id=\"basic-checkbox\" checked=\"checked\" /><label class=\"form-check-label mb-0\" for=\"basic-checkbox\">Remember me</label></div>
                    </div>
                    <div class=\"col-auto\"><a class=\"fs--1\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Forgot Password?</a></div>
                  </div>
                  <div class=\"mb-3\"><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Log in</button></div>
                </form>
                
                
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 84,  180 => 79,  174 => 77,  166 => 74,  163 => 73,  160 => 72,  154 => 70,  152 => 69,  126 => 45,  119 => 44,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}Log in!{% endblock %}
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
                <div class=\"row flex-between-center mb-2\">
                  <div class=\"col-auto\">
                    <h5>Log in</h5>
                  </div>
                  
                </div>
                <form method=\"post\">
                {% if error %}
                    <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"email\" placeholder=\"Email address\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus/></div>
                  <div class=\"mb-3\"><input class=\"form-control\" type=\"password\" placeholder=\"Password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required/></div>
                  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                  <div class=\"row flex-between-center\">
                    <div class=\"col-auto\">
                      <div class=\"form-check mb-0\"><input class=\"form-check-input\" type=\"checkbox\" id=\"basic-checkbox\" checked=\"checked\" /><label class=\"form-check-label mb-0\" for=\"basic-checkbox\">Remember me</label></div>
                    </div>
                    <div class=\"col-auto\"><a class=\"fs--1\" href=\"{{ path('app_forgot_password_request') }}\">Forgot Password?</a></div>
                  </div>
                  <div class=\"mb-3\"><button class=\"btn btn-primary d-block w-100 mt-3\" type=\"submit\" name=\"submit\">Log in</button></div>
                </form>
                
                
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
", "security/login.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/security/login.html.twig");
    }
}
