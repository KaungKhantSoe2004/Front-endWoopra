{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>wooprra.io</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
<h1 class=" bg-warning">ENGLISH</h1>










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal Example</title>
    {{-- <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"> --}}
    <link rel="stylesheet" href="https://front-endwoopra-production.up.railway.app/css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <button id="triggerModal">Open Modal</button>

    {{-- <div id="customModal" class="custom-modal">
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
    </div> --}}



    <script >



document.addEventListener('DOMContentLoaded', function() {
    const cmodal = document.getElementById('customModal');
    const copenModalBtn = document.getElementById('triggerModal');
    const cmodalContent = document.querySelector('.custom-modal-content');

    // Open the modal when the button is clicked
    copenModalBtn.addEventListener('click', function() {
        cmodal.style.display = 'flex';
        cmodalContent.style.animation = 'scaleIn 1.2s forwards';
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





    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
