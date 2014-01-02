<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_5b965ac2ca339d57495a978a0436e0a597e2b2ad2bf9a2b0d0e803f562e28ffd extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  50 => 15,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  98 => 23,  92 => 22,  77 => 17,  68 => 15,  47 => 7,  38 => 4,  33 => 2,  96 => 25,  80 => 19,  66 => 25,  64 => 14,  61 => 13,  53 => 8,  43 => 5,  32 => 6,  21 => 1,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  161 => 35,  149 => 19,  146 => 18,  128 => 19,  125 => 18,  118 => 19,  115 => 18,  108 => 12,  105 => 11,  91 => 35,  89 => 76,  84 => 73,  82 => 18,  78 => 68,  76 => 67,  69 => 14,  60 => 36,  58 => 12,  45 => 7,  42 => 12,  40 => 5,  34 => 6,  27 => 1,  174 => 77,  168 => 74,  165 => 73,  163 => 72,  156 => 22,  151 => 67,  143 => 65,  141 => 64,  138 => 19,  135 => 18,  131 => 54,  122 => 50,  113 => 47,  111 => 13,  106 => 44,  100 => 7,  97 => 6,  90 => 38,  87 => 21,  79 => 29,  73 => 16,  70 => 26,  67 => 41,  62 => 24,  59 => 26,  57 => 10,  52 => 23,  46 => 14,  39 => 17,  36 => 3,  31 => 6,  29 => 5,);
    }
}
