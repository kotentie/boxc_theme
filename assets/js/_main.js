/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
       var totalSlides = $('.slide-buttons a').length;
       var currentSlide = 1;

      $('.front-page-slide').click(function() {
        $('#front-page-header').css({"background": "url(wp-content/themes/boxc_theme/assets/img/" + this.id + ".jpeg) no-repeat center center",   "background-size" : "cover"});
        slideCount = this.id.replace(/\D/g,'');
      });

      $('.arrow-nav span').click(function() {
        if(this.id === "slide-forward" && currentSlide < totalSlides){
          currentSlide ++;
        }else if(currentSlide === totalSlides) {
          currentSlide = 1;
        }else if(currentSlide === 1 && this.id === "slide-back"){
          currentSlide = totalSlides;
        }
        else{
          currentSlide --;
        }
        $('#front-page-header').css({"background": "url(wp-content/themes/boxc_theme/assets/img/slide-img-" + currentSlide + ".jpeg) no-repeat center center",   "background-size" : "cover"});
        $('.value-header').css('display','none');
        $('#value-header-' + currentSlide + '').css('display', 'block');
      });

      // var slideCount = 0
      //   setInterval(function(){
      //     if(slideCount < totalSlides){
      //       slideCount++;
      //     }
      //     else {
      //       slideCount = 1;
      //     }
      //   $('#front-page-header').css({"background" : "url(wp-content/themes/boxc_theme/assets/img/slide-img-" + slideCount + ".jpeg) no-repeat center center",   "background-size" : "cover"}); 
      //   $('.testimonial').css('display','none');
      //   $('#testimonial-' + slideCount + '').css('display', 'block');
      //   }, 5000);
    }
  },

  estimate: {
    init: function() {
      // JavaScript to be fired on the estimate page

          estimatePrice();
          
          function addUserVarsHtml(){
              (window.onpopstate = function () {
                var match,
                pl     = /\+/g,  // Regex for replacing addition symbol with a space
                search = /([^&=]+)=?([^&]*)/g,
                decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
                query  = window.location.search.substring(1);

                urlParams = {};
                while (match = search.exec(query))
                 urlParams[decode(match[1])] = decode(match[2]);
             })();

            displayWeight = "Weight:" + urlParams["weight"].match(/\d+$/)[0] + " lbs" ;
            displaySize = "Size:" + urlParams["d0"].match(/\d+$/)[0] + " in " + urlParams["d1"].match(/\d+$/)[0] + " in " + urlParams["d2"].match(/\d+$/)[0] + " in ";            
            alert(displaySize);
          }

          function estimatePrice(){
          var boxcApiUrl = "http://boxc-preview.appspot.com/pricing/fbb?"
          var boxcApi = {"C000":{"Service_Code":"C000","Service_Type":"PACK","Service":"PICK & PACK","Rate":"0.42 ","Unit":"PER ITEM","Cycle":"PER ITEM","Optional":"no"},"C001":{"Service_Code":"C001","Service_Type":"PACK","Service":"BOXC PACKAGING","Unit":"PER ITEM","Cycle":"PER ITEM","Optional":"no","options":[{"option":"C001-P01","name":"BOXC PACKAGING","rate":"0.00"},{"option":"C001-P02","name":"YOUR PACKAGING","rate":"0.02"},{"option":"C001-P03","name":"SUPER DUPER PACKAGING","rate":"0.10"}]},"C002":{"Service_Code":"C002","Service_Type":"SHIP","Service":"IMPORT","Rate":"1.99","Unit":"PER ITEM","Cycle":"PER ITEM","Optional":"no"},"C003":{"Service_Code":"C003","Service_Type":"SHIP","Service":"US DELIVERY","Rate":"2.99 ","Unit":"PER ITEM","Cycle":"PER ITEM","Optional":"no"},"C004":{"Service_Code":"C004","Service_Type":"SHIP","Service":"INSURANCE","Rate":"0.00","Unit":"PER ITEM","Cycle":"PER ITEM","Optional":"yes"},"C005":{"Service_Code":"C005","Service_Type":"WAREHOUSE","Service":"STORAGE","Rate":"0.13","Unit":"PER SKU","Cycle":"MONTHLY","Optional":"no"},"C006":{"Service_Code":"C006","Service_Type":"WAREHOUSE","Service":"PRODUCT PHOTOS","Rate":"5.00","Unit":"PER SKU","Cycle":"ONCE","Optional":"yes"}};
          var urlParams;
          var cycleSumObj = {};
          var cycleArr = [];



          Number.prototype.formatMoney = function(c, d, t){
            var n = this, 
                c = isNaN(c = Math.abs(c)) ? 2 : c, 
                d = d == undefined ? "." : d, 
                t = t == undefined ? "," : t, 
                s = n < 0 ? "-" : "", 
                i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
                j = (j = i.length) > 3 ? j % 3 : 0;
               return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
             };

          function fillCycleArr(){
              $.each(boxcApi, function(i, item){
                  cycleArr.push(boxcApi[i].Cycle);
              });
              cycleArr = $.unique(cycleArr);
              $.each(cycleArr, function(i, item){
                  $('#totals-table').append('<table><tbody><tr><td><div class="price"><h2 id=' + cycleArr[i].replace(/\s+/g, '') +'-price></h2></div></td></tr><tr><td><div class="service_name"><h4>' + cycleArr[i] +'</h4> </div></td></tr></tbody></table>');
                  cycleSumObj[item] = 0;

              });
          }

          function sumCycleSumObj() {

            $( "input:checked").each(function () {
                     var cycle = $(this).attr("data-cycle");
                     var rate = parseFloat($(this).attr("data-rate"));
                     var numItems = $('#pkg-total').attr("data-total");
                     if(cycle === "MONTHLY"){
                        cycleSumObj[cycle] += rate * numItems;
                     }
                     else{
                       cycleSumObj[cycle] += rate;
                    }
                  });
            
              $.each(cycleArr, function(i, item){
                  var cycleCleaned = item.replace(/\s+/g, '');
                  $('#' + cycleCleaned + '-price' ).text('$' + cycleSumObj[item].formatMoney(2) + '');
                  cycleSumObj[item] = 0;
                  });

          }

          function addHtml(){

          $.each(boxcApi, function(i, item){
              var servicetypeClass = boxcApi[i].Service_Type.toLowerCase(),
                                     optional;
              var servicetypeId = document.getElementById('' + servicetypeClass + '');
              if(servicetypeId === null){
                  $('#services-area').append('<div class="table_heading" id="' + servicetypeClass + '"><h3>' + servicetypeClass + '</h3></div><table id="' + servicetypeClass + '-table" class="table table-striped"><tbody></tbody></table>');
              }

              if (boxcApi[i]['options']){
                  
                  nObjects = boxcApi[i].options.length;
                  $('#' + servicetypeClass + '-table tbody').append('<tr class ="'+ servicetypeClass +'"><td><img src="/wp-content/themes/boxc_theme/assets/img/tick.gif" height="16" width="16"></td><td><div class="service_name"><h5>' + boxcApi[i].Service + '</h5></div></td><td></td><td></td></tr>');
                  
                  for (var a =0; a < nObjects; a++){
                      $('.' + servicetypeClass).after('<tr class ="multi-options"><td><div class="radio"><input type="radio" data-servicecode="' + boxcApi[i].options[a].option + '" name="' + boxcApi[i].Service + '"  data-rate="' + boxcApi[i].options[a].rate + '" data-cycle="' + boxcApi[i].Cycle + '"></div></td><td><div class="sub-subservice-name"><h6>' + boxcApi[i].options[a].name  + '</h6></div></td><td><div class="unit-value"><h6>'+ boxcApi[i].Unit +'</h6></div></td><td><div class="price ' + boxcApi[i].Cycle + '"><h5 class="rate-unit"> $' + boxcApi[i].options[a].rate + '</h5></div></td></tr>');
            
                  } 
              }
              else{

                if (boxcApi[i].Optional === "yes"){
                    optional = '<div class="checkbox"><input type="checkbox" class="checkedbox" name="' + boxcApi[i].Service_Code + '" data-rate ="' + boxcApi[i].Rate + '" data-cycle ="' + boxcApi[i].Cycle + '"></div>';
                } 
                else {
                    optional = '<input type="checkbox" name="' + boxcApi[i].Service_Code + '" class="checkedbox" style="display:none" value="checked" checked="checked" data-rate="' + boxcApi[i].Rate + '"data-cycle ="' + boxcApi[i].Cycle + '"><img src="/wp-content/themes/boxc_theme/assets/img/tick.gif" alt="checkbox ticked" height="16" width="16">';
                }
                 $('#' + servicetypeClass + '-table tbody').append('<tr><td>' + optional + '</td><td><div class="service_name"><h5>' + boxcApi[i].Service + '</h5></div></td><td><div class="unit-value"><h6>'+ boxcApi[i].Unit +'</h6></div></td><td><h5 class="rate-unit"> $' + boxcApi[i].Rate + '</h5></div></td></tr>' );
                }  
            })
          }

          addUserVarsHtml();

          addHtml();
          fillCycleArr();
          sumCycleSumObj();

          $('input[type=radio]').change(function() {
              sumCycleSumObj();
              
          });

          $('#sign-up-btn').click(function(){
            serviceCodeArray = [];
            $( "input:checked").each(function () {
              var name = $(this).attr("name");
              serviceCodeArray.push(name);
              });
              document.cookie = serviceCodeArray;
              alert(document.cookie);
            });


          $('input[type=checkbox]').change(function () {
              
              sumCycleSumObj();
          });

          $('#fbb a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });

          $('#fbs a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });

          $('#bulk a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });

           $('#ustochina a').click(function (e) {
              e.preventDefault();
              $(this).tab('show');
            });
      }

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
