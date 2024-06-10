<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"> --}}
    <link rel="stylesheet" href="https://front-endwoopra-production.up.railway.app/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css" integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="loginBody  ">


    {{-- <div class=" bg-white text-center loginContainer">
dd Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam? Quibusdam quisquam dd Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam? Quibusdam dd Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam? Quibusdam  nisi ut nihil delectus repudiandae inventore quaerat fugit est, veniam neque consequatur provident similique iusto aliquam aut incidunt?
    </div> --}}
<div class=" loginContainer ">

<div class=" d-flex loginCard py-3 px-4  border-none ">
    <span>
        <div class="firstIcon d-flex justify-content-center align-items-center rounded-circle">
            <img src="{{asset('icons/No need to edit/firstIcon.png')}}"  class=" w-75 h-75"  alt="">
        </div>

        {{-- <div>
            <img src="{{asset('icons/No need to edit/loginLogo.png')}}" class=" logo" alt="">
        </div> --}}
    </span>
    <span class=" ">
        <div id="openModalBtn" class=" d-flex ml-2  text-white englishContainer p-1">
            <img src="{{asset('icons/No need to edit/earth.png')}}" class=" ml-2  earth" alt=""> <h6 class=" font-weight-bold pt-1 ml-2 mr-1">ENGLISH</h6>
        </div>
    </span>
</div>


<div class="logoContainer">
    <img src="{{asset('icons/No need to edit/loginLogo.png')}}" style=" width: 240px ; height: 50px" alt="">
</div>

<div class="loginForm ml-4 mr-4" style=" background-color: white">
    <div class=" p-4 loginInput  border-bottom border-3 border-warning">
        <input type="text" class=" pl-2 w-100 inputLogin border-0  " placeholder="Username/Phone" >
    </div>
    <div class=" mb-4 p-4 loginInput ">
        <input id="password" type="password" class=" pl-2 w-75 inputLogin border-0 password-input   "  placeholder="Password" >
        <img id="togglePasswordBtn" src="{{asset('icons/Change them into Red/eye.png')}}" class="eye float-right">
    </div>
    <button id="login" class=" mt-5 py-3 border-0 loginBtn font-weight-bold w-100 border-0">
        <h4 class=" font-weight-normal">Login</h4>
    </button>
    <button id="showModalBtn"  class=" mt-3 py-3 border-0 registerBtn font-weight-bold w-100 border-0">
        <h4 class=" font-weight-normal">Register</h4>
    </button>

  <div class=" d-flex justify-content-center">
    <a href="/tac" data-v-181bb898="" class="fp-link text-decoration-none " style="font-weight: 400;">Terms and Conditions</a>
  </div>

    <div id="triggerModal" data-v-181bb898="" class="fp-link1" style="font-weight: 450;">Terms Of Use For Personal Information</div>

    <div class=" w-100 mt-4 d-flex justify-content-center">
        <small data-v-181bb898="" class="copyright ">woopra.io. All Rights Reserved.</small>
    </div>

</div>


</div>






    <div id="modal" class="modal">
        <div class="modal-content">
            <div class=" d-flex justify-content-center align-items-center">
                <button class=" p-2 btn px-4 w-75  " style=" background-color:rgb(241, 187, 14); color:black">
                    <div >ENGLISH</div>
                </button>
            </div>
        </div>
    </div>


    <div id="customModal" class="custom-modal">
        <div class="custom-modal-content">
            <div class=" mt-4">
 <h5 class=" font-weight-bold text-center">About personal information</h5>
 <div class=" myOverflow" style=" height: 300px;">
    Regarding the purpose of the use of information by users, our company is not able to use the personal information for purposes other than part-time jobs based on the Personal Information Protection Law (Law No.57 of May 30, 1995). The purposes of using information for other businesses and users are as follows: Acceptance of business and services for part-time jobs, confirmation of qualifications, management of continuous transactions, suitability of transactions and judgment of
     hazardous materials, cancellation of part-time jobs and subsequent management, exercise of rights, and performance of obligations.
 </div>
 <button class=" btn w-100 text-white p-3 mt-3" style=" background-color: black">Yes</button>
            </div>
        </div>
    </div>


    <div id="uniqueModal" class="unique-modal">
        <div class="unique-modal-content px-3">
      <div class=" w-100 d-flex justify-content-end">
        <h2 id="uniqueCloseBtn"  class=" p-0  mr-2  font-weight-normal">
          <img src="{{asset('icons/No need to edit/OIP.jpg')}}" style=" width: 30px; height: 30px" alt="">
           </h2>



        </div>
        <h5 style=" color:black" class=" text-center font-weight-bolder" >Registration Is Prohibited For Those</h5>
        <h5 style=" color:black" class=" text-center font-weight-bolder" >Under 18 Years Of Age</h5>

       <div class=" d-flex justify-content-center">
        <button  id="uniqueAcceptBtn"  class=" my-3 py-2 border-0" style=" background-color:black ;border-radius: 3px">
            <h6 class=" text-white">18 Years And Above Are Eligible For Use</h6>
        </button>
       </div>

        {{-- <button id="uniqueCloseBtn" class="unique-modal-btn unique-close-btn">Close</button>
            <button  id="uniqueAcceptBtn" class="unique-modal-btn">Accept</button> --}}
        </div>
    </div>

    {{-- <div className=" mt-5 registerPage">
        <div className=" col-md-6 col-10 offset-1  mt-5 pt-5 offset-md-3">

            <div className=" mt-5 bg-white p-4  card">
              <div className="  border-0 card-header">
                <div className=" d-flex justify-content-center">
                  <img

                    className=" registerLogo rounded-circle"
                    alt="fsadf"
                  />
                </div>
                <h4 className=" mt-3 text-center aboutLin">URAVITY</h4>
              </div>
              <div className=" card-body mt-5 border-0">
                <h5 className=" text-center text-dark">Register Page</h5>
                <form action="" className=" mt-4">
                  <div className=" mt-3 inputContainer">
                    <h6 className=" form-label">Enter Your Name</h6>
                    <input
                      type="text"
                      className=" my-2 me-4 form-control"
                      placeholder=" Enter Your Name"
                      ref={nameRef}
                    />
                  </div>
                  <div className=" mt-3 inputContainer">
                    <h6 className=" form-label">Enter Your Email</h6>
                    <input
                      type="email"
                      className=" my-2 me-4 form-control"
                      placeholder=" Enter Your Email"
                      ref={emailRef}
                    />
                  </div>
                  <div className=" mt-3 inputContainer">
                    <h6 className=" form-label">Enter Your Password</h6>
                    <input
                      type="password"
                      className=" my-2 me-4 form-control"
                      placeholder=" Enter Your Password"
                      ref={passwordRef}
                    />
                  </div>


                  <div className=" mt-3">
                    <button
                      onClick={register}
                      className=" float-end p-2 rounded-1 bg-black text-white"
                    >
                      Register
                    </button>
                  </div>
                </form>
              </div>

              <div className=" border-top card-footer text-center border-0">
                <Link to="/login" className=" mt-5 text-decoration-none">
                  Alreay have an account, Sign In !
                </Link>
              </div>
            </div>

        </div>
      </div> --}}

<script>





const ushowModalBtn = document.getElementById('showModalBtn');

// Get the modal
const umodal = document.getElementById('uniqueModal');

// Get the close button inside the modal
const ucloseBtn = document.getElementById('uniqueCloseBtn');
const uacceptBtn = document.getElementById('uniqueAcceptBtn');

// When the user clicks the show modal button, display the modal
ushowModalBtn.addEventListener('click', function() {
    umodal.style.display = 'flex';
});

// When the user clicks on the close button, close the modal
ucloseBtn.addEventListener('click', function() {
   umodal.style.display = 'none';
});

uacceptBtn.addEventListener('click', function(){
    umodal.style.display = 'none';
    window.location.href = '/register'
})


    document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal');
    const openModalBtn = document.getElementById('openModalBtn');
    const modalContent = document.querySelector('.modal-content');

    // Open the modal
    openModalBtn.addEventListener('click', function() {
        modal.style.display = 'flex';
        modal.style.animation = 'fadeIn 1.2s';
    });

    // Close the modal when clicking anywhere on the screen
    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });



    const cmodal = document.getElementById('customModal');
    const copenModalBtn = document.getElementById('triggerModal');
    const cmodalContent = document.querySelector('.custom-modal-content');

    // Open the modal when the button is clicked
    copenModalBtn.addEventListener('click', function() {
        cmodal.style.display = 'flex';
        cmodalContent.style.animation = 'scaleIn .4s forwards';
    });

    // Close the modal when clicking anywhere on the screen outside the modal content
    cmodal.addEventListener('click', function(event) {
        if (event.target === cmodal) {
            cmodal.style.display = 'none';
        }
    });

    // Prevent the modal from opening automatically on page load
    cmodal.style.display = 'none';

});



const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');

        togglePasswordBtn.addEventListener('click', function() {
            if (passwordInput.type === 'password') {

                passwordInput.type = 'text';
                togglePasswordBtn.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAM1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACjBUbJAAAAEHRSTlMA7z8w35+AcF8QIFC/j68fEcopUwAAAL1JREFUKM+lUcEWwyAIU7RVtHb8/9cuoLK3t8MOzaHSECIvhidoROmXpSMKEA/6Fl/iONqHrxHauxKVQ6f65k/8DV6z2jpnXSBSZ07m3zFeTQM+aR9EVm1CAYIzDvMzFO1AwWEsyyy51yyRp/kIIpfyZMZ9Tgdsb4053rG3CO3GmL4cJdcOv7X/8MuLGM59uR3R1sooylq3WSA7BUqsX/DFI/HoeHgkMwW0ClG9NU4LxKNzXO3fQzkS0Ss8wBukRQrM8ICtEwAAAABJRU5ErkJggnRpbnk="
            }
            else {

                passwordInput.type = 'password';
                togglePasswordBtn.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAWlBMVEUAAAAoLDDxuw7xuw3xuw7vuwzvvxDxvA0pLjKGbyHyuw3xuw4gMDApLTHxug4qLTLyuw4oLTHyvA3xvA4pLTHyug8oLTIoLTLvug0oKzDvrxDxuw4pLTKNcyAjgWvBAAAAG3RSTlMAf98/zyAQb8/vv38Q38+fj29f76+vn2BgXxAUh3SSAAAAoklEQVQoz63RWQ7DIAwEUMAkbE2zdC/p/a9Zh0EEpPYv88ezBGMhjokc6hOZaTKUfJU7m0tMUUvjnY4lrna1++e/97cuD+Bn4gKOXUcNf+LV92ztmDzGkAZ4mB4rR+Lk0wCXC7v5KZ/aAftYDzyuurLbF6EIli573eceDRfU8rk/19VoWBZMviG8K6u73y5k7b5xQQqsjKgdHxWCIRAysB+RL0CKFT7XoktaAAAAAElFTkSuQmCCdGlueQ==";
            }
        });

const login = document.getElementById('login');
login.addEventListener('click',()=> {
    window.location.href = '/'
})

</script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
