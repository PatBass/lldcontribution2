<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_663dd0a959c1578efa362ab23a08581c24454ed3ba61fe240bfa63f5b3e5577b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd007f5b7bef779c67cb88b3e97acb898da2fd98e1d12f3fc2b83a96a213cbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd007f5b7bef779c67cb88b3e97acb898da2fd98e1d12f3fc2b83a96a213cbf4->enter($__internal_bd007f5b7bef779c67cb88b3e97acb898da2fd98e1d12f3fc2b83a96a213cbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd007f5b7bef779c67cb88b3e97acb898da2fd98e1d12f3fc2b83a96a213cbf4->leave($__internal_bd007f5b7bef779c67cb88b3e97acb898da2fd98e1d12f3fc2b83a96a213cbf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87de521c27cea8b6bcbf26d3b8188a475440a0ddd8f79f5f6eef5a66d4a787dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87de521c27cea8b6bcbf26d3b8188a475440a0ddd8f79f5f6eef5a66d4a787dd->enter($__internal_87de521c27cea8b6bcbf26d3b8188a475440a0ddd8f79f5f6eef5a66d4a787dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87de521c27cea8b6bcbf26d3b8188a475440a0ddd8f79f5f6eef5a66d4a787dd->leave($__internal_87de521c27cea8b6bcbf26d3b8188a475440a0ddd8f79f5f6eef5a66d4a787dd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_57b5fd6ea4d222fc99b1cced5eb067601ee24081095bde5497d437a99489b604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b5fd6ea4d222fc99b1cced5eb067601ee24081095bde5497d437a99489b604->enter($__internal_57b5fd6ea4d222fc99b1cced5eb067601ee24081095bde5497d437a99489b604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_57b5fd6ea4d222fc99b1cced5eb067601ee24081095bde5497d437a99489b604->leave($__internal_57b5fd6ea4d222fc99b1cced5eb067601ee24081095bde5497d437a99489b604_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a5b26bc5571e14e53634331bb53c69a4fd42ed339bf44f7f011a0ea229e2e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5b26bc5571e14e53634331bb53c69a4fd42ed339bf44f7f011a0ea229e2e7c->enter($__internal_9a5b26bc5571e14e53634331bb53c69a4fd42ed339bf44f7f011a0ea229e2e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a5b26bc5571e14e53634331bb53c69a4fd42ed339bf44f7f011a0ea229e2e7c->leave($__internal_9a5b26bc5571e14e53634331bb53c69a4fd42ed339bf44f7f011a0ea229e2e7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/lldcontribution/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
