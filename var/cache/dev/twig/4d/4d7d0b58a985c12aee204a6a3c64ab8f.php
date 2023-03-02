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

/* layouts/partials/_footer.html.twig */
class __TwigTemplate_acfbdf874e5f2fe759451a3ecefa59c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"footer\">
            <div class=\"row g-0 justify-content-between fs--1 mt-4 mb-3\">
              <div class=\"col-12 col-sm-auto text-center\">
                <p class=\"mb-0 text-600\">Thank you for creating with Falcon <span class=\"d-none d-sm-inline-block\">| </span><br class=\"d-sm-none\" /> 2022 &copy; <a href=\"https://themewagon.com/\">Themewagon</a></p>
              </div>
            </div>
          </footer>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
            <div class=\"row g-0 justify-content-between fs--1 mt-4 mb-3\">
              <div class=\"col-12 col-sm-auto text-center\">
                <p class=\"mb-0 text-600\">Thank you for creating with Falcon <span class=\"d-none d-sm-inline-block\">| </span><br class=\"d-sm-none\" /> 2022 &copy; <a href=\"https://themewagon.com/\">Themewagon</a></p>
              </div>
            </div>
          </footer>", "layouts/partials/_footer.html.twig", "/home/bhedabro/Public/Anantav2/ananta/templates/layouts/partials/_footer.html.twig");
    }
}
