<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お買い物リスト') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="mb-8" method="post" action= "{{ route('shopping.store') }}">
                    @csrf
                      <input type="text" name="mustbuy" placeholder="入力してください">
                      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">追加</button>
                  </form>
            <div>
                        
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
     <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">欲しいもの</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($shoppings as $shopping)
            <td class="border-t-2 border-gray-200 px-4 py-3">{{ $shopping->mustbuy }}</td>
            <th>@if(isset($shoppings))
                <form id="delete_{{ $shopping->shopping_id }}" method="post" action="{{ route('shopping.destroy', ['shopping_id' => $shopping->shopping_id ])}}">
                    @csrf
                    <div class="p-2 w-full">
                    <a href="#" data-id="{{ $shopping->shopping_id }}" onclick="deletePost(this)" class="text-white bg-pink-500 border-0 py-2 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">削除</a>
                    </div>
                @endif
                </form>
            </th>
          </tr>
          @endforeach
        </tbody>
        </table>
        </div>
        </div>
    </div>

    <br>
    <br>

    <h2 class="font-semibold text-gray-800 leading-tight">周辺のスーパーマーケット
    </h2>
    <h5 class="font-semibold text-gray-800 leading-tight">（現在地の取得に時間がかかる場合があります）
    </h5>
    <br>
    <div id="map" style="height:400px">
	</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/result.js') }}"></script>
    <script src="{{ asset('/js/spot.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAqDodUn0Li4GZnjze-kd4xcKJOq64gOiE&callback=initMap&libraries=places" async defer></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAqDodUn0Li4GZnjze-kd4xcKJOq64gOiE&libraries=places" charset="utf-8"></script>
 

    <!-- </script> -->



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
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">