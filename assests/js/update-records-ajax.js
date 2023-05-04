$(document).ready(function () {
  
 $("#close").on("click",function(){
  $('.container').hide(1000);
 })
  $("#btn-update").on("click", function (e) {
    e.preventDefault();
    let userId = document.querySelector("#userId").value;
    let userImage = document.querySelector("#userImage").files[0];
    let userName = document.querySelector("#user-name").value;
    let userEmail = document.querySelector("#user-email").value;
    let userNumber = document.querySelector("#user-number").value;
    let userCountry = document.querySelector("#user-country").value;
    let userState = document.querySelector("#user-state").value;
    let userCity = document.querySelector("#user-city").value;
    let userPass = document.querySelector("#user-pass").value;
    let formData = new FormData();
    formData.append("userId", userId);
    formData.append("userImage", userImage);
    formData.append("userName", userName);
    formData.append("userEmail", userEmail);
    formData.append("userNumber", userNumber);
    formData.append("userCountry", userCountry);
    formData.append("userState", userState);
    formData.append("userCity", userCity);
    formData.append("userPass", userPass);

    console.log(userImage);
    $.ajax({
      url: "includes/update-records2.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        $("#update-wrapper").hide(1500);
        console.log(data);
        // location.reload(true);
      },
    });
  });
});
