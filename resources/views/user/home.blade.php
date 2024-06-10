@extends('user.main')
@section('body')

<div class=" homeContainer pt-2 pl-2 bg-white" style=" background-color:#f7f7f7" >

<div class=" homeLogoContainer">
    <img src="{{asset('icons/No need to edit/Woopra logo.jpg')}}" style=" width: 160px; height: 45px;" alt="">
</div>

<div class=" mt-2 marqueeContainer px-3" style="   background-color: rgb(241, 187, 14);">

<marquee behavior="" scrollamount="10" direction="ltr" style=" width: 100%;" class=" d-flex  justify-content-around py-1 ">

<div class=" d-inline mr-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus?
</div>

<div class=" d-inline mr-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus?
</div>

<div class=" d-inline mr-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, natus?
</div>

</marquee>

</div>



{{-- bigCard --}}

<div class=" mt-3 mx-md-3 mx-1 homeBigCardContainer">

<div class=" py-3 px-md-4 px-2 homeBigCard" style=" width: 100%; background-color: black; border-radius: 10px">

<h6 class=" text-white">Wallet Account</h6>

<div class=" d-flex text-white">
     <h3 style=" font-style:italic; font-weight:700">1,574,628.29</h3>
      <div class=" mt-2">USD</div>
</div>



<div class=" mt-2 homeBtnContainer">
    <button class=" btn btn-sm btn-warning" style=" border:0;">Today Earnings</button>
    <button class=" ml-3 btn btn-sm border-white text-white " style=" ">Total Earnings</button>
</div>


<div class=" homeCasesContainer d-flex mt-md-3 mt-1 ">
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




<div class="homeIconContainer px-0 w-100  mt-md-4 mt-2">

<div class=" col-12 row p-0 m-0 d-flex">

    <div id="withdrawalOpenModalBtn" class="  col-3 eachIcon px-0 ">
        <div class=" d-flex  justify-content-center">
            <img id="withdrawl" src="{{asset('icons/Change them into Red/Withdrawal logo.png')}}" alt="" class=" homeLogos">
        </div>
    <div class=" text-md-center text-center homeLogosText">Withdrawl</div>
    </div>

<div class=" col-3 eachIcon  ">
    <div class=" d-flex  justify-content-center">
        <img id="deposit" src="{{asset('icons/Change them into Red/Deposit logo.png')}}" alt="" class=" homeLogos">
    </div>
<div class="  text-center homeLogosText ">Deposit</div>
</div>

<div class=" col-3 eachIcon px-0  ">
    <div class="  d-flex  justify-content-center">
        <img id="customerServiceCenter" src="{{asset('icons/Change them into Red/Customer service logo.png')}}" alt="" class=" homeLogos">
    </div>

    <div class=" w-100  " style=" ">
        <div class=" text-md-center text-center homeLogosText longText ">Customer Service Center</div>
    </div>


</div>

<div class=" col-3 eachIcon mx-0  ">
    <div class=" d-flex  justify-content-center">
        <img id="transactionNotice" src="{{asset('icons/Change them into Red/transaction logo.png')}}" alt="" class=" homeLogos">
    </div>
    <div class=" d-flex justify-content-center">
<div class=" text-md-center text-start  homeLogosText longText">Transaction Notice</div>
    </div>
</div>


</div>



<div class=" mt-md-4 mt-2 col-12 m-0 p-0  row d-flex ">

    <div class=" col-3  eachIcon px-0 ">
        <div class=" d-flex  justify-content-center">
            <img id="campaign" src="{{asset('icons/Change them into Red/Campaign logo.png')}}" alt=""  class=" homeLogos">
        </div>
    <div class="text-center homeLogosText">Campaign</div>
    </div>

<div class="  col-3 eachIcon px-0 ">
    <div class=" d-flex  justify-content-center">
        <img id="illustrate" src="{{asset('icons/Change them into Red/Illustrate logo.png')}}" alt="" class=" homeLogos" >
    </div>
<div class=" text-center homeLogosText ">Illustrate</div>
</div>

<div class="px-md-5 px-0 col-3 eachIcon  ">
    <div class=" d-flex  justify-content-center">
        <img id="faqs" src="{{asset('icons/Change them into Red/FAQS Logo.png')}}" alt="" class=" homeLogos">
    </div>
<div class=" homeLogosText  text-center ">FAQS</div>
</div>

<div class=" col-3 px-md-2 px-0 eachIcon px-0 ">
    <div class=" d-flex  justify-content-center">
        <img id="companyProfile" style="curosr:pointer" src="{{asset('icons/Change them into Red/Company Profile logo.png')}}" alt="" class=" homeLogos" >
    </div>
    <div class=" w-100 d-flex justify-content-center px-0">
<div class=" w-100 homeLogosText longText text-md-center text-start px-0 overflow-visible  ">Company Profile</div>
    </div>
</div>


</div>


</div>



<div class=" my-3 animationContainer d-flex justify-content-between ">

<div class=" eachAnimation">

    <div class=" smallAnimationCard py-md-2 py-0 px-1 " >

        <small class=" text-start" style=" font-weight: 600">Online Users</small>
        <div style=" font-weight: 650; color: black" class=" my-md-1 my-0" id="userCount">3.987K</div>
     <div class=" w-100" style=" font-size:x-small "> +159% from last month</div>
    </div>

    <div class=" my-md-4 my-2 smallAnimationCard py-md-2 py-0 px-1 position-relative " >

        <small class=" text-start" style=" font-weight: 600">Order Completion</small>
        <div style=" font-weight: 650; color: black" class=" my-1 " id="orderCount">6.567.K</div>
     <div class="   d-flex">
        <small style=" background-color:black; border-radius: 2px; padding-top: 2px; padding-bottom: 4px; height: 20px;" class="  px-1 text-white"> 50% up</small>
        {{-- <div style="position: relative; width: 70px; height: 76px; padding: 0px; margin: 0px; border-width: 0px;"> --}}
           <div class=" animationContainer overflow-hidden">
            <img id="animationStick" src="{{asset('icons/No need to edit/stickAnimation2.png')}}" data-zr-dom-id="zr_0" width="87" height="95"
            class=" stick">
               </img>
               <div class=" coverDiv bg-white position-absolute  " style=" right: -100%; bottom:0; width: 100px; height: 38px"></div>
            </div>
            {{-- </div> --}}
     </div>
    </div>

</div>

{{--

<div data-v-8f4d73de="" class="char"><div data-v-8f4d73de="" class="radius" _echarts_instance_="ec_1717736131151" style="width: 112px; height: 120px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div style="position: relative; width: 112px; height: 120px; padding: 0px; margin: 0px; border-width: 0px; cursor: pointer;"><canvas data-zr-dom-id="zr_0" width="140" height="150" style="position: absolute; left: 0px; top: 0px; width: 112px; height: 120px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div></div></div>--}}



<div class=" overflow-hidden largeAnimationCard py-md-2 py-0 px-1 position-relative ">

    <small class=" text-start optimizeDemand" >Optimize Demand</small>
    <h5 style=" font-weight: 650; color: black" class=" my-md-1 my-0" id="demandCount">3.987K</h5>
 <small> +159% from last month</small>
<div>
    <img id="animationOne" src="{{asset('icons/No need to edit/animation1.png')}}"
 class=" position-absolute" style=" width:100%; border-radius:12px; bottom:0; left:0px;"></img>
<div class=" coverDiv bg-white position-absolute " style=" right: -100%; bottom:0; width: 100px; height: 50%"></div>

</div>

</div>





    <div class=" largeAnimationCard py-md-2 py-0 px-1 position-relative ">

        <small class=" text-start optimizeDemand" >Order Quantity</small>
        <h5 style=" font-weight: 650; color: black" class=" my-0 my-md-1" id="quantityCount">3.987K</h5>
     <small> +159% from last month</small>

     <div>
<img id="animationTwo" src="{{asset('icons/No need to edit/animation2.png')}}" class=" position-absolute" style=" width:100%;  border-radius:12px; bottom:0; left:0px;"></img>
<div class=" coverDiv bg-white position-absolute " style=" right: -100%; bottom:0; width: 100px; height: 50%"></div>
</div>
    </div>






</div>


<div class=" vipContainer">

    <h5 class=" m-0 p-0 text-start " style=" color:black ;font-weight: 700">VIP levels</h5>

<button id="vipLevelBtn" class=" py-3  px-3 my-md-3 my-1 w-100" style=" background-color:rgb(241, 187, 14); border:none; border-radius:6px;">

    <div class=" float-left">
        <img src="{{asset('icons/No need to edit/vip1.png')}}" style="width: 40px; height: 40px" alt="">
        &nbsp;
        <h6 class="  d-inline mt-3 ps-3" style=" color:black; font-weight: 700">VIP1</h6>
    </div>

<div class=" float-right">

   <h6 class="   d-inline mt-5" style=" color:black; font-weight: 700">Enter</h6>
    {{-- &nbsp; --}}
    <img src="{{asset('icons/No need to edit/forward.png')}}" style="width: 20px; height: 20px" alt="">

</div>

</button>

    </div>

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

<div id="imgModal" style=" border-radius:10px;" class="img-modal">
    <div class="img-modal-content" style=" border-radius: 10px;">
        <span id="imgCloseBtn" class="close">&times;</span>
        <img src="{{asset('icons/No need to edit/salary.jpg')}}" alt="Modal Image" style="width: 350px; border-radius:30px; height: auto;" style=" ">
    </div>
</div>



</div>



<script>

const vipLevelBtn = document.getElementById('vipLevelBtn');

vipLevelBtn.addEventListener('click',()=>{
window.location.href = 'vipLevel';
})


document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('imgModal');
        const closeModalBtn = document.getElementById('imgCloseBtn');

        // Disable page scrolling when modal is open
        document.body.classList.add('modal-open');

        closeModalBtn.addEventListener('click', function() {
            modal.style.display = 'none';
            // Enable page scrolling when modal is closed
            document.body.classList.remove('modal-open');
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
                // Enable page scrolling when modal is closed
                document.body.classList.remove('modal-open');
            }
        });
    });



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

</script>

{{-- <img src="{{asset('icons/No need to edit/stick2.png')}}" alt=""> --}}

<script>


// const withdrawl = document.getElementById('withdrawl');
const deposit = document.getElementById('deposit');
const customerServiceCenter = document.getElementById('customerServiceCenter');
const transactionNotice = document.getElementById('transactionNotice');
const campaign = document.getElementById('campaign');
const illustrate = document.getElementById('illustrate');
const faqs = document.getElementById('faqs');
const companyProfile = document.getElementById('companyProfile');

// withdrawl.addEventListener('click',()=> {
// alert('withdrawl')
// })


deposit.addEventListener('click',()=> {
window.location.href = 'deposit'
})

customerServiceCenter.addEventListener('click',()=> {
window.location.href = 'https://chat.ichatlink.net/widget/standalone.html?eid=1bd6c86911da3341f0c6425db354a301&language=en&metadata={%22name%22:%222224-kaungkaung%22}'
})
transactionNotice.addEventListener('click',()=> {
window.location.href = 'notice'
})
campaign.addEventListener('click',()=> {
window.location.href = 'event'
})
illustrate.addEventListener('click',()=> {
window.location.href = 'clause'
})
faqs.addEventListener('click',()=> {
window.location.href = 'faqs'
})
companyProfile.addEventListener('click',()=> {
window.location.href='about'
})



const firstImg = [
    "{{asset('icons/No need to edit/animation1.png')}}",
"{{asset('icons/No need to edit/animation2.png')}}",
"{{asset('icons/No need to edit/animation3.png')}}",
"{{asset('icons/No need to edit/animation4.png')}}",
"{{asset('icons/No need to edit/animation5.png')}}",
"{{asset('icons/No need to edit/animation6.png')}}",
"{{asset('icons/No need to edit/animation7.png')}}",
"{{asset('icons/No need to edit/animation8.png')}}",
"{{asset('icons/No need to edit/animation9.png')}}",
"{{asset('icons/No need to edit/animation10.png')}}",
"{{asset('icons/No need to edit/animation11.png')}}",
"{{asset('icons/No need to edit/animation12.png')}}"
]

const secondImg = [

"{{asset('icons/No need to edit/animation5.png')}}",
"{{asset('icons/No need to edit/animation9.png')}}",
"{{asset('icons/No need to edit/animation10.png')}}",
"{{asset('icons/No need to edit/animation12.png')}}",
"{{asset('icons/No need to edit/animation1.png')}}",
"{{asset('icons/No need to edit/animation3.png')}}",
"{{asset('icons/No need to edit/animation4.png')}}",
"{{asset('icons/No need to edit/animation2.png')}}",
"{{asset('icons/No need to edit/animation7.png')}}",
"{{asset('icons/No need to edit/animation6.png')}}",
"{{asset('icons/No need to edit/animation8.png')}}",
"{{asset('icons/No need to edit/animation11.png')}}"

]

const stickImg = [
"{{asset('icons/No need to edit/animationStick.png')}}",
"{{asset('icons/No need to edit/stickAnimation2.png')}}",
"{{asset('icons/No need to edit/stick2.png')}}",
"{{asset('icons/No need to edit/stick3.png')}}",
"{{asset('icons/No need to edit/stick4.png')}}",
"{{asset('icons/No need to edit/stick5.png')}}",
"{{asset('icons/No need to edit/stick6.png')}}",
"{{asset('icons/No need to edit/stick7.png')}}",
]

const userCount = document.getElementById('userCount');
const orderCount = document.getElementById('orderCount');
const demandCount = document.getElementById('demandCount');
const quantityCount = document.getElementById('quantityCount');

let users =3.987 ;
let orders = 5.965 ;
let demands =1.3 ;
let quantity =3.987 ;

// script.js

document.addEventListener('DOMContentLoaded', () => {
const animationStick = document.getElementById('animationStick');
const animationOne = document.getElementById('animationOne');
const animationTwo = document.getElementById('animationTwo');


    let FirstcurrentIndex = 0;
   let SecondCurrentIndex = 0;
   let stickIndex = 7;

const stickImgChange = ()=> {
    if(stickIndex > 7){
stickIndex = 0;
    }
    animationStick.src = stickImg[stickIndex];
    stickIndex++;
}


const firstAnimationChange = ()=> {
    if(FirstcurrentIndex > 12){
        FirstcurrentIndex = 0;
    }
    animationOne.src = firstImg[FirstcurrentIndex];
    FirstcurrentIndex++;
}


const secondAnimationChange = ()=> {
    if(SecondCurrentIndex > 12){
        SecondCurrentIndex = 0;
    }
    animationTwo.src = secondImg[SecondCurrentIndex];
    SecondCurrentIndex++;
}
const numberPlus = ()=> {

users = Math.round((users + 0.003) * 1000) / 1000;
orders = Math.round((orders + 0.002) * 1000) / 1000;
quantity =  Math.round((quantity + 0.004) * 1000) / 1000;
demands = Math.round((demands + 0.002) * 1000) / 1000;
// alert('is userCount')
userCount.innerHTML = `${users} K`;

orderCount.innerHTML = `${orders} K`;
quantityCount.innerHTML = `${quantity} K`;
demandCount.innerHTML = `${demands} K`

}

    setInterval(() => {
        stickImgChange();
        firstAnimationChange();
        secondAnimationChange();
        numberPlus();

    }, 4000);
});



</script>


@endsection
