<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea04b0681df5be4f4372891dbf57cd265f736c45c771d50e480f083206011b extends Twig_Template
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
        $__internal_3d48fb67cf9fbebad575e2400bb34045399ebac1d5cf38d6258ace711acafd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d48fb67cf9fbebad575e2400bb34045399ebac1d5cf38d6258ace711acafd03->enter($__internal_3d48fb67cf9fbebad575e2400bb34045399ebac1d5cf38d6258ace711acafd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5a398b2a398e4983c038e0c2fb23a7b28245db03170113a134b97942c0e26ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a398b2a398e4983c038e0c2fb23a7b28245db03170113a134b97942c0e26ade->enter($__internal_5a398b2a398e4983c038e0c2fb23a7b28245db03170113a134b97942c0e26ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d48fb67cf9fbebad575e2400bb34045399ebac1d5cf38d6258ace711acafd03->leave($__internal_3d48fb67cf9fbebad575e2400bb34045399ebac1d5cf38d6258ace711acafd03_prof);

        
        $__internal_5a398b2a398e4983c038e0c2fb23a7b28245db03170113a134b97942c0e26ade->leave($__internal_5a398b2a398e4983c038e0c2fb23a7b28245db03170113a134b97942c0e26ade_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c783a35d6ccd5aae3f5e5cc2183d551ad5bafab76a388e8136f16384dcc6e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c783a35d6ccd5aae3f5e5cc2183d551ad5bafab76a388e8136f16384dcc6e1a->enter($__internal_3c783a35d6ccd5aae3f5e5cc2183d551ad5bafab76a388e8136f16384dcc6e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce3e32767a9bb797726ac0de1bd064f767652776c0fb3983fff8116ee2283518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3e32767a9bb797726ac0de1bd064f767652776c0fb3983fff8116ee2283518->enter($__internal_ce3e32767a9bb797726ac0de1bd064f767652776c0fb3983fff8116ee2283518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ce3e32767a9bb797726ac0de1bd064f767652776c0fb3983fff8116ee2283518->leave($__internal_ce3e32767a9bb797726ac0de1bd064f767652776c0fb3983fff8116ee2283518_prof);

        
        $__internal_3c783a35d6ccd5aae3f5e5cc2183d551ad5bafab76a388e8136f16384dcc6e1a->leave($__internal_3c783a35d6ccd5aae3f5e5cc2183d551ad5bafab76a388e8136f16384dcc6e1a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f01cbc24d552ed6414ecc5afd275975e7215dd3f94ade16ddabc9da306ae8e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f01cbc24d552ed6414ecc5afd275975e7215dd3f94ade16ddabc9da306ae8e0->enter($__internal_8f01cbc24d552ed6414ecc5afd275975e7215dd3f94ade16ddabc9da306ae8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_355768e16b20fb69b91b6f5ae20e02d659471a246c4d7cbb4496a1679d7b2a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355768e16b20fb69b91b6f5ae20e02d659471a246c4d7cbb4496a1679d7b2a9a->enter($__internal_355768e16b20fb69b91b6f5ae20e02d659471a246c4d7cbb4496a1679d7b2a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_355768e16b20fb69b91b6f5ae20e02d659471a246c4d7cbb4496a1679d7b2a9a->leave($__internal_355768e16b20fb69b91b6f5ae20e02d659471a246c4d7cbb4496a1679d7b2a9a_prof);

        
        $__internal_8f01cbc24d552ed6414ecc5afd275975e7215dd3f94ade16ddabc9da306ae8e0->leave($__internal_8f01cbc24d552ed6414ecc5afd275975e7215dd3f94ade16ddabc9da306ae8e0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a835416160558c62c433500036989bbb35c06fa21e7158ee9fccbd301c76e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a835416160558c62c433500036989bbb35c06fa21e7158ee9fccbd301c76e2->enter($__internal_60a835416160558c62c433500036989bbb35c06fa21e7158ee9fccbd301c76e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c4a9e5d55b3ae22f0c07790ebdb1226f582e8f79f8a234c6feb42abf99f2ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4a9e5d55b3ae22f0c07790ebdb1226f582e8f79f8a234c6feb42abf99f2ad3->enter($__internal_4c4a9e5d55b3ae22f0c07790ebdb1226f582e8f79f8a234c6feb42abf99f2ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4c4a9e5d55b3ae22f0c07790ebdb1226f582e8f79f8a234c6feb42abf99f2ad3->leave($__internal_4c4a9e5d55b3ae22f0c07790ebdb1226f582e8f79f8a234c6feb42abf99f2ad3_prof);

        
        $__internal_60a835416160558c62c433500036989bbb35c06fa21e7158ee9fccbd301c76e2->leave($__internal_60a835416160558c62c433500036989bbb35c06fa21e7158ee9fccbd301c76e2_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
