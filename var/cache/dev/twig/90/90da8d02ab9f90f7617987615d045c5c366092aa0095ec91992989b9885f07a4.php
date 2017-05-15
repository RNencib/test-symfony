<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0fd258d5cd90e6569d1ab61f7a8b5064101977573920a7e0c68993aed9a371c4 extends Twig_Template
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
        $__internal_704d717f5ad72f8751cc7af42c232293eed1ab63da87bb0c3db331b43ed4cbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704d717f5ad72f8751cc7af42c232293eed1ab63da87bb0c3db331b43ed4cbe0->enter($__internal_704d717f5ad72f8751cc7af42c232293eed1ab63da87bb0c3db331b43ed4cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e922474e3adccf9d3cc38cf4e64951afac53f62160dc92b78f62567511c41f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e922474e3adccf9d3cc38cf4e64951afac53f62160dc92b78f62567511c41f8a->enter($__internal_e922474e3adccf9d3cc38cf4e64951afac53f62160dc92b78f62567511c41f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_704d717f5ad72f8751cc7af42c232293eed1ab63da87bb0c3db331b43ed4cbe0->leave($__internal_704d717f5ad72f8751cc7af42c232293eed1ab63da87bb0c3db331b43ed4cbe0_prof);

        
        $__internal_e922474e3adccf9d3cc38cf4e64951afac53f62160dc92b78f62567511c41f8a->leave($__internal_e922474e3adccf9d3cc38cf4e64951afac53f62160dc92b78f62567511c41f8a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e6440d2f115c6ca7202b4102e38e4e1a64203d9db2d18acfd70900d323520e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6440d2f115c6ca7202b4102e38e4e1a64203d9db2d18acfd70900d323520e2->enter($__internal_8e6440d2f115c6ca7202b4102e38e4e1a64203d9db2d18acfd70900d323520e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_507df0767840f3788e76848681c7cabd12e112d6ac017522bc84ea6d3e0485b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507df0767840f3788e76848681c7cabd12e112d6ac017522bc84ea6d3e0485b9->enter($__internal_507df0767840f3788e76848681c7cabd12e112d6ac017522bc84ea6d3e0485b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_507df0767840f3788e76848681c7cabd12e112d6ac017522bc84ea6d3e0485b9->leave($__internal_507df0767840f3788e76848681c7cabd12e112d6ac017522bc84ea6d3e0485b9_prof);

        
        $__internal_8e6440d2f115c6ca7202b4102e38e4e1a64203d9db2d18acfd70900d323520e2->leave($__internal_8e6440d2f115c6ca7202b4102e38e4e1a64203d9db2d18acfd70900d323520e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1711e97320a5c9b6d78cf0478b2dd83800cc3844474af39322ff0ab01430d8fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1711e97320a5c9b6d78cf0478b2dd83800cc3844474af39322ff0ab01430d8fb->enter($__internal_1711e97320a5c9b6d78cf0478b2dd83800cc3844474af39322ff0ab01430d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3661c3e5d113d39853fa2fcd0c7c34540df1b946246cf195f489f108fb6bf359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3661c3e5d113d39853fa2fcd0c7c34540df1b946246cf195f489f108fb6bf359->enter($__internal_3661c3e5d113d39853fa2fcd0c7c34540df1b946246cf195f489f108fb6bf359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3661c3e5d113d39853fa2fcd0c7c34540df1b946246cf195f489f108fb6bf359->leave($__internal_3661c3e5d113d39853fa2fcd0c7c34540df1b946246cf195f489f108fb6bf359_prof);

        
        $__internal_1711e97320a5c9b6d78cf0478b2dd83800cc3844474af39322ff0ab01430d8fb->leave($__internal_1711e97320a5c9b6d78cf0478b2dd83800cc3844474af39322ff0ab01430d8fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3a475278d026c0c525f90d2712c76cf9d2a9cb75b5269601c80e13b425614a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a475278d026c0c525f90d2712c76cf9d2a9cb75b5269601c80e13b425614a0->enter($__internal_a3a475278d026c0c525f90d2712c76cf9d2a9cb75b5269601c80e13b425614a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5094580d2d344494e2ec99f5959d6fd6b9d8cf9cc3a63d3ffeb8ce24bcd60b96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5094580d2d344494e2ec99f5959d6fd6b9d8cf9cc3a63d3ffeb8ce24bcd60b96->enter($__internal_5094580d2d344494e2ec99f5959d6fd6b9d8cf9cc3a63d3ffeb8ce24bcd60b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5094580d2d344494e2ec99f5959d6fd6b9d8cf9cc3a63d3ffeb8ce24bcd60b96->leave($__internal_5094580d2d344494e2ec99f5959d6fd6b9d8cf9cc3a63d3ffeb8ce24bcd60b96_prof);

        
        $__internal_a3a475278d026c0c525f90d2712c76cf9d2a9cb75b5269601c80e13b425614a0->leave($__internal_a3a475278d026c0c525f90d2712c76cf9d2a9cb75b5269601c80e13b425614a0_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
