$(document).ready(function(){$("#tabs").show(),$("#tabs").tabs({show:function(e,t){var a=$(this).data("lastOpenedPanel");$(this).data("topPositionTab")||$(this).data("topPositionTab",$(t.panel).position().top),$(t.panel).css({zIndex:99}).hide().fadeIn(500),a&&a.toggleClass("ui-tabs-hide").css("position","absolute").css("top",$(this).data("topPositionTab")+"px").css({zIndex:99}).fadeOut(500,function(){$(this).css("position","")}),$(this).data("lastOpenedPanel",$(t.panel))}}),$(".open-tab").click(function(){$("#tab-5").prop("checked",!0),$("html, body").animate({scrollTop:$("label[for^='tab-5']").offset().top},500)}),$("#responsive-tabs input#tab-1").click(function(){$("html, body").animate({scrollTop:$("label[for^='tab-1']").offset().top},500)}),$("#responsive-tabs input#tab-2").click(function(){$("html, body").animate({scrollTop:$("label[for^='tab-2']").offset().top},500)}),$("#responsive-tabs input#tab-3").click(function(){$("html, body").animate({scrollTop:$("label[for^='tab-3']").offset().top},500)}),$("#responsive-tabs input#tab-4").click(function(){$("html, body").animate({scrollTop:$("label[for^='tab-4']").offset().top},500)}),$("#responsive-tabs input#tab-6").click(function(){$("html, body").animate({scrollTop:$("label[for^='tab-6']").offset().top},500)}),$("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:"fast",padding:40,opacity:.35,showTitle:!1,allow_resize:!0,counter_separator_label:"/",theme:"facebook",modal:!0,social_tools:!1}),$(".fancy").fancybox({maxWidth:800,maxHeight:600,fitToView:!1,width:"80%",height:"70%",autoSize:!1,closeClick:!1,openEffect:"none",closeEffect:"none",helpers:{overlay:!0}}),$(".cognito form + div").css({opacity:"0",visibility:"hidden"}),$(".cognito .c-forms-form .c-progress-steps li:before").css({"border-radius":"0","font-size":"1.6rem",padding:"0"}),$("#nav-icon, .site-overlay").click(function(){$("#nav-icon").toggleClass("open")}),$(".pushy-content .menu-btn").click(function(){$("body").removeClass("pushy-open-right"),$("#nav-icon").removeClass("open")})}),function(e){e.fn.tweet=function(t){function a(e,t){if("string"==typeof e){var a=e;for(var n in t){var r=t[n];a=a.replace(new RegExp("{"+n+"}","g"),null===r?"":r)}return a}return e(t)}function n(t,a){return function(){var n=[];return this.each(function(){n.push(this.replace(t,a))}),e(n)}}function r(t){var n={};return n.item=t,n.source=t.source,n.screen_name=t.from_user||t.user.screen_name,n.avatar_size=o.avatar_size,n.avatar_url=t.profile_image_url||t.user.profile_image_url,n.retweet=void 0!==t.retweeted_status,n.tweet_time=function(e){return Date.parse(e.replace(/^([a-z]{3})( [a-z]{3} \d\d?)(.*)( \d{4})$/i,"$1,$2$4$3"))}(t.created_at),n.join_text="auto"==o.join_text?function(e){return e.match(/^(@([A-Za-z0-9-_]+)) .*/i)?o.auto_join_text_reply:e.match(i)?o.auto_join_text_url:e.match(/^((\w+ed)|just) .*/im)?o.auto_join_text_ed:e.match(/^(\w*ing) .*/i)?o.auto_join_text_ing:o.auto_join_text_default}(t.text):o.join_text,n.tweet_id=t.id_str,n.twitter_base="http://"+o.twitter_url+"/",n.user_url=n.twitter_base+n.screen_name,n.tweet_url=n.user_url+"/status/"+n.tweet_id,n.reply_url=n.twitter_base+"intent/tweet?in_reply_to="+n.tweet_id,n.retweet_url=n.twitter_base+"intent/retweet?tweet_id="+n.tweet_id,n.favorite_url=n.twitter_base+"intent/favorite?tweet_id="+n.tweet_id,n.retweeted_screen_name=n.retweet&&t.retweeted_status.user.screen_name,n.tweet_relative_time=function(e){var t=arguments.length>1?arguments[1]:new Date,a=parseInt((t.getTime()-e)/1e3,10);return"about "+(a<60?a+" seconds ago":a<120?"a minute ago":a<2700?parseInt(a/60,10).toString()+" minutes ago":a<7200?"an hour ago":a<86400?parseInt(a/3600,10).toString()+" hours ago":a<172800?"a day ago":parseInt(a/86400,10).toString()+" days ago")}(n.tweet_time),n.tweet_raw_text=n.retweet?"RT @"+n.retweeted_screen_name+" "+t.retweeted_status.text:t.text,n.tweet_text=e([n.tweet_raw_text]).linkUrl().linkUser().linkHash()[0],n.tweet_text_fancy=e([n.tweet_text]).makeHeart().capAwesome().capEpic()[0],n.user=a('<a class="tweet_user" href="{user_url}">{screen_name}</a>',n),n.join=o.join_text?a(' <span class="tweet_join">{join_text}</span> ',n):" ",n.avatar=n.avatar_size?a('<a class="tweet_avatar" href="{user_url}"><img src="{avatar_url}" height="{avatar_size}" width="{avatar_size}" alt="{screen_name}\'s avatar" title="{screen_name}\'s avatar" border="0"/></a>',n):"",n.time=a('<span class="tweet_time"><a href="{tweet_url}" title="view tweet on twitter">{tweet_relative_time}</a></span>',n),n.text=a('<span class="tweet_text">{tweet_text_fancy}</span>',n),n.reply_action=a('<a class="tweet_action tweet_reply" href="{reply_url}">reply</a>',n),n.retweet_action=a('<a class="tweet_action tweet_retweet" href="{retweet_url}">retweet</a>',n),n.favorite_action=a('<a class="tweet_action tweet_favorite" href="{favorite_url}">favorite</a>',n),n}var o=e.extend({username:null,list:null,favorites:!1,query:null,avatar_size:null,count:3,fetch:null,page:1,retweets:!0,intro_text:null,outro_text:null,join_text:null,auto_join_text_default:"i said,",auto_join_text_ed:"i",auto_join_text_ing:"i am",auto_join_text_reply:"i replied to",auto_join_text_url:"i was looking at",loading_text:null,refresh_interval:null,twitter_url:"twitter.com",twitter_api_url:"api.twitter.com",twitter_search_url:"search.twitter.com",template:"{avatar}{time}{join}{text}",comparator:function(e,t){return t.tweet_time-e.tweet_time},filter:function(){return!0}},t),i=/\b((?:[a-z][\w-]+:(?:\/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'".,<>?«»""'']))/gi;return e.extend({tweet:{t:a}}),e.fn.extend({linkUrl:n(i,function(e){return'<a href="'+(/^[a-z]+:/i.test(e)?e:"http://"+e)+'">'+e+"</a>"}),linkUser:n(/@(\w+)/gi,'@<a href="http://'+o.twitter_url+'/$1">$1</a>'),linkHash:n(/(?:^| )[\#]+([\w\u00c0-\u00d6\u00d8-\u00f6\u00f8-\u00ff\u0600-\u06ff]+)/gi,' <a href="http://'+o.twitter_search_url+"/search?q=&tag=$1&lang=all"+(o.username&&1==o.username.length?"&from="+o.username.join("%2BOR%2B"):"")+'">#$1</a>'),capAwesome:n(/\b(awesome)\b/gi,'<span class="awesome">$1</span>'),capEpic:n(/\b(epic)\b/gi,'<span class="epic">$1</span>'),makeHeart:n(/(&lt;)+[3]/gi,"<tt class='heart'>&#x2665;</tt>")}),this.each(function(t,n){var i=e('<ul class="tweet_list">').appendTo(n),s='<p class="tweet_intro">'+o.intro_text+"</p>",l='<p class="tweet_outro">'+o.outro_text+"</p>",c=e('<p class="loading">'+o.loading_text+"</p>");o.username&&"string"==typeof o.username&&(o.username=[o.username]),o.loading_text&&e(n).append(c),e(n).bind("tweet:load",function(){e.getJSON(function(){var e="https:"==document.location.protocol?"https:":"http:",t=null===o.fetch?o.count:o.fetch;if(o.list)return e+"//"+o.twitter_api_url+"/1/"+o.username[0]+"/lists/"+o.list+"/statuses.json?page="+o.page+"&per_page="+t+"&callback=?";if(o.favorites)return e+"//"+o.twitter_api_url+"/favorites/"+o.username[0]+".json?page="+o.page+"&count="+t+"&callback=?";if(null===o.query&&1==o.username.length)return e+"//"+o.twitter_api_url+"/1/statuses/user_timeline.json?screen_name="+o.username[0]+"&count="+t+(o.retweets?"&include_rts=1":"")+"&page="+o.page+"&callback=?";var a=o.query||"from:"+o.username.join(" OR from:");return e+"//"+o.twitter_search_url+"/search.json?&q="+encodeURIComponent(a)+"&rpp="+t+"&page="+o.page+"&callback=?"}(),function(t){o.loading_text&&c.remove(),o.intro_text&&i.before(s),i.empty();var u=e.map(t.results||t,r);u=e.grep(u,o.filter).sort(o.comparator).slice(0,o.count),i.append(e.map(u,function(e){return"<li>"+a(o.template,e)+"</li>"}).join("")).children("li:first").addClass("tweet_first").end().children("li:odd").addClass("tweet_even").end().children("li:even").addClass("tweet_odd"),o.outro_text&&i.after(l),e(n).trigger("loaded").trigger(0===u.length?"empty":"full"),o.refresh_interval&&window.setTimeout(function(){e(n).trigger("tweet:load")},1e3*o.refresh_interval)})}).trigger("tweet:load")})}}(jQuery),function(e,t){function a(e,t){return typeof e===t}var n=[],r=[],o={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var a=this;setTimeout(function(){t(a[e])},0)},addTest:function(e,t,a){r.push({name:e,fn:t,options:a})},addAsyncTest:function(e){r.push({name:null,fn:e})}},i=function(){};i.prototype=o,i=new i;var s=t.documentElement,l="svg"===s.nodeName.toLowerCase();l||function(e,t){function a(e,t){var a=e.createElement("p"),n=e.getElementsByTagName("head")[0]||e.documentElement;return a.innerHTML="x<style>"+t+"</style>",n.insertBefore(a.lastChild,n.firstChild)}function n(){var e=g.elements;return"string"==typeof e?e.split(" "):e}function r(e){var t=h[e[m]];return t||(t={},_++,e[m]=_,h[_]=t),t}function o(e,a,n){if(a||(a=t),u)return a.createElement(e);n||(n=r(a));var o;return!(o=n.cache[e]?n.cache[e].cloneNode():d.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e)).canHaveChildren||f.test(e)||o.tagUrn?o:n.frag.appendChild(o)}function i(e){e||(e=t);var i=r(e);return!g.shivCSS||c||i.hasCSS||(i.hasCSS=!!a(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),u||function(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(a){return g.shivMethods?o(a,e,t):t.createElem(a)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+n().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(g,t.frag)}(e,i),e}function s(e){for(var t,a=e.getElementsByTagName("*"),r=a.length,o=RegExp("^(?:"+n().join("|")+")$","i"),i=[];r--;)t=a[r],o.test(t.nodeName)&&i.push(t.applyElement(function(e){for(var t,a=e.attributes,n=a.length,r=e.ownerDocument.createElement(w+":"+e.nodeName);n--;)(t=a[n]).specified&&r.setAttribute(t.nodeName,t.nodeValue);return r.style.cssText=e.style.cssText,r}(t)));return i}function l(e){function t(){clearTimeout(l._removeSheetTimer),o&&o.removeNode(!0),o=null}var o,i,l=r(e),c=e.namespaces,u=e.parentWindow;return!b||e.printShived?e:(void 0===c[w]&&c.add(w),u.attachEvent("onbeforeprint",function(){t();for(var r,l,c,u=e.styleSheets,p=[],f=u.length,d=Array(f);f--;)d[f]=u[f];for(;c=d.pop();)if(!c.disabled&&v.test(c.media)){try{r=c.imports,l=r.length}catch(e){l=0}for(f=0;l>f;f++)d.push(r[f]);try{p.push(c.cssText)}catch(e){}}p=function(e){for(var t,a=e.split("{"),r=a.length,o=RegExp("(^|[\\s,>+~])("+n().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),i="$1"+w+"\\:$2";r--;)t=a[r]=a[r].split("}"),t[t.length-1]=t[t.length-1].replace(o,i),a[r]=t.join("}");return a.join("{")}(p.reverse().join("")),i=s(e),o=a(e,p)}),u.attachEvent("onafterprint",function(){(function(e){for(var t=e.length;t--;)e[t].removeNode()})(i),clearTimeout(l._removeSheetTimer),l._removeSheetTimer=setTimeout(t,500)}),e.printShived=!0,e)}var c,u,p=e.html5||{},f=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,d=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,m="_html5shiv",_=0,h={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",c="hidden"in e,u=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){c=!0,u=!0}}();var g={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:"3.7.3",shivCSS:!1!==p.shivCSS,supportsUnknownElements:u,shivMethods:!1!==p.shivMethods,type:"default",shivDocument:i,createElement:o,createDocumentFragment:function(e,a){if(e||(e=t),u)return e.createDocumentFragment();for(var o=(a=a||r(e)).frag.cloneNode(),i=0,s=n(),l=s.length;l>i;i++)o.createElement(s[i]);return o},addElements:function(e,t){var a=g.elements;"string"!=typeof a&&(a=a.join(" ")),"string"!=typeof e&&(e=e.join(" ")),g.elements=a+" "+e,i(t)}};e.html5=g,i(t);var v=/^$|\b(?:all|print)\b/,w="html5shiv",b=!u&&function(){var a=t.documentElement;return!(void 0===t.namespaces||void 0===t.parentWindow||void 0===a.applyElement||void 0===a.removeNode||void 0===e.attachEvent)}();g.type+=" print",g.shivPrint=l,l(t),"object"==typeof module&&module.exports&&(module.exports=g)}(void 0!==e?e:this,t),function(){var e,t,o,s,l,c,u;for(var p in r)if(r.hasOwnProperty(p)){if(e=[],(t=r[p]).name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(o=0;o<t.options.aliases.length;o++)e.push(t.options.aliases[o].toLowerCase());for(s=a(t.fn,"function")?t.fn():t.fn,l=0;l<e.length;l++)c=e[l],1===(u=c.split(".")).length?i[u[0]]=s:(!i[u[0]]||i[u[0]]instanceof Boolean||(i[u[0]]=new Boolean(i[u[0]])),i[u[0]][u[1]]=s),n.push((s?"":"no-")+u.join("-"))}}(),function(e){var t=s.className,a=i._config.classPrefix||"";if(l&&(t=t.baseVal),i._config.enableJSClass){var n=new RegExp("(^|\\s)"+a+"no-js(\\s|$)");t=t.replace(n,"$1"+a+"js$2")}i._config.enableClasses&&(t+=" "+a+e.join(" "+a),l?s.className.baseVal=t:s.className=t)}(n),delete o.addTest,delete o.addAsyncTest;for(var c=0;c<i._q.length;c++)i._q[c]();e.Modernizr=i}(window,document);