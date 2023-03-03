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

/* subscriptions/edit.html.twig */
class __TwigTemplate_5ebed6b7a505db9bc700f21c9dad8658 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subscriptions/edit.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "subscriptions/edit.html.twig", 1);
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

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "  <!-- start: basic forms -->
        <div class=\"card mb-3 page-main-content\">
          <div class=\"card-header position-relative d-flex\" style=\"min-height:90px;\">
            <div class=\"d-flex align-items-center w-100\">
              <div class=\"me-auto\">
                <h5 class=\"my-2 text-white position-relative z-index-1\">Subscription</h5>
              </div>

            </div>
            <div class=\"bg-holder rounded-3 rounded-bottom-0\" style=\"background-image:url(/assets/img/generic/4.jpg);\"></div>
          </div>
          <div class=\"card-body bg-light\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Subscription Plan Name</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 23
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "planTitle", [], "any", false, false, false, 23), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "planTitle", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "planTitle", [], "any", false, false, false, 26), 'errors');
        echo "
                 </div>
                </div>
                
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Validity</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">                  
                  <div class=\"row\">
                    <div class=\"col ";
        // line 37
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "time", [], "any", false, false, false, 37), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "time", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control mb-3"]]);
        echo "                      
                    </div>
                    <div class=\"col-auto\">
                      <div class=\"mb-3\" style=\"min-width:130px;\">
                       ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "monthDay", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-select form-select-sm"]]);
        echo "
                      </div>
                    </div>
                    <div class=\"form-error\">
                          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "time", [], "any", false, false, false, 46), 'errors');
        echo "
                      </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Storage Space</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 55
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "storageSize", [], "any", false, false, false, 55), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  <div class=\"input-group mb-3\">
                  ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "storageSize", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                  <span class=\"input-group-text\" id=\"basic-addon2\">GB</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "storageSize", [], "any", false, false, false, 61), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Clients</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 69
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "noOfClients", [], "any", false, false, false, 69), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "noOfClients", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "noOfClients", [], "any", false, false, false, 72), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Employees</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 80
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 80), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 83), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Users</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 \">
                  <div class=\"input-group mb-3 ";
        // line 92
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 92), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">CA Employee & OwnerLogin</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 97), 'errors');
        echo "
                  </div>
                  <div class=\"input-group mb-3 ";
        // line 99
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 99), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">ClientOwner & Employee Login</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 104), 'errors');
        echo "
                  </div>
                  <div class=\"input-group mb-3 ";
        // line 106
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 106), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">Client Vendor Login</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 111), 'errors');
        echo "
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Transactions</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 119
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 119), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 122), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Features</label>
                </div>
                <div class=\"col\">
                  <div class=\"py-2 mb-2\">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <div class=\"form-check form-switch mb-0\">                          
                          ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "taskManager", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_1\">Task Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "fileManager", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_2\">File Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "eCommerce", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_4\">E-Commerce</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "templateCustomization", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_5\">Tamplate - Customization for import</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "liveReportClientMobileApp", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Live reports on client mobile app</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "clientLoginApp", [], "any", false, false, false, 155), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Client Login Mobile App</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Price</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 167
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "price", [], "any", false, false, false, 167), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "price", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "price", [], "any", false, false, false, 170), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Status</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">
                  ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "status", [], "any", false, false, false, 179), 'widget', ["attr" => ["class" => "form-select form-select-sm mb-3"]]);
        echo "
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Display on Portal</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">
                  <div class=\"form-check form-switch\">
                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "displayOnPortal", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                    <label class=\"form-check-label\" for=\"dp_radio_7\">Yes</label>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-12 my-2 text-end\">
                  <button type=\"submit\" class=\"btn btn-primary\">Edit Plan</button>
                </div>
              </div>
            ";
        // line 198
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
        echo "

          </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "subscriptions/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 198,  394 => 188,  382 => 179,  370 => 170,  365 => 168,  359 => 167,  344 => 155,  337 => 151,  330 => 147,  323 => 143,  316 => 139,  309 => 135,  293 => 122,  288 => 120,  282 => 119,  271 => 111,  264 => 107,  258 => 106,  253 => 104,  246 => 100,  240 => 99,  235 => 97,  228 => 93,  222 => 92,  210 => 83,  205 => 81,  199 => 80,  188 => 72,  183 => 70,  177 => 69,  166 => 61,  159 => 57,  152 => 55,  140 => 46,  133 => 42,  126 => 38,  120 => 37,  106 => 26,  101 => 24,  95 => 23,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block title %}Dashboard | Superadmin!{% endblock %}

{% block content %}
  <!-- start: basic forms -->
        <div class=\"card mb-3 page-main-content\">
          <div class=\"card-header position-relative d-flex\" style=\"min-height:90px;\">
            <div class=\"d-flex align-items-center w-100\">
              <div class=\"me-auto\">
                <h5 class=\"my-2 text-white position-relative z-index-1\">Subscription</h5>
              </div>

            </div>
            <div class=\"bg-holder rounded-3 rounded-bottom-0\" style=\"background-image:url(/assets/img/generic/4.jpg);\"></div>
          </div>
          <div class=\"card-body bg-light\">
            {{ form_start(form) }}
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Subscription Plan Name</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.planTitle)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.planTitle, {'attr': {'class': 'form-control mb-3'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.planTitle) }}
                 </div>
                </div>
                
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Validity</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">                  
                  <div class=\"row\">
                    <div class=\"col {% if form_errors(form.time)|length > 0 %} div-form-error{% endif %}\">
                      {{ form_widget(form.time, {'attr': {'class': 'form-control mb-3'}}) }}                      
                    </div>
                    <div class=\"col-auto\">
                      <div class=\"mb-3\" style=\"min-width:130px;\">
                       {{ form_widget(form.monthDay, {'attr': {'class': 'form-select form-select-sm'}}) }}
                      </div>
                    </div>
                    <div class=\"form-error\">
                          {{ form_errors(form.time) }}
                      </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Storage Space</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.storageSize)|length > 0 %} div-form-error{% endif %}\">
                  <div class=\"input-group mb-3\">
                  {{ form_widget(form.storageSize, {'attr': {'class': 'form-control','min':'1','aria-describedby':'basic-addon2'}}) }}
                  <span class=\"input-group-text\" id=\"basic-addon2\">GB</span>
                  </div>
                  <div class=\"form-error\">
                    {{ form_errors(form.storageSize) }}
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Clients</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.noOfClients)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.noOfClients, {'attr': {'class': 'form-control mb-3','min':'1'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.noOfClients) }}
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Employees</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.noOfEmployee)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.noOfEmployee, {'attr': {'class': 'form-control mb-3','min':'1'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.noOfEmployee) }}
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Users</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 \">
                  <div class=\"input-group mb-3 {% if form_errors(form.CAEmployeeAndOwnerLogin)|length > 0 %} div-form-error{% endif %}\">
                    {{ form_widget(form.CAEmployeeAndOwnerLogin, {'attr': {'class': 'form-control','min':'1','aria-describedby':'basic-addon2'}}) }}
                    <span class=\"input-group-text\" id=\"basic-addon2\">CA Employee & OwnerLogin</span>
                  </div>
                  <div class=\"form-error\">
                    {{ form_errors(form.CAEmployeeAndOwnerLogin) }}
                  </div>
                  <div class=\"input-group mb-3 {% if form_errors(form.ClientOwnerAndEmployeeLogin)|length > 0 %} div-form-error{% endif %}\">
                    {{ form_widget(form.ClientOwnerAndEmployeeLogin, {'attr': {'class': 'form-control','min':'1','aria-describedby':'basic-addon2'}}) }}
                    <span class=\"input-group-text\" id=\"basic-addon2\">ClientOwner & Employee Login</span>
                  </div>
                  <div class=\"form-error\">
                    {{ form_errors(form.ClientOwnerAndEmployeeLogin) }}
                  </div>
                  <div class=\"input-group mb-3 {% if form_errors(form.ClientVendorLogin)|length > 0 %} div-form-error{% endif %}\">
                    {{ form_widget(form.ClientVendorLogin, {'attr': {'class': 'form-control','min':'1','aria-describedby':'basic-addon2'}}) }}
                    <span class=\"input-group-text\" id=\"basic-addon2\">Client Vendor Login</span>
                  </div>
                  <div class=\"form-error\">
                    {{ form_errors(form.ClientVendorLogin) }}
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Transactions</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.noOfTransaction)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.noOfTransaction, {'attr': {'class': 'form-control mb-3','min':'1'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.noOfTransaction) }}
                 </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Features</label>
                </div>
                <div class=\"col\">
                  <div class=\"py-2 mb-2\">
                    <div class=\"row\">
                      <div class=\"col-12\">
                        <div class=\"form-check form-switch mb-0\">                          
                          {{ form_widget(form.taskManager, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_1\">Task Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          {{ form_widget(form.fileManager, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_2\">File Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          {{ form_widget(form.eCommerce, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_4\">E-Commerce</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          {{ form_widget(form.templateCustomization, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_5\">Tamplate - Customization for import</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          {{ form_widget(form.liveReportClientMobileApp, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Live reports on client mobile app</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          {{ form_widget(form.clientLoginApp, {'attr': {'class': 'form-check-input'}}) }}
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Client Login Mobile App</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Price</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.price)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.price, {'attr': {'class': 'form-control mb-3','min':'1'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.price) }}
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Status</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">
                  {{ form_widget(form.status, {'attr': {'class': 'form-select form-select-sm mb-3'}}) }}
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">Display on Portal</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4\">
                  <div class=\"form-check form-switch\">
                    {{ form_widget(form.displayOnPortal, {'attr': {'class': 'form-check-input'}}) }}
                    <label class=\"form-check-label\" for=\"dp_radio_7\">Yes</label>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-12 my-2 text-end\">
                  <button type=\"submit\" class=\"btn btn-primary\">Edit Plan</button>
                </div>
              </div>
            {{ form_end(form) }}

          </div>
        </div>
{% endblock %}
", "subscriptions/edit.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/subscriptions/edit.html.twig");
    }
}
