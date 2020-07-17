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
 <script src="{{asset('assets/js/app.min.js')}}"></script>
 <!-- JS Libraies -->
 <script src="{{asset('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
 <script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>
 <script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Page Specific JS File -->
 <script src="{{asset('assets/js/page/index.js')}}"></script>
 <script src="{{asset('assets/js/page/datatables.js')}}"></script>
 <!-- Template JS File -->
 <script src="{{asset('assets/js/scripts.js')}}"></script>
 <!-- Custom JS File -->
 <script src="{{asset('assets/js/custom.js')}}"></script>







 <script>
   $(document).ready(function () {
         $('#client_list').DataTable({
             responsive: true,
             colReorder: true,
             dom: 'Bfrtip',
             buttons: [
                 'csv', 'excel', 'pdf'
             ]
         });
     });
</script>

</body>
</html>