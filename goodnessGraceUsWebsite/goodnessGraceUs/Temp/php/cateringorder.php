<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// ATTENDEE COUNT
if (empty($_POST["attendeeCount"])) {
    $errorMSG .= "Attendee count is required ";
} else {
    $attendeeCount = $_POST["attendeeCount"];
}

// DATE OF EVENT
if (empty($_POST["dateOfEvent"])) {
    $errorMSG .= "Date of event is required ";
} else {
    $dateOfEvent = $_POST["dateOfEvent"];
}

// NAME OF EVENT
if (empty($_POST["nameOfEvent"])) {
    $errorMSG .= "Name of event is required ";
} else {
    $nameOfEvent = $_POST["nameOfEvent"];
}

// EVENT LOCATION
if (empty($_POST["eventLocation"])) {
    $errorMSG .= "Event location is required ";
} else {
    $eventLocation = $_POST["eventLocation"];
}

// DROP OFF OR SETUP
  if (empty($_POST["selectBox"])) {
      $errorMSG .= "Dropoff / Setup is required ";
    } else {
        $selectBox = $_POST["selectBox"];
    }

// EVENT TIMING
    if (empty($_POST["eventTiming"])) {
        $errorMSG .= "Event timing is required ";
    } else {
        $eventTiming = $_POST["eventTiming"];
    }

// SETUP TIME
    if (empty($_POST["setupTime"])) {
        $errorMSG .= "Setup Time is required ";
    } else {
        $setupTime = $_POST["setupTime"];
    }

// GUEST ARRIVAL TIME
    if (empty($_POST["guestArrivalTime"])) {
        $errorMSG .= "Guest Arrival Time is required ";
    } else {
        $guestArrivalTime = $_POST["guestArrivalTime"];
    }

// GUEST DEPART TIME
  if (empty($_POST["guestDepartTime"])) {
       $errorMSG .= "Guest Departure time is required ";
    } else {
        $guestDepartTime = $_POST["guestDepartTime"];
    }

    // FOOD DELIVERY TIME
    if (empty($_POST["foodDeliveryTime"])) {
        $errorMSG .= "Food delivery time is required ";
    } else {
        $foodDeliveryTime = $_POST["foodDeliveryTime"];
    }

    // FOOD SERVICE TIME
    if (empty($_POST["foodServiceTime"])) {
        $errorMSG .= "Food service time is required ";
    } else {
        $foodServiceTime = $_POST["foodServiceTime"];
    }

    // END
    if (empty($_POST["end"])) {
        $errorMSG .= "End is required ";
    } else {
        $end = $_POST["end"];
    }

    // OTHER TIMING DETAILS
        $otherTimingDetails = $_POST["otherTimingDetails"];


//Add your email here
$EmailTo = "Goodnessgraceuscatering@gmail.com";
$Subject = "New Catering Request Goodness GraceUs Website";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Attendee Count: ";
$Body .= $attendeeCount;
$Body .= "\n";
$Body .= "Date of Event: ";
$Body .= $dateOfEvent;
$Body .= "\n";
$Body .= "Name of Event: ";
$Body .= $nameOfEvent;
$Body .= "\n";
$Body .= "Event Location: ";
$Body .= $eventLocation;
$Body .= "\n";
$Body .= "Drop Off Only or Setup and Serve: ";
$Body .= $selectBox;
$Body .= "\n";
$Body .= "Event Timing: ";
$Body .= $eventTiming;
$Body .= "\n";
$Body .= "Setup Time: ";
$Body .= $setupTime;
$Body .= "\n";
$Body .= "Guest Arrival Time: ";
$Body .= $guestArrivalTime;
$Body .= "\n";
$Body .= "Guest Depart Time: ";
$Body .= $guestDepartTime;
$Body .= "\n";
$Body .= "Food Delivery Time: ";
$Body .= $foodDeliveryTime;
$Body .= "\n";
$Body .= "Food Service Time: ";
$Body .= $foodServiceTime;
$Body .= "\n";
$Body .= "End: ";
$Body .= $end;
$Body .= "\n";
$Body .= "Other Timing Details: ";
$Body .= $otherTimingDetails;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
