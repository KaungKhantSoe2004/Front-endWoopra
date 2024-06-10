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


<div class=" col-12 mt-2 row">
    <div class=" col-6 bg-white py-3 d-flex justify-content-center">
      <a href="/play" class=" d-flex" style=" text-decoration:none">
        <img src="{{asset('icons/No need to edit/1.png')}}" style=" width:30px; height: 30px" alt="">
 <small style=" color:black; font-weight: 650" class=" mt-2">Order Description</small>
      </a>
    </div>

    <div class=" col-6 bg-white py-3 d-flex justify-content-center">
        <a href="/notice" class=" d-flex" style=" text-decoration:none">
          <img src="{{asset('icons/No need to edit/2.png')}}" style=" width:30px; height: 30px" alt="">
   <small style=" color:black; font-weight: 650" class=" mt-2">Please Note</small>
        </a>
      </div>

</div>





{{-- start --}}

<div class=" mt-4">



    <div class=" vipContainer">

        {{-- <h5 class=" text-start" style=" color:black ;font-weight: 700">VIP levels</h5> --}}

    <button class=" py-3 px-3 my-3 w-100 bg-white" style="  border:none; border-radius:6px;">

        <div class=" float-left">
            <img src="{{asset('icons/No need to edit/vip1.png')}}" style="width: 40px; height: 40px" alt="">
            &nbsp;
            <h6 class="  d-inline mt-3 ps-3" style=" color:black; font-weight: 700">VIP1</h6>
        </div>

    <div class=" float-right">

        <div class="   d-inline mt-5 px-2 py-1" style=" color:black; font-weight: 700; background-color:rgb(241, 187, 14); border-radius: 6px;">Commx0.5%</div>
        {{-- &nbsp; --}}
        {{-- <img src="{{asset('icons/No need to edit/forward.png')}}" style="width: 20px; height: 20px" alt=""> --}}
    </div>

    </button>

        </div>

</div>



{{-- end --}}



{{-- start --}}

<div class="  w-100">
    <img src="{{asset('icons/No need to edit/Amazon gif.gif')}}" class=" w-100 " style=" border-radius: 7px;" alt="">
</div>


{{-- end --}}

</div>


{{-- start --}}



<button id="orderBtn" class=" w-100 my-4 py-2 border-0 text-white" style=" background-color:black; border-radius: 5px;">
    <h5>Start(9/40)</h5>
</button>


<script>
const orderBtn = document.getElementById('orderBtn');
orderBtn.addEventListener('click', ()=> {
    window.location.href = 'order'
})

</script>

{{-- end --}}

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

