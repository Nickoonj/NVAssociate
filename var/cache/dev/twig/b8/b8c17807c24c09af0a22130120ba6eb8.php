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

/* subscriptions/index.html.twig */
class __TwigTemplate_f5bc9833f004fac3066583c244c729f2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subscriptions/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/layout.html.twig", "subscriptions/index.html.twig", 1);
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
        ";
        // line 10
        echo "        <div class=\"card mb-3 page-main-content\">
       
          
          <!-- <div class=\"card-header position-relative d-flex\" style=\"min-height:90px;\">
            <div class=\"d-flex align-items-center w-100\">
              <div class=\"me-auto\">
                <h5 class=\"my-2 text-white position-relative z-index-1\">Clients</h5>
              </div>
              <div class=\"ms-auto z-index-1\">
                <button onclick=\"window.location.href='add-CA.html'\" class=\"btn btn-outline-white \" type=\"button\">Add New</button>
              </div>

            </div>
            <div class=\"bg-holder rounded-3 rounded-bottom-0\" style=\"background-image:url(assets/img/generic/4.jpg);\"></div>
          </div> -->
          <div class=\"card-body\">

            <div class=\"position-relative\">
              <ul class=\"nav nav-tabs mb-4\" id=\"myTab\" role=\"tablist\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active ps-0\" data-bs-toggle=\"tab\" href=\"#tab_1\" role=\"tab\">Subscription</a>
                </li>
                <li class=\"nav-item\">
                  <a type=\"button\" class=\"nav-link px-2 px-md-3\" data-bs-toggle=\"tab\" href=\"#tab_2\" role=\"tab\">AddOns</a>
                </li>
              </ul>
            </div>
            
            <div class=\"tab-content\" id=\"myTabContent\">
              ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo "                
                <div class=\"alert alert-success border-2 d-flex align-items-center\" role=\"alert\">
                  <div class=\"bg-success me-3 icon-item\"><span class=\"fas fa-check-circle text-white fs-3\"></span></div>
                  <p class=\"mb-0 flex-1\">";
            // line 42
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p><button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "              
              <div class=\"tab-pane fade show active\" id=\"tab_1\" role=\"tabpanel\">
                <form action=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscriptions");
        echo "\" class=\"row gx-2\" id=\"js-filter-form\">
                  <div class=\"d-flex align-items-center w-100 mb-3\">
                    <div class=\"me-auto\">
                      <div class=\"search-box search_inputform w-auto\">
                        <input type=\"text\" name=\"searchBy\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["searchBy"]) || array_key_exists("searchBy", $context) ? $context["searchBy"] : (function () { throw new RuntimeError('Variable "searchBy" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control form-control-sm search-input js-search-input\" placeholder=\"Search\"
                          style=\"border-radius: 0.25rem;\">
                        <span class=\"fas fa-search search-box-icon\"></span>
                      </div>
                    </div>
                    <div class=\"ms-auto\">
                      <a href=\"javascript:void();\" class=\"btn-link text-decoration-none js-filter\"><span
                          style=\"min-width: 100px; padding-right: 5px;\">Sort By</span> <i
                          class=\"fas fa-angle-down\"></i></a>
                      <!-- <button type=\"button\" class=\"btn btn-falcon-default btn-sm\" ></button> -->

                    </div>
                  </div>
                  <div id=\"filter_box\" class=\"fl_filter_box fl_filter_close\">                  
                    <div class=\"g-2 row row-cols-md-4 \">

                        <div class=\"col\">
                          <h6>Latest</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault3\" type=\"radio\" name=\"sortby\" value=\"s.createdAt-ASC\" ";
        // line 69
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 69, $this->source); })()) == "s.createdAt") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()) == "ASC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault3\">Asc</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault4\" type=\"radio\" name=\"sortby\" value=\"s.createdAt-DESC\" ";
        // line 70
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 70, $this->source); })()) == "s.createdAt") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()) == "DESC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault4\">Desc</label></div>
                        </div>
                        <div class=\"col\">
                          <h6>Name</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault1\" type=\"radio\" name=\"sortby\" value=\"s.planTitle-ASC\" ";
        // line 74
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 74, $this->source); })()) == "s.planTitle") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 74, $this->source); })()) == "ASC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault1\">Asc</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault2\" type=\"radio\" name=\"sortby\" value=\"s.planTitle-DESC\" ";
        // line 75
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 75, $this->source); })()) == "s.planTitle") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 75, $this->source); })()) == "DESC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault2\">Desc</label></div>
                        </div>                      
                        <div class=\"col\">
                          <h6>Price</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault5\" type=\"radio\" name=\"sortby\" value=\"s.price-ASC\" ";
        // line 79
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 79, $this->source); })()) == "s.price") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 79, $this->source); })()) == "ASC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault5\">Lowest</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault6\" type=\"radio\" name=\"sortby\" value=\"s.price-DESC\" ";
        // line 80
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 80, $this->source); })()) == "s.price") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 80, $this->source); })()) == "DESC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault6\">Highest</label></div>
                        </div>                    
                        <div class=\"col\">
                          <h6>Subscribers</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault7\" type=\"radio\" name=\"sortby\" value=\"s.subscribers-ASC\" ";
        // line 84
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 84, $this->source); })()) == "s.subscribers") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 84, $this->source); })()) == "ASC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault7\">Lowest</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault8\" type=\"radio\" name=\"sortby\" value=\"s.subscribers-DESC\" ";
        // line 85
        if ((((isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 85, $this->source); })()) == "s.subscribers") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 85, $this->source); })()) == "DESC"))) {
            echo "checked=\"\"";
        }
        echo "/><label class=\"form-check-label\" for=\"flexRadioDefault8\">Highest</label></div>
                        </div>                      
                      
                    </div>                                                                      
                  </div>
                  <input type=\"hidden\" name=\"limit\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "\"> 
                </form>  
                <div class=\"row flex-between-center\">
                    
                    <div class=\"col-sm-12 mb-2 mb-sm-0\">
                      <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_subscriptions");
        echo "\">
                        <button class=\"btn btn-primary me-1 mb-1 mt-1 pull-right\" type=\"button\">
                          <span class=\"fas fa-plus me-1\" data-fa-transform=\"shrink-3\"></span>New
                        </button>
                      </a>
                      
                    </div>
                  </div>
                
                ";
        // line 104
        if ((twig_length_filter($this->env, (isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 104, $this->source); })())) > 0)) {
            // line 105
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
                // line 106
                echo "                    
                    <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                        <div class=\"d-flex w-100\">
                            <div class=\"me-auto\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                <span class=\"cli_no bg-primary text-white fw-bold\">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 112), "html", null, true);
                echo "</span>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                <h5 class=\"mb-0\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "planTitle", [], "any", false, false, false, 115), "html", null, true);
                echo "</h5>
                                </div>
                            </div>
                            </div>
                            <div class=\"ms-auto\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"form-check form-switch mb-0\">
                                <input class=\"form-check-input\" id=\"fe_chk_1\" type=\"checkbox\" ";
                // line 122
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "status", [], "any", false, false, false, 122) == 1)) {
                    echo "checked ";
                }
                echo "/>
                                <label class=\"form-check-label mb-0\" for=\"fe_chk_1\">Active</label>
                                </div>
                                <span class=\"mx-2 text-400\">|</span>
                                <a href=\"/subscriptions/edit/";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\" class=\"js-edit-action\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>&nbsp;&nbsp;
                                ";
                // line 129
                echo "                            </div>

                            </div>
                        </div>
                        <div class=\"ms-4 mt-3\">
                            <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"far fa-clock fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Validity</p>
                                    <p class=\"fw-semi-bold\">";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "time", [], "any", false, false, false, 142), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "monthDay", [], "any", false, false, false, 142), "html", null, true);
                echo " </p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-money-bill\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Price</p>
                                    <p class=\"mb-0 fw-semi-bold\">";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "price", [], "any", false, false, false, 153), "html", null, true);
                echo "/-</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"far fa-list-alt fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Transactions</p>
                                    <p class=\"fw-semi-bold\">";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "noOfTransaction", [], "any", false, false, false, 164), "html", null, true);
                echo "</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user-friends fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Employees</p>
                                    <p class=\"fw-semi-bold\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "noOfEmployee", [], "any", false, false, false, 175), "html", null, true);
                echo "</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Clients</p>
                                    <p class=\"fw-semi-bold\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "noOfClients", [], "any", false, false, false, 186), "html", null, true);
                echo "</p>
                                </div>
                                </div>
                            </div>
                            
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-database fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Storage</p>
                                    <p class=\"fw-semi-bold\">";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "storageSize", [], "any", false, false, false, 198), "html", null, true);
                echo " GB</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-users fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Subscribers</p>
                                    <p class=\"fw-semi-bold\">0</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\"></div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user-lock fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Users</p>
                                    <ul class=\"ps-3 mt-1 fw-semi-bold mb-1\">
                                      <li>CA Employee & OwnerLogin - ";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "CAEmployeeAndOwnerLogin", [], "any", false, false, false, 222), "html", null, true);
                echo "</li>
                                      <li>ClientOwner & Employee Login - ";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "ClientOwnerAndEmployeeLogin", [], "any", false, false, false, 223), "html", null, true);
                echo "</li>
                                      <li>Client Vendor Login - ";
                // line 224
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subscription"], "ClientVendorLogin", [], "any", false, false, false, 224), "html", null, true);
                echo "</li>
                                    </ul>
                                    
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-cubes fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Features</p>
                                    <ul class=\"ps-3 mt-1 fw-semi-bold mb-1\">
                                    ";
                // line 238
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "taskManager", [], "any", false, false, false, 238) == 1)) {
                    echo "<li>Task Manager</li>";
                }
                // line 239
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "fileManager", [], "any", false, false, false, 239) == 1)) {
                    echo "<li>File Manager</li>";
                }
                // line 240
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "eCommerce", [], "any", false, false, false, 240) == 1)) {
                    echo "<li>E-Commerce</li>";
                }
                // line 241
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "templateCustomization", [], "any", false, false, false, 241) == 1)) {
                    echo "<li>Tamplate - Customization for import</li>";
                }
                // line 242
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "liveReportClientMobileApp", [], "any", false, false, false, 242) == 1)) {
                    echo "<li>Live reports on client mobile app</li>";
                }
                // line 243
                echo "                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["subscription"], "clientLoginApp", [], "any", false, false, false, 243) == 1)) {
                    echo "<li>Client Login Mobile App</li>";
                }
                // line 244
                echo "
                                    </ul>
                                </div>
                                </div>
                            </div>
                            
                            

                            </div>
                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            echo "        
                ";
        } else {
            // line 257
            echo "                    <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                        <h5>No Subscriptions Available!</h5>
                    </div>
                ";
        }
        // line 261
        echo "                <div class=\"row flex-between-center\">
                  <div class=\"col-12\">
                    <div class=\"d-flex justify-content-end\">
                    ";
        // line 264
        echo $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["subscriptions"]) || array_key_exists("subscriptions", $context) ? $context["subscriptions"] : (function () { throw new RuntimeError('Variable "subscriptions" does not exist.', 264, $this->source); })()));
        echo "
                    <form action=\"";
        // line 265
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscriptions");
        echo "\" class=\"row gx-2\">
                      <input type=\"hidden\" name=\"sortby\" value=\"";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["sortby"]) || array_key_exists("sortby", $context) ? $context["sortby"] : (function () { throw new RuntimeError('Variable "sortby" does not exist.', 266, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 266, $this->source); })()), "html", null, true);
        echo "\"> 
                      <input type=\"hidden\" name=\"searchBy\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["searchBy"]) || array_key_exists("searchBy", $context) ? $context["searchBy"] : (function () { throw new RuntimeError('Variable "searchBy" does not exist.', 267, $this->source); })()), "html", null, true);
        echo "\" >                            
                      <div class=\"col-auto\">
                          <select name=\"limit\" class=\"form-select form-select-sm pagination-limit js-pagination-limit\" aria-label=\"Bulk actions\">
                              <option value=\"5\" ";
        // line 270
        if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 270, $this->source); })()) == 5)) {
            echo "selected";
        }
        echo " >5 / Page</option>
                              <option value=\"10\" ";
        // line 271
        if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 271, $this->source); })()) == 10)) {
            echo "selected";
        }
        echo " >10 / Page</option>
                              <option value=\"25\" ";
        // line 272
        if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 272, $this->source); })()) == 25)) {
            echo "selected";
        }
        echo " >25 / Page</option>
                              <option value=\"50\" ";
        // line 273
        if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 273, $this->source); })()) == 50)) {
            echo "selected";
        }
        echo " >50 / Page</option>
                              <option value=\"100\" ";
        // line 274
        if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 274, $this->source); })()) == 100)) {
            echo "selected";
        }
        echo " >100 / Page</option>
                            </select>
                      </div>                                             
                    </form>
                    </div>
                  </div>
                  
                </div>
                
              </div>

              <div class=\"tab-pane fade\" id=\"tab_2\" role=\"tabpanel\">
                <div class=\"d-flex w-100 mb-3\">
                  <div class=\"ms-auto\">
                    <button onclick=\"window.location.href='addOns-plans.html'\" type=\"button\" class=\"btn btn-primary\">Create New AddOns</button>
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"client_collapse_list\">
                      <a class=\"text-decoration-none fw-semi-bold cli_coll_link\" data-bs-toggle=\"collapse\" href=\"#coll_1\" role=\"button\">Employee AddOns <i class=\"fa fa-chevron-right ms-auto cli_coll_arrow\"></i></a>
                      <!-- <h5 class=\"mb-0 fw-bold\">Employee AddOns</h5> -->
                      <div class=\"collapse show\" id=\"coll_1\">
                        <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">1</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">5 Employees</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_11\" type=\"checkbox\" checked />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_11\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">68</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>

                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">2</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">10 Employees</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_12\" type=\"checkbox\" />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_12\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">68</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <a class=\"collapsed text-decoration-none fw-semi-bold cli_coll_link\" data-bs-toggle=\"collapse\" href=\"#coll_2\" role=\"button\">Cient Login AddOns <i class=\"fa fa-chevron-right ms-auto cli_coll_arrow\"></i></a>
                      <!-- <h5 class=\"mb-0 fw-bold\">Cient Login AddOns</h5> -->
                      <div class=\"collapse\" id=\"coll_2\">
                        <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">1</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">5 Client Logins</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_13\" type=\"checkbox\" checked />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_13\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">30</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>

                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">2</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">10 Client Logins</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_14\" type=\"checkbox\" />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_15\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 275</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">48</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>
                  </div>

                </div>

              </div>

            </div>

          </div>
        </div>
        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "subscriptions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 274,  520 => 273,  514 => 272,  508 => 271,  502 => 270,  496 => 267,  490 => 266,  486 => 265,  482 => 264,  477 => 261,  471 => 257,  467 => 255,  450 => 244,  445 => 243,  440 => 242,  435 => 241,  430 => 240,  425 => 239,  421 => 238,  404 => 224,  400 => 223,  396 => 222,  369 => 198,  354 => 186,  340 => 175,  326 => 164,  312 => 153,  296 => 142,  281 => 129,  277 => 126,  268 => 122,  258 => 115,  252 => 112,  244 => 106,  239 => 105,  237 => 104,  225 => 95,  217 => 90,  207 => 85,  201 => 84,  192 => 80,  186 => 79,  177 => 75,  171 => 74,  162 => 70,  156 => 69,  135 => 51,  128 => 47,  124 => 45,  115 => 42,  107 => 39,  76 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/layout.html.twig' %}

{% block title %}Dashboard | Superadmin!{% endblock %}

{% block content %}
  <!-- start: basic forms -->
        {# <div class=\"loader\">
            <img src=\"{{asset('assets/img/loading-1.gif')}}\" alt=\"\">
        </div> #}
        <div class=\"card mb-3 page-main-content\">
       
          
          <!-- <div class=\"card-header position-relative d-flex\" style=\"min-height:90px;\">
            <div class=\"d-flex align-items-center w-100\">
              <div class=\"me-auto\">
                <h5 class=\"my-2 text-white position-relative z-index-1\">Clients</h5>
              </div>
              <div class=\"ms-auto z-index-1\">
                <button onclick=\"window.location.href='add-CA.html'\" class=\"btn btn-outline-white \" type=\"button\">Add New</button>
              </div>

            </div>
            <div class=\"bg-holder rounded-3 rounded-bottom-0\" style=\"background-image:url(assets/img/generic/4.jpg);\"></div>
          </div> -->
          <div class=\"card-body\">

            <div class=\"position-relative\">
              <ul class=\"nav nav-tabs mb-4\" id=\"myTab\" role=\"tablist\">
                <li class=\"nav-item\">
                  <a class=\"nav-link active ps-0\" data-bs-toggle=\"tab\" href=\"#tab_1\" role=\"tab\">Subscription</a>
                </li>
                <li class=\"nav-item\">
                  <a type=\"button\" class=\"nav-link px-2 px-md-3\" data-bs-toggle=\"tab\" href=\"#tab_2\" role=\"tab\">AddOns</a>
                </li>
              </ul>
            </div>
            
            <div class=\"tab-content\" id=\"myTabContent\">
              {% for message in app.flashes('success') %}                
                <div class=\"alert alert-success border-2 d-flex align-items-center\" role=\"alert\">
                  <div class=\"bg-success me-3 icon-item\"><span class=\"fas fa-check-circle text-white fs-3\"></span></div>
                  <p class=\"mb-0 flex-1\">{{ message }}</p><button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
              {% endfor %}
              
              <div class=\"tab-pane fade show active\" id=\"tab_1\" role=\"tabpanel\">
                <form action=\"{{ path('app_subscriptions') }}\" class=\"row gx-2\" id=\"js-filter-form\">
                  <div class=\"d-flex align-items-center w-100 mb-3\">
                    <div class=\"me-auto\">
                      <div class=\"search-box search_inputform w-auto\">
                        <input type=\"text\" name=\"searchBy\" value=\"{{searchBy}}\" class=\"form-control form-control-sm search-input js-search-input\" placeholder=\"Search\"
                          style=\"border-radius: 0.25rem;\">
                        <span class=\"fas fa-search search-box-icon\"></span>
                      </div>
                    </div>
                    <div class=\"ms-auto\">
                      <a href=\"javascript:void();\" class=\"btn-link text-decoration-none js-filter\"><span
                          style=\"min-width: 100px; padding-right: 5px;\">Sort By</span> <i
                          class=\"fas fa-angle-down\"></i></a>
                      <!-- <button type=\"button\" class=\"btn btn-falcon-default btn-sm\" ></button> -->

                    </div>
                  </div>
                  <div id=\"filter_box\" class=\"fl_filter_box fl_filter_close\">                  
                    <div class=\"g-2 row row-cols-md-4 \">

                        <div class=\"col\">
                          <h6>Latest</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault3\" type=\"radio\" name=\"sortby\" value=\"s.createdAt-ASC\" {% if (sortby == 's.createdAt') and (order == 'ASC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault3\">Asc</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault4\" type=\"radio\" name=\"sortby\" value=\"s.createdAt-DESC\" {% if (sortby == 's.createdAt') and (order == 'DESC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault4\">Desc</label></div>
                        </div>
                        <div class=\"col\">
                          <h6>Name</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault1\" type=\"radio\" name=\"sortby\" value=\"s.planTitle-ASC\" {% if (sortby == 's.planTitle') and (order == 'ASC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault1\">Asc</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault2\" type=\"radio\" name=\"sortby\" value=\"s.planTitle-DESC\" {% if (sortby == 's.planTitle') and (order == 'DESC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault2\">Desc</label></div>
                        </div>                      
                        <div class=\"col\">
                          <h6>Price</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault5\" type=\"radio\" name=\"sortby\" value=\"s.price-ASC\" {% if (sortby == 's.price') and (order == 'ASC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault5\">Lowest</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault6\" type=\"radio\" name=\"sortby\" value=\"s.price-DESC\" {% if (sortby == 's.price') and (order == 'DESC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault6\">Highest</label></div>
                        </div>                    
                        <div class=\"col\">
                          <h6>Subscribers</h6>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault7\" type=\"radio\" name=\"sortby\" value=\"s.subscribers-ASC\" {% if (sortby == 's.subscribers') and (order == 'ASC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault7\">Lowest</label></div>
                          <div class=\"form-check\"><input class=\"form-check-input js-sortby\" id=\"flexRadioDefault8\" type=\"radio\" name=\"sortby\" value=\"s.subscribers-DESC\" {% if (sortby == 's.subscribers') and (order == 'DESC') %}checked=\"\"{% endif %}/><label class=\"form-check-label\" for=\"flexRadioDefault8\">Highest</label></div>
                        </div>                      
                      
                    </div>                                                                      
                  </div>
                  <input type=\"hidden\" name=\"limit\" value=\"{{limit}}\"> 
                </form>  
                <div class=\"row flex-between-center\">
                    
                    <div class=\"col-sm-12 mb-2 mb-sm-0\">
                      <a href=\"{{path('create_subscriptions')}}\">
                        <button class=\"btn btn-primary me-1 mb-1 mt-1 pull-right\" type=\"button\">
                          <span class=\"fas fa-plus me-1\" data-fa-transform=\"shrink-3\"></span>New
                        </button>
                      </a>
                      
                    </div>
                  </div>
                
                {% if subscriptions|length > 0 %}
                    {% for subscription in subscriptions %}
                    
                    <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                        <div class=\"d-flex w-100\">
                            <div class=\"me-auto\">
                            <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                <span class=\"cli_no bg-primary text-white fw-bold\">{{ subscription.id }}</span>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                <h5 class=\"mb-0\">{{ subscription.planTitle }}</h5>
                                </div>
                            </div>
                            </div>
                            <div class=\"ms-auto\">
                            <div class=\"d-flex align-items-center\">
                                <div class=\"form-check form-switch mb-0\">
                                <input class=\"form-check-input\" id=\"fe_chk_1\" type=\"checkbox\" {% if subscription.status == 1 %}checked {% endif %}/>
                                <label class=\"form-check-label mb-0\" for=\"fe_chk_1\">Active</label>
                                </div>
                                <span class=\"mx-2 text-400\">|</span>
                                <a href=\"/subscriptions/edit/{{ subscription.id }}\" class=\"js-edit-action\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>&nbsp;&nbsp;
                                {# <a href=\"/subscriptions/delete/{{ subscription.id }}\" onclick=\"return confirm('Are you sure you want to delete this subscription?');\"><i class=\"fas fa-trash\"></i> Delete</a>
                                <a class=\"fs--1 ms-1\" href=\"#\">(History)</a> #}
                            </div>

                            </div>
                        </div>
                        <div class=\"ms-4 mt-3\">
                            <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"far fa-clock fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Validity</p>
                                    <p class=\"fw-semi-bold\">{{ subscription.time }} {{ subscription.monthDay }} </p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-money-bill\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Price</p>
                                    <p class=\"mb-0 fw-semi-bold\">{{ subscription.price }}/-</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"far fa-list-alt fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Transactions</p>
                                    <p class=\"fw-semi-bold\">{{ subscription.noOfTransaction }}</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user-friends fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Employees</p>
                                    <p class=\"fw-semi-bold\">{{ subscription.noOfEmployee }}</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Clients</p>
                                    <p class=\"fw-semi-bold\">{{ subscription.noOfClients }}</p>
                                </div>
                                </div>
                            </div>
                            
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-database fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Storage</p>
                                    <p class=\"fw-semi-bold\">{{ subscription.storageSize }} GB</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-users fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Subscribers</p>
                                    <p class=\"fw-semi-bold\">0</p>
                                </div>
                                </div>
                            </div>
                            <div class=\"col\"></div>
                            <div class=\"col-md-6\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-user-lock fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Users</p>
                                    <ul class=\"ps-3 mt-1 fw-semi-bold mb-1\">
                                      <li>CA Employee & OwnerLogin - {{ subscription.CAEmployeeAndOwnerLogin }}</li>
                                      <li>ClientOwner & Employee Login - {{ subscription.ClientOwnerAndEmployeeLogin }}</li>
                                      <li>Client Vendor Login - {{ subscription.ClientVendorLogin }}</li>
                                    </ul>
                                    
                                </div>
                                </div>
                            </div>
                            <div class=\"col\">
                                <div class=\"d-flex\">
                                <div class=\"flex-shrink-0\">
                                    <i class=\"fas fa-cubes fs-1\"></i>
                                </div>
                                <div class=\"flex-grow-1 ms-2\">
                                    <p class=\"mb-0 fs--1\">Features</p>
                                    <ul class=\"ps-3 mt-1 fw-semi-bold mb-1\">
                                    {% if subscription.taskManager == 1 %}<li>Task Manager</li>{% endif %}
                                    {% if subscription.fileManager == 1 %}<li>File Manager</li>{% endif %}
                                    {% if subscription.eCommerce == 1 %}<li>E-Commerce</li>{% endif %}
                                    {% if subscription.templateCustomization == 1 %}<li>Tamplate - Customization for import</li>{% endif %}
                                    {% if subscription.liveReportClientMobileApp == 1 %}<li>Live reports on client mobile app</li>{% endif %}
                                    {% if subscription.clientLoginApp == 1 %}<li>Client Login Mobile App</li>{% endif %}

                                    </ul>
                                </div>
                                </div>
                            </div>
                            
                            

                            </div>
                        </div>
                    </div>
                    {% endfor %}        
                {% else %}
                    <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                        <h5>No Subscriptions Available!</h5>
                    </div>
                {% endif %}
                <div class=\"row flex-between-center\">
                  <div class=\"col-12\">
                    <div class=\"d-flex justify-content-end\">
                    {{ pagerfanta(subscriptions) }}
                    <form action=\"{{ path('app_subscriptions') }}\" class=\"row gx-2\">
                      <input type=\"hidden\" name=\"sortby\" value=\"{{sortby}}-{{order}}\"> 
                      <input type=\"hidden\" name=\"searchBy\" value=\"{{searchBy}}\" >                            
                      <div class=\"col-auto\">
                          <select name=\"limit\" class=\"form-select form-select-sm pagination-limit js-pagination-limit\" aria-label=\"Bulk actions\">
                              <option value=\"5\" {% if limit == 5 %}selected{% endif %} >5 / Page</option>
                              <option value=\"10\" {% if limit == 10 %}selected{% endif %} >10 / Page</option>
                              <option value=\"25\" {% if limit == 25 %}selected{% endif %} >25 / Page</option>
                              <option value=\"50\" {% if limit == 50 %}selected{% endif %} >50 / Page</option>
                              <option value=\"100\" {% if limit == 100 %}selected{% endif %} >100 / Page</option>
                            </select>
                      </div>                                             
                    </form>
                    </div>
                  </div>
                  
                </div>
                
              </div>

              <div class=\"tab-pane fade\" id=\"tab_2\" role=\"tabpanel\">
                <div class=\"d-flex w-100 mb-3\">
                  <div class=\"ms-auto\">
                    <button onclick=\"window.location.href='addOns-plans.html'\" type=\"button\" class=\"btn btn-primary\">Create New AddOns</button>
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"client_collapse_list\">
                      <a class=\"text-decoration-none fw-semi-bold cli_coll_link\" data-bs-toggle=\"collapse\" href=\"#coll_1\" role=\"button\">Employee AddOns <i class=\"fa fa-chevron-right ms-auto cli_coll_arrow\"></i></a>
                      <!-- <h5 class=\"mb-0 fw-bold\">Employee AddOns</h5> -->
                      <div class=\"collapse show\" id=\"coll_1\">
                        <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">1</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">5 Employees</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_11\" type=\"checkbox\" checked />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_11\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">68</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>

                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">2</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">10 Employees</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_12\" type=\"checkbox\" />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_12\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">68</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <a class=\"collapsed text-decoration-none fw-semi-bold cli_coll_link\" data-bs-toggle=\"collapse\" href=\"#coll_2\" role=\"button\">Cient Login AddOns <i class=\"fa fa-chevron-right ms-auto cli_coll_arrow\"></i></a>
                      <!-- <h5 class=\"mb-0 fw-bold\">Cient Login AddOns</h5> -->
                      <div class=\"collapse\" id=\"coll_2\">
                        <div class=\"card card-body mt-2 shadow-none bg-100 border mb-3\">
                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">1</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">5 Client Logins</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_13\" type=\"checkbox\" checked />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_13\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 150</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">30</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr>

                          <div>
                            <div class=\"d-flex w-100\">
                              <div class=\"me-auto\">
                                <div class=\"d-flex\">
                                  <div class=\"flex-shrink-0\">
                                    <span class=\"cli_no bg-primary text-white fw-bold\">2</span>
                                  </div>
                                  <div class=\"flex-grow-1 ms-2\">
                                    <h5 class=\"mb-0\">10 Client Logins</h5>
                                  </div>
                                </div>
                              </div>
                              <div class=\"ms-auto\">
                                <div class=\"d-flex align-items-center\">
                                  <div class=\"form-check form-switch mb-0\">
                                    <input class=\"form-check-input\" id=\"fe_chk_14\" type=\"checkbox\" />
                                    <label class=\"form-check-label mb-0\" for=\"fe_chk_15\">Active</label>
                                  </div>
                                  <span class=\"mx-2 text-400\">|</span>
                                  <a href=\"#\"><i class=\"fas fa-pencil-alt\"></i> Edit</a>
                                  <a class=\"fs--1 ms-1\" href=\"#\">(History)</a>
                                </div>
                              </div>
                            </div>
                            <div class=\"ms-4 mt-3\">
                              <div class=\"row row-cols-1 row-cols-sm-4 row-col-md-4\">
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-money-bill-alt fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Price</p>
                                      <p class=\"fw-semi-bold\">Rs. 275</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-clock fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Time Period</p>
                                      <p class=\"fw-semi-bold\">30 Days</p>
                                    </div>
                                  </div>
                                </div>
                                <div class=\"col\">
                                  <div class=\"d-flex\">
                                    <div class=\"flex-shrink-0\">
                                      <i class=\"fas fa-users fs-1\"></i>
                                    </div>
                                    <div class=\"flex-grow-1 ms-2\">
                                      <p class=\"mb-0 fs--1\">Subscribers</p>
                                      <p class=\"fw-semi-bold\">48</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>

                    </div>
                  </div>

                </div>

              </div>

            </div>

          </div>
        </div>
        
{% endblock %}
", "subscriptions/index.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/subscriptions/index.html.twig");
    }
}
