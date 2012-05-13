<!DOCTYPE html>

<html>

<head>
	<title>Social Test Page</title>
	<link rel="stylesheet" href="/styles/main.css"/>
	<link rel="shortcut icon" href="/images/modea_logo_m.ico"/>

<!-- Tealium universal tag object -->
<script type="text/javascript">
/*
var utag_data = {
  page : "",
  page_type : "",
  section : "",
  activity : "",
  social_action : "",
  content_type : "",
  blog_author : "",
  blog_category : "",
  blog_postdate : "",
  blog_position : "",
  carousel_load : "",
  carousel_view : ""
}*\
</script>
<script type="text/javascript" src="//tealium.hs.llnwd.net/o43/utag/modea/www.modea.com/prod/utag.js"></script>

<!-- Tealium Facebook Button code -->			
<script type="text/javascript">
window.fbAsyncInit = function() {
  FB.init({
    appId      : '##UTVARconfig_appid##', // App ID
    //channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  // Additional initialization code here

};

//tealium universal tag - utag.sender.6003 ut4.0.##UTVERSION##, Copyright ##UTYEAR## Tealium.com Inc. All Rights Reserved.
try{
(function(id,loader,u){
  try{u=utag.o[loader].sender[id]={}}catch(e){u=utag.sender[id]};
  u.ev={'view':1};
  u.qsp_delim="&";
  u.kvp_delim="=";
  u.type="##UTVARconfig_type##";
  u.divid="##UTVARconfig_divid##";
  u.sendbutton="##UTVARconfig_send##";
  u.appid="##UTVARconfig_appid##";
  u.href="##UTVARconfig_href##";
  u.layout="##UTVARconfig_layout##";
  u.width="##UTVARconfig_width##";
  u.height="##UTVARconfig_height##";
  u.colorscheme="##UTVARconfig_colorscheme##";
  u.showfaces="##UTVARconfig_showfaces##";
  u.bordercolor="##UTVARconfig_bordercolor##";
  u.base_url="//connect.facebook.net/##UTVARconfig_locale##/all.js#xfbml=1";
##UTGEN##
  u.send=function(a,b,c,d,e,f){
    if(u.ev[a]||typeof u.ev.all!="undefined"){
      for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};
      c=[];for(d in utag.loader.GV(u.map)){if(typeof b[d]!="undefined"&&b[d]!=""){e=u.map[d].split(",");for(f=0;f<e.length;f++){c.push(e[f]+u.kvp_delim+encodeURIComponent(b[d]))}}}

      if(u.type=="likebutton" && u.divid){
        if(u.divid=="fb-root"){
	  u.divid="tealium_fb##UTID##";
	  d=document.getElementById('fb-root');
	  e=document.createElement('div');e.innerHTML='<div id="'+u.divid+'"></div>';d.parentElement.insertBefore(e,d.nextSibling);
        }
	d=document.getElementById(u.divid);
	d.setAttribute('class','fb-like');
	d.setAttribute('data-href',u.href);
	d.setAttribute('data-send',u.sendbutton);
	d.setAttribute('data-width',u.width);
	d.setAttribute('data-show-faces',u.showfaces);
	d.setAttribute('data-layout',u.layout);
	d.setAttribute('data-colorscheme',u.colorscheme);
      }

      if(u.type=="likebox"){
	e=[];
        u.base_url='//www.facebook.com/plugins/likebox.php?';
	if(u.href=="")u.href="http://"+location.hostname;
	c.push("href="+encodeURIComponent(u.href));
	if(u.width){c.push("width="+u.width);e.push("width:"+u.width+"px")};
	if(u.height){c.push("height="+u.height);e.push("height:"+u.height+"px")};
	c.push("colorscheme="+u.colorscheme);
	if(u.showfaces)c.push("show_faces="+u.showfaces);
	if(u.bordercolor)c.push("border_color="+u.bordercolor);
	//c.push("stream=true&header=true");
	c.push("stream=false&header=false");

	d=document.getElementById(u.divid);
	d.innerHTML='<iframe src="'+u.base_url+c.join('&amp;')+'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; '+e.join('; ')+'" allowTransparency="true"></iframe>';
      
      }else{
        if(document.getElementById("facebook-jssdk")) return;
        u.script=document.getElementsByTagName("script")[0];
        u.scr=document.createElement("script");u.scr.id="facebook-jssdk";u.scr.type="text/javascript";u.scr.src=u.base_url;u.script.parentNode.insertBefore(u.scr,u.script);
      }

    }
  }
  try{utag.o[loader].loader.LOAD(id)}catch(e){utag.loader.LOAD(id)}
})('##UTID##','##UTLOADERID##');
}catch(e){}
</script>

<!-- Tealium Google +1 Button code -->			
<script type='text/javascript'>
//tealium universal tag - utag.sender.7101 ut4.0.##UTVERSION##, Copyright ##UTYEAR## Tealium.com Inc. All Rights Reserved.
window.___gcfg = {
  lang: '##UTVARconfig_lang##',
  parsetags: 'explicit'
};

window.___jsl=window.___jsl||{};
window.___jsl.h=window.___jsl.h||'m;\/_\/apps-static\/_\/js\/gapi\/__features__\/rt=j\/ver=Qj1WIrPcmag.en_US.\/sv=1\/am=!Hh2SKJ9l_2-Ii1Htmg\/d=1\/';
window.___jsl.l=[];
window.___gpq=[];
window.gapi=window.gapi||{};
window.gapi.plusone=window.gapi.plusone||(function(){
  function f(n){return function(){window.___gpq.push(n,arguments)}}
  return{go:f('go'),render:f('render')}})();
function __bsld(){var p=window.gapi.plusone=window.googleapisv0.plusone;var f;while(f=window.___gpq.shift()){
  p[f]&&p[f].apply(p,window.___gpq.shift())}
p=window.gapi.plus=window.googleapisv0.plus;while(f=window.___gbq.shift()){
  p[f]&&p[f].apply(p,window.___gbq.shift())}
var parseTags = gapi.config.get('parsetags') || gapi.config.get('gwidget/parsetags');if (parseTags!=='explicit'){gapi.plusone.go();}}
window.___gbq=[];
window.gapi.plus=window.gapi.plus||(function(){
  function f(n){return function(){window.___gbq.push(n,arguments)}}
  return{go:f('go'),render:f('render')}})();
window['___jsl'] = window['___jsl'] || {};window['___jsl']['uc'] = 'https:\/\/apis.google.com\/js\/plusone.js';window['___jsl']['u'] = 'https:\/\/apis.google.com\/js\/plusone.js';window['___jsl']['f'] = ['googleapis.client','plusone','gcm_ppb'];window['___jsl']['ms'] = 'https://apis.google.com';(window['___jsl']['ci'] = (window['___jsl']['ci'] || [])).push({"gwidget":{"parsetags":"onload"},"lexps":[17,33,38,36,7,40,41,29,46,47,44,15],"iframes":{"additnow":{"url":"https://apis.google.com/additnow/additnow.html"},"sharebox":{"params":{"json":"&"},"url":":socialhost:/:session_prefix:_/sharebox/dialog"},"plus":{"url":":socialhost:/u/:session_index:/_/pages/badge"},":socialhost:":"https://plusone.google.com","plusone_m":{"url":":socialhost:/:session_prefix:_/+1/fastbutton","params":{"count":"","size":"","url":""}},"card":{"params":{"s":"#","userid":"&"},"url":":socialhost:/u/:session_index:/_/hovercard/card"},":signuphost:":"https://plus.google.com","plusone":{"url":":socialhost:/:session_prefix:_/+1/fastbutton","params":{"count":"","size":"","url":""}}},"isPlusUser":false,"googleapis.config":{"requestCache":{"enabled":true},"methods":{"chili.people.list":true,"pos.plusones.list":true,"pos.plusones.get":true,"chili.people.get":true,"pos.plusones.insert":true,"chili.activities.list":true,"pos.plusones.delete":true,"chili.activities.get":true,"chili.activities.search":true,"pos.plusones.getSignupState":true},"versions":{"chili":"v1","pos":"v1"},"rpc":"/rpc","transport":{"isProxyShared":true},"sessionCache":{"enabled":true},"root-1p":"https://clients6.google.com","root":"https://www.googleapis.com","xd3":"/static/proxy.html","developerKey":"AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ","auth":{"useInterimAuth":false}}});var gapi=window.gapi||{};gapi.client=window.gapi&&window.gapi.client||{};
window.gapi=window.gapi||{};
(function(){var A=void 0,B=void 0,C="___jsl",U="h",D="l",V="m",E="ms",W="ci",X="cu",Y="c",Z="cm",$="o",n="p",o="q",F="lc",G="Q",s="I",t="il",u="_",v="https://ssl.gstatic.com",aa="/webclient/js",ba="/webclient/jsx/",H="https://apis.google.com",I=".js",ca="gcjs-3p",da=/^(https?:)?\/\/([^/:@]*)(:[0-9]+)?(\/[\w.,:!=/-]*)(\?[^#]*)?(#.*)?$/,J=/^[?#]([^&]*&)*jsh=([^&]*)/,K="d",p="r",ea="f",q="m",L="n",fa="sync",ga="callback",ha="config",ia="_ci",w="nodep",M="gapi.load: ",N=function(a,b){A&&A(a,b);throw M+
a+(b&&" "+b);},O=function(a){B&&B(a);var b=window.console;b&&b.warn(M+a)},ja=function(a,b,c){a=a[U];if(b=b&&J.exec(b)||c&&J.exec(c))try{a=decodeURIComponent(b[2])}catch(d){O("Invalid hint "+b[2])}return a},P=function(a){a.sort();for(var b=0;b<a.length;)!a[b]||b&&a[b]==a[b-1]?a.splice(b,1):++b},Q=function(a,b){for(var c={},d=0;d<b.length;d++)c[b[d]]=!0;for(d=0;d<a.length;d++)if(!c.hasOwnProperty(a[d]))return!1;return!0},ka=function(a){if("loading"!=document.readyState)return!1;if("undefined"!=typeof window.___gapisync)return window.___gapisync;
if(a&&(a=a[fa],"undefined"!=typeof a))return a;for(var a=document.getElementsByTagName("meta"),b=0,c;c=a[b];++b)if("generator"==c.getAttribute("name")&&"blogger"==c.getAttribute("content"))return!0;return!1},R=function(a,b){if(ka(a))document.write('<script src="'+encodeURI(b)+'"><\/script>');else{var c=b,d=document.createElement("script");d.setAttribute("src",c);d.async=!0;c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(d,c)}},S=function(a,b,c,d,e,f){var g=c.shift(),h;h=g==
p?v:g==q?d[E]||H:(h=c.shift())&&h.replace(/\/+$/,"");var j;g==p?(j=c.shift(),j=(j.indexOf(ba)?aa+"/":"")+j):j=c.shift();var i=g==K,k=i&&c.shift()||ca,c=i&&c.shift();if(g==K)f=b,b=j,e=k,a="/"+a.join(":")+(f.length?"!"+f.join(":"):"")+I+"?container="+e+"&c=2&jsload=0",b&&(a+="&r="+b),"d"==c&&(a+="&debug=1");else if(g==p||g==ea)f=b,b=j,a=(b.indexOf("/")?"/":"")+b+"/"+a.join("__")+(f.length?"--"+f.join("__"):"")+I;else if(g==q||g==L)b=j,a=a.join(",").replace(/\./g,"_").replace(/-/g,"_"),a=b.replace("__features__",
a),a=e[w]?a.replace("/d=1/","/d=0/"):a,f&&(a.match(/\/$/)||(a+="/"),a+="cb=gapi."+encodeURIComponent(f));else return O("Unknown hint type "+g),"";if(!h)return"";h+=a;a=h;f=d;if(b=d=da.exec(a))if(b=!/\.\.|\/\//.test(d[4]))b:if(b=a,d=d[2],g==p)b=b.substr(0,v.length)==v;else if(g==q)d=f[E]||H,b=b.substr(0,d.length)==d;else{g=f[V];if(d&&g){g=g.split(",");f=0;for(b=g.length;f<b;++f)if(e=g[f],c=d.lastIndexOf(e),(0==c||"."==e.charAt(0)||"."==d.charAt(c-1))&&d.length-e.length==c){b=!0;break b}}b=!1}b||N("Invalid URI",
a);return h},x=function(a,b,c){c&&(a[b]=a[b]||[]).push(c)},y=function(a){a[o]&&0<a[o].length&&(window.gapi.load||T).apply(null,a[o].shift())},r=function(a){if(a)try{a()}catch(b){return b}return null},m=window.gapi,la=function(){if(m[u])return m[u];var a;if((a=Object.create)&&/\[native code\]/.test(a))a=a(null);else{a={};for(var b in a)a[b]=void 0}return m[u]=a},ma=function(a,b,c,d,e){var f=e[G]=e[G]||[],g=e[F]=e[F]||{};f.push([a,b,d]);m[c]=function(b){m[c]=void 0;if(!g[a]){g[a]=b;for(var b=f,d=g,
i=e,k;b[0]&&d[b[0][0]];){var l=b.shift();z(l[2],i);d[l[0]].call(window,la());d[l[0]]=!0;(l=r(l[1]))&&!k&&(k=l)}i[n]=void 0;y(i);if(k)throw k;}}},z=function(a,b){var c=a[ia];x(b,W,c);c=a[ha];m.config?m.config.update(c):x(b,X,c)},na=function(a){a[s]||(a[s]=0);return"loaded"+a[s]++},T=function(a,b){var c,d={};"function"!==typeof b?(d=b||{},c=d[ga]):c=b;var e=window[C]=window[C]||{},f=ja(e,window.location.search,window.location.hash),g=f&&!!f.match(/\/gapi\/|ms=gapi/);if(e[n])x(e,o,[a,b]);else{f||N("No hint present",
"");var h=f.split(";"),j=h[0]==q||h[0]==L,f=[],i=[];e[t]&&"function"===typeof e[t]?(f=e[t](a),d[w]=1):(f=a.split(":"),d[w]||P(f),i=e[D]=e[D]||[],P(i));if(g){if(!Q(f,i)&&(g=na(e),h=S(f,i,h,e,d,g))){e[n]=f;ma(h,c,g,d,e);i.push.apply(i,f);R(d,h);return}z(d,e);if(c)var k=r(c)}else{z(d,e);if(!Q(f,i)){var l=j?Z:Y;if(h=S(f,i,h,e,d,null)){e[n]=f;e[$]=1;e[l]=function(){e[n]=void 0;e[l]=void 0;var a=r(c);y(e);if(a)throw a;};i.push.apply(i,f);R(d,h);return}}k=r(c)}y(e);if(k)throw k;}};gapi.loader={load:T}})();
gapi.load=gapi.loader.load;
(window.gapi=window.gapi||{}).load=window.___jsl&&window.___jsl.il&&window.gapi.load||gapi.load;
gapi.load('googleapis.client:plusone:gcm_ppb', {'callback': window['__bsld']  });


try{
(function(id,loader,u){
  try{u=utag.o[loader].sender[id]={}}catch(e){u=utag.sender[id]};
  u.ev={'view':1};
  u.qsp_delim="&";
  u.kvp_delim="=";
  u.divid="##UTVARconfig_divid##";
  u.options={};
  if("##UTVARconfig_href##")u.options.href="##UTVARconfig_href##";
  u.options.size="##UTVARconfig_size##";
  u.options.annotation="##UTVARconfig_annotation##";
  if("##UTVARconfig_width##")u.options.width="##UTVARconfig_width##";
  u.options.aline="##UTVARconfig_aline##";
##UTGEN##
  u.send=function(a,b,c,d,e,f){
    if(u.ev[a]||typeof u.ev.all!="undefined"){
      for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};
      c=[];for(d in utag.loader.GV(u.map)){if(typeof b[d]!="undefined"&&b[d]!=""){e=u.map[d].split(",");for(f=0;f<e.length;f++){c.push(e[f]+u.kvp_delim+encodeURIComponent(b[d]))}}}

      if(u.divid){
	gapi.plusone.render(u.divid, u.options);
      }else{
	gapi.plusone.go();
      }

    }
  }
  try{utag.o[loader].loader.LOAD(id)}catch(e){utag.loader.LOAD(id)}
})('##UTID##','##UTLOADERID##');
}catch(e){}
</script>

<!-- Tealium Twitter tweet button -->
<script type='text/javascript'>
//tealium universal tag - utag.sender.20048 ut4.0.##UTVERSION##, Copyright ##UTYEAR## Tealium.com Inc. All Rights Reserved.
try{
(function(id,loader,u){
  try{u=utag.o[loader].sender[id]={}}catch(e){u=utag.sender[id]};
  u.ev={'view':1};
  u.qsp_delim="&";
  u.kvp_delim="=";
  u.type="##UTVARconfig_type##";
  u.divid="##UTVARconfig_divid##";
  u.lang="##UTVARconfig_lang##";
  u.size="##UTVARconfig_size##";
  u.count="##UTVARconfig_count##";
  u.follow="##UTVARconfig_follow##";
  u.text="##UTVARconfig_text##";
  u.url="##UTVARconfig_url##";
  u.query="##UTVARconfig_query##";
  u.tweet="##UTVARconfig_tweet##";
  
  u.base_url="//platform.twitter.com/widgets.js";
##UTGEN##
  u.send=function(a,b,c,d,e,f){
    if(u.ev[a]||typeof u.ev.all!="undefined"){
      for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};
      c=[];
      if(u.divid){
	if(u.size!='standard')c.push('data-size="'+u.size+'" ');
        d=document.getElementById(u.divid);
        if(u.type=="follow"){
          c.push('data-show-count="false" ');
          c.push('data-lang="'+u.lang+'" ');
	  if(u.text=="")u.text="Follow @"+u.follow;
	  d.innerHTML='<a href="https://twitter.com/'+u.follow+'" class="twitter-follow-button" '+c.join(' ')+'>'+u.text+'</a>';
        }else if(u.type=="share"){
	  c.push('data-count="'+u.count+'" ');
	  c.push('data-text="'+u.tweet+'" ');
	  c.push('data-via="'+u.follow+'" ');
	  if(u.url)c.push('data-url="'+u.url+'"');
	  if(u.text=="")u.text="Tweet";
	  d.innerHTML='<a href="https://twitter.com/share'+((u.query)?'?'+u.query:'')+'" class="twitter-share-button" '+c.join(' ')+'>'+u.text+'</a>';
        }
      }

      if(document.getElementById("twitter-wjs")) return;
      u.script=document.getElementsByTagName("script")[0];
      u.scr=document.createElement("script");u.scr.id="twitter-wjs";u.scr.type="text/javascript";u.scr.src=u.base_url;u.script.parentNode.insertBefore(u.scr,u.script);

    }
  }
  try{utag.o[loader].loader.LOAD(id)}catch(e){utag.loader.LOAD(id)}
})('##UTID##','##UTLOADERID##');
}catch(e){}
</script>

</head>

<body bgcolor="#CCCCCC">

	<img id="logo" src="/images/modea_logo.png"/>
	<div id="floater">
		<div id="index_title">Team Health Score</div>
	</div>

	<!--Text links to Team Health Survey Test Pages-->
	<div id="content">
	Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum 
	Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit 
	Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum Dolor sedit Lorem Ipsum 
	Dolor sedit Lorem Ipsum Dolor sedit

		<div id="fb-like" style="margin:.2em"></div>
		<div id="google-plus-one" style="margin:.3em"></div>
		<div id="tweet" style="margin:.2em"></div>
			
	</div>

</body>

</html>
