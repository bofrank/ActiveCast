$( document ).ready(function() {
	//$.backstretch("images/bg.jpg");
});
function returnwasset(){
    var contactNameVal=$("#contact-name").val();
    var emailVal=$("#contact-mail").val();
    var commentsVal=$("#contact-message").val();
    $.ajax({
        type: "POST",
        url: "contact.php",
        data: {contactName:contactNameVal,email:emailVal,comments:commentsVal},
        dataType:'text',
        success: function(response){
            $("#contact-form").html("<h2 style='color:#ffffff;'>"+response+"</h2>");
        }
    });
}
