@extends('user.main')
@section('body')

<div class=" ps-3 my-5">


<div class=" profilesHeader">
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
</div>



{{-- big card --}}
<div class=" mt-3 mx-3 homeBigCardContainer">

    <div class=" py-4 px-4 homeBigCard" style=" width: 100%; background-color: black; border-radius: 10px">

    <h6 class=" text-white">Wallet Account</h6>

    <div class=" d-flex text-white">
         <h3 style=" font-style:italic; font-weight:700">1,574,628.29</h3>
          <div class=" mt-2">USD</div>
    </div>



    <div class=" mt-2 homeBtnContainer">
        <button class=" btn btn-sm btn-warning" style=" border:0;">Today Earnings</button>
        <button class=" ml-3 btn btn-sm border-white text-white " style=" ">Total Earnings</button>
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

{{-- big card end --}}


{{-- iconContainer --}}
<div class=" mt-4">
    <h6 style=" color:black; font-weight:650">Transaction History</h6>
</div>


<div class=" mt-2 col-12  d-flex justify-content-around">

    <a href="deposit" class=" text-decoration-none col-3 eachIcon">
        <div class=" d-flex  justify-content-center">
            <img src="{{asset('icons/Change them into Red/Deposit.png')}}" alt=""  class=" depositLogo">
        </div>
    <div class="text-center homeLogosText" style=" color:black; font-weight:650">Deposit</div>
    </a>

<div id="withdrawalOpenModalBtn" class="  col-3 eachIcon">
    <div class=" d-flex  justify-content-center">
        <img src="{{asset('icons/Change them into Red/Withdrawal.png')}}" alt="" class=" profileLogos" >
    </div>
<div class=" text-center homeLogosText mt-2  " style=" color:black; font-weight:650">Withdraw</div>
</div>

<div id="transactionOpenModalBtn" class="px-md-5 px-0 col-3 eachIcon">
    <div class=" d-flex  justify-content-center">
        <img src="{{asset('icons/Change them into Red/Trading account.png')}}" alt="" class=" profileLogos">
    </div>
<div class=" homeLogosText  text-center mt-2 " style=" color:black; font-weight:650">Trading Account</div>
</div>

<a href="information" class=" col-3 px-md-2 px-0  eachIcon text-decoration-none" >
    <div class=" d-flex  justify-content-center">
        <img src="{{asset('icons/Change them into Red/Personal Info.png')}}" alt="" class=" profileLogos" >
    </div>
    <div class=" d-flex justify-content-center">
<div class=" homeLogosText longText text-center mt-2 " style=" color:black; font-weight:650">Personal Information</div>
    </div>
</a>


</div>



{{-- start --}}

<div class=" mt-4">
    <h6 style=" color:black; font-weight:650">VIP levels</h6>


    <div class=" vipContainer">

        {{-- <h5 class=" text-start" style=" color:black ;font-weight: 700">VIP levels</h5> --}}

    <button class=" py-3 px-3 my-3 w-100" style=" background-color:rgb(241, 187, 14); border:none; border-radius:6px;">

        <div class=" float-left">
            <img src="{{asset('icons/No need to edit/vip1.png')}}" style="width: 40px; height: 40px" alt="">
            &nbsp;
            <h6 class="  d-inline mt-3 ps-3" style=" color:black; font-weight: 700">VIP1</h6>
        </div>

    <div class=" float-right">

        <h6 class="   d-inline mt-5" style=" color:black; font-weight: 700">Current VIP Level</h6>
        {{-- &nbsp; --}}
        {{-- <img src="{{asset('icons/No need to edit/forward.png')}}" style="width: 20px; height: 20px" alt=""> --}}
    </div>

    </button>

        </div>

</div>



{{-- end --}}



{{-- start --}}

<div class=" mt-4">
    <h6 style=" color:black; font-weight:650">Other</h6>
</div>

<div class=" mt-4 mb-5 bg-white">
    <div class=" float-left">
        <img src="{{asset('icons/No need to edit/noti.png')}}" style=" width: 30px; height: 30px; border-radius:6px;" alt="">
        <div class=" d-inline ml-3" style=" font-weight: 650">
          Offical Announcement
        </div>
    </div>
    <a href="myNotice" class=" text-decoration-none float-right ">

        <img src="{{asset('icons/No need to edit/forward.png')}}" style=" width: 20px; height:20px;" class=" mr-2 mt-3" alt="">

    </a>
    </div>

<br>


    <div class=" mt-4 mb-5 bg-white">
        <div class=" float-left">
            <img src="{{asset('icons/No need to edit/book.png')}}" style=" width: 30px; height: 30px; border-radius:6px;" alt="">
            <div class=" d-inline ml-3" style=" font-weight: 650">
                More Services
            </div>
        </div>
        <a href="http://127.0.0.1:8000/profiles/moreServices" class=" float-right ">

            <img src="{{asset('icons/No need to edit/forward.png')}}" style=" width: 20px; height:20px;" class=" mr-2 mt-3" alt="">

        </a>
        </div>


        <br><br><br>
{{-- end --}}

</div>


{{-- start --}}



<button class=" w-100 mb-4 py-2 border-0 text-white" style=" background-color:black; border-radius: 5px;">
    <h5 id="logout">Logout</h5>
</button>


<div class=" w-100 mt-1 d-flex justify-content-center">
    <small data-v-181bb898="" class="copyright ">woopra.io. All Rights Reserved.</small>
</div>


<div id="withdrawalModal" class="withdrawal-modal">
    <div class="withdrawal-modal-content px-3">
        <div class="w-100 d-flex justify-content-end">
            <h2 id="withdrawalCloseBtn" class="p-0 mr-2 font-weight-normal">
                <img src="{{asset('icons/No need to edit/OIP.jpg')}}" style="width: 30px; height: 30px" alt="">
            </h2>
        </div>
        <h5 class="text-center" style="color:black; font-weight:600">Enter Transaction Password</h5>
        <div class="d-flex justify-content-center w-100">
            <input type="password" class="p-2" placeholder="Enter Transaction Password">
        </div>
        <div class="d-flex justify-content-center">
            <button id="withdrawalAcceptBtn" class="my-3 py-2 w-50 border-0" style="background-color:black; border-radius: 3px">
                <h6 class="text-white">Confirm</h6>
            </button>
        </div>
    </div>
</div>

<div id="transactionModal" class="transaction-modal">
    <div class="transaction-modal-content px-3">
        <div class="w-100 d-flex justify-content-end">
            <h2 id="transactionCloseBtn" class="p-0 mr-2 font-weight-normal">
                <img src="{{asset('icons/No need to edit/OIP.jpg')}}" style="width: 30px; height: 30px" alt="">
            </h2>
        </div>
        <h5 class="text-center" style="color:black; font-weight:600">Enter Transaction Password</h5>
        <div class="d-flex justify-content-center w-100">
            <input type="password" class="p-2" placeholder="Enter Transaction Password">
        </div>
        <div class="d-flex justify-content-center">
            <button id="transactionAcceptBtn" class="my-3 py-2 w-50 border-0" style="background-color:black; border-radius: 3px">
                <h6 class="text-white">Confirm</h6>
            </button>
        </div>
    </div>
</div>


<script>

document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('withdrawalModal');
        const openModalBtn = document.getElementById('withdrawalOpenModalBtn');
        const closeModalBtn = document.getElementById('withdrawalCloseBtn');
        const confirmBtn = document.getElementById('withdrawalAcceptBtn');

        openModalBtn.addEventListener('click', function() {
            modal.style.display = 'block';
        });

        closeModalBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });

        confirmBtn.addEventListener('click', function() {
            // Navigate to another page
            modal.style.display = 'none';
            window.location.href = 'withdraw'; // Replace with your actual URL
        });
    });




    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('transactionModal');
        const openModalBtn = document.getElementById('transactionOpenModalBtn');
        const closeModalBtn = document.getElementById('transactionCloseBtn');
        const confirmBtn = document.getElementById('transactionAcceptBtn');

        openModalBtn.addEventListener('click', function() {
            modal.style.display = 'block';
        });

        closeModalBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });

        confirmBtn.addEventListener('click', function() {
            // Navigate to another page
            modal.style.display = 'none';
            window.location.href = 'http://127.0.0.1:8000/profiles/CollectionArea'; // Replace with your actual URL
        });
    });

</script>

{{-- end --}}


<script>
    const logout = document.getElementById('logout');
    logout.addEventListener('click',function(){
        window.location.href = 'login'
    })
</script>


    @endsection


    {{-- <div class=" d-block ml-2 profileTextContainer">


          <div class=" bg-danger  d-flex">
             <h5 style=" color:black; font-weight: 650;">Kaung Kaung</h5>
             <img src="{{asset('icons/No need to edit/vip1.png')}}" style=" width: 24px; height:24px;" class=" ml-2" alt=""></div>
        </div>

        <div class=" mt-2">
            <h5 class=" text-secondary">Credit Score: </h5>
        </div>

    </div> --}}
