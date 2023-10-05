<header>
    <img src="{{ asset('assets/images/about1.jpg') }}" alt="" class="absolute w-full h-full object-cover -z-10 brightness-50">
    <div class="container min-h-screen ] bg-cover px-24 py-5 relative" >
        <nav class="flex text-center">
            <img src="{{ asset('assets/images/logo-removebg.png') }}" alt="logo web" class="h-[50px] cursor-pointer">
            <ul class="flex-1 items-center">
                <li class="list-none inline-block px-5"><a href="#"  class="no-underline text-white px-2">Home</a></li>
                <li class="list-none inline-block px-5"><a href="#"  class="no-underline text-white px-2">About</a></li>
                <li class="list-none inline-block px-5"><a href="#"  class="no-underline text-white px-2">Menu</a></li>
                <li class="list-none inline-block px-5"><a href="#"  class="no-underline text-white px-2">Contact</a></li>
            </ul>
            <img src="{{ asset('assets/images/cartremove.png') }}" alt="" class="h-[50px] cursor-pointer">
        </nav>

        <div class="text-white mt-48">
            <h1 class="text-6xl font-semibold leading-normal">Let's Go <br> Coffee</br> </h1>
            <p>As long as there was coffee in the world, how bad could things be?</p>

            <div class="mt-10">
                <a href="" class="bg-yellow-400 rounded-3xl py-3 px-8 font-medium inline-block mr-4
                hover:bg-transparent hover:border-yellow-400 hover:text-white duration-300 hover:border border border-transparent">Login</a>
                <a href="">Download App <span class="text-lg inline-block rotate-90">&#10145;</span></a>
            </div>

         </div>
         {{-- <img src="{{ asset('assets/images/coffee2.png') }}" alt="" class=" w-3/5 h-3/4 xl:w-1/2 xl:absolute  bottom-20 right-20  "> --}}
       </div>
    </div>
</header>
