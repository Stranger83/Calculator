<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1a8e4db50cb65975d8f8ea72362f77e0bbcf6d16c34b1fdff26e30206e91ba77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d25449772087e7db49a4783ec57a864d48d8377ce41252b6f1e57461f166203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d25449772087e7db49a4783ec57a864d48d8377ce41252b6f1e57461f166203->enter($__internal_3d25449772087e7db49a4783ec57a864d48d8377ce41252b6f1e57461f166203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d25449772087e7db49a4783ec57a864d48d8377ce41252b6f1e57461f166203->leave($__internal_3d25449772087e7db49a4783ec57a864d48d8377ce41252b6f1e57461f166203_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea8c5d40b44226d86bfdee613058449a317506466636b8c8757e46773a00d88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8c5d40b44226d86bfdee613058449a317506466636b8c8757e46773a00d88a->enter($__internal_ea8c5d40b44226d86bfdee613058449a317506466636b8c8757e46773a00d88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ea8c5d40b44226d86bfdee613058449a317506466636b8c8757e46773a00d88a->leave($__internal_ea8c5d40b44226d86bfdee613058449a317506466636b8c8757e46773a00d88a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fa4463e492691bfe9aa7ebac14eccbc43a6308305b8a74cb5766b32a9eea380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa4463e492691bfe9aa7ebac14eccbc43a6308305b8a74cb5766b32a9eea380->enter($__internal_1fa4463e492691bfe9aa7ebac14eccbc43a6308305b8a74cb5766b32a9eea380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1fa4463e492691bfe9aa7ebac14eccbc43a6308305b8a74cb5766b32a9eea380->leave($__internal_1fa4463e492691bfe9aa7ebac14eccbc43a6308305b8a74cb5766b32a9eea380_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2772a758e83ef536b57956c1e76c681a67fddd825cc3d1c597abfc9fb3301c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2772a758e83ef536b57956c1e76c681a67fddd825cc3d1c597abfc9fb3301c6->enter($__internal_e2772a758e83ef536b57956c1e76c681a67fddd825cc3d1c597abfc9fb3301c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e2772a758e83ef536b57956c1e76c681a67fddd825cc3d1c597abfc9fb3301c6->leave($__internal_e2772a758e83ef536b57956c1e76c681a67fddd825cc3d1c597abfc9fb3301c6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
