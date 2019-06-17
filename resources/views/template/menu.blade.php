<!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->

 
   
{{--    
   @if (\Request::is(''))  
{{" Companies menu"}}
@endif --}}


    



{{-- {{dd(config('notika.menus'))}}  --}}

<div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">

                        {{-- for nested menu --}}
                         @foreach (config('notika.menus')  as $item)

              @if (isset($item['target']))
              
              {{-- {{dd(basename(request()->path()))}} --}}

                   {{-- Yang di jadikan acive --}}
                        <li class="@if(in_array(basename(request()->path()), $item['url'])) 
                        {{'active'}}
                          @endif
                        ">
                            <a data-toggle="tab" href="{{'#'. $item['target']}}"><i class="notika-icon {{$item['icon']}} "></i> {{$item['text']}}</a>
                        </li>
                        

                 
                        
                        @else
                        {{-- for single menu --}}    

                        {{-- {{$item['url'] == '' ? "fuck" : "BRUH MOMMENT"}} --}}
                      
                        
                    <li class="{{ request()->is($item['url'] == '' ? '/' : $item['url']) ? 'active' : '' }}">
                        <a class="active-single" href="{{ $item['url'] == '' ? url('/') : $item['url'] }}">
                        <i class="notika-icon {{$item['icon']}}"> </i>{{$item['text']}}</a>
                        </li>
                         {{-- end single menu --}}

                        @endif

                        @endforeach
                     
                    </ul>
                    <div class="tab-content custom-menu-content">

                         @foreach (config('notika.menus')  as $item)

                        

                          @if (isset($item['target']))

                          {{-- Yang di jadikan acive --}}
                          <div id="{{$item['target']}}" class="tab-pane notika-tab-menu-bg animated flipInX 
                          @if(in_array(basename(request()->path()), $item['url'])) 
                        {{'active'}}
                          @endif
                          
                          "> 
                              
                            <ul class="notika-main-menu-dropdown">
                                @foreach ($item['nested'] as $menu)

                                @if (isset($menu['target']))
                                    
                                @endif
                               

                                     @if (isset($item['target']) && isset($menu['text']) )
                                <li><a href="">{{$menu['text']}}</a>
                                </li>

                                @endif
                                       @endforeach 
                            </ul>
                                           
                        </div>
                    
  

                          @endif

                         @endforeach
                     
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>