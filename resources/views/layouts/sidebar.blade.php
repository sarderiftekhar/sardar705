      {{-- Left Menu Sidebar  --}}
      <div class="main-sidebar sidebar-style-2">
         <aside id="sidebar-wrapper">
           <div class="sidebar-brand">
             <a href="#" style="margin-bottom:3em;"> 
               {{-- <img alt="image" src="assets/img/logo.png" class="header-logo" style=" width: 49%;height: 161%;"/>  --}}
               <img alt="image" src="assets/img/logo.png" class="header-logo"/> 
                 <span class="logo-name"><p style="margin-top:-1em;color:darkblue;">Sardar</p><p class="align-center" style="font-size:0.4em;margin-top:-3em;margin-bottom:3em;">Real estate management</p></span>
             </a>
             
           </div>
           <ul class="sidebar-menu" style="margin-top:1.5em;">
             {{-- <li class="menu-header">Main</li> --}}
             <li class="dropdown">
               <a href="/dashboard" class="nav-link"><i data-feather="home" color="#0e1d85"></i><span>Dashboard</span></a>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="file" color="#0e1d85"></i><span>Appointments</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href=""><i data-feather="file-plus"></i>New Appointment</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="file-text"></i>Modify Appointment</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="file-minus"></i>View Appointments</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="user" style="color:rgb(11, 8, 195);"></i><span>Clients</span></a>
               <ul class="dropdown-menu active">

                <li>
                  <a class="nav-link" href="/new-client">
                    <i data-feather="user-plus" style="color:rgb(11, 8, 195);">
                    </i>New Client</a>
                </li>

                 <li><a class="nav-link" href="#"><i data-feather="settings" style="color:rgb(11, 8, 195);"></i>Modify Client</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="user-minus" style="color:rgb(11, 8, 195);"></i>View Clients</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users" style="color:rgb(179, 115, 37);"></i><span>Agents</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="#"> <i data-feather="user-plus"  style="color:darkorange;"></i>New Agent</a></li>
                 <li><a class="nav-link" href="#"> <i data-feather="settings" style="color:darkorange;"></i> Modify Agent</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="user-minus" style="color:darkorange;"></i> View Agents</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home" style="color:rgb(21, 105, 28);"></i><span>Properties</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="#"> <i data-feather="send" style="color:rgb(21, 105, 28);"></i>New Properties</a></li>
                 <li><a class="nav-link" href="#"> <i data-feather="settings" style="color:rgb(21, 105, 28);"></i>Modify Properties</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="info" style="color:rgb(21, 105, 28);"></i>View Properties</a></li>
                 <li><a class="nav-link" href="#"><i data-feather="layout" style="color:rgb(21, 105, 28);"></i>Property Reports</a></li>
               </ul>
             </li>
             <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="archive" style="color:rgb(21, 105, 28);"></i><span>Documents</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#"> <i data-feather="folder-plus" style="color:rgb(21, 105, 28);"></i>Upload new</a></li>
                <li><a class="nav-link" href="#"> <i data-feather="file-text" style="color:rgb(21, 105, 28);"></i>Track Documents</a></li>
                <li><a class="nav-link" href="#"><i data-feather="list" style="color:rgb(21, 105, 28);"></i>List of Documents</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="dollar-sign" style="color:rgb(20, 20, 18);"></i><span>Income Expenditure</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="#"> <i data-feather="credit-card" style="color:rgb(20, 20, 18);"></i>New Expense</a></li>
                <li><a class="nav-link" href="#"> <i data-feather="square" style="color:rgb(20, 20, 18);"></i>Payment received</a></li>
                <li><a class="nav-link" href="#"><i data-feather="list" style="color:rgb(20, 20, 18);"></i>View Reports</a></li>
              </ul>
            </li>
             <li class="dropdown">
               <a href="#" class="nav-link"><i data-feather="settings" color="#0e1d85"></i><span>User settings</span></a>
             </li>
             <li class="dropdown">
               <a href="#" class="nav-link"><i data-feather="coffee" color="#E26A1C"></i><span>Logout</span></a>
             </li>
             {{--<li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Email</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                 <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                 <li><a class="nav-link" href="email-read.html">read</a></li>
               </ul>
             </li>
             <li class="menu-header">UI Elements</li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
                   Components</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="alert.html">Alert</a></li>
                 <li><a class="nav-link" href="badge.html">Badge</a></li>
                 <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
                 <li><a class="nav-link" href="buttons.html">Buttons</a></li>
                 <li><a class="nav-link" href="collapse.html">Collapse</a></li>
                 <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                 <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
                 <li><a class="nav-link" href="list-group.html">List Group</a></li>
                 <li><a class="nav-link" href="media-object.html">Media Object</a></li>
                 <li><a class="nav-link" href="navbar.html">Navbar</a></li>
                 <li><a class="nav-link" href="pagination.html">Pagination</a></li>
                 <li><a class="nav-link" href="popover.html">Popover</a></li>
                 <li><a class="nav-link" href="progress.html">Progress</a></li>
                 <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
                 <li><a class="nav-link" href="flags.html">Flag</a></li>
                 <li><a class="nav-link" href="typography.html">Typography</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="shopping-bag"></i><span>Advanced</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="avatar.html">Avatar</a></li>
                 <li><a class="nav-link" href="card.html">Card</a></li>
                 <li><a class="nav-link" href="modal.html">Modal</a></li>
                 <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
                 <li><a class="nav-link" href="toastr.html">Toastr</a></li>
                 <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
                 <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
                 <li><a class="nav-link" href="pricing.html">Pricing</a></li>
                 <li><a class="nav-link" href="tabs.html">Tab</a></li>
               </ul>
             </li>
             <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
             <li class="menu-header">Hilbert</li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
                 <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                 <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                 <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                 <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>
                 <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>
                 <li><a class="nav-link" href="datatables.html">Datatable</a></li>
                 <li><a class="nav-link" href="export-table.html">Export Table</a></li>
                 <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="pie-chart"></i><span>Charts</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                 <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                 <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                 <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                 <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                 <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                 <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                 <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                 <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                 <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
               </ul>
             </li>
             <li class="menu-header">Media</li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
                 <li><a href="gallery1.html">Gallery 2</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sliders</span></a>
               <ul class="dropdown-menu">
                 <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                 <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
               </ul>
             </li>
             <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>
             <li class="menu-header">Maps</li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
                   Maps</span></a>
               <ul class="dropdown-menu">
                 <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                 <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                 <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                 <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                 <li><a href="gmaps-marker.html">Marker</a></li>
                 <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                 <li><a href="gmaps-route.html">Route</a></li>
                 <li><a href="gmaps-simple.html">Simple</a></li>
               </ul>
             </li>
             <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                   Map</span></a></li>
             <li class="menu-header">Pages</li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="user-check"></i><span>Auth</span></a>
               <ul class="dropdown-menu">
                 <li><a href="auth-login.html">Login</a></li>
                 <li><a href="auth-register.html">Register</a></li>
                 <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                 <li><a href="auth-reset-password.html">Reset Password</a></li>
                 <li><a href="subscribe.html">Subscribe</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="alert-triangle"></i><span>Errors</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="errors-503.html">503</a></li>
                 <li><a class="nav-link" href="errors-403.html">403</a></li>
                 <li><a class="nav-link" href="errors-404.html">404</a></li>
                 <li><a class="nav-link" href="errors-500.html">500</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Other
                   Pages</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="create-post.html">Create Post</a></li>
                 <li><a class="nav-link" href="posts.html">Posts</a></li>
                 <li><a class="nav-link" href="profile.html">Profile</a></li>
                 <li><a class="nav-link" href="contact.html">Contact</a></li>
                 <li><a class="nav-link" href="invoice.html">Invoice</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="menu-toggle nav-link has-dropdown"><i
                   data-feather="chevrons-down"></i><span>Multilevel</span></a>
               <ul class="dropdown-menu">
                 <li><a href="#">Menu 1</a></li>
                 <li class="dropdown">
                   <a href="#" class="has-dropdown">Menu 2</a>
                   <ul class="dropdown-menu">
                     <li><a href="#">Child Menu 1</a></li>
                     <li class="dropdown">
                       <a href="#" class="has-dropdown">Child Menu 2</a>
                       <ul class="dropdown-menu">
                         <li><a href="#">Child Menu 1</a></li>
                         <li><a href="#">Child Menu 2</a></li>
                       </ul>
                     </li>
                     <li><a href="#"> Child Menu 3</a></li>
                   </ul>
                 </li>
               </ul>
             </li> --}}
           </ul>
         </aside>
       </div>