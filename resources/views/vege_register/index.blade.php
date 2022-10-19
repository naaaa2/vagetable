<?php
echo date('Y-m-d')."<br/>\n";
?>
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
                    野菜を登録しましょう！<br>
                    <a href="{{ route('vege_register.create') }}" class ="text-blue-500">新規登録</a><br>
                </div>
                        
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
     <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">野菜の名前</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">購入日</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">保存方法</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">個数</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach($veges as $vege)
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ $vege->vege_names }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ $vege->date_purchase }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ $vege->methods }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{ $vege->quantity }}</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">
                <a class="text-blue-500" href="{{ route('vege_register.show', ['vege_id' => $vege->vege_id ]) }}">詳細</a>
            </td>
          </tr>
          @endforeach 
                    </tbody>
                </table>
                </div> 
                
            </div>
        </div>
    </div>
</x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">