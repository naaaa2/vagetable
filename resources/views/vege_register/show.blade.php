<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お野菜アラーム') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative">
                    
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                            <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="vege_name" class="leading-7 text-sm text-gray-600">野菜の名前</label>
                                    <div name="vege_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    {{ $vege_name }}</div>
                                </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="date_purchase" class="leading-7 text-sm text-gray-600">購入日</label>
                                <div type="date" id="date_purchase" name="date_purchase" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{ $veges->date_purchase }}</div>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">保存方法</label><br>
                                {{ $method }}
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="quantity" class="leading-7 text-sm text-gray-600">個数</label>
                                <div name="quantity" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{ $veges->quantity }}
                                </div>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="quantity" class="leading-7 text-sm text-gray-600">アドバイス</label>
                                <div name="quantity" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{ $bestby }}
                                </div>
                            </div>
                            </div>

                            <form method="GET" action="{{route('vege_register.edit', ['vege_id' => $veges->vege_id ])}}">
                            <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                            </div>
                            </form>
                            @if(isset($veges))
                            <form id="delete_{{ $veges->vege_id }}" method="post" action="{{route('vege_register.destroy', ['vege_id' => $veges->vege_id ])}}">
                            @csrf
                            <div class="p-2 w-full">
                            <a href="#" data-id="{{ $veges->vege_id }}" onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除する</a>
                            </div>
                            @endif
                            </form>


                        </div>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<!-- 確認メッセージ -->
<script>
    function deletePost(e){
        'use script'
        if(confirm('本当に削除してもいいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
</x-app-layout>