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

/* subscriptions/create.html.twig */
class __TwigTemplate_a2a5c62d9f2ed56942eac0c95f49d181 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subscriptions/create.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "subscriptions/create.html.twig", 1);
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
        <div class=\"card mb-3\">
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
        // line 58
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "storageSize", [], "any", false, false, false, 58), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  <div class=\"input-group mb-3\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "storageSize", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">GB</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "storageSize", [], "any", false, false, false, 64), 'errors');
        echo "
                  </div>
                </div>    
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Clients</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 72
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "noOfClients", [], "any", false, false, false, 72), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "noOfClients", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "noOfClients", [], "any", false, false, false, 75), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Employees</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 83
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 83), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "noOfEmployee", [], "any", false, false, false, 86), 'errors');
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
        // line 95
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 95), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">CA Employee & OwnerLogin</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 100), 'errors');
        echo "
                  </div>
                  <div class=\"input-group mb-3 ";
        // line 102
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 102), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">ClientOwner & Employee Login</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 107), 'errors');
        echo "
                  </div>
                  <div class=\"input-group mb-3 ";
        // line 109
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 109), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "min" => "1", "aria-describedby" => "basic-addon2"]]);
        echo "
                    <span class=\"input-group-text\" id=\"basic-addon2\">Client Vendor Login</span>
                  </div>
                  <div class=\"form-error\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "ClientVendorLogin", [], "any", false, false, false, 114), 'errors');
        echo "
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Transactions</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 122
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 122), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 125), 'errors');
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
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "taskManager", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_1\">Task Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "fileManager", [], "any", false, false, false, 142), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_2\">File Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "eCommerce", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_4\">E-Commerce</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "templateCustomization", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_5\">Tamplate - Customization for import</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "liveReportClientMobileApp", [], "any", false, false, false, 154), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Live reports on client mobile app</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "clientLoginApp", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form-check-input"]]);
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
        // line 170
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "price", [], "any", false, false, false, 170), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "price", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "price", [], "any", false, false, false, 173), 'errors');
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
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "status", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "form-select form-select-sm mb-3"]]);
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
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "displayOnPortal", [], "any", false, false, false, 191), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                    <label class=\"form-check-label\" for=\"dp_radio_7\">Yes</label>
                  </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-12 my-2 text-end\">
                  <button type=\"submit\" class=\"btn btn-primary\">Add Plan</button>
                </div>
              </div>
            ";
        // line 201
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), 'form_end');
        echo "

          </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "subscriptions/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 201,  397 => 191,  385 => 182,  373 => 173,  368 => 171,  362 => 170,  347 => 158,  340 => 154,  333 => 150,  326 => 146,  319 => 142,  312 => 138,  296 => 125,  291 => 123,  285 => 122,  274 => 114,  267 => 110,  261 => 109,  256 => 107,  249 => 103,  243 => 102,  238 => 100,  231 => 96,  225 => 95,  213 => 86,  208 => 84,  202 => 83,  191 => 75,  186 => 73,  180 => 72,  169 => 64,  162 => 60,  155 => 58,  140 => 46,  133 => 42,  126 => 38,  120 => 37,  106 => 26,  101 => 24,  95 => 23,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block title %}Dashboard | Superadmin!{% endblock %}

{% block content %}
  <!-- start: basic forms -->
        <div class=\"card mb-3\">
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
                  <button type=\"submit\" class=\"btn btn-primary\">Add Plan</button>
                </div>
              </div>
            {{ form_end(form) }}

          </div>
        </div>
{% endblock %}
", "subscriptions/create.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/subscriptions/create.html.twig");
    }
}
