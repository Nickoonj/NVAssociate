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

/* reset_password/request.html.twig */
class __TwigTemplate_47086ed8731e8ac33c48098de9ae3bae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "reset_password/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Reset your password";
        
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
                    <h5>Reset your password</h5>
                  </div>
                  
                </div>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [0 => "reset_password_error"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 69
            echo "                    <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 71, $this->source); })()), 'form_start');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'row');
        echo "
                    <div class=\"mb-2\">
                        <small>
                            Enter your email address and we will send you a
                            link to reset your password.
                        </small>
                    </div>
                <button class=\"btn btn-primary\">Send password reset email</button>
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 80, $this->source); })()), 'form_end');
        echo "
                
                
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
        return "reset_password/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 80,  169 => 72,  164 => 71,  155 => 69,  151 => 68,  126 => 45,  119 => 44,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/base.html.twig' %}

{% block title %}Reset your password{% endblock %}
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
                    <h5>Reset your password</h5>
                  </div>
                  
                </div>
                {% for flash_error in app.flashes('reset_password_error') %}
                    <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                {% endfor %}
                {{ form_start(requestForm) }}
                {{ form_row(requestForm.email) }}
                    <div class=\"mb-2\">
                        <small>
                            Enter your email address and we will send you a
                            link to reset your password.
                        </small>
                    </div>
                <button class=\"btn btn-primary\">Send password reset email</button>
                {{ form_end(requestForm) }}
                
                
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
", "reset_password/request.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/reset_password/request.html.twig");
    }
}
