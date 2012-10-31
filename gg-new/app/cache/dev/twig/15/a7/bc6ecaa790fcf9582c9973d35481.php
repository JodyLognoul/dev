<?php

/* ggDefaultBundle:Default:index.html.twig */
class __TwigTemplate_15a7bc6ecaa790fcf9582c9973d35481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " !";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"cadre\">
\t\t<h1>Guestgame</h1>           
\t</div>
\t<div class=\"cadre\">
\t\t<button class=\"btn-ind\">Enregistrer</button>
\t\t<button class=\"btn-ind\">Enregistrer</button>
\t\t<button class=\"btn-ind\">Enregistrer</button>
\t\t<button class=\"btn-ind\">Enregistrer</button>
\t</div>
\t<div class=\"cadre\">
\t\t<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>           
\t</div>
\t<div class=\"cadre\">
\t\t<h1>HTML Ipsum Presents</h1>
\t       
\t\t<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href=\"#\">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

\t\t<h2>Header Level 2</h2>
\t\t\t       
\t\t<ol>
\t\t   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
\t\t   <li>Aliquam tincidunt mauris eu risus.</li>
\t\t</ol>

\t\t<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

\t\t<h3>Header Level 3</h3>

\t\t<ul>
\t\t   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
\t\t   <li>Aliquam tincidunt mauris eu risus.</li>
\t\t</ul>

\t\t<pre><code>
\t\t#header h1 a { 
\t\t\tdisplay: block; 
\t\t\twidth: 300px; 
\t\t\theight: 80px; 
\t\t}
\t\t</code></pre>
\t</div>
\t<div class=\"cadre\">
\t\t<form action=\"#\" method=\"post\">
\t\t    <div>
\t\t         <label for=\"name\">Text Input:</label>
\t\t         <input type=\"text\" name=\"name\" id=\"name\" value=\"\" tabindex=\"1\" />
\t\t    </div>

\t\t    <div>
\t\t         <h4>Radio Button Choice</h4>

\t\t         <label for=\"radio-choice-1\">Choice 1</label>
\t\t         <input type=\"radio\" name=\"radio-choice-1\" id=\"radio-choice-1\" tabindex=\"2\" value=\"choice-1\" />

\t\t\t\t <label for=\"radio-choice-2\">Choice 2</label>
\t\t         <input type=\"radio\" name=\"radio-choice-2\" id=\"radio-choice-2\" tabindex=\"3\" value=\"choice-2\" />
\t\t    </div>

\t\t\t<div>
\t\t\t\t<label for=\"select-choice\">Select Dropdown Choice:</label>
\t\t\t\t<select name=\"select-choice\" id=\"select-choice\">
\t\t\t\t\t<option value=\"Choice 1\">Choice 1</option>
\t\t\t\t\t<option value=\"Choice 2\">Choice 2</option>
\t\t\t\t\t<option value=\"Choice 3\">Choice 3</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t
\t\t\t<div>
\t\t\t\t<label for=\"textarea\">Textarea:</label>
\t\t\t\t<textarea cols=\"40\" rows=\"8\" name=\"textarea\" id=\"textarea\"></textarea>
\t\t\t</div>
\t\t\t
\t\t\t<div>
\t\t\t    <label for=\"checkbox\">Checkbox:</label>
\t\t\t\t<input type=\"checkbox\" name=\"checkbox\" id=\"checkbox\" />
\t\t    </div>

\t\t\t<div>
\t\t\t    <input type=\"submit\" value=\"Submit\" />
\t\t    </div>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ggDefaultBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  27 => 3,);
    }
}
