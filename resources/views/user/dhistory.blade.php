<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"> --}}
    <link rel="stylesheet" href="https://front-endwoopra-production.up.railway.app/css/dashboard.css">
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
    <h5 class=" text-white font-weight-bold text-center  col-11">Deposit</h5>
</div>




<div class=" mt-3 px-3 py-3">

<div class=" col-12  row">

<div id="reviewing" class=" col-4 text-center py-2 "  style="font-weight:600; background-color: rgb(241, 187, 14); cursor: pointer; border-radius: 4px; color:black; ">Reviewing</div>
<div id="success" class=" col-4 text-center py-2"  style="  color:black;cursor: pointer;  border-radius: 4px">Success</div>
<div id="reject" class=" col-4 text-center py-2  "  style=" color:black; cursor: pointer; border-radius: 4px">Reject</div>

</div>


<div style=" color:rgb(149, 144, 144)" class=" mt-4 text-center">No More Data ...</div>



</div>



<script>



document.addEventListener('DOMContentLoaded', function() {
    const backBtn = document.getElementById('backBtn');
    backBtn.addEventListener('click', function(){
       window.history.back()
    })


    const reviewing = document.getElementById('reviewing');
const success = document.getElementById('success');
const reject = document.getElementById('reject');

const clearFunction = ()=> {
    reviewing.style.backgroundColor= 'white';
    reviewing.style.fontWeight= '500';
    success.style.backgroundColor= 'white';
    success.style.fontWeight= '500';
    reject.style.backgroundColor= 'white';
    reject.style.fontWeight= '500';

}

reviewing.addEventListener('click', ()=> {
clearFunction();
reviewing.style.backgroundColor = 'rgb(241, 187, 14)';
reviewing.style.fontWeight ='600'
})


success.addEventListener('click', ()=> {
clearFunction();
success.style.backgroundColor = 'rgb(241, 187, 14)';
success.style.fontWeight ='600'
})

reject.addEventListener('click', ()=> {
clearFunction();
reject.style.backgroundColor = 'rgb(241, 187, 14)';
reject.style.fontWeight ='600'
})


})






</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



