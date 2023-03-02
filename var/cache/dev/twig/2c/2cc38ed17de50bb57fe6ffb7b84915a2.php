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

/* reset_password/reset.html.twig */
class __TwigTemplate_a737b27aa453eff6649b76df72bfb218 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("layouts/base.html.twig", "reset_password/reset.html.twig", 1);
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
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), 'row');
        echo "
                    <button class=\"btn btn-primary mt-2\">Reset password</button>
                ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 72, $this->source); })()), 'form_end');
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
        return "reset_password/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 72,  156 => 70,  152 => 69,  126 => 45,  119 => 44,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
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
                
                {{ form_start(resetForm) }}
                    {{ form_row(resetForm.plainPassword) }}
                    <button class=\"btn btn-primary mt-2\">Reset password</button>
                {{ form_end(resetForm) }}
                
                
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

", "reset_password/reset.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/reset_password/reset.html.twig");
    }
}
