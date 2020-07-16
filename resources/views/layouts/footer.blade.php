      <footer class="main-footer">
         <div class="footer align-center">
         <p style="font-style:bold;">© 2020 Powered by Sardar Iftekhar</p>
         </div>
         <div class="footer-right">
         </div>
      </footer>
   </div>
</div>
<!-- General JS Scripts -->
 <script src="assets/js/app.min.js"></script>
 <!-- JS Libraies -->
 <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
 <!-- Page Specific JS File -->
 <script src="assets/js/page/index.js"></script>
 <!-- Template JS File -->
 <script src="assets/js/scripts.js"></script>
 <!-- Custom JS File -->
 <script src="assets/js/custom.js"></script>

{{-- toaster --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script>
   @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
         case 'info':
               toastr.info("{{ Session::get('message') }}");
               break;
           case 'success':
               toastr.success("{{ Session::get('message') }}");
               break;
            case 'warning':
               toastr.warning("{{ Session::get('message') }}");
               break;
           case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;
      }
   @endif
</script>



</body>
</html>