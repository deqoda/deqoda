
<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Metas -->
    <title><?php echo $page->title; ?> | Deqoda - useful jQuery snippets</title>
    
    <script>$(window).blur(function() {
  $("title").text("Don't forget to read this..." + pageTitle);
});</script>
<link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/monokai-sublime.css">
<script src="<?php echo $config->urls->templates; ?>js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
    <!-- Site Icons -->
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47390863 = new Ya.Metrika2({
                    id:47390863,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47390863" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
    <!-- Material Design fonts -->
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $config->urls->templates; ?>img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $config->urls->templates; ?>img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $config->urls->templates; ?>img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $config->urls->templates; ?>img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $config->urls->templates; ?>img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $config->urls->templates; ?>img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $config->urls->templates; ?>img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $config->urls->templates; ?>img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $config->urls->templates; ?>img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $config->urls->templates; ?>img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $config->urls->templates; ?>img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $config->urls->templates; ?>img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $config->urls->templates; ?>img/favicon-16x16.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/bootstrap-material-design.css">
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/ripples.min.css">

    
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/style.css">
   
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>styles/colors_01.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <meta name="description" content="<?=$page->desc?>">
    <meta name="keywords" content="<?=$page->key?>">
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-58471199-4', 'auto');
	;
	ga('send', 'pageview');</script>



        	<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="4.0.0";
  analytics.load("d0Cvea4vzGfTXiNBAEB2X6nXY3AQEK0u");
  analytics.page();
  }}();
</script>

<script>analytics.track('Clicked CTA', {
  location: 'header',
  type: 'button'
});</script>

</head>
<body class="topic_list">

    
    <div id="wrapper">
        <header class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a  class="navbar-brand" href="http://deqoda.com/"> <img class="logo" src="<?php echo $config->urls->templates; ?>/img/l.png" alt="Deqoda logo"> </a>
                            <a id="logo1" class="navbar-brand hidden-xs" href="http://deqoda.com/"> Deqoda</a>
                        </div>
                        <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav navbar-right">
                               
                        <li><a id="contribute" href="http://deqoda.com/">Home</a></li>     
                        <li><a id="contribute" href="http://deqoda.com/snippets/">All snippets</a></li>
                         <li><a id="contribute" href="http://deqoda.com/plugins/">Plugins</a></li>
                           <li><a id="contribute" href="http://deqoda.com/contribute/">Contribute</a></li>

                    </ul>
                        </div>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

        <section id="ja" class="section lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="topic_top row clearfix">
                           

                          
                        </div><!-- end shop-top -->

                        <aside class="topic-page topic-list blog-list forum-list single-forum">
                            <article class="well btn-group-sm clearfix">
                                <div class="topic-desc row-fluid clearfix">
                                    
                                    <div class="col-sm-12">

                                     

                                        <h4>  <?php echo $page->title; ?></h4>
                                        <div class="blog-meta clearfix">
                                            
                                          
                                            
                                        </div>

                                      <div class="centar">
                                       
                                        <p><?php echo $page->aboutext; ?></p>
                                        
                                       
                                 
                                        
</div>

                                    </div>
                                </div><!-- end tpic-desc -->

                              

                            </article>

                        </aside>

                        <div class="rel">
                        
                           
                                <p>Last added</p>
                            </div>

                        <?php foreach ( $pages->find('template=single, sort=-created, limit=2') as $single ):?> 
                        <aside class="topic-page topic-list blog-list forum-list single-forum">
                            <article class="well btn-group-sm clearfix">
                                <div class="topic-desc row-fluid clearfix">
                                    
                                    <div class="col-sm-10">

                                     

                                        <h4> <a href="<?=$single->url?>"><?=$single->title?></a></h4>
                                        <div class="blog-meta clearfix">
                                            
                                            <small><?=$single->datum?></small>
                                            
                                        </div>                            
                                    </div>
                                </div><!-- end tpic-desc -->

                              
                            <p id="demo"></p>

                            </article>
                          
                        </aside>
                        <? endforeach; ?>
    <div class="home-tab clearfix">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#knowledge_tab">jQuery plugin of a day</a></li>
            
        </ul>
                <?php foreach ( $pages->find('template=plugins, mijo!=0, sort=-created') as $plugins ):?> 
                         <div class="tab-content">
                                <div id="knowledge_tab" class="tab-pane fade in active">
                                    <aside class="topic-list">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <article class="well btn-group-sm clearfix">
                                                    
                                                   
                                                   
                                                        
                                                        <?php

if ($plugins->mijo == 1) // 1 is checked, 0 is unchecked


{
	echo '<div class="featured-grade btn btn-info btn-fab">
                                                        
                                                        <i class="fa fa-star" aria-hidden="true"></i>                                                        
                                                        <div class="ripple-container"></div>
                                                    </div>';
} 
else // Otherwise show the output
{
	echo "";
}


?>
                                                     
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <div class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?=$plugins->hrefica?>" aria-expanded="true" aria-controls="<?=$plugins->hrefica?>">
                                                                <header class="topic-title clearfix">
                                                                    <h3><?=$plugins->nazivplugina;?></h3>
                                                                   
                                                                    
                                                                </header>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div id="<?=$plugins->hrefica?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <div class="topic-meta clearfix">
                                                            

                                                                <div class="pull-right">
                                                                   
                                                                </div><!-- end right -->
                                                            </div><!-- end topic-meta -->

                                                            <div class="topic-desc row-fluid clearfix">
                                                                
                                                                <div class="col-sm-10">
                                                                    
                                                                    <?=$plugins->opisplugina?> 
                                                                   
                                                                    <a href=" <?=$plugins->linkic?> " class="readmore" target="_blank">More →</a>
                                                                </div>
                                                            </div><!-- end tpic-desc -->

                                                            <footer class="topic-footer clearfix">
                                                                <div class="pull-left">
                                                                   
                                                                </div>

                                                                <div class="pull-right">
                                                                  
                                                                </div>
                                                            </footer><!-- end topic -->
                                                        </div><!-- end panel-body -->
                                                    </div><!-- end panel-collapse -->
                                                </article><!-- end article well -->
                                            </div><!-- end panel -->


                           <? endforeach; ?>




                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
           
        <div class="stickyfooter">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <p>Deqoda ® All rights reserved.</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <ul class="list-inline text-right">
                           
                            <li><a href="http://deqoda.com/about/">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end wrapper -->
 <div class="chat-wrapper">
          
                <div class="panel-heading" id="chatcordion">
              <style>.bmc-button img{box-shadow: none !important;border: none !important;vertical-align: middle !important;}.bmc-button{text-decoration: none !important;display:inline-block !important;padding:5px 10px !important;color:#FFFFFF !important;background-color:#00d7df !important;border-radius: 3px !important;border: 1px solid transparent !important;font-size: 26px !important;box-shadow: 0px 1px 2px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 1px 2px 2px rgba(190, 190, 190, 0.5) !important;-webkit-transition: 0.3s all linear !important;transition: 0.3s all linear !important;margin: 0 auto !important;font-family:"Cookie", cursive !important;}.bmc-button:hover, .bmc-button:active, .bmc-button:focus {-webkit-box-shadow: 0 4px 16px 0 rgba(190, 190, 190,.45) !important;text-decoration: none !important;box-shadow: 0 4px 16px 0 rgba(190, 190, 190,.45) !important;opacity: 0.85 !important;color:#FFFFFF !important;}</style><link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"><a class="bmc-button" target="_blank" href="https://www.buymeacoffee.com/deqoda"><img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt=""><span>Support us</span></a>
                </div>
        
        </div><!-- end chat-wrapper -->
 
    <script src="<?php echo $config->urls->templates; ?>js/jquery.js"></script>
     <script src="<?php echo $config->urls->templates; ?>js/horsey.js"></script>
   <script type="text/javascript" id="cookieinfo"
	src="<?php echo $config->urls->templates; ?>js/cookie-message.js"
	data-bg="rgb(36, 136, 255)"
	data-fg="#FFFFFF"
	data-link="rgb(0, 215, 223)"
	data-cookie="CookieInfoScript"
	data-text-align="left"
       data-close-text="Got it!">
</script>
<script>

                   $(function() {
                	// Get page title
                  	var pageTitle = $("title").text();
                
                	// Change page title on blur
                	$(window).blur(function() {
                	  $("title").text("Come back, we still miss you!");
                	});
                
                	// Change page title back on focus
                	$(window).focus(function() {
                	  $("title").text(pageTitle);
                	});
                });

</script>
    <script src="<?php echo $config->urls->templates; ?>js/bootstrap.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/ripples.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/material.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/custom.js"></script>

</body>
</html>