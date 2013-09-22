<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Whoops! There was an error.</title>

    <style>.cf:before, .cf:after {content: " ";display: table;} .cf:after {clear: both;} .cf {*zoom: 1;}
body {
  font: 14px "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
  color: #2B2B2B;
  background-color: #e7e7e7;
  padding:0;
  margin: 0;
  max-height: 100%;
}
  a {
    text-decoration: none;
    color: #FE8A59;
  }

.container{
    height: 100%;
    width: 100%;
    position: fixed;
    margin: 0;
    padding: 0;
    left: 0;
    top: 0;
}

.branding {
  position: absolute;
  top: 10px;
  right: 20px;
  color: #777777;
  font-size: 10px;
    z-index: 100;
}
  .branding a {
    color: #CD3F3F;
  }

header {
  padding: 20px 20px;
  color: #555;
  background: #ddd;
  box-sizing: border-box;
  border-left: 5px solid #ED3D1A;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAACWCAYAAADaDe2PAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBNTk1RDY3OTlBRkQxMUUyOUM0M0EzNzM1OTdBRTY0NyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBNTk1RDY3QTlBRkQxMUUyOUM0M0EzNzM1OTdBRTY0NyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkE1OTVENjc3OUFGRDExRTI5QzQzQTM3MzU5N0FFNjQ3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkE1OTVENjc4OUFGRDExRTI5QzQzQTM3MzU5N0FFNjQ3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+GLAjkgAAEaxJREFUeNrsXet2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);
  background-repeat:no-repeat;
  background-position:right;
}
  .exc-title {
    margin: 0;
    color: #616161;
    font-weight:normal;
  }
    .exc-title-primary { color: #ED591A; }
    .exc-message {
      font-size: 32px;
      margin: 5px 0;
      word-wrap: break-word;
    }

.stack-container {
    height: 100%;
    position: relative;
}

.details-container {
  height: 100%;
  overflow: auto;
  float: right;
  width: 70%;
  background: #fff;
}
  .details {
    padding: 10px 20px;
    border-left: 5px solid rgba(0, 0, 0, .2);
  }

.frames-container {
  height: 100%;
  overflow: auto;
  float: left;
  width: 30%;
}
  .frame {
    padding: 14px;
    background: #F3F3F3;
    border-right: 1px solid rgba(0, 0, 0, .2);
    cursor: pointer;
    font-size:12px;
  }
    .frame.active {
      background-color: #ED591A;
      color: #F3F3F3;

    }

    .frame:not(.active):hover {
      background: #F0E5DF;
    }

    .frame-class, .frame-function, .frame-index {
      font-weight: bold;
    }

    .frame-index {
      font-size: 11px;
      color: #BDBDBD;
    }

    .frame-class {
      color: #ED591A;
    }
      .active .frame-class {
        color: #5E2204;
      }

    .frame-file {
      font-family: 'Source Code Pro', Monaco, Consolas, "Lucida Console", monospace;
      color:#999;
      word-wrap:break-word;
    }
      .editor-link {
        color: inherit;
      }
        .editor-link:hover strong {
          color: #F0E5DF;
        }

        .editor-link-callout {
          padding: 2px 4px;
          background: #872D00;
        }

    .frame-line {
      font-weight: bold;
      color: #A33202;
    }

    .active .frame-file{ color:#872D00; }

    .active .frame-line { color: #fff; }
    .frame-line:before {
      content: ":";
    }

    .frame-code {
      padding: 20px;
      background: #f0f0f0;
      display: none;
      border-left: 5px solid #EDA31A;
    }

    .frame-code.active {
      display: block;
    }

    .frame-code .frame-file {
      background: #ED591A;
      color: #fff;
      padding: 10px 10px 10px 10px;
      font-size:11px;
      font-weight:normal;
    }

    .code-block {
      padding: 10px;
      margin: 0;
      box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
    }

    .linenums {
      margin: 0;
      margin-left: 10px;
    }

    .frame-comments {
      border-top: none;
      padding: 5px;
      font-size: 12px;
      background: #404040;
    }

    .frame-comments.empty {
      padding: 8px 15px;
    }

    .frame-comments.empty:before {
      content: "No comments for this stack frame.";
      color: #828282;
    }

    .frame-comment {
      padding: 10px 5px;
      color: #D2D2D2;
    }

    .frame-comment:not(:last-child) {
      border-bottom: 1px dotted rgba(0, 0, 0, .3);
    }

    .frame-comment-context {
      font-size: 10px;
      font-weight: bold;
      color: #86D2B6;
    }

.data-table-container label {
  font-size: 16px;
  font-weight: bold;
  color: #ED591A;
  margin: 10px 0;
  padding: 10px 0;

  display: block;
  margin-bottom: 5px;
  padding-bottom: 5px;
  border-bottom: 1px solid rgba(0, 0, 0, .08);
}
  .data-table {
    width: 100%;
    margin: 10px 0;
    font: 12px 'Source Code Pro', Monaco, Consolas, "Lucida Console", monospace;
  }

  .data-table thead {
    display: none;
  }

  .data-table tr {
    padding: 5px 0;
  }

  .data-table td:first-child {
    width: 20%;
    min-width: 130px;
    overflow: hidden;
    color: #463C54;
    padding-right: 5px;

  }

  .data-table td:last-child {
    width: 80%;
    color:#999;
    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
  }

  .data-table .empty {
    color: rgba(0, 0, 0, .3);
    font-style: italic;
  }

.handler {
  padding: 10px;
  font: 14px monospace;
}

.handler.active {
  color: #BBBBBB;
  background: #989898;
  font-weight: bold;
}

/* prettify code style
Uses the Doxy theme as a base */
pre .str, code .str { color: #E3B446; }  /* string  */
pre .kwd, code .kwd { color: #DB613B;  font-weight: bold; }  /* keyword*/
pre .com, code .com { color: #555; font-weight: bold; } /* comment */
pre .typ, code .typ { color: #fff; }  /* type  */
pre .lit, code .lit { color: #17CFB6; }  /* literal */
pre .pun, code .pun { color: #93a1a1; font-weight: bold;  } /* punctuation  */
pre .pln, code .pln { color: #ccc; }  /* plaintext  */
pre .tag, code .tag { color: #DB613B; }  /* html/xml tag  */
pre .htm, code .htm { color: #dda0dd; }  /* html tag */
pre .xsl, code .xsl { color: #d0a0d0; }  /* xslt tag */
pre .atn, code .atn { color: #fff; font-weight: normal;} /* html/xml attribute name */
pre .atv, code .atv { color: #E3B446; }  /* html/xml attribute value  */
pre .dec, code .dec { color: #fff; }  /* decimal  */
pre.prettyprint, code.prettyprint {
  font-weight:normal;
  font-family: 'Source Code Pro', Monaco, Consolas, "Lucida Console", monospace;
  background: #272727;
  color: #929292;
  font-size:11px;
  line-height:1.5em;
}
  pre.prettyprint {
    white-space: pre-wrap;
  }

  pre.prettyprint a, code.prettyprint a {
    text-decoration:none;
  }

  .linenums li {
    color: #A5A5A5;
  }

  .linenums li.current{
    background: rgba(255, 255, 255, .05);
    padding-top: 4px;
    padding-left: 1px;
  }
    .linenums li.current.active {
      background: rgba(255, 255, 255, .1);
    }</style>
  </head>
  <body>
    <div class="container">

      <div class="stack-container">

        <div class="frames-container cf ">

                                <div class="frame active" id="frame-line-0">
    <div class="frame-method-info">
      <span class="frame-index">13.</span>
                  <span class="frame-class">UnexpectedValueException</span>
                  <span class="frame-function"></span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;symfony/&shy;http-foundation/&shy;Symfony/&shy;Component/&shy;HttpFoundation/&shy;Response.php<!--
             --><span class="frame-line">358</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-1">
    <div class="frame-method-info">
      <span class="frame-index">12.</span>
                  <span class="frame-class">Symfony\Component\HttpFoundation\Response</span>
                  <span class="frame-function">setContent</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Http/&shy;Response.php<!--
             --><span class="frame-line">72</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-2">
    <div class="frame-method-info">
      <span class="frame-index">11.</span>
                  <span class="frame-class">Illuminate\Http\Response</span>
                  <span class="frame-function">setContent</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;symfony/&shy;http-foundation/&shy;Symfony/&shy;Component/&shy;HttpFoundation/&shy;Response.php<!--
             --><span class="frame-line">141</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-3">
    <div class="frame-method-info">
      <span class="frame-index">10.</span>
                  <span class="frame-class">Symfony\Component\HttpFoundation\Response</span>
                  <span class="frame-function">__construct</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Router.php<!--
             --><span class="frame-line">1414</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-4">
    <div class="frame-method-info">
      <span class="frame-index">9.</span>
                  <span class="frame-class">Illuminate\Routing\Router</span>
                  <span class="frame-function">prepare</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Controllers/&shy;Controller.php<!--
             --><span class="frame-line">156</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-5">
    <div class="frame-method-info">
      <span class="frame-index">8.</span>
                  <span class="frame-class">Illuminate\Routing\Controllers\Controller</span>
                  <span class="frame-function">processResponse</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Controllers/&shy;Controller.php<!--
             --><span class="frame-line">126</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-6">
    <div class="frame-method-info">
      <span class="frame-index">7.</span>
                  <span class="frame-class">Illuminate\Routing\Controllers\Controller</span>
                  <span class="frame-function">callAction</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Router.php<!--
             --><span class="frame-line">985</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-7">
    <div class="frame-method-info">
      <span class="frame-index">6.</span>
                  <span class="frame-class">Illuminate\Routing\Router</span>
                  <span class="frame-function">Illuminate\Routing\{closure}</span>
                </div>

              <span class="frame-file">
                <#unknown><!--
             --><span class="frame-line">0</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-8">
    <div class="frame-method-info">
      <span class="frame-index">5.</span>
                  <span class="frame-class"></span>
                  <span class="frame-function">call_user_func_array</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Route.php<!--
             --><span class="frame-line">80</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-9">
    <div class="frame-method-info">
      <span class="frame-index">4.</span>
                  <span class="frame-class">Illuminate\Routing\Route</span>
                  <span class="frame-function">callCallable</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Route.php<!--
             --><span class="frame-line">47</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-10">
    <div class="frame-method-info">
      <span class="frame-index">3.</span>
                  <span class="frame-class">Illuminate\Routing\Route</span>
                  <span class="frame-function">run</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Routing/&shy;Router.php<!--
             --><span class="frame-line">1016</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-11">
    <div class="frame-method-info">
      <span class="frame-index">2.</span>
                  <span class="frame-class">Illuminate\Routing\Router</span>
                  <span class="frame-function">dispatch</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Foundation/&shy;Application.php<!--
             --><span class="frame-line">530</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-12">
    <div class="frame-method-info">
      <span class="frame-index">1.</span>
                  <span class="frame-class">Illuminate\Foundation\Application</span>
                  <span class="frame-function">dispatch</span>
                </div>

              <span class="frame-file">
                …/&shy;vendor/&shy;laravel/&shy;framework/&shy;src/&shy;Illuminate/&shy;Foundation/&shy;Application.php<!--
             --><span class="frame-line">506</span>
              </span>
            </div>
                      <div class="frame " id="frame-line-13">
    <div class="frame-method-info">
      <span class="frame-index">0.</span>
                  <span class="frame-class">Illuminate\Foundation\Application</span>
                  <span class="frame-function">run</span>
                </div>

              <span class="frame-file">
                …/&shy;public/&shy;index.php<!--
             --><span class="frame-line">49</span>
              </span>
            </div>
          
        </div>

        <div class="details-container cf">

          <header>
            <div class="exception">
              <h3 class="exc-title">
                                                      <span class="exc-title-primary">UnexpectedValueException</span>
                                                </h3>
              <p class="exc-message">
                The Response content must be a string or object implementing __toString(), &quot;boolean&quot; given.              </p>
            </div>
          </header>

                    <div class="frame-code-container ">
                                          <div class="frame-code active" id="frame-code-0">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Fsymfony%2Fhttp-foundation%2FSymfony%2FComponent%2FHttpFoundation%2FResponse.php&line=358" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Response.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:351">     * @throws \UnexpectedValueException
     *
     * @api
     */
    public function setContent($content)
    {
        if (null !== $content &amp;&amp; !is_string($content) &amp;&amp; !is_numeric($content) &amp;&amp; !is_callable(array($content, &#039;__toString&#039;))) {
            throw new \UnexpectedValueException(sprintf(&#039;The Response content must be a string or object implementing __toString(), &quot;%s&quot; given.&#039;, gettype($content)));
        }
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-1">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FHttp%2FResponse.php&line=72" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Http/Response.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:65">		// render method on the object so we will avoid any &quot;__toString&quot; exceptions
		// that might be thrown and have their errors obscured by PHP&#039;s handling.
		elseif ($content instanceof RenderableInterface)
		{
			$content = $content-&gt;render();
		}
 
		return parent::setContent($content);
	}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-2">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Fsymfony%2Fhttp-foundation%2FSymfony%2FComponent%2FHttpFoundation%2FResponse.php&line=141" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Response.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:134">     * @throws \InvalidArgumentException When the HTTP status code is not valid
     *
     * @api
     */
    public function __construct($content = &#039;&#039;, $status = 200, $headers = array())
    {
        $this-&gt;headers = new ResponseHeaderBag($headers);
        $this-&gt;setContent($content);
        $this-&gt;setStatusCode($status);
        $this-&gt;setProtocolVersion(&#039;1.0&#039;);</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-3">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FRouter.php&line=1414" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Router.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:1407">	 *
	 * @param  mixed  $value
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function prepare($value, Request $request)
	{
		if ( ! $value instanceof SymfonyResponse) $value = new Response($value);
 
		return $value-&gt;prepare($request);</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-4">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FControllers%2FController.php&line=156" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Controllers/Controller.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:149">	protected function processResponse($router, $method, $response)
	{
		$request = $router-&gt;getRequest();
 
		// The after filters give the developers one last chance to do any last minute
		// processing on the response. The response has already been converted to a
		// full Response object and will also be handed off to the after filters.
		$response = $router-&gt;prepare($response, $request);
 
		$this-&gt;callAfterFilters($router, $method, $response);</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-5">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FControllers%2FController.php&line=126" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Controllers/Controller.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:119">		// used we will assume we want to just return the layout view as any nested
		// views were probably bound on this view during this controller actions.
		if (is_null($response) and ! is_null($this-&gt;layout))
		{
			$response = $this-&gt;layout;
		}
 
		return $this-&gt;processResponse($router, $method, $response);
	}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-6">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FRouter.php&line=985" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Router.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:978">			// We will extract the passed in parameters off of the route object so we will
			// pass them off to the controller method as arguments. We will not get the
			// defaults so that the controllers will be able to use its own defaults.
			$args = array_values($route-&gt;getParametersWithoutDefaults());
 
			$instance = $ioc-&gt;make($controller);
 
			return $instance-&gt;callAction($ioc, $me, $method, $args);
		};
	}</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-7">
                  <div class="frame-file">
                                                              <strong>&lt;#unknown&gt;</strong>
                                      </div>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-8">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FRoute.php&line=80" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Route.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:73">	 *
	 * @return mixed
	 */
	protected function callCallable()
	{
		$variables = array_values($this-&gt;getParametersWithoutDefaults());
 
		return call_user_func_array($this-&gt;getOption(&#039;_call&#039;), $variables);
	}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-9">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FRoute.php&line=47" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Route.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:40">		// We will only call the router callable if no &quot;before&quot; middlewares returned
		// a response. If they do, we will consider that the response to requests
		// so that the request &quot;lifecycle&quot; will be easily halted for filtering.
		$response = $this-&gt;callBeforeFilters($request);
 
		if ( ! isset($response))
		{
			$response = $this-&gt;callCallable();
		}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-10">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FRouting%2FRouter.php&line=1016" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Routing/Router.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:1009">		// Once we have the route, we can just run it to get the responses, which will
		// always be instances of the Response class. Once we have the responses we
		// will execute the global &quot;after&quot; middlewares to finish off the request.
		else
		{
			$this-&gt;currentRoute = $route = $this-&gt;findRoute($request);
 
			$response = $route-&gt;run($request);
		}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-11">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FFoundation%2FApplication.php&line=530" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Foundation/Application.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:523">		if ($this-&gt;isDownForMaintenance())
		{
			$response = $this[&#039;events&#039;]-&gt;until(&#039;illuminate.app.down&#039;);
 
			if ( ! is_null($response)) return $this-&gt;prepareResponse($response, $request);
		}
		
		return $this[&#039;router&#039;]-&gt;dispatch($this-&gt;prepareRequest($request));
	}
 </pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-12">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fvendor%2Flaravel%2Fframework%2Fsrc%2FIlluminate%2FFoundation%2FApplication.php&line=506" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/vendor/laravel/framework/src/Illuminate/Foundation/Application.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:499">	/**
	 * Handles the given request and delivers the response.
	 *
	 * @return void
	 */
	public function run()
	{
		$response = $this-&gt;dispatch($this[&#039;request&#039;]);
 
		$this[&#039;router&#039;]-&gt;callCloseFilter($this[&#039;request&#039;], $response);</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                                          <div class="frame-code " id="frame-code-13">
                  <div class="frame-file">
                                                              <a href="subl://open?url=file://%2FApplications%2FMAMP%2Fhtdocs%2Fl4%2Fpublic%2Findex.php&line=49" class="editor-link">
                        <span class="editor-link-callout">open:</span> <strong>/Applications/MAMP/htdocs/l4/public/index.php</strong>
                      </a>
                                      </div>
                                    <pre class="code-block prettyprint linenums:42">| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client&#039;s browser allowing them to enjoy the creative
| and wonderful applications we have created for them.
|
*/
 
$app-&gt;run();
 
/*</pre>
                  
                                    <div class="frame-comments empty">
                                      </div>

                </div>
                      </div>

                    <div class="details">
            <div class="data-table-container" id="data-tables">
                              <div class="data-table" id="sg-serverrequest-data">
                  <label>Server/Request Data</label>
                                        <table class="data-table">
                        <thead>
                          <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                          </tr>
                        </thead>
                                              <tr>
                          <td>REDIRECT_STATUS</td>
                          <td>200</td>
                        </tr>
                                              <tr>
                          <td>HTTP_USER_AGENT</td>
                          <td>curl/7.24.0 (x86_64-apple-darwin12.0) libcurl/7.24.0 OpenSSL/0.9.8x zlib/1.2.5</td>
                        </tr>
                                              <tr>
                          <td>HTTP_HOST</td>
                          <td>localhost:8888</td>
                        </tr>
                                              <tr>
                          <td>HTTP_ACCEPT</td>
                          <td>*/*</td>
                        </tr>
                                              <tr>
                          <td>CONTENT_LENGTH</td>
                          <td>350</td>
                        </tr>
                                              <tr>
                          <td>HTTP_EXPECT</td>
                          <td>100-continue</td>
                        </tr>
                                              <tr>
                          <td>CONTENT_TYPE</td>
                          <td>multipart/form-data; boundary=----------------------------2f0362df0aa0</td>
                        </tr>
                                              <tr>
                          <td>PATH</td>
                          <td>/usr/bin:/bin:/usr/sbin:/sbin</td>
                        </tr>
                                              <tr>
                          <td>SERVER_SIGNATURE</td>
                          <td></td>
                        </tr>
                                              <tr>
                          <td>SERVER_SOFTWARE</td>
                          <td>Apache/2.2.23 (Unix) mod_ssl/2.2.23 OpenSSL/0.9.8x DAV/2 PHP/5.4.10</td>
                        </tr>
                                              <tr>
                          <td>SERVER_NAME</td>
                          <td>localhost</td>
                        </tr>
                                              <tr>
                          <td>SERVER_ADDR</td>
                          <td>127.0.0.1</td>
                        </tr>
                                              <tr>
                          <td>SERVER_PORT</td>
                          <td>8888</td>
                        </tr>
                                              <tr>
                          <td>REMOTE_ADDR</td>
                          <td>127.0.0.1</td>
                        </tr>
                                              <tr>
                          <td>DOCUMENT_ROOT</td>
                          <td>/Applications/MAMP/htdocs</td>
                        </tr>
                                              <tr>
                          <td>SERVER_ADMIN</td>
                          <td>you@example.com</td>
                        </tr>
                                              <tr>
                          <td>SCRIPT_FILENAME</td>
                          <td>/Applications/MAMP/htdocs/l4/public/index.php</td>
                        </tr>
                                              <tr>
                          <td>REMOTE_PORT</td>
                          <td>58734</td>
                        </tr>
                                              <tr>
                          <td>REDIRECT_URL</td>
                          <td>/l4/public/api/v1/sendStat</td>
                        </tr>
                                              <tr>
                          <td>GATEWAY_INTERFACE</td>
                          <td>CGI/1.1</td>
                        </tr>
                                              <tr>
                          <td>SERVER_PROTOCOL</td>
                          <td>HTTP/1.1</td>
                        </tr>
                                              <tr>
                          <td>REQUEST_METHOD</td>
                          <td>POST</td>
                        </tr>
                                              <tr>
                          <td>QUERY_STRING</td>
                          <td></td>
                        </tr>
                                              <tr>
                          <td>REQUEST_URI</td>
                          <td>/l4/public/api/v1/sendStat</td>
                        </tr>
                                              <tr>
                          <td>SCRIPT_NAME</td>
                          <td>/l4/public/index.php</td>
                        </tr>
                                              <tr>
                          <td>PHP_SELF</td>
                          <td>/l4/public/index.php</td>
                        </tr>
                                              <tr>
                          <td>REQUEST_TIME_FLOAT</td>
                          <td>1379718224.35</td>
                        </tr>
                                              <tr>
                          <td>REQUEST_TIME</td>
                          <td>1379718224</td>
                        </tr>
                                              <tr>
                          <td>argv</td>
                          <td>Array
(
)
</td>
                        </tr>
                                              <tr>
                          <td>argc</td>
                          <td>0</td>
                        </tr>
                                            </table>
                                  </div>
                              <div class="data-table" id="sg-get-data">
                  <label>GET Data</label>
                                      <span class="empty">empty</span>
                                  </div>
                              <div class="data-table" id="sg-post-data">
                  <label>POST Data</label>
                                        <table class="data-table">
                        <thead>
                          <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                          </tr>
                        </thead>
                                              <tr>
                          <td>username</td>
                          <td>ghost</td>
                        </tr>
                                              <tr>
                          <td>statname</td>
                          <td>kills</td>
                        </tr>
                                              <tr>
                          <td>statvalue</td>
                          <td>18</td>
                        </tr>
                                            </table>
                                  </div>
                              <div class="data-table" id="sg-files">
                  <label>Files</label>
                                      <span class="empty">empty</span>
                                  </div>
                              <div class="data-table" id="sg-cookies">
                  <label>Cookies</label>
                                      <span class="empty">empty</span>
                                  </div>
                              <div class="data-table" id="sg-session">
                  <label>Session</label>
                                        <table class="data-table">
                        <thead>
                          <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                          </tr>
                        </thead>
                                              <tr>
                          <td>_sf2_attributes</td>
                          <td>Array
(
    [_token] =&gt; XSjRB1jaAgfm6hg8MaBi6GYjCBAkZeUMCBSBNqOE
)
</td>
                        </tr>
                                              <tr>
                          <td>_sf2_flashes</td>
                          <td>Array
(
)
</td>
                        </tr>
                                              <tr>
                          <td>_sf2_meta</td>
                          <td>Array
(
    [u] =&gt; 1379718224
    [c] =&gt; 1379718224
    [l] =&gt; 7200
)
</td>
                        </tr>
                                            </table>
                                  </div>
                              <div class="data-table" id="sg-environment-variables">
                  <label>Environment Variables</label>
                                        <table class="data-table">
                        <thead>
                          <tr>
                            <td class="data-table-k">Key</td>
                            <td class="data-table-v">Value</td>
                          </tr>
                        </thead>
                                              <tr>
                          <td>SHELL</td>
                          <td>/bin/bash</td>
                        </tr>
                                              <tr>
                          <td>TMPDIR</td>
                          <td>/var/folders/tm/z799c0fd1w16pym3f7qfycf40000gn/T/</td>
                        </tr>
                                              <tr>
                          <td>Apple_PubSub_Socket_Render</td>
                          <td>/tmp/launch-TOCwp9/Render</td>
                        </tr>
                                              <tr>
                          <td>USER</td>
                          <td>ashishagarwal</td>
                        </tr>
                                              <tr>
                          <td>COMMAND_MODE</td>
                          <td>unix2003</td>
                        </tr>
                                              <tr>
                          <td>SSH_AUTH_SOCK</td>
                          <td>/tmp/launch-pI9BVm/Listeners</td>
                        </tr>
                                              <tr>
                          <td>Apple_Ubiquity_Message</td>
                          <td>/tmp/launch-VELpOp/Apple_Ubiquity_Message</td>
                        </tr>
                                              <tr>
                          <td>__CF_USER_TEXT_ENCODING</td>
                          <td>0x1F5:0:0</td>
                        </tr>
                                              <tr>
                          <td>PATH</td>
                          <td>/usr/bin:/bin:/usr/sbin:/sbin</td>
                        </tr>
                                              <tr>
                          <td>PWD</td>
                          <td>/</td>
                        </tr>
                                              <tr>
                          <td>HOME</td>
                          <td>/Users/ashishagarwal</td>
                        </tr>
                                              <tr>
                          <td>SHLVL</td>
                          <td>2</td>
                        </tr>
                                              <tr>
                          <td>DYLD_LIBRARY_PATH</td>
                          <td>/Applications/MAMP/Library/lib</td>
                        </tr>
                                              <tr>
                          <td>LOGNAME</td>
                          <td>ashishagarwal</td>
                        </tr>
                                              <tr>
                          <td>DISPLAY</td>
                          <td>/tmp/launch-YGqnIS/org.macosforge.xquartz:0</td>
                        </tr>
                                              <tr>
                          <td>_</td>
                          <td>/Applications/MAMP/Library/bin/httpd</td>
                        </tr>
                                            </table>
                                  </div>
                          </div>

                        <div class="data-table-container" id="handlers">
              <label>Registered Handlers</label>
                              <div class="handler active">
                  0. Whoops\Handler\PrettyPageHandler                </div>
                          </div>

          </div> <!-- .details -->
        </div>

      </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
      $(function() {
        prettyPrint();

        var $frameLines  = $('[id^="frame-line-"]');
        var $activeLine  = $('.frames-container .active');
        var $activeFrame = $('.active[id^="frame-code-"]').show();
        var $container   = $('.details-container');
        var headerHeight = $('header').css('height');

        var highlightCurrentLine = function() {
          // Highlight the active and neighboring lines for this frame:
          var activeLineNumber = +($activeLine.find('.frame-line').text());
          var $lines           = $activeFrame.find('.linenums li');
          var firstLine        = +($lines.first().val());

          $($lines[activeLineNumber - firstLine - 1]).addClass('current');
          $($lines[activeLineNumber - firstLine]).addClass('current active');
          $($lines[activeLineNumber - firstLine + 1]).addClass('current');
        }

        // Highlight the active for the first frame:
        highlightCurrentLine();

        $frameLines.click(function() {
          var $this  = $(this);
          var id     = /frame\-line\-([\d]*)/.exec($this.attr('id'))[1];
          var $codeFrame = $('#frame-code-' + id);

          if($codeFrame) {
            $activeLine.removeClass('active');
            $activeFrame.removeClass('active');

            $this.addClass('active');
            $codeFrame.addClass('active');

            $activeLine  = $this;
            $activeFrame = $codeFrame;

            highlightCurrentLine();

            $container.animate({ scrollTop: headerHeight }, "fast");
          }
        });
      });
    </script>
  </body>