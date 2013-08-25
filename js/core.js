/* general JS */

var wczg = wczg || {};

wczg.main = function(){

    var obj = this;

    obj.init = function(){

    	/* responsive thumbs */
    	$('.fluid_grid').each(function(){
			new wczg.std_gallery_controller({
	            'el' : $(this),
	            'steps' : [1600,1200,1000,800,600,380]
	        });    		
    	});

        $(window).resize(function(){

            /* top padding */
            obj.set_top_padding();

        }).trigger('resize');

        /* init twitter swipe */
        obj.set_swipe();

    };

    obj.set_top_padding = function(){

        if ( $('html').is('.no-touch') ){
            var height = $('#page_head').height();
            $('#content_wrap').css('margin-top',height);
        }

    };

    obj.set_swipe = function(){

        $('.swipe').each(function(){

            var wrap = $(this);
            var blocks = wrap.find('.swipe-block');

            console.log(blocks.length>1);

            if(blocks.length>1){

                curr_swipe = new Swipe(wrap[0], {
                  speed: 400,
                  continuous: true,
                  disableScroll: false,
                  stopPropagation: false
                });

                var prev = $('<a class="button prev left-icon">Prethodna</a>').click(function(){
                    curr_swipe.prev();
                }).insertAfter(wrap);

                var next = $('<a class="button next right-icon">Sljedeća</a>').click(function(){
                    curr_swipe.next();
                }).insertAfter(wrap);
                

            }

        });

    };

	obj.init();

};

wczg.std_gallery_controller  = function(data){

    var obj = this;
    obj.wrap = data.el;
    obj.curr_class = obj.wrap.attr('class');
    obj.colons = new Array();
    obj.boxes = obj.wrap.find('.box');
    obj.col_count = 0;
    obj.steps = data.steps;

    obj.init = function(){
        
        obj.wrap.find('ul').remove();
        
        $(window).resize(function(){
            obj.trigger_colons();
        });

        obj.trigger_colons();

    };

    obj.trigger_colons = function(){

        var wrap_width = obj.wrap.width();

        for(i=0;i<=obj.steps.length;i++){
            
            if(i==obj.steps.length){
                if (wrap_width > 0){
                    obj.col_count = 1;
                    break;
                }
            } else {
                if (wrap_width > obj.steps[i]){
                    obj.col_count = obj.steps.length+1-i;
                    break;
                }
            }           
        }

        if(!obj.wrap.is('.col_'+obj.col_count)){

            obj.set_colons();
            obj.wrap.attr('class',obj.curr_class+' col_'+obj.col_count);

        }

    };

    obj.set_colons = function(){

        for(i=0;i<obj.col_count;i++){
            obj.colons[i] = $('<div class="cols"></div>');
        }

        obj.boxes.each(function(i){
            $(this).appendTo( obj.colons[i%(obj.col_count)] );
        });

        obj.wrap.empty().append(obj.colons);

    };

    obj.init();

};