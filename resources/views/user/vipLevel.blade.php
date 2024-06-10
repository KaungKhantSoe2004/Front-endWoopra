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

<div class=" loginContainer" style=" height:1000px; background-color:black ">

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 30px; height: 30px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">VIP Levels</h5>
</div>






<div class=" mt-3  py-3">

    <div class=" profilesHeader">
        <div class=" ml-3 d-flex">
            <img src="{{asset('icons/No need to edit/Profile logo.png')}}" style=" width: 70px; height:70px" alt="">


        <div>

            <div class=" d-block ml-2 profileTextContainer">


                <div class="  d-flex">
                   <h5 style=" color:white; font-weight: 650;">Kaung Kaung</h5>
                   <img src="{{asset('icons/No need to edit/vip1.png')}}" style=" width: 24px; height:24px;" class=" ml-2" alt=""></div>
              </div>

              <div class=" w-100 ml-2">
                  <h6 class=" w-100  d-flex text-white ">Credit Score:
                <div class=" mt-2 ml-2 " style="background-color: rgb(241, 187, 14); height:1px; width:100px; border-radius:5px; padding:2px;"></div>
                <div style=" color:white; font-weight:700">100%</div>

            </h6>
              </div>



          </div>


        </div>
    </div>




<div class=" mx-3">
    <button id="vipLevelBtn" class=" py-3 px-3 my-md-3 my-0 w-100" style=" background-color:rgb(241, 187, 14); border:none; border-radius:6px;">

        <div class=" float-left">
            <img src="{{asset('icons/No need to edit/vip1.png')}}" style="width: 40px; height: 40px" alt="">
            &nbsp;
            <h6 class="  d-inline mt-3 ps-3" style=" color:black; font-weight: 700">VIP1</h6>
        </div>

    <div class=" float-right">

        <h6 class="   d-inline mt-5" style=" color:black; font-weight: 700">Current VIP level</h6>
      {{-- &nbsp; --}}

    </div>

    </button>
</div>



{{-- start --}}



<div class=" mt-md-3 mt-1 position-relative overflow-x-scroll">

    <div class=" mt-5  " style="">
        <img src="{{asset('icons/No need to edit/bigVipLogo.png')}}" style=" width: 100%" alt="">
    </div>


    <div style=" overflow-x: scroll" class=" position-absolute col-12 d-flex vipInfoContainer">


        {{-- 1 start --}}
<div class=" col-md-5 col-12 ">
<div class=" pt-3 position-relative px-1 w-100  vpInfo  " style=" border-radius:15px; ">

<div class=" w-100" >
  <div class=" mb-md-4 mb-1 d-flex justify-content-between mx-md-4 mx-2">
    <div class=" ml-3">
        <img src="{{asset('icons/No need to edit/vip1.png')}}" style="width: 40px; height: 40px" alt="">
    </div>
    <div>
        <h5 class=" pt-2" style=" text-align:center;  color:white; font-weight: 650">VIP1</h5>
    </div>
    <button class=" py-1 alreadyActivated  px-2" style=" background-color:rgb(90, 91, 92); color:white; border-radius: 12px; border:none    ">Already Activated</button>
  </div>

  <br>

  <div data-v-64dc52f9="" class="progressBar  mx-md-4 mx-2 flex-s-c">
    <div data-v-64dc52f9="" class="van-progress" style="background: rgb(188, 177, 177); height: 3px; width: 100%;">
        <span class="van-progress__portion" style="width: 100%; background: rgb(215, 179, 61);"></span>
        <!----></div></div>



<div class="mx-md-4 mx-2 mt-4">
    <h5 class="  float-left  " style="  color:rgb(188, 177, 177); font-weight: 600">110 USD</h5>
    <h5 class="  float-right  " style=" color:rgb(188, 177, 177); font-weight: 600">499 USD</h5>
</div>


<button class="  w-100 currentLevel  mt-3 py-2 border-0 text-white" style=" bottom:0; background-color:black; ">
    <h4 style=" font-weight: 600">Current VIP level</h4>
</button>

</div>



</div>
<br>

<div class=" ml-md-5 pt-2 mt-md-5 ml-3 mt-2 mb-4" style=" height: 150px; overflow-y:scroll">

    <div class="  d-flex eachTextRowVipLevel">
        <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
        <div class=" ml-3 text-white" style=" font-weight: 600">Deposit Return Activities</div>
    </div>


    <div class="  d-flex eachTextRowVipLevel">
        <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
        <div class=" ml-3 text-white" style=" font-weight: 600">   1 Optimize the task and get 0.5% bonus</div>
    </div>



    <div class="  d-flex eachTextRowVipLevel">
        <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
        <div class=" ml-3 text-white" style=" font-weight: 600"> There are 40 missions per group, and the reward increases to 5% for combo missions</div>
    </div>

    <div class="  d-flex eachTextRowVipLevel">
        <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
        <div class=" ml-3 text-white" style=" font-weight: 600"> VIP1 can submit up to 120 tasks per day.</div>
    </div>

</div>

<br class=" d-md-none d-block">
<br class=" d-md-none d-block">
<div class=" mt-5">
    <button class=" w-100 mb-4 py-md-3 py-2 border-0 text-white" style=" background-color:rgb(241, 187, 14); border-radius: 5px;">
        <div style=" color:black">Already Activated</div>
    </button>
</div>

</div>

{{-- 1end --}}


<div class=" col-md-5 col-12 ">
    <div class=" pt-3 position-relative px-1 w-100  vpInfo  " style=" border-radius:15px; ">

    <div class=" w-100" >
      <div class=" mb-md-4 mb-1 d-flex justify-content-between mx-md-4 mx-2">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/vip2.png')}}" style="width: 40px; height: 40px" alt="">
        </div>
        <div>
            <h5 class=" pt-2" style=" text-align:center;  color:white; font-weight: 650">VIP2</h5>
        </div>
        <button class=" py-1 alreadyActivated  px-2" style=" background-color:rgb(90, 91, 92); color:white; border-radius: 12px; border:none    ">Activate Now</button>
      </div>

      <br>

      <div data-v-64dc52f9="" class="progressBar  mx-md-4 mx-2 flex-s-c">
        <div data-v-64dc52f9="" class="van-progress" style="background: rgb(188, 177, 177); height: 3px; width: 100%;">
            <span class="van-progress__portion" style="width: 100%; background: rgb(215, 179, 61);"></span>
            <!----></div></div>



    <div class="mx-md-4 mx-2 mt-4">
        <h5 class="  float-left  " style="  color:rgb(188, 177, 177); font-weight: 600">500 USD</h5>
        <h5 class="  float-right  " style=" color:rgb(188, 177, 177); font-weight: 600">4999 USD</h5>
    </div>


    <button class="  w-100 currentLevel  mt-3 py-2 border-0 text-white" style=" bottom:0; background-color:black; ">
        <h4 style=" font-weight: 600">Current VIP level</h4>
    </button>

    </div>



    </div>
    <br>

    <div class=" ml-md-5 pt-2 mt-md-5 ml-3 mt-2 mb-4" style=" height: 150px; overflow-y:scroll">

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">Deposit Return Activities</div>
        </div>


        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">   1 Optimize the task and get 0.7% bonus</div>
        </div>



        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600"> Each group has 45 missions, and for combo missions, the reward increases to 7%</div>
        </div>

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600"> VIP2 can submit up to 180 tasks per day.</div>
        </div>

    </div>

    <br class=" d-md-none d-block">
    <br class=" d-md-none d-block">
    <div class=" mt-5">
        <button class=" w-100 mb-4 py-md-3 py-2 border-0 text-white" style=" background-color:rgb(241, 187, 14); border-radius: 5px;">
            <div style=" color:black">Activate Now</div>
        </button>
    </div>

    </div>



{{-- 2 end --}}
<div class=" col-md-5 col-12 ">
    <div class=" pt-3 position-relative px-1 w-100  vpInfo  " style=" border-radius:15px; ">

    <div class=" w-100" >
      <div class=" mb-md-4 mb-1 d-flex justify-content-between mx-md-4 mx-2">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/vip3.png')}}" style="width: 40px; height: 40px" alt="">
        </div>
        <div>
            <h5 class=" pt-2" style=" text-align:center;  color:white; font-weight: 650">VIP3</h5>
        </div>
        <button class=" py-1 alreadyActivated  px-2" style=" background-color:rgb(90, 91, 92); color:white; border-radius: 12px; border:none    ">Activate Now</button>
      </div>

      <br>

      <div data-v-64dc52f9="" class="progressBar  mx-md-4 mx-2 flex-s-c">
        <div data-v-64dc52f9="" class="van-progress" style="background: rgb(188, 177, 177); height: 3px; width: 100%;">
            <span class="van-progress__portion" style="width: 100%; background: rgb(215, 179, 61);"></span>
            <!----></div></div>



    <div class="mx-md-4 mx-2 mt-4">
        <h5 class="  float-left  " style="  color:rgb(188, 177, 177); font-weight: 600">5000 USD</h5>
        <h5 class="  float-right  " style=" color:rgb(188, 177, 177); font-weight: 600">14999 USD</h5>
    </div>


    <button class="  w-100 currentLevel  mt-3 py-2 border-0 text-white" style=" bottom:0; background-color:black; ">
        <h4 style=" font-weight: 600">Current VIP level</h4>
    </button>

    </div>



    </div>
    <br>

    <div class=" ml-md-5 pt-2 mt-md-5 ml-3 mt-2 mb-4" style=" height: 150px; overflow-y:scroll">

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">Deposit Return Activities</div>
        </div>


        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">   1 Optimize the task and get 0.9% bonus</div>
        </div>



        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600"> There are 50 tasks per group, and the reward increases to 8% for combined tasks

            </div>
        </div>

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600"> VIP3 can submit up to 200 tasks per day.

                Platform users who upgrade ongoing missions will receive a combined mission with a 10x bonus. The number of tasks ranges from 50% to 100%, and this combined task includes a minus sign.</div>
        </div>

    </div>

    <br class=" d-md-none d-block">
    <br class=" d-md-none d-block">
    <div class=" mt-5">
        <button class=" w-100 mb-4 py-md-3 py-2 border-0 text-white" style=" background-color:rgb(241, 187, 14); border-radius: 5px;">
            <div style=" color:black"> Activate Now</div>
        </button>
    </div>

    </div>




{{-- 3 end --}}
<div class=" col-md-5 col-12 ">
    <div class=" pt-3 position-relative px-1 w-100  vpInfo  " style=" border-radius:15px; ">

    <div class=" w-100" >
      <div class=" mb-md-4 mb-1 d-flex justify-content-between mx-md-4 mx-2">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/vip4.png')}}" style="width: 40px; height: 40px" alt="">
        </div>
        <div>
            <h5 class=" pt-2" style=" text-align:center;  color:white; font-weight: 650">VIP4</h5>
        </div>
        <button class=" py-1 alreadyActivated  px-2" style=" background-color:rgb(90, 91, 92); color:white; border-radius: 12px; border:none    "> Activate Now</button>
      </div>

      <br>

      <div data-v-64dc52f9="" class="progressBar  mx-md-4 mx-2 flex-s-c">
        <div data-v-64dc52f9="" class="van-progress" style="background: rgb(188, 177, 177); height: 3px; width: 100%;">
            <span class="van-progress__portion" style="width: 100%; background: rgb(215, 179, 61);"></span>
            <!----></div></div>



    <div class="mx-md-4 mx-2 mt-4">
        <h5 class="  float-left  " style="  color:rgb(188, 177, 177); font-weight: 600">15000 USD</h5>
        <h5 class="  float-right  " style=" color:rgb(188, 177, 177); font-weight: 600">9,999,999,999USD</h5>
    </div>


    <button class="  w-100 currentLevel  mt-3 py-2 border-0 text-white" style=" bottom:0; background-color:black; ">
        <h4 style=" font-weight: 600">Current VIP level</h4>
    </button>

    </div>



    </div>
    <br>

    <div class=" ml-md-5 pt-2 mt-md-5 ml-3 mt-2 mb-4 " style=" height: 150px; overflow-y:scroll">

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">Commodity Order Details</div>
        </div>


        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600"> Receive a 1.0% reward for optimizing 1 order.</div>
        </div>



        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">  Each group consists of 60 orders. In the case of encountering plural orders during the order process, receive a 10% bonus based on the price of that order upon completion.</div>
        </div>

        <div class="  d-flex eachTextRowVipLevel">
            <div class=" bg-white p-1 rounded-circle mt-2" style=" width: 4px; height: 2px;  "></div>
            <div class=" ml-3 text-white" style=" font-weight: 600">VIP4 can submit a maximum of 240 commodity orders per day.</div>
        </div>

    </div>

    <br class=" d-md-none d-block">
    <br class=" d-md-none d-block">
    <div class=" mt-5">
        <button class=" w-100 mb-4 py-md-3 py-2 border-0 text-white" style=" background-color:rgb(241, 187, 14); border-radius: 5px;">
            <div style=" color:black">Activate Now</div>
        </button>
    </div>

    </div>

    {{-- 4 end --}}



    </div>


</div>

{{-- end --}}




</div>



<script>

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



