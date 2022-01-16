( function( $ ){
    String.prototype.format = function()
    {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number)
        {
            return typeof args[number] != 'undefined'
            ? args[number]
            : match
            ;
        });
    };


    var $backgrounds = $( "<ul class='sm-slider'></ul>" ),
        methods = {

        // Init plugin
        init : function( settings ) {
            var options = {
                src:        [],
                scaling:    1.17,
                rotating:   3,
                duration:   6,
                fade:       2
            }
            
            $.extend( options, settings );
            this.options=options;

            var css = this.mkcss( options.src.length , options.duration , options.fade );
            $('<style type="text/css"></style>').html(css).appendTo('head');
            $backgrounds.html(this.mkhtml( options.src )).prependTo(".home-keyvisual");

        },

        // Make HTML Construction
        mkhtml: function( src )
        {
            var html = "" ,
                li = "<li> <span></span> <div> <h3>%title%</h3> </div> </li>";
            for( var i=0,length=src.length; i<length; i++ )
            {
                var title = src[i].title ? src[i].title : "";
                html+=li.replace("%title%",title);
            }
            return html;
        },

        /**
         * [mkcss description]
         * @param  {int} bgCount        background count
         * @param  {int} duration     duration
         * @return {string}             CSS string
         */
        mkcss: function( bgCount , duration , fade  ) 
        {
            var 
            total_time = duration*bgCount,
            fadeInPercentile = (fade/total_time)*100,
            remainPercentile = (duration/total_time)*100,
            fadeOutPercentile = (remainPercentile+(fadeInPercentile*0.6)),
            fadeOutPercentile_title = (remainPercentile+(fadeInPercentile*0.3)),
            keyframes = "@keyframes imageAnimation {0% {opacity: 0;animation-timing-function: ease-in;}{0}% {opacity: 1;}{1}% {opacity: 1;}{2}% {opacity: 0; animation-timing-function: ease-out;transform: scale(1.17) translateY(-4%) rotateZ(3deg);}100% { opacity: 0;transform: scale(1.17) translateY(-4%) rotateZ(3deg); }} @keyframes titleAnimation {0% { opacity: 0;transform: translateY(-200px); }{0}% { opacity: 1;transform: translateY(0%); }{1}% { opacity: 1;transform: translateY(0%); }{3}% { opacity: 0; transform: scale(0.4) translateY(100%); }100% { opacity: 0; }}".format(fadeInPercentile,remainPercentile,fadeOutPercentile,fadeOutPercentile_title),
            otherCSS = ".sm-slider,.sm-slider:after { margin: 0;padding: 0;list-style: none;width: 100%;height: 100%;top: 0px;left: 0px;z-index: -1; }.sm-slider:after { content: '';background: transparent url({0}) repeat top left;z-index: 0; }.sm-slider li span { width: 100%;height: 100%;position: absolute;top: 0px;left: 0px;color: transparent;background-size: cover;background-position: 50% 50%;background-repeat: none;opacity: 0;z-index: 0;animation: imageAnimation {1}s linear infinite 0s; }.sm-slider li div { z-index: 1000;position: absolute;bottom: 30px;left: 0px;width: 100%;text-align: center;opacity: 0;color: #fff;animation: titleAnimation {1}s linear infinite 0s; }".format(this.options.overlay,total_time),
            css = keyframes+otherCSS,
            src = this.options.src;

            for(var i=0;i<bgCount;i++)
            {
                var bg = src[i];
                css += ".sm-slider li:nth-child({0}) span { background-image: url('{1}');animation-delay: {2}s; } .sm-slider li:nth-child({0}) div { animation-delay: {2}s; }".format(i+1 , bg.url, duration*i );

            }

            
            
            if(this.options.rotating===false&&this.options.scaling===false)
            {
                css=css.replace(/transform.*?;/g,"");
            }
            else if(this.options.rotating===false)
            {
                css=css.replace(/rotateZ\(.*?deg\)/g,"");
            }
            else if(this.options.scaling===false)
            {
                css=css.replace(/scale\(.*?\)/g,"");
            }
            
            if(this.options.rotating)
            {
                css=css.replace(/rotateZ\(.*?\)/g,"rotateZ({0}deg)".format(this.options.rotating));
            }
            if(this.options.scaling)
            {
                css=css.replace(/scale\(.*?\)/g,"scale({0})".format(this.options.scaling));
            }

            css = this.addPrefix(css);
            return css;
        },

        /**
         * [addPrefix description]
         * @param {string} css       The string of CSS to be added prefix
         */
        addPrefix: function( css ) 
        {
            var
            keyframes = /@(keyframes[\s\S]*?100%.*?\{[\s\S]*?\}[\s\S]*?\})/g,
            cssProperties = /(?:animation|transform)[:-].*?;/g;

            css = css.replace(keyframes,"@-webkit-$1 @-moz-$1 @-ms-$1 @-o-$1 @$1").replace(cssProperties,"-webkit-$& -moz-$& -ms-$& -o-$& $&");
            return css;
        }
    }

    

    

    // The plugin
    $.sublime_slideshow = function( options ) {
        methods.init( options );
    };

    
})( jQuery );