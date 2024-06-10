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

<div class=" loginContainer" style="">

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 30px; height: 30px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">My Team</h5>
</div>




<div class=" mt-3 px-3 py-3">


    {{-- <div class=" profilesHeader">
        <div class=" ml-3 d-flex">
            <img src="{{asset('icons/No need to edit/Profile logo.png')}}" style=" width: 70px; height:70px" alt="">


        <div>

            <div class=" d-block ml-2 profileTextContainer">


                <div class="  d-flex">
                   <h5 style=" color:black; font-weight: 650;">Kaung Kaung</h5>
                   <img src="{{asset('icons/No need to edit/vip1.png')}}" style=" width: 24px; height:24px;" class=" ml-2" alt=""></div>
              </div>

              <div class=" w-100 ml-2">
                  <h6 class=" w-100  d-flex text-secondary ">Credit Score:
                <div class=" mt-2 ml-2 " style="background-color: rgb(241, 187, 14); height:1px; width:100px; border-radius:5px; padding:2px;"></div>
                <div style=" color:black; font-weight:700">100%</div>

            </h6>
              </div>

    <div class=" w-100 ml-2">
        <h6 class=" w-100  d-flex text-secondary " style=" font-weight:560">Invitation Code : <div style=" font-weight:700;  color:black" class=" ml-2">
            40RTK7
        </div>
     <div class=" ml-2 px-1 py-1 " style="color:black; background-color: rgb(241, 187, 14); border-radius:9px;">copy</div>

        </h6>
    </div>

          </div>


        </div>
    </div> --}}



    {{-- big card --}}
    <div class=" mt-3 mx-3 homeBigCardContainer position-relative">

        <div class=" py-4 px-4 homeBigCard" style=" width: 100%; background-color: black; border-radius: 10px">

        <h6 class=" text-white">Wallet Account</h6>

        <div class=" d-flex text-white">
             <h3 style=" font-style:italic; font-weight:700">1,574,628.29</h3>
              <div class=" mt-2">USD</div>
        </div>



        <div class=" mt-2 homeBtnContainer">
            <button class=" btn btn-sm btn-warning" style=" border:0;">Today Earnings</button>
            <button class=" ml-3 btn btn-sm  text-white border-white  " style=" background-color:black ">Total Earnings</button>
        </div>


        <div class=" homeCasesContainer d-flex mt-3 ">
            <div class=" d-inline revenueContainer mr-3 pr-3" style=" border-right: solid 1px rgb(241, 187, 14);" >
                <div class=" text-white-50" style=" font-weight: 500">Order Revenue</div>
                <div class=" text-white">0</div>
            </div>
            <div class=" d-inline teamContainer mr-3 pr-3" style=" border-right: solid 1px rgb(241, 187, 14); " >
                <div class=" text-white-50" style=" font-weight: 500">Team</div>
                <div class=" text-white">0</div>
            </div>
            <div class=" d-inline totalContainer mr-3 pr-3">
                <div class=" text-white-50" style=" font-weight: 500">Total Earnings</div>
                <div class=" text-white">0</div>
            </div>
        </div>

<button id="ToCommisionStatement" class=" position-absolute mr-4 mt-3 " id="teamDetails" style="outline:none; cursor: pointer; top:0; right:0; border:none;  border-radius: 5px; background-color:rgb(241, 187, 14); border-radius: 9px;">

<img src="{{asset('icons/No need to edit/descImg.png')}}" style=" width:35px; height:35px;" alt="">
<span style=" color:black; font-weight: 600">Team Description</span>
</button>

        </div>

    {{-- big card end --}}

    <div class=" mt-4 mb-5 bg-white">
        <div class=" float-left">
            {{-- <img src="{{asset('icons/No need to edit/book.png')}}" style=" width: 30px; height: 30px; border-radius:6px;" alt=""> --}}
            <div class=" d-inline ml-3" style=" font-weight: 690; color:black" >
              Friends I invited : <span class=" px-2 rounded-circle " style=" width: 6px; background-color:rgb(241, 187, 14); ">3</span>
            </div>
        </div>
        <div class=" float-right d-flex " style=" color:black;">
            <div class=" d-inline mr-3 " style=" font-weight: 690; " >
            Team

              </div>

              <div class=" d-flex" style=" border-radius: 14px ;background-color:rgb(166, 169, 171) " >
                <div id="total" class=" w-50 px-2" style=" border-radius: 10px; background-color:rgb(241, 187, 14)">Total</div>
                <div id="today" class=" px-2 " style=" border-radius: 10px; background-color: rgb(166, 169, 171)">Today</div>
            </div>

        </div>
        </div>


</div>


<div class=" ml-4  col-12 row my-4 py-4 w-100 " style=" border-radius: 8px; background-color:white">


<div class=" col-12 bg-white">


<div class=" my-2 col-12">
    <div class=" float-left d-flex">
        <img src="{{asset('icons/No need to edit/Profile logo.png')}}" style=" width: 45px; height:45px" alt="">
<div class=" ml-3">
    <div class=" " style=" color:black;font-weight: 500">U Thein</div>
    <small>3488904587</small>
</div>
    </div>
    <div class=" float-right" style=" color:black; font-weight: 560"> 500 USD</div>
</div>
<br><br>

<div class=" my-2 col-12">
    <div class=" float-left d-flex">
        <img src="{{asset('icons/No need to edit/Profile logo.png')}}" style=" width: 45px; height:45px" alt="">
<div class=" ml-3">
    <div class=" " style=" color:black;font-weight: 500">Kyaw Thu</div>
    <small>3488904587</small>
</div>
    </div>
    <div class=" float-right" style=" color:black; font-weight: 560"> 8500 USD</div>
</div>
<br><br>

</div>






</div>



{{-- start --}}




{{-- end --}}
<script>

const ToCommisionStatement = document.getElementById('ToCommisionStatement');
ToCommisionStatement.addEventListener('click',()=>{
    window.location.href = 'http://127.0.0.1:8000/CommissionStatement';
})

document.addEventListener('DOMContentLoaded', function() {
    const backBtn = document.getElementById('backBtn');
    backBtn.addEventListener('click', function(){
       window.history.back()
    })
})


const total = document.getElementById('total');
const today = document.getElementById('today');
const clearFunction = ()=> {
    total.style.backgroundColor = 'rgb(166, 169, 171)';
    today.style.backgroundColor = 'rgb(166, 169, 171)';

}

total.addEventListener('click',function(){
    clearFunction();
    total.style.backgroundColor = 'rgb(241, 187, 14)';

})

today.addEventListener('click', function(){
    clearFunction();
    today.style.backgroundColor = 'rgb(241, 187, 14)'
})

</script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



