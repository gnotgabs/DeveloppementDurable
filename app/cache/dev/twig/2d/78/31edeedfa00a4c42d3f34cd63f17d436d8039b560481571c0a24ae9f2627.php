<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_2d7831edeedfa00a4c42d3f34cd63f17d436d8039b560481571c0a24ae9f2627 extends Twig_Template
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
        return array (  79 => 29,  70 => 26,  62 => 24,  50 => 15,  42 => 12,  30 => 5,  24 => 2,  19 => 1,  87 => 21,  80 => 19,  73 => 15,  45 => 7,  40 => 5,  32 => 6,  21 => 1,  194 => 63,  189 => 58,  186 => 57,  181 => 54,  171 => 43,  168 => 42,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  145 => 18,  137 => 19,  134 => 18,  127 => 19,  117 => 19,  114 => 18,  110 => 13,  107 => 12,  99 => 7,  96 => 25,  90 => 64,  88 => 63,  81 => 57,  77 => 55,  75 => 28,  68 => 49,  66 => 25,  59 => 36,  57 => 10,  44 => 25,  41 => 24,  39 => 11,  35 => 9,  26 => 3,  132 => 66,  124 => 18,  120 => 58,  108 => 52,  104 => 11,  101 => 50,  93 => 48,  91 => 35,  86 => 44,  83 => 30,  78 => 36,  74 => 35,  71 => 34,  69 => 14,  64 => 12,  61 => 11,  56 => 28,  53 => 8,  46 => 14,  43 => 6,  36 => 4,  33 => 6,  28 => 5,);
    }
}
