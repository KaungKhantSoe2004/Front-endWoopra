<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    {{-- <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"> --}}
    <link rel="stylesheet" href="https://front-endwoopra-production.up.railway.app/css/dashboard.css">
</head>
<body class=" loginBody">

<div class=" loginContainer" style=" background-color: white">

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 30px; height: 30px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">Modify Information</h5>
</div>



<div style=" background-color: #f8f8f8">


    <div class=" d-flex justify-content-center">


        <div class=" mt-3 py-3 px-3">
            <div class="van-uploader__input-wrapper"><div data-v-ac10697e="" class="van-image van-image--round" style="width: 5rem; height: 5rem;">
                <img id="profile" src="{{asset('icons/No need to edit/Profile logo.png')}}" class="van-image__img " style="object-fit: cover; cursor: pointer; width: 80px; height: 80px"><!----><!----></div>
                <input id="addImg" type="file" class="van-uploader__input" hidden accept="image/*"></div>
        </div>



    </div>

    <div class=" mb-4 d-flex justify-content-center" style="   background-color: #f8f8f8;">
        <div>Tag To Change <i class=" fas fa-edit"></i> </div>
    </div>
 <br>

</div>


<div class=" mt-4" style=" background-color: #f8f8f8 !important;" >
    <div class=" ml-4 mt-2 float-left semibold" class=" bg-white">Username</div>
<div class=" mr-5 mt-2 float-right semibold">Min Khant</div>
</div>
 <br>
 <br>
<div class="" style=" background-color: #f8f8f8 !important;" >
    <div class=" ml-4 mt-2 float-left semibold" class=" bg-white">Email</div>
    <input dir="rtl" type="text" class=" float-right border-0 mr-4 " placeholder="Bind Email">
</div>
<br>
<br>


<div class=" mt-4" style=" background-color: #f8f8f8 !important;" >
    <div class=" ml-4 mt-2 float-left semibold " style=" text-decoration:none; color:black" >Update Password</div>
<div class=" mr-5 mt-2 float-right semibold">
    <img id="passwordUpdate" src="{{asset('icons/No need to edit/forward.png')}}" style=" width: 20px; height:20px" alt="">
</div>
</div>
 <br>
 <br>
<div class="" style=" background-color: #f8f8f8 !important;" >
    <div class=" ml-4 mt-2 float-left semibold" >Update Transaction Password</div>
<div   class=" mb-5 mr-5 mt-2 float-right semibold">
    <img id="transactionUpdate" src="{{asset('icons/No need to edit/forward.png')}}" style="  text-decoration:none; color: black; width: 20px; height:20px" alt="">
</div>
</div>
<br>
<br>
<br>

    <button  class=" mx-2 mx-md-5  my-5  py-3" style=" cursor:pointer; width:90%; box-shadow:none; outline:none;  background-color: rgb(241, 187, 14); border-radius: 5px; border:none">Confirm</button>



</div>
<script>

const transaction = document.getElementById('transactionUpdate');
transaction.addEventListener('click', function(){
    window.location.href = '/updateTransactionPassword'
})

const updatePassword = document.getElementById('passwordUpdate');
updatePassword.addEventListener('click', function(){
    window.location.href = '/updatePassword'
})
document.addEventListener('DOMContentLoaded', function() {
    const backBtn = document.getElementById('backBtn');
    backBtn.addEventListener('click', function(){
       window.history.back()
    })
})

const profile = document.getElementById('profile');
const input = document.getElementById('addImg');

profile.addEventListener('click', ()=> {
    // alert('clicked')
    input.click()
})


</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

