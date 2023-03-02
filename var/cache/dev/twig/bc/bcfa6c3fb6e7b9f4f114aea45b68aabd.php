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
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Client Login</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 91
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "noOfClientsLogin", [], "any", false, false, false, 91), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "noOfClientsLogin", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "noOfClientsLogin", [], "any", false, false, false, 94), 'errors');
        echo "
                 </div>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-auto\">
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Transactions</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 ";
        // line 102
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 102), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "noOfTransaction", [], "any", false, false, false, 105), 'errors');
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
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "taskManager", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_1\">Task Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "fileManager", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_2\">File Manager</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "eCommerce", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_4\">E-Commerce</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "templateCustomization", [], "any", false, false, false, 130), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_5\">Tamplate - Customization for import</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "liveReportClientMobileApp", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                          <label class=\"form-check-label\" for=\"fe_chk_6\">Live reports on client mobile app</label>
                        </div>
                        <div class=\"form-check form-switch mb-0\">
                          ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "clientLoginApp", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-check-input"]]);
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
        // line 150
        if ((twig_length_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "price", [], "any", false, false, false, 150), 'errors')) > 0)) {
            echo " div-form-error";
        }
        echo "\">
                  ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "price", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "form-control mb-3", "min" => "1"]]);
        echo "
                  <div class=\"form-error\">
                    ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "price", [], "any", false, false, false, 153), 'errors');
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
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "status", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-select form-select-sm mb-3"]]);
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
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "displayOnPortal", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-check-input"]]);
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
        // line 181
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), 'form_end');
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
        return array (  368 => 181,  355 => 171,  343 => 162,  331 => 153,  326 => 151,  320 => 150,  305 => 138,  298 => 134,  291 => 130,  284 => 126,  277 => 122,  270 => 118,  254 => 105,  249 => 103,  243 => 102,  232 => 94,  227 => 92,  221 => 91,  210 => 83,  205 => 81,  199 => 80,  188 => 72,  183 => 70,  177 => 69,  166 => 61,  159 => 57,  152 => 55,  140 => 46,  133 => 42,  126 => 38,  120 => 37,  106 => 26,  101 => 24,  95 => 23,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                  <label class=\"form-label\" style=\"min-width:180px;\" for=\"\">No Of Client Login</label>
                </div>
                <div class=\"col-12 col-sm-6 col-md-4 {% if form_errors(form.noOfClientsLogin)|length > 0 %} div-form-error{% endif %}\">
                  {{ form_widget(form.noOfClientsLogin, {'attr': {'class': 'form-control mb-3','min':'1'}}) }}
                  <div class=\"form-error\">
                    {{ form_errors(form.noOfClientsLogin) }}
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
", "subscriptions/edit.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/subscriptions/edit.html.twig");
    }
}
