// JavaScript Document
//creted by mv corporation
//this file shoul not realise publicly
function($)
{
	$.fn.gallary = function (options) {
			galImg: 6,
    		speedRotation: 250,
    		autometicPlay: false,
    		autometicRotationSpeed: 3000,    		
    		stopOnHover: true,
			maxHeightAndWidth: false,
    		vangibaResponsiveBreakpoints: false,
			responsiveBreakpoints: { 
	    		portrait: { 
	    			changePoint:480,
	    			galImg: 1
	    		}, 
	    		landscape: { 
	    			changePoint:640,
	    			galImg: 2
	    		},
	    		tablet: { 
	    			changePoint:768,
	    			galImg: 3
	    		}
        	}
        }, options);
//luchiba variable
		var imgWidth;
		var obj = $(this);
		var sttng= $.extend(defaults, options);
		 var imgVisible = sttng.galImg; 
//khula method
		      var method = {
        		
			init: function() {
				
        		return this.each(function () {
        			methods.appendHTML();
        			methods.setEventHandlers();      			
        			methods.initializeItems();
				});
			},
		initializeItems: function() {
				
				var listParent = object.parent();
				var innerHeight = listParent.height(); 
				var childSet = object.children();
				
    			var innerWidth = listParent.width(); // Set widths
    			itemsWidth = (innerWidth)/itemsVisible;
    			childSet.width(itemsWidth);
    			childSet.last().insertBefore(childSet.first());
    			childSet.last().insertBefore(childSet.first());
    			object.css({'left' : -itemsWidth}); 

    			object.fadeIn();
				$(window).trigger("resize"); // needed to position arrows correctly

			},