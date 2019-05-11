  


  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                 
                  @role('supplier')
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
           

                  <li><a href="{{ url('/product') }}"><i class="fa fa-user" aria-hidden="true"></i>Products</a>
                
                  </li>


                   <li><a href="{{ url('/viewUser') }}"><i class="fa fa-user" aria-hidden="true"></i>User</a>
                
                  </li> 
                   <li><a href="{{ url('/viewSupplier') }}"><i class="fa fa-user" aria-hidden="true"></i>Supplier</a>
                
                  </li>
                   <li><a href="{{ url('/Admin/viewProposal') }}"><i class="fa fa-book" aria-hidden="true"></i>Proposal</a>
                
                  </li>
                  @endrole

                   @role('admin')
                   <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                   </li>


                   <li><a href="{{ url('/role') }}"><i class="fa fa-user" aria-hidden="true"></i>Role</a>

                   </li>


                   <li><a href="{{ url('/viewUser') }}"><i class="fa fa-user" aria-hidden="true"></i>User</a>

                   </li> 
                   <li><a href="{{ url('/viewSupplier') }}"><i class="fa fa-user" aria-hidden="true"></i>Supplier</a>

                   </li>
                   <li><a href="{{ url('/Admin/viewProposal') }}"><i class="fa fa-book" aria-hidden="true"></i>Proposal</a>

                   </li>
                   <li><a href="{{ url('/category') }}"><i class="fa fa-book" aria-hidden="true"></i>Category</a>

                   </li>
                  @endrole
            






                  <!-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
           

            </div>



