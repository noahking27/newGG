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

// document.getElementById('file-input').addEventListener('change', readSingleFile, false);



function getMenu() {
    var contents = $("#Menu").text();
    var lines = contents.split("EOL");  
    var count = 0;                  // Loop through all lines of record    
    $.each(lines, function(n, urlRecord) {
        //$('#simpleDiv').append(urlRecord + 'EOL');
          count++;
        // if (urlRecord.includes('%')) {
        //     $('#simpleDiv').append('<br/>');
        //
        //     $('#simpleDiv').append('<h5 style=\"Text-align:center;text-decoration: underline\" class=\"text-primary col-md-12\">' + urlRecord.substring(1).toUpperCase() + '</h5>');
        //
        //     // $('#simpleDiv').attr("style", "padding-top: 60px;")
        // } else {
        //     if (n > 137) {
        //     } else {
        //         $('#simpleDiv').append('<h5 style=\"Text-align:center;\" class=\"food-title col-md-4\">' + urlRecord + '</h5>');
        //         //$('#simpleDiv').attr("style", "Text-align:center;")
        //     }
        //
        // }


        if (urlRecord.includes('%')) {
            // $('#simpleDiv').append('<br/>');
            //
            // $('#simpleDiv').append('<h5 style=\"Text-align:center;text-decoration: underline\" class=\"text-primary col-md-12\">' + urlRecord.substring(1).toUpperCase() + '</h5>');

            // $('#simpleDiv').attr("style", "padding-top: 60px;")
        } else {
            if (n > 137) {
            } else {
              // var html = ""
              //
              // html += "<div class=\"col-md-6\"> <div class=\"mu-tab-content-right\"> <ul class=\"mu-menu-item-nav\"> <li> <div class=\"media\"> <div class=\"media-left\"> <a href=\"#\"> <button class=\"media-object\"></button> </a> </div><div class=\"media-body\"> <h4 class=\"media-heading\"><a href=\"#\">' + urlRecord.substring(1).toUpperCase() + '</a></h4>"
              //
              // html += "'<p></p></div></div></li></ul> </div></div>'"
if (urlRecord !== "" ) {
  if(count > 1){
      $('#startline').append('<div class=\"col-md-6\"> <div class=\"mu-tab-content-right\"> <ul class=\"mu-menu-item-nav\"> <li style=\"border-bottom: 1px dashed #ccc;display: inline;float: left;margin-bottom: 20px;padding-bottom: 15px;width: 100%;\"> <div class=\"media\"> <div class=\"media-left\"><button id="' + urlRecord+'" class=\"media-object\">ADD</button></div><div class=\"media-body\"> <h4 class=\"media-heading\"><a href=\"#\">' + urlRecord + '</a></h4><p></p></div></div></li></ul> </div></div>')
  }

}
            }

        }






    });
    $("#Menu").remove();
}



$(document).on('click', '.media-object', function(event) {
  event.preventDefault();
  console.log('button clicked!')
  alert(this.id)
  $('#addproducts').html('<div class=\"product\"><div class=\"product-image\"></div><div class=\"product-details\"><div class=\"product-title\">' + this.id + '</div><p class=\"product-description\">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself.</p></div><div></div><div></div><div class=\"product-removal\"> <button class=\"remove-product\"> Remove </button></div><div></div></div>');
  productRow.show();
  recalculateCart();
});
//   var contents = $("#Menu").text();
//   var lines = contents.split("EOL");  
//   var count = 0;                  // Loop through all lines of record    
//   $.each(lines, function(n, urlRecord) {
//       //$('#simpleDiv').append(urlRecord + 'EOL');
//         count++;
// $('#appendHere').append('<div class=\"product\"> <div class=\"product-image\">' + '<img src=\"https://s.cdpn.io/3/dingo-dog-bones.jpg\"> +'
//  </div>+''<div class=\"product-details\"><div class=\"product-title\">Dingo Dog Bones</div>
//  <p class=\"product-description\"></p></div><div class=\"product-removal\">
//  <button class="remove-product"> Remove </button> </div></div>');
//
//
//       // if (urlRecord.includes('%')) {
//       //     $('#appendHere').append('');
//       //
//           $('#simpleDiv').append('<h5 style=\"Text-align:center;text-decoration: underline\" class=\"text-primary col-md-12\">' + urlRecord.substring(1).toUpperCase() + '</h5>');
//       //
//       //     // $('#simpleDiv').attr("style", "padding-top: 60px;")
//       // } else {
//       //     if (n > 137) {
//       //     } else {
//       //         $('#simpleDiv').append('<h5 style=\"Text-align:center;\" class=\"product-title\">' + urlRecord + '</h5>');
//       //         //$('#simpleDiv').attr("style", "Text-align:center;")
//       //     }
//       //
//       // }
//   });
//   $("#Menu").remove();
// }
