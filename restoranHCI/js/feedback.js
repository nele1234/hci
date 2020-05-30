$('#feedbackButton').click(function () {
    console.log("juhu")
    var feedback = $('#feedback').val();


    if (feedback == "") {
        alert("Please enter your feedback")
    } else {
        /* AJAX */
        alert("Thank you!")
    }

});