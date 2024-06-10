<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class=" loginBody">

<div class=" loginContainer" >

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 30px; height: 30px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">Update Transaction Password</h5>
</div>



<div class=" mt-3 py-3 px-3">


    <div>
        <label class=" semibold mb-3 ml-5 " for="">Old Password</label>
        <div class=" mx-4 mb-4 p-4 updateInputContainer ">
            <input id="password" type="password" class=" pl-2 w-75 updateInput border-0 password-input   "  placeholder=" Old Password" >
            <img id="togglePasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}"  class="eye float-right">
        </div>
    </div>

    <div>
        <label class=" semibold mb-3 ml-5 " for="">New Password</label>
        <div class=" mx-4 mb-4 p-4 updateInputContainer ">
            <input id="newPassword" type="password" class=" pl-2 w-75 updateInput border-0 password-input   "  placeholder=" New Password" >
            <img id="toggleNewPasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}"  class="eye float-right">
        </div>
    </div>

    <div>
        <label class=" semibold mb-3 ml-5 " for="">Confirm New Password</label>
        <div class=" mx-4 mb-4 p-4 updateInputContainer ">
            <input id="confirmPassword" type="password" class=" pl-2 w-75 updateInput border-0 password-input   "  placeholder=" Confirm New Password" >
            <img id="toggleConfirmPasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}"  class="eye float-right">
        </div>
    </div>


    <button  class=" mx-2 mx-md-5  my-5  py-3" style=" cursor:pointer; width:90%; box-shadow:none; outline:none;  background-color: rgb(241, 187, 14); border-radius: 5px; border:none">UPDATE</button>
</div>



<script>

const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');

        togglePasswordBtn.addEventListener('click', function() {
            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';
                togglePasswordBtn.src ="{{asset('icons/No need to edit/openEye.png')}}";
            }
            else {

                passwordInput.type = 'password';
                togglePasswordBtn.src = "{{asset('icons/No need to edit/closedEye.png')}}";
            }
        });

        const newPasswordInput = document.getElementById('newPassword');
        const toggleNewPasswordBtn = document.getElementById('toggleNewPasswordBtn');

        toggleNewPasswordBtn.addEventListener('click', function() {
            if (newPasswordInput.type === 'password') {

                newPasswordInput.type = 'text';
                toggleNewPasswordBtn.src = "{{asset('icons/No need to edit/openEye.png')}}"
            }
            else {

                newPasswordInput.type = 'password';
                toggleNewPasswordBtn.src = "{{asset('icons/No need to edit/closedEye.png')}}" ;
            }
        });


        const confirmPasswordInput = document.getElementById('confirmPassword');
        const toggleConfirmPasswordBtn = document.getElementById('toggleConfirmPasswordBtn');

        toggleConfirmPasswordBtn.addEventListener('click', function() {
            if (confirmPasswordInput.type === 'password') {

                confirmPasswordInput.type = 'text';
                toggleConfirmPasswordBtn.src = "{{asset('icons/No need to edit/openEye.png')}}"
            }
            else {

                confirmPasswordInput.type = 'password';
                toggleConfirmPasswordBtn.src = "{{asset('icons/No need to edit/closedEye.png')}}";
            }
        });


document.addEventListener('DOMContentLoaded', function() {
    const backBtn = document.getElementById('backBtn');
    backBtn.addEventListener('click', function(){
       window.history.back()
    })
})


</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

