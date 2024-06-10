<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class=" registerBody">

<div class=" registerContainer" style=" background-color:white">

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            {{-- <i  class=" fa-solid fa-less-than" style="color: rgb(255, 255, 255); font-size: 18px;"><!----><!----><!----></i> --}}
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 25px; height: 25px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">Register</h5>
</div>

<div class="registerLogoContainer">
    <img src="{{asset('icons/No need to edit/loginLogo.png')}}" style=" width: 240px ; height: 50px" alt="">
</div>



<div class=" registerCard py-4 px-4" style=" background-color: white">

<div class=" pb-3">
    <h5 class=" float-left semibold">Username</h5>
<input dir="rtl" type="text" class=" float-right border-0 " placeholder="Username">
</div>

<hr class=" mt-4">

<div class=" mt-4 pb-3">
    <h5 class=" float-left font-weight-bolder semibold">Phone</h5>
<input dir="rtl" type="text" class=" float-right border-0 " placeholder="Phone">
</div>

<hr class=" mt-4">

<div class=" mt-4 pb-3">
    <h5 class=" m-0  font-weight-bolder semibold">Transaction Password</h5>
    <br>
<div class=" bg-danger w-100">
    <input id="password" type="password" class=" float-left  border-0 " placeholder="Transaction Password">
    <img id="togglePasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}" class="eye mr-3 float-right">
</div>
</div>

<hr class=" mt-4">



<div class=" mt-4 pb-3">
    <h5 class=" m-0  font-weight-bolder semibold"> Password</h5>
    <br>
<div class=" bg-danger w-100">
    <input id="newPassword" type="password" class=" float-left  border-0 " placeholder=" Password">
    <img id="toggleNewPasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}"  class="eye mr-3 float-right">
</div>
</div>

<hr class=" mt-4">



<div class=" mt-4 pb-3">
    <h5 class=" m-0  font-weight-bolder semibold">Confirm Password</h5>
    <br>
<div class=" bg-danger w-100">
    <input id="confirmPassword" type="password" class=" float-left  border-0 " placeholder="Confirm Password">
    <img id="toggleConfirmPasswordBtn" src="{{asset('icons/No need to edit/closedEye.png')}}"  class="eye mr-3 float-right">
</div>
</div>

<hr class=" mt-4">


<div class=" mt-4 pb-3">
    <h5 class=" float-left font-weight-bolder semibold">Gender</h5>
<div class=" float-right border-0 ">
    <div class="form-check form-check-inline">
        <input style=" width: 20px; height: 20px" class=" mr-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input style=" width: 20px; height: 20px" class=" mr-2" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>

</div>
</div>

<hr class=" mt-4">


<div class=" mt-4 pb-3">
    <h5 class=" float-left font-weight-bolder semibold" style=" color: rgb(241, 187, 14);">Invite Code</h5>
<input dir="rtl" type="text" class=" float-right border-0 " placeholder="Invite Code">
</div>

{{-- <hr class=" mt-4"> --}}
<div data-v-815cc185="" class="flex-c-s deal-box mt-4">

     <div class=" w-100 d-flex justify-content-center">
      <div class=" d-flex">
        <input style=" width: 20px; height:20px" class=" mr-3" type="checkbox" id="inlineCheckbox1" value="option1"><br>
        <a href="/tac" data-v-815cc185="" class=" text-center semibold"
        style=" color:black; text-decoration:underline">Agree To Use The Relevant Treaties</a>
      </div>


     </div>
    </div>


</div>

<button class=" w-100 mb-4 py-2 border-0 text-white" style=" background-color:black; border-radius: 5px;">
    <h5>Register</h5>
</button>


<script>

const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');

        togglePasswordBtn.addEventListener('click', function() {
            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';
                togglePasswordBtn.src = "{{asset('icons/No need to edit/openEye.png')}}"
            }
            else {

                passwordInput.type = 'password';
                togglePasswordBtn.src ="{{asset('icons/No need to edit/closedEye.png')}}";
            }
        });

        const newPasswordInput = document.getElementById('newPassword');
        const toggleNewPasswordBtn = document.getElementById('toggleNewPasswordBtn');

        toggleNewPasswordBtn.addEventListener('click', function() {
            if (newPasswordInput.type === 'password') {

                newPasswordInput.type = 'text';
                toggleNewPasswordBtn.src = "{{asset('icons/No need to edit/openEye.png')}}";
            }
            else {

                newPasswordInput.type = 'password';
                toggleNewPasswordBtn.src = "{{asset('icons/No need to edit/closedEye.png')}}";
            }
        });


        const confirmPasswordInput = document.getElementById('confirmPassword');
        const toggleConfirmPasswordBtn = document.getElementById('toggleConfirmPasswordBtn');

        toggleConfirmPasswordBtn.addEventListener('click', function() {
            if (confirmPasswordInput.type === 'password') {

                confirmPasswordInput.type = 'text';
                toggleConfirmPasswordBtn.src = "{{asset('icons/No need to edit/openEye.png')}}";
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

</body>
</html>
