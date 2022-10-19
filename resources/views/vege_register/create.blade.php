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
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <section class="text-gray-600 body-font relative">
                    <form method="POST" action="{{route('vege_register.store')}}">
                        @csrf
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">野菜を登録しましょう！</h1>
                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">購入した野菜の賞味期限を管理することで<br>食品ロスを減らすことができます.</p>
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="vege_name" class="leading-7 text-sm text-gray-600">野菜の名前</label>
                                <select name="vege_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">野菜を選択してください</option>
                                <option value="1" {{ old('vege_name') == 1 ? 'selected' : ''}}>枝豆</option>
                                <option value="2" {{ old('vege_name') == 2 ? 'selected' : ''}}>オクラ</option>
                                <option value="3" {{ old('vege_name') == 3 ? 'selected' : ''}}>カボチャ</option>
                                <option value="4" {{ old('vege_name') == 4 ? 'selected' : ''}}>きゅうり</option>
                                <option value="5" {{ old('vege_name') == 5 ? 'selected' : ''}}>ゴーヤ</option>
                                <option value="6" {{ old('vege_name') == 6 ? 'selected' : ''}}>さやいんげん</option>
                                <option value="7" {{ old('vege_name') == 7 ? 'selected' : ''}}>さやえんどう</option>
                                <option value="8" {{ old('vege_name') == 8 ? 'selected' : ''}}>ズッキーニ</option>
                                <option value="9" {{ old('vege_name') == 9 ? 'selected' : ''}}>そら豆</option>
                                <option value="10" {{ old('vege_name') == 10 ? 'selected' : ''}}>とうもろこし</option>
                                <option value="11" {{ old('vege_name') == 11 ? 'selected' : ''}}>トマト</option>
                                <option value="12" {{ old('vege_name') == 12 ? 'selected' : ''}}>なす</option>
                                <option value="13" {{ old('vege_name') == 13 ? 'selected' : ''}}>ピーマン</option>
                                <option value="14" {{ old('vege_name') == 14 ? 'selected' : ''}}>もやし</option>
                                <option value="15" {{ old('vege_name') == 15 ? 'selected' : ''}}>アスパラガス</option>
                                <option value="16" {{ old('vege_name') == 16 ? 'selected' : ''}}>カリフラワー</option>
                                <option value="17" {{ old('vege_name') == 17 ? 'selected' : ''}}>キャベツ</option>
                                <option value="18" {{ old('vege_name') == 18 ? 'selected' : ''}}>小松菜</option>
                                <option value="19" {{ old('vege_name') == 19 ? 'selected' : ''}}>春菊</option>
                                <option value="20" {{ old('vege_name') == 20 ? 'selected' : ''}}>セロリ</option>
                                <option value="21" {{ old('vege_name') == 21 ? 'selected' : ''}}>玉ねぎ</option>
                                <option value="22" {{ old('vege_name') == 22 ? 'selected' : ''}}>ちんげん菜</option>
                                <option value="23" {{ old('vege_name') == 23 ? 'selected' : ''}}>にら</option>
                                <option value="24" {{ old('vege_name') == 24 ? 'selected' : ''}}>ニンニク</option>
                                <option value="25" {{ old('vege_name') == 25 ? 'selected' : ''}}>長ネギ</option>
                                <option value="26" {{ old('vege_name') == 26 ? 'selected' : ''}}>青ネギ</option>
                                <option value="27" {{ old('vege_name') == 27 ? 'selected' : ''}}>白菜</option>
                                <option value="28" {{ old('vege_name') == 28 ? 'selected' : ''}}>ブロッコリー</option>
                                <option value="29" {{ old('vege_name') == 29 ? 'selected' : ''}}>ほうれん草</option>
                                <option value="30" {{ old('vege_name') == 30 ? 'selected' : ''}}>水菜</option>
                                <option value="31" {{ old('vege_name') == 31 ? 'selected' : ''}}>モロヘイヤ</option>
                                <option value="32" {{ old('vege_name') == 32 ? 'selected' : ''}}>レタス</option>
                                <option value="33" {{ old('vege_name') == 33 ? 'selected' : ''}}>かぶ</option>
                                <option value="34" {{ old('vege_name') == 34 ? 'selected' : ''}}>ごぼう</option>
                                <option value="35" {{ old('vege_name') == 35 ? 'selected' : ''}}>さつまいも</option>
                                <option value="36" {{ old('vege_name') == 36 ? 'selected' : ''}}>里芋</option>
                                <option value="37" {{ old('vege_name') == 37 ? 'selected' : ''}}>じゃがいも</option>
                                <option value="38" {{ old('vege_name') == 38 ? 'selected' : ''}}>生姜</option>
                                <option value="39" {{ old('vege_name') == 39 ? 'selected' : ''}}>大根</option>
                                <option value="40" {{ old('vege_name') == 40 ? 'selected' : ''}}>長芋</option>
                                <option value="41" {{ old('vege_name') == 41 ? 'selected' : ''}}>にんじん</option>
                                <option value="42" {{ old('vege_name') == 42 ? 'selected' : ''}}>レンコン</option>
                                </select>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="date_purchase" class="leading-7 text-sm text-gray-600">購入日</label>
                                <input type="date" value="{{ old('date_purchase') }}" id="date_purchase" name="date_purchase" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">保存方法</label><br>
                                <input type="radio" name="method" value="0" {{ old('method') == 0 ? 'checked' : ''}}>冷凍</input>
                                <input type="radio" name="method" value="1" {{ old('method') == 1 ? 'checked' : ''}}>冷蔵</input>
                                <input type="radio" name="method" value="2" {{ old('method') == 2 ? 'checked' : ''}}>常温</input>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="quantity" class="leading-7 text-sm text-gray-600">個数</label>
                                <select name="quantity" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">購入した個数を選択してください</option>
                                <option value="1" {{ old('quantity') == 1 ? 'selected' : ''}}>1</option>
                                <option value="2" {{ old('quantity') == 2 ? 'selected' : ''}}>2</option>
                                <option value="3" {{ old('quantity') == 3 ? 'selected' : ''}}>3</option>
                                <option value="4" {{ old('quantity') == 4 ? 'selected' : ''}}>4</option>
                                <option value="5" {{ old('quantity') == 5 ? 'selected' : ''}}>5</option>
                                <option value="6" {{ old('quantity') == 6 ? 'selected' : ''}}>6</option>
                                <option value="7" {{ old('quantity') == 7 ? 'selected' : ''}}>7</option>
                                <option value="8" {{ old('quantity') == 8 ? 'selected' : ''}}>8</option>
                                <option value="9" {{ old('quantity') == 9 ? 'selected' : ''}}>9</option>
                                <option value="10" {{ old('quantity') == 10 ? 'selected' : ''}}>10</option>
                                <option value="11" {{ old('quantity') == 11 ? 'selected' : ''}}>11</option>
                                <option value="12" {{ old('quantity') == 12 ? 'selected' : ''}}>12</option>
                                <option value="13" {{ old('quantity') == 13 ? 'selected' : ''}}>13</option>
                                <option value="14" {{ old('quantity') == 14 ? 'selected' : ''}}>14</option>
                                <option value="15" {{ old('quantity') == 15 ? 'selected' : ''}}>15</option>
                                <option value="16" {{ old('quantity') == 16 ? 'selected' : ''}}>16</option>
                                <option value="17" {{ old('quantity') == 17 ? 'selected' : ''}}>17</option>
                                <option value="18" {{ old('quantity') == 18 ? 'selected' : ''}}>18</option>
                                <option value="19" {{ old('quantity') == 19 ? 'selected' : ''}}>19</option>
                                <option value="20" {{ old('quantity') == 20 ? 'selected' : ''}}>20</option>
                                <option value="21" {{ old('quantity') == 21 ? 'selected' : ''}}>21</option>
                                <option value="22" {{ old('quantity') == 22 ? 'selected' : ''}}>22</option>
                                <option value="23" {{ old('quantity') == 23 ? 'selected' : ''}}>23</option>
                                <option value="24" {{ old('quantity') == 24 ? 'selected' : ''}}>24</option>
                                <option value="25" {{ old('quantity') == 25 ? 'selected' : ''}}>25</option>
                                <option value="26" {{ old('quantity') == 26 ? 'selected' : ''}}>26</option>
                                <option value="27" {{ old('quantity') == 27 ? 'selected' : ''}}>27</option>
                                <option value="28" {{ old('quantity') == 28 ? 'selected' : ''}}>28</option>
                                <option value="29" {{ old('quantity') == 29 ? 'selected' : ''}}>29</option>
                                <option value="30" {{ old('quantity') == 30 ? 'selected' : ''}}>30</option>
                                <option value="31" {{ old('quantity') == 31 ? 'selected' : ''}}>31</option>
                                <option value="32" {{ old('quantity') == 32 ? 'selected' : ''}}>32</option>
                                <option value="33" {{ old('quantity') == 33 ? 'selected' : ''}}>33</option>
                                <option value="34" {{ old('quantity') == 34 ? 'selected' : ''}}>34</option>
                                <option value="35" {{ old('quantity') == 35 ? 'selected' : ''}}>35</option>
                                <option value="36" {{ old('quantity') == 36 ? 'selected' : ''}}>36</option>
                                <option value="37" {{ old('quantity') == 37 ? 'selected' : ''}}>37</option>
                                <option value="38" {{ old('quantity') == 38 ? 'selected' : ''}}>38</option>
                                <option value="39" {{ old('quantity') == 39 ? 'selected' : ''}}>39</option>
                                <option value="40" {{ old('quantity') == 40 ? 'selected' : ''}}>40</option>
                                <option value="41" {{ old('quantity') == 41 ? 'selected' : ''}}>41</option>
                                <option value="42" {{ old('quantity') == 42 ? 'selected' : ''}}>42</option>
                                <option value="43" {{ old('quantity') == 43 ? 'selected' : ''}}>43</option>
                                <option value="44" {{ old('quantity') == 44 ? 'selected' : ''}}>44</option>
                                <option value="45" {{ old('quantity') == 45 ? 'selected' : ''}}>45</option>
                                <option value="46" {{ old('quantity') == 46 ? 'selected' : ''}}>46</option>
                                <option value="47" {{ old('quantity') == 47 ? 'selected' : ''}}>47</option>
                                <option value="48" {{ old('quantity') == 48 ? 'selected' : ''}}>48</option>
                                <option value="49" {{ old('quantity') == 49 ? 'selected' : ''}}>49</option>
                                <option value="50" {{ old('quantity') == 50 ? 'selected' : ''}}>50</option>
                                </select></div>
                            </div>
                            <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">