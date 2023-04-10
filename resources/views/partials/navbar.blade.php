<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
 
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4">
                <a href="/dashboard" class="font-bold text-lg text-primary block py-6">  
                    
                    <!-- if user is logged in, show user name -->
                    @auth
                    {{ Auth::user()->name }}
                    @else
                    SIAKAD
                    @endauth  
                </a>
 
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden ">
                    <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
 
                <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none  ">
                    <ul class="block lg:flex ">
 
                        @auth
                        <li class="group">
                            <a href="/register" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Register</a>
                        </li>
                        <li class="group">
                            <a href="/logout" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Logout</a>
                        </li>
                        <li class="group">
                            <a href="/barchart" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Barchart</a>
                        </li>
                        @else
                        <li class="group">
                            <a href="/login" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Login</a>
                        </li>
                        <li class="group">
                            <a href="/register" class="text-base text-black py-2 mx-8 flex group-hover:text-primary">Register</a>
                        </li>
                        @endauth
                        
                        
                    </ul>
                </nav>
 
            </div>
        </div>
    </div>
 
    </div>
 
</header>
 