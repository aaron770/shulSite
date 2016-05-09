/*global jQuery */
/*!
* FitText.js 1.1
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/
/*
(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize orientationchange', resizer);

    });

  };

})( jQuery );*/
var makeUrl = function() {

  var lat = '40.434890',
    lng = '-79.922075',
    tz = 'America/New_York',
    d = '&dateBegin=' + Date.today().toString("MM/dd/yyyy");


  var params = [
    'https://db.ou.org/zmanim/getCalendarData.php?mode=day',
    'dateBegin=' + d,
    'lat=' + lat,
    'lng=' + lng,
    'timezone=' + tz,
    'callback=ouTimes' //JSON_CALLBACK
  ];
  var url = params.join('&');
  return url;
};



var script = document.createElement('script');
script.src = script.src = makeUrl(); //'https://db.ou.org/zmanim/getCalendarData.php?mode=day&dateBegin=&dateBegin=04/14/2016&lat=40.434890&lng=-79.922075&timezone=America/New_York&callback=ouTimes';//makeUrl();
document.head.appendChild(script);

function ouTimes(json) {

  var jsonStr = json;
  var json = JSON.stringify(jsonStr);
  json = JSON.parse(json);
  //var data =  JSON.parse(json) ;
  //document.getElementById("demo").innerHTML +="oh yeah" + json.hebDateString + "<br />";
  document.getElementById("hebrewDate").innerHTML = json.hebDateString;

  formatOuTimes(json);
}

function formatOuTimes(jsonp) {
  var times = jsonp;
  var zmanim = jsonp.zmanim;

  for (var key in zmanim) {
    document.getElementById("marqueeshabosCalenderHeight").innerHTML += key.replace(/_/g, " ") + ":" + timeReformat(zmanim[key]) + "<br />";
  }
  
}

function timeReformat(clock) {
  var timeShort = clock.replace(/(:\d{2}| [AP]M)$/, ""); //clock.toString("HHHH:mm");
  return timeShort;
};



$(document).ready(function() {
  var data;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      data = JSON.parse(xhttp.responseText);

      document.getElementById("mainBar").innerHTML += data.items[0].title;

      document.getElementById("parsha").innerHTML = data.items[1].title + "//" + data.items[2].title + " " + data.items[0].title;
      document.getElementById("parshaInTimes").innerHTML = data.items[1].title;

      document.getElementById("candleLighting").innerHTML += data.items[0].title;

      if (typeof data.items[4] == undefined) {
        //document.getElementById("candleLighting").innerHTML += "<h1>" + data.items[4].title + "</h1>";
        document.getElementById("candleLighting").innerHTML += data.items[4].category;

        document.getElementById("candleLighting").innerHTML += "<h1>" + data.items[3].title + "</h1>"; //speacial events holiday
        document.getElementById("candleLighting").innerHTML += data.items[3].memo + "</br>";
        document.getElementById("candleLighting").innerHTML += data.items[3].date;
      } else {
        //document.getElementById("candleLighting").innerHTML += "<h1>" + data.items[3].category + "</h1>"; //havdalah
        document.getElementById("candleLighting").innerHTML += data.items[3].title;//havdalah

      }

      document.getElementById("candleLighting").innerHTML += "<h1>" + data.items[2].title + "</h1>"; //speacial events month
      document.getElementById("candleLighting").innerHTML += data.items[2].memo + "</br>";
      document.getElementById("candleLighting").innerHTML += data.items[2].date;




dynamicMarquee("marqueeshabosParshaTimesHeight");


    }
  };
  xhttp.open("GET", "http://www.hebcal.com/shabbat/?cfg=json&geonameid=5206379&m=42", true);
  xhttp.send();











  dynamicMarquee("marqueeSponsorHeight");
  dynamicMarquee("marqueeEventHeight");
  dynamicMarquee("marqueeWeeklyScheduleHeight");
  dynamicMarquee("marqueeshabosScheduleHeight");
  
  //setTimeout(, 6000);

//setInterval(document.getElementById("marqueeshabosCalenderHeight").addEventListener("resize", setTimeout(dynamicMarquee("marqueeshabosCalenderHeight"),6000)), 6000);

//document.getElementById("marqueeshabosCalenderHeight").onresize( alert("resize"), dynamicMarquee("marqueeshabosCalenderHeight"));


  function dynamicMarquee(selection) {
    var theSelection = document.getElementById(selection);
    var measurements = theSelection.getBoundingClientRect(); //offsetHeight;
    //alert(measurements.height);
    var parent = document.getElementById(selection).parentElement;
    var parentMeasurement = parent.getBoundingClientRect();
    //alert(parentMeasurement.height);
    var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
    var sheet = document.styleSheets[0];


    if (measurements.height > parentMeasurement.height - 50) {
      sheet.insertRule("#" + selection + "{animation:" + selection + " 15s linear infinite;}", 0);
      if (isChrome) {
        sheet.insertRule("@-webkit-keyframes " + selection + " { 0% { top: 0px } 100% { top: -" + measurements.height + "px}", 0);
      } else {
        sheet.insertRule("@keyframes " + selection + " {0% { top: 0px } 100% { top: -" + measurements.height + "px}};", 1);
      }
    }
  }


//setTimeout((dynamicMarquee("marqueeshabosCalenderHeight")) ,6000);








  var interval = 5000;
  var switching = setInterval(function() {
    toggleSlide("picChange");
  }, interval);
  var secondpicswitch = setInterval(function() {
    toggleSlide("eventPic");
  }, interval);
  //window.paused = false;



  document.getElementById("eventPic").getElementsByTagName("img")[0].style.display = "block";
  document.getElementById("picChange").getElementsByTagName("img")[0].style.display = "block";

  function toggleSlide(dynamicDiv) {
    var holdingDiv = document.getElementById(dynamicDiv);
    var elements = holdingDiv.getElementsByTagName("img");
    // Find the LI that's currently displayed
    var visibleID = getVisible(elements);

    elements[visibleID].style.display = "none";

    var makeVisible = next(visibleID, elements.length);

    elements[makeVisible].style.display = "block";

  }

  function getVisible(elements) {
    var visibleID = -1;
    for (var i = 0; i < elements.length; i++) {
      if (elements[i].style.display == "block") {
        visibleID = i;
      }
    }
    return visibleID;
  }

  function prev(num, arrayLength) {
    if (num == 0) return arrayLength - 1;
    else return num - 1;
  }

  function next(num, arrayLength) {
    if (num == arrayLength - 1) return 0;
    else return num + 1;
  }




});









/* function clock*/


function GetClock() {
 
//Date.today().toString("MM/dd/yyyy") +'<br />' +
document.getElementById('clock').innerHTML =  new Date.today().toString("dddd, MMMM dd, yyyy, ") + " " + new Date().toString(" HH:mm:ss tt");
  //document.getElementById('clock').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
}


window.onload = function() {
  GetClock();
  setInterval(GetClock, 1000);
}
