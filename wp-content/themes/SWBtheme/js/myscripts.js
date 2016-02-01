!function(e,l,o){"use strict";e.fn.scrollUp=function(l){e.data(o.body,"scrollUp")||(e.data(o.body,"scrollUp",!0),e.fn.scrollUp.init(l))},e.fn.scrollUp.init=function(t){var r,s,c,i,n,a,d,p=e.fn.scrollUp.settings=e.extend({},e.fn.scrollUp.defaults,t),f=!1;switch(d=p.scrollTrigger?e(p.scrollTrigger):e("<a/>",{id:p.scrollName,href:"#top"}),p.scrollTitle&&d.attr("title",p.scrollTitle),d.appendTo("body"),p.scrollImg||p.scrollTrigger||d.html(p.scrollText),d.css({display:"none",position:"fixed",zIndex:p.zIndex}),p.activeOverlay&&e("<div/>",{id:p.scrollName+"-active"}).css({position:"absolute",top:p.scrollDistance+"px",width:"100%",borderTop:"1px dotted"+p.activeOverlay,zIndex:p.zIndex}).appendTo("body"),p.animation){case"fade":r="fadeIn",s="fadeOut",c=p.animationSpeed;break;case"slide":r="slideDown",s="slideUp",c=p.animationSpeed;break;default:r="show",s="hide",c=0}i="top"===p.scrollFrom?p.scrollDistance:e(o).height()-e(l).height()-p.scrollDistance,n=e(l).scroll(function(){e(l).scrollTop()>i?f||(d[r](c),f=!0):f&&(d[s](c),f=!1)}),p.scrollTarget?"number"==typeof p.scrollTarget?a=p.scrollTarget:"string"==typeof p.scrollTarget&&(a=Math.floor(e(p.scrollTarget).offset().top)):a=0,d.click(function(l){l.preventDefault(),e("html, body").animate({scrollTop:a},p.scrollSpeed,p.easingType)})},e.fn.scrollUp.defaults={scrollName:"scrollUp",scrollDistance:300,scrollFrom:"top",scrollSpeed:300,easingType:"linear",animation:"fade",animationSpeed:200,scrollTrigger:!1,scrollTarget:!1,scrollText:"Scroll to top",scrollTitle:!1,scrollImg:!1,activeOverlay:!1,zIndex:2147483647},e.fn.scrollUp.destroy=function(t){e.removeData(o.body,"scrollUp"),e("#"+e.fn.scrollUp.settings.scrollName).remove(),e("#"+e.fn.scrollUp.settings.scrollName+"-active").remove(),e.fn.jquery.split(".")[1]>=7?e(l).off("scroll",t):e(l).unbind("scroll",t)},e.scrollUp=e.fn.scrollUp}(jQuery,window,document),jQuery(document).ready(function(e){"use strict";e("section.oursection div.reveal").hide(),e("section.oursection a.readmore").click(function(){e(this).prev().slideToggle("fast"),"Read More"===e(this).text()?e(this).text("Read Less"):e(this).text("Read More")}),e("#grid").mediaBoxes({horizontalSpaceBetweenBoxes:5,columns:4,overlayEffect:"direction-aware-fade"}),e(function(){e.scrollUp({})})});