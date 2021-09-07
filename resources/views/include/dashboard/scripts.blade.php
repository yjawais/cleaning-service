     <!-- Core -->
     <script src="{{asset('adminPanel/vendor/jquery/dist/jquery.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/js-cookie/js.cookie.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
     <!-- Optional JS -->
     <script src="{{asset('adminPanel/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/dropzone/dist/min/dropzone.min.js')}}"></script>
     <script src="{{asset('adminPanel/vendor/sweetalert2/dist/sweetalert2.min.js')}}"></script>
  <script src="{{asset('adminPanel/vendor/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
     <!-- Argon JS -->
     <script src="{{asset('adminPanel/js/argon.js?v=1.2.0')}}"></script>
     <!-- Demo JS - remove this in your project -->
     <script src="{{asset('adminPanel/js/demo.min.js')}}"></script>    
     <script src="{{asset('adminPanel/js/components/bootstrap-tagsinput.js')}}"></script>    

     
     <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

$('#password, #password-confirm').on('keyup', function () {
  if ($('#password').val() == $('#password-confirm').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});

</script>