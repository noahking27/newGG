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

function getMenu() {

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
var contents = $("#Menu").text();
var lines = contents.split("EOL");
var count = 0;                  // Loop through all lines of record
var currentHeader = ""


// var ItemArray = [];
// ItemArray.push({
//     Title : urlRecord,
//     Description : []
// });
//
// ItemArray[0].Item.push("New Item");
//
// console.log(ItemArray);

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
                     $(classname).append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-left\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 85%;\"> <div class=\"media\"> <div class=\"media-left\"><button id="' + urlRecord + '" type=\"Button\" class=\"media-object btn btn-success\">ADD</button></div><div class=\"media-body media-middle\"> <h4 class=\"media-heading\"><a href=\"#\">' + title + '</a></h4><p>' + urlRecord.substring(des) + '</p></div></div></li></ul> </div></div>');

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

var shopCount = 0
$(document).on('click', '.listItem', function(event) {
  console.log('this')
  console.log(this.id)
  var clickedTab = this.id
  // $(`div#${clickedTab}.tab-pane`).each(function(event) {

$('.recent').removeClass('active').addClass('hidden').removeClass('recent')
$(`div#${clickedTab}.tab-pane`).removeClass('hidden').addClass('active').addClass('recent')


});


$(document).on('click', '.media-object', function(event) {
  shopCount += 1
  $('.badge').html(shopCount)
  event.preventDefault();
  $('#addproducts').append('<div class=\"product\"><div class=\"product-image\"></div><div class=\"product-details\"><div class=\"product-title\">' + this.id + '</div><p class=\"product-description\"></p></div><div></div><div></div><div class=\"product-removal\"> <button class=\"remove-product\"> Remove </button></div><div></div></div>');
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
$( "#ALL" ).click(function() {
  $('.tab-pane').removeClass('hidden').addClass('active').addClass('recent')
});
