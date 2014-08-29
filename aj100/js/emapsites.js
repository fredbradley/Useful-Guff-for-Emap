/* 
 * Javascript: Script Additions
 * Script Compiler: Fred Bradley <fred.bradley@emap.com>
 * Description: This takes scripts from all over the places and puts them all together. 
 * /

 // First Up: Twitter Widget Script
 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
 
 // Second: Bootstrap-lightbox.js (http://jbutz.github.io/bootstrap-lightbox/)
 /*!
* bootstrap-lightbox.js v0.6.1 
* Copyright 2013 Jason Butz
* http://www.apache.org/licenses/LICENSE-2.0.txt
*/
!function(e){"use strict";var t=function(t,n){this.options=n,this.$element=e(t).delegate('[data-dismiss="lightbox"]',"click.dismiss.lightbox",e.proxy(this.hide,this)),this.options.remote&&this.$element.find(".lightbox-body").load(this.options.remote)};t.prototype=e.extend({},e.fn.modal.Constructor.prototype),t.prototype.constructor=t,t.prototype.enforceFocus=function(){var t=this;e(document).on("focusin.lightbox",function(e){t.$element[0]!==e.target&&!t.$element.has(e.target).length&&t.$element.focus()})},t.prototype.show=function(){var t=this,n=e.Event("show");this.$element.trigger(n);if(this.isShown||n.isDefaultPrevented())return;this.isShown=!0,this.escape(),this.preloadSize(function(){t.backdrop(function(){var n=e.support.transition&&t.$element.hasClass("fade");t.$element.parent().length||t.$element.appendTo(document.body),t.$element.show(),n&&t.$element[0].offsetWidth,t.$element.addClass("in").attr("aria-hidden",!1),t.enforceFocus(),n?t.$element.one(e.support.transition.end,function(){t.$element.focus().trigger("shown")}):t.$element.focus().trigger("shown")})})},t.prototype.hide=function(t){t&&t.preventDefault();var n=this;t=e.Event("hide"),this.$element.trigger(t);if(!this.isShown||t.isDefaultPrevented())return;this.isShown=!1,this.escape(),e(document).off("focusin.lightbox"),this.$element.removeClass("in").attr("aria-hidden",!0),e.support.transition&&this.$element.hasClass("fade")?this.hideWithTransition():this.hideModal()},t.prototype.escape=function(){var e=this;this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.lightbox",function(t){t.which==27&&e.hide()}):this.isShown||this.$element.off("keyup.dismiss.lightbox")},t.prototype.preloadSize=function(t){var n=e.Callbacks();t&&n.add(t);var r=this,i,s,o,u,a,f,l,c,h,p;i=e(window).height(),s=e(window).width(),o=parseInt(r.$element.find(".lightbox-content").css("padding-top"),10),u=parseInt(r.$element.find(".lightbox-content").css("padding-bottom"),10),a=parseInt(r.$element.find(".lightbox-content").css("padding-left"),10),f=parseInt(r.$element.find(".lightbox-content").css("padding-right"),10),l=r.$element.find(".lightbox-content").find("img:first"),c=new Image,c.onload=function(){c.width+a+f>=s&&(h=c.width,p=c.height,c.width=s-a-f,c.height=p/h*c.width),c.height+o+u>=i&&(h=c.width,p=c.height,c.height=i-o-u,c.width=h/p*c.height),r.$element.css({position:"fixed",width:c.width+a+f,height:c.height+o+u,top:i/2-(c.height+o+u)/2,left:"50%","margin-left":-1*(c.width+a+f)/2}),r.$element.find(".lightbox-content").css({width:c.width,height:c.height}),n.fire()},c.src=l.attr("src")};var n=e.fn.lightbox;e.fn.lightbox=function(n){return this.each(function(){var r=e(this),i=r.data("lightbox"),s=e.extend({},e.fn.lightbox.defaults,r.data(),typeof n=="object"&&n);i||r.data("lightbox",i=new t(this,s)),typeof n=="string"?i[n]():s.show&&i.show()})},e.fn.lightbox.defaults={backdrop:!0,keyboard:!0,show:!0},e.fn.lightbox.Constructor=t,e.fn.lightbox.noConflict=function(){return e.fn.lightbox=n,this},e(document).on("click.lightbox.data-api",'[data-toggle*="lightbox"]',function(t){var n=e(this),r=n.attr("href"),i=e(n.attr("data-target")||r&&r.replace(/.*(?=#[^\s]+$)/,"")),s=i.data("lightbox")?"toggle":e.extend({remote:!/#/.test(r)&&r},i.data(),n.data());t.preventDefault(),i.lightbox(s).one("hide",function(){n.focus()})})}(window.jQuery);

	// Third Up: kkcountdown (sourced by Wayne Philips) 
	
	/**
 * Plugin kkcountdown counts down to specific dates in the future.
 *
 * @example
 * $(".come-class").kkcountdown();
 *
 * @type jQuery
 *
 * @name kkcountdown
 * @author Krzysztof Furtak http://krzysztof-furtak.pl/
 * @version 1.3
 * 
 * Documentation: http://krzysztof-furtak.pl/2010/05/kk-countdown-jquery-plugin/
 * 
 */
(function(e){e.fn.kkcountdown=function(d){function f(b){var c=new Date,c=Math.floor(c.getTime()/1E3),a=b.attr("time")-c;0>=a?(b.html(d.textAfterCount),d.callback&&d.callback()):86400>=a?setTimeout(function(){h(!0,b,a);f(b)},1E3):setTimeout(function(){h(!1,b,a);f(b)},1E3)}function h(b,c,a){var e=g(a%60),a=Math.floor(a/60),f=g(a%60),a=Math.floor(a/60),i=g(a%24),a=Math.floor(a/24);b&&!1!=d.oneDayClass&&c.addClass(d.oneDayClass);if(0!=a||d.displayZeroDays)1==a?(c.find(".kkc-dni").html(a),c.find(".kkc-dni-text").html(d.dayText)):
(c.find(".kkc-dni").html(a),c.find(".kkc-dni-text").html(d.daysText));c.find(".kkc-godz").html(i);c.find(".kkc-min").html(f);c.find(".kkc-sec").html(e)}function g(b){s="";10>b&&(b="0"+b);return b}d=e.extend({dayText:"day ",daysText:"days ",hoursText:":",minutesText:":",secondsText:"",textAfterCount:"---",oneDayClass:!1,displayDays:!0,displayZeroDays:!0,addClass:!1,callback:!1},d);this.each(function(){var b=e(this),c=e(document.createElement("span")).addClass("kkcountdown-box"),a=e(document.createElement("span")).addClass("kkc-dni"),
g=e(document.createElement("span")).addClass("kkc-godz"),h=e(document.createElement("span")).addClass("kkc-min"),i=e(document.createElement("span")).addClass("kkc-sec"),m=e(document.createElement("span")).addClass("kkc-dni-text"),j=e(document.createElement("span")).addClass("kkc-godz-text"),k=e(document.createElement("span")).addClass("kkc-min-text"),l=e(document.createElement("span")).addClass("kkc-sec-text");!1!=d.addClass&&c.addClass(d.addClass);j.html(d.hoursText);k.html(d.minutesText);l.html(d.secondsText);
c.append(a).append(m).append(g).append(j).append(h).append(k).append(i).append(l);b.append(c);f(b)})}})(jQuery);