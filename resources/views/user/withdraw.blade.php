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

<div class=" loginContainer" style=" background-color:white">

<div class=" d-flex py-3" style=" background-color:black">
    <div id="backBtn" style=" color:white ; cursor:pointer">
        <div class=" ml-3">
            <img src="{{asset('icons/No need to edit/back.jpg')}}" style=" width: 30px; height: 30px;" alt="">
        </div>

    </div>
    <h5 class=" text-white font-weight-bold text-center  col-11">Withdraw</h5>
</div>




<div class=" px-3 py-1">

    <div class=" mt-3 px-3 py-3">
        <div class=" mt-3 mx-3 homeBigCardContainer">

            <div class=" py-4 px-4 homeBigCard" style=" width: 100%; background-color: black; border-radius: 10px">

            <h6 class=" text-white">Wallet Account</h6>

            <div class=" d-flex text-white">
                 <h3 style=" font-style:italic; font-weight:700">1,574,628.29</h3>
                  <div class=" mt-2">USD</div>
            </div>



            <div class=" mt-2 homeBtnContainer">
                <button class=" btn btn-sm btn-warning" style=" border:0;">Today Earnings</button>
                <button class=" ml-3 btn btn-sm border-white text-white " style=" border: solid 1px white; color:white; background-color:black ">Total Earnings</button>
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

            </div>





    </div>



</div>


<div class=" mt-3 px-3 pt-3 pb-2">

    <h5 class=" ml-3 " style=" color:black;font-weight: 600">Withdrawal Method</h5>

        <div class=" p-4 loginInput bg-white ">
            <input type="text" disabled class=" pl-2 w-100 inputLogin border-0  " placeholder="Withdrawal Method" >
        </div>



    </div>


    <div class="  px-3 pt-3 pb-2">

        <h5 class=" ml-3 " style=" color:black;font-weight: 600">Withdraw Amount</h5>

            <div class=" p-4 loginInput bg-white ">
                <input type="text"  class=" pl-2 w-100 inputLogin border-0  " placeholder="Withdraw Amount" >
            </div>



        </div>



        <div class="  px-3 pt-3 pb-2">

            <h5 class=" ml-3 " style=" color:black;font-weight: 600">Transaction Password</h5>

                <div class=" p-4 loginInput bg-white ">
                    <input type="password"  class=" pl-2 w-100 inputLogin border-0  " placeholder="Transaction Password" >
                </div>



            </div>



            <button id="showModalBtn"  class=" mt-3 py-2 border-0 registerBtn font-weight-bold w-100 border-0">
                <h4 class=" font-weight-normal">Confirmation of Withdraw</h4>
            </button>


            <div class=" mt-3 d-flex justify-content-center">
                <small>Withdrawals Will Be Processed Within 1 Hour</small>
            </div>

            <div class=" my-4 mb-5 bg-white">
                <div class=" float-left">
                    {{-- <img src="{{asset('icons/No need to edit/book.png')}}" style=" width: 30px; height: 30px; border-radius:6px;" alt=""> --}}
                    <div class=" d-inline ml-3" style=" font-weight: 690; color:black" >
                      Withdraw History
                    </div>
                </div>
                <a href="whistory" class=" float-right " style=" color:rgb(243, 187, 6);">
                    <div class=" d-inline ml-3" style=" font-weight: 690; " >
                    More
                      </div>
                      <i class="fa-solid fa-arrow-right"></i>


                </a>
                </div>
                <br><br><br>

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



