<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/content_translation.overview.html.twig */
class __TwigTemplate_f4d47000b74fdee2e60bc6a0db733b27 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["translation_settings_link_text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            yield t("Content language and translation", array());
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["translation_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink($this->sandbox->ensureToStringAllowed(($context["translation_settings_link_text"] ?? null), 8, $this->source), "language.content_settings_page"));
        // line 9
        $context["content_structure_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("core.content_structure"));
        // line 10
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 11
        yield t("Configure language and translation settings for one or more content entity types (see @content_structure_topic for an overview of content entities). To do this, you must have at least two languages configured. Afterwards, you will have a <em>Translate</em> operation available for your content entities, either as a tab or link when you are viewing or editing content, or on content administration pages.", array("@content_structure_topic" => ($context["content_structure_topic"] ?? null), ));
        yield "</p>
<h2>";
        // line 12
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 14
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Configuration</em> &gt; <em>Region and language</em> &gt; <em>@translation_settings_link</em>.", array("@translation_settings_link" => ($context["translation_settings_link"] ?? null), ));
        yield "</li>
  <li>";
        // line 15
        yield t("Under <em>Custom language settings</em>, find the content entity types that should have customized language settings on your site. Check the box next to each one. A section will appear below the list with settings for that entity type.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("For each entity type you checked, in the settings section below check the boxes for each entity sub-type that should be <em>Translatable</em> on your site. If the entity type does not have sub-types, there is just one check box for the entity type as a whole.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("For each entity type or subtype, select the <em>Default language</em>. Also, if you want to have languages other than the default available when you create content, check <em>Show language selector on create and edit pages</em>.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("For each <em>Translatable</em> type or sub-type, look through the list of fields for the type or sub-type, and verify that only the fields that should be translatable are checked. For example, you would probably want to translate a <em>Title</em> field, but you might not want to translate a <em>Start date</em> field.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Click <em>Save configuration</em> when all of your changes are complete.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/content_translation.overview.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  62 => 12,  58 => 11,  53 => 10,  51 => 9,  49 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/content_translation.overview.html.twig", "/var/www/html/web/core/modules/content_translation/help_topics/content_translation.overview.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 7, "trans" => 7);
        static $filters = array("escape" => 11);
        static $functions = array("render_var" => 8, "help_route_link" => 8, "help_topic_link" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans'],
                ['escape'],
                ['render_var', 'help_route_link', 'help_topic_link'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
