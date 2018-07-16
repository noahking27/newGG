$("#reservationForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Please fill all required fields!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#contactName").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var attendeeCount = $("#attendeeCount").val();
    var dateOfEvent = $("#dateOfEvent").val();
    var nameOfEvent = $("#nameOfEvent").val();
    var eventLocation = $("#eventLocation").val();
    var selectBox = $("#selectBox").val();
    var eventTiming = $("#eventTiming").val();
    var setupTime = $("#setupTime").val();
    var guestArrivalTime = $("#guestArrivalTime").val();
    var guestDepartTime = $("#guestDepartTime").val();
    var foodDeliveryTime = $("#foodDeliveryTime").val();
    var foodServiceTime = $("#eventLocation").val();
    var end = $("#end").val();
    var otherTimingDetails = $("#otherTimingDetails").val();

    $.ajax({
        type: "POST",
        url: "Temp/php/cateringorder.php",
        data: "name=" + name + "&phone=" + phone + "&email=" + email + "&attendeeCount=" + attendeeCount
        + "&dateOfEvent=" + dateOfEvent + "&nameOfEvent=" + nameOfEvent + "&eventLocation=" + eventLocation
        + "&selectBox=" + selectBox + "&eventTiming=" + eventTiming
        + "&setupTime=" + setupTime + "&guestArrivalTime=" + guestArrivalTime + "&guestDepartTime=" + guestDepartTime
        + "&foodDeliveryTime=" + foodDeliveryTime + "&foodServiceTime=" + foodServiceTime + "&end=" + end
        + "&otherTimingDetails=" + otherTimingDetails,

        success : function(text){
          console.log('php text' + text);
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    $("#reservationForm");
    submitMSG(true, "Message Sent!")
}

function formError(){
    $("#reservationForm").removeClass().addClass('animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center fadeIn animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#submitOrder").removeClass().addClass(msgClasses).text(msg);
}
