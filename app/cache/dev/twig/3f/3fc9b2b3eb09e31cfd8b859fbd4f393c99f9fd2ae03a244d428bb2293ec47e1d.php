<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_15d031332a01adb9e0bdf9a81908f69f641208d1fe50a1c6781e76cd66e32366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_7f754514cb211754ad8b197b86e75e43ce15bcca1b1ff58970287ffca0ac8f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f754514cb211754ad8b197b86e75e43ce15bcca1b1ff58970287ffca0ac8f10->enter($__internal_7f754514cb211754ad8b197b86e75e43ce15bcca1b1ff58970287ffca0ac8f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f754514cb211754ad8b197b86e75e43ce15bcca1b1ff58970287ffca0ac8f10->leave($__internal_7f754514cb211754ad8b197b86e75e43ce15bcca1b1ff58970287ffca0ac8f10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b8b9b50da9664ba8d44d44b93c0edf692213d9aec761c56641df5fdbf5a9c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b9b50da9664ba8d44d44b93c0edf692213d9aec761c56641df5fdbf5a9c92->enter($__internal_4b8b9b50da9664ba8d44d44b93c0edf692213d9aec761c56641df5fdbf5a9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4b8b9b50da9664ba8d44d44b93c0edf692213d9aec761c56641df5fdbf5a9c92->leave($__internal_4b8b9b50da9664ba8d44d44b93c0edf692213d9aec761c56641df5fdbf5a9c92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80604e843554edd3eafefdc3d569cb3e484610b37ca2057fd3dd7d63762ada1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80604e843554edd3eafefdc3d569cb3e484610b37ca2057fd3dd7d63762ada1b->enter($__internal_80604e843554edd3eafefdc3d569cb3e484610b37ca2057fd3dd7d63762ada1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80604e843554edd3eafefdc3d569cb3e484610b37ca2057fd3dd7d63762ada1b->leave($__internal_80604e843554edd3eafefdc3d569cb3e484610b37ca2057fd3dd7d63762ada1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2398241207370e157b4a1f8f562718137dfacca81f865f3ff9c95bcf067be0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2398241207370e157b4a1f8f562718137dfacca81f865f3ff9c95bcf067be0d6->enter($__internal_2398241207370e157b4a1f8f562718137dfacca81f865f3ff9c95bcf067be0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2398241207370e157b4a1f8f562718137dfacca81f865f3ff9c95bcf067be0d6->leave($__internal_2398241207370e157b4a1f8f562718137dfacca81f865f3ff9c95bcf067be0d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/lldcontribution/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
