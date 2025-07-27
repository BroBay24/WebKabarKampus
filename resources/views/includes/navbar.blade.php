    <!-- Nav -->
    <div class="sticky top-0 z-50 flex justify-between py-5 px-4 lg:px-14 bg-white shadow-sm">
      <div class="flex gap-10 w-full">
        <!-- Logo dan Menu -->
        <div class="flex items-center justify-between w-full lg:w-auto">
          <!-- Logo -->
          <a href=" {{ route('landing') }}">
            <div class="flex items-center gap-2">
              <img src="{{ asset('assets\css\img\LogUkdc.png')}}" alt="Logo" class="w-8 lg:w-10">
              <p class="text-lg lg:text-xl font-bold">Kabar Kampus</p>
            </div>
          </a>
          <button class="lg:hidden text-primary text-2xl focus:outline-none" id="menu-toggle">
            ☰
          </button>
        </div>

        <!-- Menu Navigasi -->
        <div id="menu"
          class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-10 w-full lg:w-auto mt-5 lg:mt-0">
          <ul
            class="flex flex-col lg:flex-row items-start lg:items-center gap-4 font-medium text-base w-full lg:w-auto">
            <li><a href="{{ route('landing') }}" 
              class="{{ request()->is('/') ? 'text-primary' : '' }} hover:text-gray-600">Beranda</a></li>

            @foreach (\App\Models\NewsCategory::all() as $category)
            <li><a href="{{ $category->slug }}" class="{{ request()->is($category->slug) ? 'text-primary' : '' }} 
              hover:text-primary">{{ $category->title }}
                </a></li> 
            @endforeach

          </ul>
        </div>
      </div>
    </div>