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
        return array (  91 => 35,  79 => 29,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  24 => 2,  19 => 1,  87 => 21,  73 => 15,  69 => 14,  61 => 11,  53 => 8,  45 => 7,  43 => 6,  40 => 5,  36 => 4,  21 => 1,  181 => 60,  176 => 56,  171 => 53,  161 => 42,  158 => 41,  155 => 40,  150 => 34,  145 => 21,  138 => 18,  135 => 17,  127 => 18,  124 => 17,  117 => 18,  114 => 17,  110 => 13,  99 => 7,  96 => 25,  88 => 60,  83 => 30,  81 => 56,  75 => 28,  68 => 48,  66 => 25,  59 => 35,  57 => 10,  44 => 24,  41 => 23,  39 => 11,  33 => 6,  26 => 3,  113 => 53,  107 => 12,  104 => 11,  102 => 48,  95 => 44,  90 => 61,  82 => 41,  80 => 19,  77 => 54,  74 => 33,  70 => 26,  67 => 30,  64 => 12,  56 => 24,  52 => 23,  47 => 21,  42 => 12,  35 => 9,  32 => 6,  27 => 5,);
    }
}
