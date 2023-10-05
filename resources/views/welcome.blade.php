@extends('layouts.global')
@section('content')
 @include('components.navbar')
 @include('components.home')
 @include('components.category')
 @include('components.menu')
 @include('components.footer')
@endsection









{{-- <!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wijaya Coffee Shop</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="icon" href="{{ asset('assets/images/logo-removebg.png') }}">


        @vite('resources/css/app.css')
    </head> --}}
    {{-- <body >
        <!--~~~~~~~~~~ Header~~~~~~~~~~~ -->


        <main> --}}
        <!--~~~~~~~~~~ home Section~~~~~~~~~~~ -->
        {{-- <section id="home">
            <div class="container flex flex-col items-center gap-10">
                <div class="text-center">
                    <h1 class="font-oswald font-bold uppercase">Coffee Is Heaven</h1>
                    <div class="seperator mx-auto"></div>
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore veritatis eveniet expedita, cumque delectus obcaecati magnam earum id vero repellat doloremque, illum distinctio officia dolor aspernatur minima qui blanditiis. Nam!</p>
                    <div class="text-base flex items-center justify-center gap-4 py-10">
                        <div class="text-center">
                            <i class="ri-cup-line text-violet-700 text-4xl"></i>
                            <br>
                            Delicious
                        </div>

                        <div class="text-center">
                            <i class="ri-water-percent-line text-violet-700 text-4xl"></i>
                            <br />
                            Fresh
                        </div>

                        <div class="text-center">
                            <i class="ri-github-line text-violet-700 text-4xl"></i>
                            <br />
                            Verified
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary" class="bg-yellow-400 rounded-3xl py-3 px-8 font-medium inline-block mr-4
                    hover:bg-transparent hover:border-yellow-400 hover:text-white duration-300 hover:border border border-transparen">Learn More</a>
                </div>
            </div>
        </section> --}}
        <!-- ~~~~~~~~~ category section ~~~~~~~~~~ -->
        {{-- <section id="category">
            <div class="container flex flex-col gap-5 md:flex-row  my-5">
                <!-- card 1 -->
                <div class="bg-amber-400 flex py-3 rounded-lg overflow-hidden md:flex-1 ">
                    <div class="basis-1/3 relative"><img src="{{ asset('assets/images/coffeecup.png') }}" alt="" class="absolute w-28 -bottom-4
                        -left-4 ">
                    </div>
                    <div>
                        <div>
                            <h4 class="font-oswald uppercase font-bold">Coffee</h4>
                            <p>Lorem Ipsum Doloe</p>
                        </div>

                        <a href="#">Buy Online Cuy</a>
                    </div>
                </div>
                 <!-- card 1 -->
                 <div class="bg- bg-red-600 flex py-3 rounded-lg overflow-hidden md:flex-1">
                    <div class="basis-1/3 relative"><img src="{{ asset('assets/images/snack.png') }}" alt="" class="absolute w-28 -bottom-4
                        -left-4 ">
                    </div>
                    <div>
                        <div>
                            <h4 class="font-oswald uppercase font-bold text-amber-400">Snack</h4>
                            <p>Lorem Ipsum Doloe</p>
                        </div>

                        <a href="#">Buy Online Cuy</a>
                    </div>
                </div>
                 <!-- card 1 -->
                 <div class="bg-green-600 flex py-3 rounded-lg overflow-hidden  md:flex-1">
                    <div class="basis-1/3 relative"><img src="{{ asset('assets/images/Paper-Bag-min.png') }}" alt="" class="absolute  -bottom-4
                        -left-1  w-1/2 h-28 hover:animate-bounce">
                    </div>
                    <div>
                        <div>
                            <h4 class="font-oswald font-bold uppercase">Bean</h4>
                            <p>Lorem Ipsum Doloe</p>
                        </div>

                        <a href="#">Buy Online Cuy</a>
                    </div>
                </div>
            </div>
        </section> --}}
<!-- ----------------Menu--------------------- -->
         {{-- <section id="menu">
            <div class="container">
                <div class="max-w-md mx-auto text-center">
                    <h2 class="font-oswald font-bold uppercase">OUR BEST MENU</h2>
                    <div class="seperator mx-auto"></div>
                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non amet,
                         explicabo maiores vel reprehenderit in maxime ipsum animi minus dicta libero voluptatem eaque atque dolore nemo, ipsa error voluptatum illum.</p>
                    <div class="tabs_wrap">
                        <ul class="flex flex-wrap justify-center gap-3 py-10">
                            <li class="btn bg-amber-950">All</li>
                            <li class="btn bg-amber-950">Coffee</li>
                            <li class="btn bg-amber-950">Snack</li>
                            <li class="btn bg-amber-950">Bean</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <ul class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-12">
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/coffeecup.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Coffee</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/coffeecup.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Coffee</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/coffeecup.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Coffee</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/coffeecup.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase" >Coffee</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/snack.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Snack</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/snack.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Snack</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/snack.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Snack</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/snack.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Snack</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/Paper-Bag-min.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Bean</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/Paper-Bag-min.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Bean</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/Paper-Bag-min.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Bean</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                        <li>
                            <div class="h-56 grid place-items-center bg-amber-950 rounded-3xl hover:bg-amber-300 ease-linear duration-200">
                                <img src="{{ asset('assets/images/Paper-Bag-min.png') }}" alt="" class="w-40 hover:scale-110 ease-linear duration-200">
                            </div>

                            <div class="pt-5">
                                <div class=" mb-2">
                                    <h4 class="font-oswald font-bold uppercase">Bean</h4>
                                    <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        A omnis consectetur, dignissimos dolorum sunt ex assumenda maiores suscipit nostrum. Nulla doloribus aliquid voluptates cumque recusandae. Repudiandae cupiditate omnis voluptatem placeat?</p>
                                </div>

                                <p class="font-dmsans text-amber-300">Rp.15.000.000</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
         </section> --}}
<!-- ----------------Footer--------------------- -->
         {{-- <footer>
            <section>
                <div class="container bg-amber-950">
                    <ul class="grid grid-cols-1 items-start gap-5 pb-5 md:grid-cols-2 lg:grid-cols-4">
                        <li>
                            <div class="space-y-4 pl-10">
                                <a href="" class="text-4xl font-oswald uppercase">
                                    Co<span class="text-amber-400">ffee</span>
                                </a>

                                <p class="text-xs">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius,
                                    ducimus labore maiores corrupti ullam fuga alias nobis totam magnam autem architecto impedit repudiandae, eos sapiente quae illum optio doloribus iste.</p>

                            </div>
                        </li>

                        <li>
                            <div class="flex flex-col gap-3">
                                <h3 class="text-lg font-oswald uppercase">SUPPORT</h3>
                                <a href="" class="text-xs hover:text-color-amber-300">FAQ'S</a>
                                <a href="" class="text-xs hover:text-color-amber-300">Privacy</a>
                                <a href="" class="text-xs hover:text-color-amber-300">Term & Condition</a>
                                <a href="" class="text-xs hover:text-color-amber-300">Contact</a>
                            </div>
                        </li>

                        <li class="space-y-8">
                            <div class="space-y-2">
                                <h3 class="text-lg uppercase font-oswald">phone</h3>

                                <p class="flex items-center gap-2 text-xs">
                                    <i class="ri-phone-line text-lg text-amber-300"></i>
                                    +6200998877
                                </p>
                            </div>

                            <div class="space-y-2">
                                <h3 class="text-lg uppercase font-oswald">email</h3>

                                <p class="flex items-center gap-2 text-xs">
                                    <i class="ri-mail-open-fill text-lg text-amber-300"></i>
                                    wijayacoffee@gmail.com
                                </p>
                            </div>

                        </li>

                        <li class="space-y-8">
                            <div class="space-y-2">
                                <h3 class="text-lg uppercase font-oswald">adress</h3>

                                <p class="flex items-center gap-2 text-xs">
                                    <i class="ri-home-8-line text-lg text-amber-300"></i>
                                    alamat disini cuy
                                </p>
                            </div>

                            <div class="space-y-2">
                                <h3 class="text-lg uppercase font-oswald">follow us</h3>

                                <div class="space-x-3">
                                    <i class="ri-instagram-line text-lg cursor-pointer text-amber-300 hover:translate-y-1 ease-in duration-200"></i>
                                    <i class="ri-twitter-fill text-lg cursor-pointer text-amber-300 hover:translate-y-1 ease-in duration-200"></i>
                                    <i class="ri-tiktok-line text-lg cursor-pointer text-amber-300 hover:translate-y-1 ease-in duration-200"></i>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class=" flex flex-col items-center border-t border-black py-5 md:justify-between">
                        <p class="paragraph">Coffee Buatan Uncle Mutu Durian Runtuh</p>
                        <p class="paragraph">Copyright by gue 2023</p>
                    </div>
                </div>
            </section>
         </footer> --}}
        {{-- </main> --}}
    {{-- </body>
</html> --}}
