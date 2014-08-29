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
