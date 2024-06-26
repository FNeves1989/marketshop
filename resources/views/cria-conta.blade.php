<x-layout_base>
<!-- Hero -->
<div class="relative overflow-hidden">
  <div class="mx-auto max-w-screen-md py-12 px-4 sm:px-6 md:max-w-screen-xl md:py-20 lg:py-7 md:px-8">
    <div class="md:pe-8 md:w-1/2 xl:pe-0 xl:w-5/12">
      <!-- Title -->
      <h1 class="text-3xl text-gray-800 font-bold md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight dark:text-blue-400">
        Crie sua conta <span class="text-blue-600 dark:text-green-400">MarketShop </span><span class="text-blue-600 dark:text-yellow-400">aqui</span>
      </h1>
      <p class="mt-3 text-base text-gray-500 dark:text-neutral-500">
      Inscreva-se com a sua conta Google ou adicione as suas informações
      </p>
      <!-- End Title -->

      <div class="mt-8 grid">
        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-gray-500 dark:hover:bg-neutral-800">
          <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
            <path d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z" fill="#4285F4"/>
            <path d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z" fill="#34A853"/>
            <path d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z" fill="#FBBC05"/>
            <path d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z" fill="#EB4335"/>
          </svg>
          Inscreva-se com a sua conta Google
        </button>
      </div>

      <div class="py-6 flex items-center text-sm text-gray-400 uppercase before:flex-1 before:border-t before:me-6 after:flex-1 after:border-t after:ms-6 dark:text-neutral-500 dark:before:border-neutral-700 dark:after:border-neutral-700">Ou</div>


      <!-- Form -->
=======
      <!-- form -->

      <form action="{{route('salva-usuario')}}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="hs-hero-name-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Full </span></label>

          <input type="text" id="hs-hero-name-2" name="nome"  class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-500 dark:focus:ring-neutral-600" placeholder="Seu nome">

          <input type="text" name="nome" id="hs-hero-name-2" class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-700 dark:focus:ring-neutral-600" placeholder="Seu nome">

        </div>

        <div class="mb-4">
          <label for="hs-hero-email-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Email adress</span></label>

          <input type="email" name="email" id="hs-hero-email-2" class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-500 dark:focus:ring-neutral-600" placeholder="Email">

          <input type="email" name="email" id="hs-hero-email-2" class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-700 dark:focus:ring-neutral-600" placeholder="Email">

        </div>

        <div class="mb-4">
          <label for="hs-hero-password-2" class="block text-sm font-medium dark:text-white"><span class="sr-only">Password</span></label>

          <input type="password" name="senha" id="hs-hero-password-2" class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-500 dark:focus:ring-neutral-600" placeholder="Senha">
=======
          <input type="password" name="senha" id="hs-hero-password-2" class="rounded-lg border border-gray-200 py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-gray-700 dark:focus:ring-neutral-600" placeholder="Senha">

        </div>

        <div class="grid">
          <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-400 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Inscrever-se</button>
        </div>
      </form>
      <!-- End Form -->
    </div>
  </div>

  <div class="hidden md:block md:absolute md:top-0 md:start-1/2 md:end-0 h-full bg-[url('https://www.jn2.com.br/wp-content/uploads/2016/07/abrir-uma-loja-virtual.jpg')] bg-no-repeat bg-center bg-cover"></div>
  <!-- End Col -->
</div>
<!-- End Hero -->
</x-layout_base>