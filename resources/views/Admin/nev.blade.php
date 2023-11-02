<nav class="navbar p-0 fixed-top d-flex flex-row">
                   
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                                              
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown d-none d-lg-block">
                                <a class="nav-link btn btn-success create-new-button" 
                                   href="{{url('view_userprofile')}}">+ Create New Profile</a>
                                
                            </li>
                          
                            </li>
                            <li class="nav-item dropdown border-left">
                                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-email"></i>
                                    <span class="count bg-success"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                    aria-labelledby="messageDropdown">
                                    <h6 class="p-3 mb-0">Messages</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <img src="Admin/assets/images/faces/face4.jpg" alt="image"
                                                class="rounded-circle profile-pic">
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                            <p class="text-muted mb-0"> 1 Minutes ago </p>
                                        </div>
                                    </a>
                                                                      
                                </div>
                            </li>
                          
                            <li>
                              
                                    <!-- ... other content ... -->

                                    <!-- Add Logout Button if User is Authenticated -->
                                    @auth
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-button>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </x-button>
                                    </form>
                                    @endauth

                                    <!-- ... other content ... -->
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="offcanvas">
                            <span class="mdi mdi-format-line-spacing"></span>
                        </button>
                    </div>
                </nav>