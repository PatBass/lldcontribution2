<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29bf571dd504184293c9f981c7fd8d1b9d524ef58d991fe1f6327563a331a472 extends Twig_Template
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
        $__internal_bc1bbebdb5ccbde09d4063e2d5ec2a34979ec9e711cbf13e1589869aa7a1e78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1bbebdb5ccbde09d4063e2d5ec2a34979ec9e711cbf13e1589869aa7a1e78d->enter($__internal_bc1bbebdb5ccbde09d4063e2d5ec2a34979ec9e711cbf13e1589869aa7a1e78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1bbebdb5ccbde09d4063e2d5ec2a34979ec9e711cbf13e1589869aa7a1e78d->leave($__internal_bc1bbebdb5ccbde09d4063e2d5ec2a34979ec9e711cbf13e1589869aa7a1e78d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_458f5c0413fea41b92db337081d9664cd781bf59e8bf18317263624e62a34c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458f5c0413fea41b92db337081d9664cd781bf59e8bf18317263624e62a34c10->enter($__internal_458f5c0413fea41b92db337081d9664cd781bf59e8bf18317263624e62a34c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_458f5c0413fea41b92db337081d9664cd781bf59e8bf18317263624e62a34c10->leave($__internal_458f5c0413fea41b92db337081d9664cd781bf59e8bf18317263624e62a34c10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_184b4d6f821c575104586883e0d4ab2384d8623c9ed4af48bed2b0848e571ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184b4d6f821c575104586883e0d4ab2384d8623c9ed4af48bed2b0848e571ef9->enter($__internal_184b4d6f821c575104586883e0d4ab2384d8623c9ed4af48bed2b0848e571ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_184b4d6f821c575104586883e0d4ab2384d8623c9ed4af48bed2b0848e571ef9->leave($__internal_184b4d6f821c575104586883e0d4ab2384d8623c9ed4af48bed2b0848e571ef9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3fbec1852a554b933ba23e6a73a20d5f921fafd2f8c8733808be0916d3be4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fbec1852a554b933ba23e6a73a20d5f921fafd2f8c8733808be0916d3be4b5->enter($__internal_c3fbec1852a554b933ba23e6a73a20d5f921fafd2f8c8733808be0916d3be4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c3fbec1852a554b933ba23e6a73a20d5f921fafd2f8c8733808be0916d3be4b5->leave($__internal_c3fbec1852a554b933ba23e6a73a20d5f921fafd2f8c8733808be0916d3be4b5_prof);

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
