<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="mainBody " style=" background-color: #f9f9f9">

<div class=" mainContainer" style="">


<div class=" mb-5 pb-5 content-wrapper ">
    @yield('body')
</div>


<br>


<div class=" w-100 position-relative ">
    <div  class="mt-5   py-3 footer  position-fixed">

<div  class="" >
  <div class=" d-flex justify-content-center">
    <img id="home" src="{{asset('icons/No need to edit/closedHome.png')}}" style="cursor: pointer; width: 30px; height:30px" alt="">
  </div>
    <div  class=" text-center" id="homeText">Home</div>
</div>
<div  class=" ">

    <div class=" d-flex justify-content-center">
        <img id="records" src="{{asset('icons/No need to edit/closedRecords.png')}}" style=" cursor: pointer; width: 30px; height:30px" alt="">
      </div>
        <div class=" text-center " id="recordsText">Records</div>

</div>
<div  class=" ">
    <div class=" d-flex justify-content-center position-relative " style="">
        <img id="order" src="{{asset('icons/No need to edit/mainOrderClosed.png')}}" style=" cursor: pointer;"  class=" position-absolute customBtn" alt="">
        <div class=" text-white position-absolute " id="orderText">Order</div>
      </div>

</div>
<div  class=" ">
    <div class=" d-flex justify-content-center">
        <img id="messages" src="{{asset('icons/No need to edit/closedMessages.png')}}" style=" cursor: pointer; width: 30px; height:30px" alt="">
      </div>
        <div class=" text-center" id="messagesText">Messages</div>
</div>
<div  class=" ">
    <div class=" d-flex justify-content-center">
        <img id="settings" src="{{asset('icons/No need to edit/closedSettings.png')}}" style="cursor:pointer; width: 30px; height:30px" alt="">
      </div>
        <div class=" text-center" id="settingsText">Settings</div>

</div>


    </div>

</div>


</div>


{{-- <img src="{{asset('icons/Change them into Red/homeActive.da16fd4e.png')}}" alt=""> --}}


<script>

const homeTag = document.getElementById('home');
const recordsTag = document.getElementById('records');
const orderTag = document.getElementById('order');
const settingsTag = document.getElementById('settings');
const messagesTag = document.getElementById('messages');

const homeText = document.getElementById('homeText');
const recordsText = document.getElementById('recordsText');
const orderText = document.getElementById('orderText');
const settingsText = document.getElementById('settingsText');
const messagesText = document.getElementById('messagesText');

const closedFunction = ()=> {
if(window.location.href == 'http://127.0.0.1:8000/'){
    homeTag.src ="{{asset('icons/Change them into Red/homeActive.da16fd4e.png')}}"
}else if(window.location.href == 'http://127.0.0.1:8000/records'){
    recordsTag.src = "{{asset('icons/No need to edit/openRecords.png')}}";
}else if(window.location.href == 'http://127.0.0.1:8000/starting' ){
     orderTag.src = "{{asset('icons/No need to edit/mainOrder.png')}}";
}else if(window.location.href == 'http://127.0.0.1:8000/profiles'){
    settingsTag.src = "{{asset('icons/No need to edit/openedSettings.png')}}";
}else if(window.location.href == 'http://127.0.0.1:8000/messages'){
messagesTag.src = "{{asset('icons/No need to edit/openedMessages.png')}}";
}
    // homeTag.src = "{{asset('icons/No need to edit/closedHome.png')}}";
    // recordsTag.src = "{{asset('icons/No need to edit/closedRecords.png')}}";
    // orderTag.src = "{{asset('icons/No need to edit/mainOrderClosed.png')}}" ;
    // settingsTag.src = "{{asset('icons/No need to edit/closedSettings.png')}}";
    // messagesTag.src =  "{{asset('icons/No need to edit/closedMessages.png')}}";
}
closedFunction();
homeTag.addEventListener('click',function(){

  window.location.href = '/'
})
recordsTag.addEventListener('click',()=>{

    window.location.href = 'records'
})
orderTag.addEventListener('click',()=>{

    window.location.href= 'starting'
})
settingsTag.addEventListener('click',()=>{

    window.location.href = "profiles"
})
messagesTag.addEventListener('click',()=>{

    window.location.href = "messages"
})
</script>


</body>
</html>
