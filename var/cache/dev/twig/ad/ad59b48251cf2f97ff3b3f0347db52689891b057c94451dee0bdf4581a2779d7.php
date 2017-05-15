<?php

/* login.html.twig */
class __TwigTemplate_0309e8fe5f78a3c8a890095ae45021d30b24c5862b8630451fe931b706737e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08edb3131f9d4267ad9265b28d12f7d066b108b8613d5f08b320c332842b6850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08edb3131f9d4267ad9265b28d12f7d066b108b8613d5f08b320c332842b6850->enter($__internal_08edb3131f9d4267ad9265b28d12f7d066b108b8613d5f08b320c332842b6850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_f58f7edf4a8589fba4ac3572f0a0c2a986b9649a43cc7f703316204bfe86d89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58f7edf4a8589fba4ac3572f0a0c2a986b9649a43cc7f703316204bfe86d89a->enter($__internal_f58f7edf4a8589fba4ac3572f0a0c2a986b9649a43cc7f703316204bfe86d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>";
        
        $__internal_08edb3131f9d4267ad9265b28d12f7d066b108b8613d5f08b320c332842b6850->leave($__internal_08edb3131f9d4267ad9265b28d12f7d066b108b8613d5f08b320c332842b6850_prof);

        
        $__internal_f58f7edf4a8589fba4ac3572f0a0c2a986b9649a43cc7f703316204bfe86d89a->leave($__internal_f58f7edf4a8589fba4ac3572f0a0c2a986b9649a43cc7f703316204bfe86d89a_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <button type=\"submit\">login</button>
</form>", "login.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\login.html.twig");
    }
}
