var item = 0;

var shuffleme = (function($) {
    'use strict';
    var $grid = $('#grid'), //locate what we want to sort
        $filterOptions = $('.gallery-filter a'), //locate the filter categories
        $sizer = $grid.find('.shuffle_sizer'), //sizer stores the size of the items

        init = function() {

            // None of these need to be executed synchronously
            setTimeout(function() {
                listen();
                setupFilters();
            }, 100);

            // instantiate the plugin
            $grid.shuffle({
                itemSelector: '[class*="col-"]',
                sizer: $sizer
            });
        },



        // Set up button clicks
        setupFilters = function() {
            var $btns = $filterOptions.children();
            $btns.on('click', function(e) {
                e.preventDefault();
                var $this = $(this),
                    isActive = $this.hasClass('active'),
                    group = isActive ? 'all' : $this.data('group');

                // Hide current label, show current label in title
                if (!isActive) {
                    $('.gallery-filter a').removeClass('active');
                }

                $this.toggleClass('active');

                // Filter elements
                $grid.shuffle('shuffle', group);
            });

            $btns = null;
        },

        // Re layout shuffle when images load. This is only needed
        // below 768 pixels because the .picture-item height is auto and therefore
        // the height of the picture-item is dependent on the image
        // I recommend using imagesloaded to determine when an image is loaded
        // but that doesn't support IE7
        listen = function() {
            var debouncedLayout = $.throttle(300, function() {
                $grid.shuffle('update');
            });

            // Get all images inside shuffle
            $grid.find('img').each(function() {
                var proxyImage;

                // Image already loaded
                if (this.complete && this.naturalWidth !== undefined) {
                    return;
                }

                // If none of the checks above matched, simulate loading on detached element.
                proxyImage = new Image();
                $(proxyImage).on('load', function() {
                    $(this).off('load');
                    debouncedLayout();
                });

                proxyImage.src = this.src;
            });

            // Because this method doesn't seem to be perfect.
            setTimeout(function() {
                debouncedLayout();
            }, 500);
        };

    return {
        init: init
    };
}(jQuery));

$(document).ready(function() {
    shuffleme.init(); //filter gallery
});

function getOrder() {
  $('.orderlist').hide();
  $('#OrderHeader').show();
  var contents = $("#Menu").text();
  var lines = contents.split("EOL");
  var count = 0;                  // Loop through all lines of record
  var currentHeader = ""

  $.each(lines, function(n, urlRecord) {
    if (!(urlRecord.includes("END"))) {
      //$('#simpleDiv').append(urlRecord + 'EOL');
      if (urlRecord.includes('%') && urlRecord !== "") {
        var idNames = urlRecord
        console.log(idNames)

        currentHeader = urlRecord.substring(1, 4)
        $('.mu-restaurant-menu').append('<li id=\"' + urlRecord.substring(1, 4) + '\" class=\"listItem\"><a href=\"#' + urlRecord.substring(1, 4) + '\" data-toggle=\"tab\">' + urlRecord.substring(1) + '</a></li>');
        count++;
        if (count == 1){
         $('#CategoryHeaders').append('<div class=\"tab-pane fade in hidden\" id=\"' + urlRecord.substring(1, 4) + '\"><div class=\"mu-tab-content-area\"><div class=\"row '+ currentHeader +'\">');
        }
        else {
          $('#CategoryHeaders').append('</div></div></div>');
          $('#CategoryHeaders').append('<div class=\"tab-pane fade in hidden\" id=\"' + urlRecord.substring(1, 4) + '\"><div class=\"mu-tab-content-area\"><div class=\"row '+ currentHeader +'\">');
        }
      } else {
            if (urlRecord !== "") {
                if (n > 1) {
                  var des = urlRecord.indexOf('P_')
                  if (des < 0){

                    var classname = '.' + currentHeader +'';
                       $(classname).append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-left\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 85%;\"> <div class=\"media\"> <div class=\"media-left\"><button id="' + urlRecord + '" type=\"Button\" class=\"media-object btn btn-success\">ADD</button></div><div class=\"media-body media-middle\"> <h4 class=\"media-heading\"><a href=\"#\">' + urlRecord + '</a></h4><p></p></div></div></li></ul> </div></div>');

                  } else {
                    des = des + 2
                    var start = urlRecord.length - des
                    var title = urlRecord.substring(0, des - 2)
                    var classname = '.' + currentHeader +'';
                       $(classname).append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-left\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 85%;\"> <div class=\"media\"> <div class=\"media-left\"><button id="' + urlRecord + '" type=\"Button\" class=\"media-object btn btn-success\">ADD</button></div><div class=\"media-body media-middle\"> <h4 class=\"media-heading\"><a href=\"#\">' + title + '</a></h4><p style=\"color:white\">' + urlRecord.substring(des) + '</p></div></div></li></ul> </div></div>');

                  }

                }

            }

        }
    } else {
        return false;
    }


  });
  $("#Menu").remove();
}

function readSingleFile(e) {
    var file = e.target.files[0];
    if (!file) {
        return;
    }
    var reader = new FileReader();
    reader.onload = function(e) {
        var contents = e.target.result;
        // Display file content
        displayContents(contents);
    };
    reader.readAsText(file);
}

function UploadNewMenu(contents) {
    var lines = contents.split("\n");                   // Loop through all lines of record    
    $.each(lines, function(n, urlRecord) {
        $('#simpleDiv').append(urlRecord + 'EOL');
    });

}

function getMenu() {
$('.orderlist').hide();
$('#OrderHeader').show();
var contents = $("#Menu").text();
var lines = contents.split("EOL");
var count = 0;                  // Loop through all lines of record
var currentHeader = ""

$.each(lines, function(n, urlRecord) {
  if (!(urlRecord.includes("END"))) {
    //$('#simpleDiv').append(urlRecord + 'EOL');
    if (urlRecord.includes('%') && urlRecord !== "") {
      var idNames = urlRecord
      console.log(idNames)

      currentHeader = urlRecord.substring(1, 4)
      $('.mu-restaurant-menu').append('<li id=\"' + urlRecord.substring(1, 4) + '\" class=\"listItem\"><a href=\"#' + urlRecord.substring(1, 4) + '\" data-toggle=\"tab\">' + urlRecord.substring(1) + '</a></li>');
      count++;
      if (count == 1){
       $('#CategoryHeaders').append('<div class=\"tab-pane fade in hidden\" id=\"' + urlRecord.substring(1, 4) + '\"><div class=\"mu-tab-content-area\"><div class=\"row '+ currentHeader +'\">');
      }
      else {
        $('#CategoryHeaders').append('</div></div></div>');
        $('#CategoryHeaders').append('<div class=\"tab-pane fade in hidden\" id=\"' + urlRecord.substring(1, 4) + '\"><div class=\"mu-tab-content-area\"><div class=\"row '+ currentHeader +'\">');
      }
    } else {
          if (urlRecord !== "") {
              if (n > 1) {
                var des = urlRecord.indexOf('P_')
                if (des < 0){

                  var classname = '.' + currentHeader +'';
                     $(classname).append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-left\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 85%;\"> <div class=\"media\"> <div class=\"media-left\"></div><div class=\"media-body media-middle\"> <h4 class=\"media-heading\"><a href=\"#\">' + urlRecord + '</a></h4><p></p></div></div></li></ul> </div></div>');

                } else {
                  des = des + 2
                  var start = urlRecord.length - des
                  var title = urlRecord.substring(0, des - 2)
                  var classname = '.' + currentHeader +'';
                     $(classname).append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-left\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 85%;\"> <div class=\"media\"> <div class=\"media-left\"><button id="' + urlRecord + '" type=\"Button\" class=\"media-object btn btn-success\">ADD</button></div><div class=\"media-body media-middle\"> <h4 class=\"media-heading\"><a href=\"#\">' + title + '</a></h4><p style=\"color:white\">' + urlRecord.substring(des) + '</p></div></div></li></ul> </div></div>');

                }

              }

          }

      }
  } else {
      return false;
  }


});
$("#Menu").remove();
}

$( "#ALL" ).click(function() {
  $('.tab-pane').addClass('all')
  //$('.tab-pane').removeClass('hidden').addClass('active')

});

var shopCount = 0
//$('#bkgrd').attr("src","http://www.ptahai.com/wp-content/uploads/2016/06/Best-Reverse-Image-Search-Engines-Apps-And-Its-Uses-2016.jpg");
$(document).on('click', '.listItem', function(event) {
// set background images
console.log($('.listItem').index(this))
switch ($('.listItem').index(this)) {
    case 0:
        $('#bkgrd').attr("src","Temp/Image/bread.jpg");
        break;
    case 1:
        $('#bkgrd').attr("src","Temp/Image/soup.jpg");
        break;
    case 2:
        $('#bkgrd').attr("src","Temp/Image/brocoli.jpg");
        break;
    case 3:
        $('#bkgrd').attr("src","Temp/Image/freshberry.jpg");
        break;
    case 4:
        $('#bkgrd').attr("src","Temp/Image/greenbeans.jpg");
        break;
    case 5:
        $('#bkgrd').attr("src","Temp/Image/Pasta.jpg");
        break;
    case 6:
        $('#bkgrd').attr("src","Temp/Image/chicken.jpg");
        break;
    case 7:
        $('#bkgrd').attr("src","Temp/Image/salmon.jpg");
        break;
    case 8:
        $('#bkgrd').attr("src","Temp/Image/dessertpic.jpg");
        break;
    case 9:
        $('#bkgrd').attr("src","Temp/Image/bread.jpg");
        break;
    case 10:
          $('#bkgrd').attr("src","Temp/Image/drink.jpg");
          break;
    case 11:
          $('#bkgrd').attr("src","Temp/Image/buffet.jpg");
          break;
      }



  console.log('this')
  console.log(this.id)
  var clickedTab = this.id
  // $(`div#${clickedTab}.tab-pane`).each(function(event) {
// if  ($('.tab-pane').hasClass('all')) {
//   $('.tab-pane').removeClass('all').addClass('hidden')
// }
if  ($('.tab-pane').hasClass('all')) {
  $('.tab-pane').removeClass('hidden')
  $('.tab-pane').removeClass('all').addClass('hadAll')
}else if ($('.tab-pane').hasClass('hadAll')) {
  $('.tab-pane').addClass('hidden')
  $(`div#${clickedTab}.tab-pane`).removeClass('hidden').addClass('active').addClass('recent')
} else {
  $('.recent').removeClass('active').addClass('hidden').removeClass('recent')
  $(`div#${clickedTab}.tab-pane`).removeClass('hidden').addClass('active').addClass('recent')
}




});


$(document).on('click', '.media-object', function(event) {
  shopCount += 1
 var item = ""
  var des = this.id.indexOf('P_')
  if (des < 0){
    item = this.id
  } else {
    des = des + 2
    var title = this.id.substring(0, des - 2)
    item = title
  }

  $('.badge').html(shopCount)
  event.preventDefault();
  $('.addproducts').append('<div class=\"product row\" style=\"margin-right: 25px;width:100%;border-bottom: 1px dashed #ccc;padding-bottom: 4pt;\"><div class=\"product-details col-sm-8\"><div class=\"product-title\">' + item + '</div></div><div class=\"product-removal col-sm-4\"> <button class=\"remove-product btn-danger\"> Remove </button></div></div><br/>');

  productRow.show();
  recalculateCart();
});

$(document).on('click', '.remove-product', function(event) {
  shopCount -= 1
    $('.badge').html(shopCount)
  event.preventDefault();
  /* Remove row from DOM and recalc cart total */
  var productRow = $(this).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.hide();
    recalculateCart();
  });
});

$('.checkout').click(function() {
  $('.orderlist').show();
  $('#menupage').attr("style", "visibility:hidden;");
  $('#OrderHeader').show();
  $('.orderlist').append("<br/>");
  $('.product-removal').remove();
  forprint();
});

function forprint(){
if (!window.print){

return
}
$('#menupage').remove();
window.print()
}
