<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3d0c933cf3f16c68c308e84e4dd784fa58d7c8e0a43a44712199a7d91c004a02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aeecc520c1fcc71f8c0efb641622a645d3fe4efae7fd414340706e234949be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aeecc520c1fcc71f8c0efb641622a645d3fe4efae7fd414340706e234949be5->enter($__internal_1aeecc520c1fcc71f8c0efb641622a645d3fe4efae7fd414340706e234949be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_239b649382de86e3f21d2bf746fec3def6105e437375d2b5d833099b1a17a094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239b649382de86e3f21d2bf746fec3def6105e437375d2b5d833099b1a17a094->enter($__internal_239b649382de86e3f21d2bf746fec3def6105e437375d2b5d833099b1a17a094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aeecc520c1fcc71f8c0efb641622a645d3fe4efae7fd414340706e234949be5->leave($__internal_1aeecc520c1fcc71f8c0efb641622a645d3fe4efae7fd414340706e234949be5_prof);

        
        $__internal_239b649382de86e3f21d2bf746fec3def6105e437375d2b5d833099b1a17a094->leave($__internal_239b649382de86e3f21d2bf746fec3def6105e437375d2b5d833099b1a17a094_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39a263e8a3c81bdce0bed4deee7f91cd432977e2d6ba475f0b8a5e6c0278ea2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a263e8a3c81bdce0bed4deee7f91cd432977e2d6ba475f0b8a5e6c0278ea2e->enter($__internal_39a263e8a3c81bdce0bed4deee7f91cd432977e2d6ba475f0b8a5e6c0278ea2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a718dd7e6b3389c53f2fe90346e9a6ea148caf3ab1c04df0f0b886c3faba2938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a718dd7e6b3389c53f2fe90346e9a6ea148caf3ab1c04df0f0b886c3faba2938->enter($__internal_a718dd7e6b3389c53f2fe90346e9a6ea148caf3ab1c04df0f0b886c3faba2938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a718dd7e6b3389c53f2fe90346e9a6ea148caf3ab1c04df0f0b886c3faba2938->leave($__internal_a718dd7e6b3389c53f2fe90346e9a6ea148caf3ab1c04df0f0b886c3faba2938_prof);

        
        $__internal_39a263e8a3c81bdce0bed4deee7f91cd432977e2d6ba475f0b8a5e6c0278ea2e->leave($__internal_39a263e8a3c81bdce0bed4deee7f91cd432977e2d6ba475f0b8a5e6c0278ea2e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
