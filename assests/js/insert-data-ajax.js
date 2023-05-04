$(document).ready(function() {
    let submitBtn = document.querySelector('#btn-submit');
    submitBtn.addEventListener('click', (e) => {
      e.preventDefault();
      let userImage = document.querySelector('#userImage').files[0];
      let userName = document.querySelector('#user-name').value;
      let userEmail = document.querySelector('#user-email').value;
      let userNumber = document.querySelector('#user-number').value;
      let userCountry = document.querySelector('#user-country').value;
      let userState = document.querySelector('#user-state').value;
      let userCity = document.querySelector('#user-city').value;
      let userPass = document.querySelector('#user-pass').value;
   // Validate all fields are not empty
   if (!userImage || !userName || !userEmail || !userNumber || !userCountry || !userState || !userCity || !userPass) {
       $('#message').css({'display':'block'})
       $('#message').html('all field are required').fadeIn(2000)
     
 
       setTimeout(function () {
        $("#message").hide(1000);
      }, 1000);

    return;
  }
      let formData = new FormData();
      formData.append('userImage', userImage);
      formData.append('userName', userName);
      formData.append('userEmail', userEmail);
      formData.append('userNumber', userNumber);
      formData.append('userCountry', userCountry);
      formData.append('userState', userState);
      formData.append('userCity', userCity);
      formData.append('userPass', userPass);
  
      $.ajax({
        url: 'includes/insert-ajax.php',
        method: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          alert('data successfuly inserted');
        }
      });
    });
  });
  