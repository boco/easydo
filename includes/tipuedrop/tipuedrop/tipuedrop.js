
/*
Tipue drop 5.0.2
Copyright (c) 2015 Tipue
Tipue drop is released under the MIT License
http://www.tipue.com/drop
*/


(function($) {

     $.fn.tipuedrop = function(options) {

          var set = $.extend( {
          
               'show'                   : 10,
               'speed'                  : 300,
               'newWindow'              : false,
               'mode'                   : 'static',
               'contentLocation'        : 'tipuedrop/tipuedrop_content.json'
          
          }, options);
          
          return this.each(function() {
          
               var tipuedrop_in = {
                    pages: []
               };
               $.ajaxSetup({
                    async: false
               });
               
               if (set.mode == 'json'){
                    $.getJSON(set.contentLocation)
                         .done(function(json)
                         {
                              tipuedrop_in = $.extend({}, json);
                         });
               }               
               
               if (set.mode == 'static'){
                    tipuedrop_in = $.extend({}, tipuedrop);
               }

               $(this).keyup(function(event){
                    getTipuedrop($(this));
               });               
               
			   
				var today = new Date();
				var dd = today.getDate();
				var mm = today.getMonth()+1; //January is 0!
				var yyyy = today.getFullYear();

				if(dd<10) {
					dd='0'+dd
				} 

				if(mm<10) {
					mm='0'+mm
				} 

				today = yyyy+'-'+mm+'-'+dd;
				//document.write(today);
			   
               function getTipuedrop($obj){
                    if ($obj.val()){
                         var c = 0;
                         for (var i = 0; i < tipuedrop_in.pages.length; i++){
                              var pat = new RegExp($obj.val(), 'i');
                              if ((tipuedrop_in.pages[i].name.search(pat) != -1 ) && c < set.show) {
                                   if (c == 0){
                                        var out = '<div><div>';    
                                   }

									if(tipuedrop_in.pages[i].completed == 1){
										out += '<div class="prostor"><h4><span class="label label-success">'+tipuedrop_in.pages[i].name+'</span></h4></div>';
									}else{
										if ((new Date(tipuedrop_in.pages[i].deadline).getTime()) < (new Date(today).getTime())) {
											out += '<div class="prostor"><h4><span class="label label-danger">'+tipuedrop_in.pages[i].name+'</span></h4></div>';
										} else {
											out += '<div class="prostor"><h4><span class="label label-warning">'+tipuedrop_in.pages[i].name+'</span></h4></div>';
										}
									}
										
                                   c++;
                              }
                         }
                         if (c != 0){
                              out += '</div></div>';               
                              $('#tipue_drop_content').html(out);
                              $('#tipue_drop_content').fadeIn(set.speed);
                         }
                    }else {
                         $('#tipue_drop_content').fadeOut(set.speed);
                    }
               }
               
               $('html').click(function(){
                    $('#tipue_drop_content').fadeOut(set.speed);
               });
          
          });
     };
     
})(jQuery);
