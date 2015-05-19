(function($){
    var ISSUU = {
        onReady : function(){
            this.responsiveIssuu();
        },
        onResize : function(){
            this.responsiveIssuu();
        },
        responsiveIssuu : function(){
            var $embed = $('.issuuembed'),
                $parent = $embed.parent();

            if($parent.length < 0) return false;

            $embed.css({
                'width' : $parent.innerWidth(),
                'height' : $parent.innerWidth() * .5625
            });
        }
    }

    $(document).ready(function(){ISSUU.onReady();});
    $(window).resize(function(){ISSUU.onResize();});

})(jQuery);