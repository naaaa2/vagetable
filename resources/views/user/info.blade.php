<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('プロフィール') }}
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
                                    <label for="name" class="leading-7 text-sm text-gray-600">ユーザーネーム</label>
                                    @if($users->name)
                                    <div name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    {{ $users->name }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="date_purchase" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                @if($users->email)
                                <div type="date" id="date_purchase" name="date_purchase" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                {{ $users->email }}</div>
                                @endif
                            </div>
                            </div>

                            <form method="GET" action="{{route('user.edit', ['id' => $users->id ])}}">
                            <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                            </div>
                            </form>
                            
                            @if(isset($users))
                            <form id="delete_{{ $users->id }}" method="post" action="{{ route('user.destroy', ['id' => $users->id ])}}">
                                @csrf
                                <div class="p-2 w-full">
                                <a href="#" data-id="{{ $users->id }}" onclick="deletePost(this)" class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">退会する</a>
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
        if(confirm('本当に退会してもいいですか？')){
            document.getElementById('delete_' + e.dataset.id).submit();
        }
    }
</script>
</x-app-layout>