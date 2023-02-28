 <div class="vertical-menu">
     <div data-simplebar class="h-100">
         <div id="sidebar-menu">
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>
                 <li>
                     <a href="{{ url('/admin') }}" class="waves-effect">
                         <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                         <span>Dashboard</span>
                     </a>
                </li>
                <li>
                    <a href="{{ route('home_slider.index') }}" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>Home Slide Setup</span>
                    </a>
                </li>
                <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-mail-send-line"></i>
                         <span>About Page Setup</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('about.index') }}">About Page</a></li>
                         <li><a href="{{ route('multi_image.index') }}">All Multi Image</a></li>
                     </ul>
                </li>
                <li>
                    <a href="{{ route('portfolio.index') }}" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Portfolio Page Setup</span>
                    </a>
                </li>
                <li class="menu-title">Pages</li>
                <li>
                    <a href="{{ route('blog_category.index') }}" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Blog Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Blog Page</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('footer.index') }}" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Footer Page Setup</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact.index') }}" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Contact Message </span>
                    </a>
                </li>
             </ul>
         </div>
     </div>
 </div>
