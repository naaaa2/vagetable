<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="hero" src="https://img.freepik.com/free-photo/healthy-vegetables-on-wooden-table_1150-38014.jpg?w=1380&t=st=1664632540~exp=1664633140~hmac=b80126c3734ad9f506b87955ce0101134c48263e206b6111352118d7b81de79b">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">お野菜アラームを始める前に・・・
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">アカウントを作成することで自分だけの賞味期限管理や買い物リストを作成することができます.アカウントをお持ちの方はログイン,お持ちでない方は会員登録をお願いします.</p>
      <div class="flex justify-center">
        <a href="{{ route('login') }}">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">ログイン</button>
        </a>
        <a href="{{ route('register') }}">
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">新規会員登録</button>
        </a>
    </div>
    </div>
  </div>
</section>
</html>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">