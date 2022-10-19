<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('編集') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative">
                    <form method="POST" action="{{route('vege_register.update', ['vege_id' => $veges -> vege_id])}}">
                        @csrf
                    <div class="container px-5 py-24 mx-auto">
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="vege_name" class="leading-7 text-sm text-gray-600">野菜の名前</label>
                                <select name="vege_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">野菜を選択してください</option>
                                <option value="1" @if($veges->vege_name === 1) selected @endif>枝豆</option>
                                <option value="2" @if($veges->vege_name === 2) selected @endif>オクラ</option>
                                <option value="3" @if($veges->vege_name === 3) selected @endif>カボチャ</option>
                                <option value="4" @if($veges->vege_name === 4) selected @endif>きゅうり</option>
                                <option value="5" @if($veges->vege_name === 5) selected @endif>ゴーヤ</option>
                                <option value="6" @if($veges->vege_name === 6) selected @endif>さやいんげん</option>
                                <option value="7" @if($veges->vege_name === 7) selected @endif>さやえんどう</option>
                                <option value="8" @if($veges->vege_name === 8) selected @endif>ズッキーニ</option>
                                <option value="9" @if($veges->vege_name === 9) selected @endif>そら豆</option>
                                <option value="10" @if($veges->vege_name === 10) selected @endif>とうもろこし</option>
                                <option value="11" @if($veges->vege_name === 11) selected @endif>トマト</option>
                                <option value="12" @if($veges->vege_name === 12) selected @endif>なす</option>
                                <option value="13" @if($veges->vege_name === 13) selected @endif>ピーマン</option>
                                <option value="14" @if($veges->vege_name === 14) selected @endif>もやし</option>
                                <option value="15" @if($veges->vege_name === 15) selected @endif>アスパラガス</option>
                                <option value="16" @if($veges->vege_name === 16) selected @endif>カリフラワー</option>
                                <option value="17" @if($veges->vege_name === 17) selected @endif>キャベツ</option>
                                <option value="18" @if($veges->vege_name === 18) selected @endif>小松菜</option>
                                <option value="19" @if($veges->vege_name === 19) selected @endif>春菊</option>
                                <option value="20" @if($veges->vege_name === 20) selected @endif>セロリ</option>
                                <option value="21" @if($veges->vege_name === 21) selected @endif>玉ねぎ</option>
                                <option value="22" @if($veges->vege_name === 22) selected @endif>ちんげん菜</option>
                                <option value="23" @if($veges->vege_name === 23) selected @endif>にら</option>
                                <option value="24" @if($veges->vege_name === 24) selected @endif>ニンニク</option>
                                <option value="25" @if($veges->vege_name === 25) selected @endif>長ネギ</option>
                                <option value="26" @if($veges->vege_name === 26) selected @endif>青ネギ</option>
                                <option value="27" @if($veges->vege_name === 27) selected @endif>白菜</option>
                                <option value="28" @if($veges->vege_name === 28) selected @endif>ブロッコリー</option>
                                <option value="29" @if($veges->vege_name === 29) selected @endif>ほうれん草</option>
                                <option value="30" @if($veges->vege_name === 30) selected @endif>水菜</option>
                                <option value="31" @if($veges->vege_name === 31) selected @endif>モロヘイヤ</option>
                                <option value="32" @if($veges->vege_name === 32) selected @endif>レタス</option>
                                <option value="33" @if($veges->vege_name === 33) selected @endif>かぶ</option>
                                <option value="34" @if($veges->vege_name === 34) selected @endif>ごぼう</option>
                                <option value="35" @if($veges->vege_name === 35) selected @endif>さつまいも</option>
                                <option value="36" @if($veges->vege_name === 36) selected @endif>里芋</option>
                                <option value="37" @if($veges->vege_name === 37) selected @endif>じゃがいも</option>
                                <option value="38" @if($veges->vege_name === 38) selected @endif>生姜</option>
                                <option value="39" @if($veges->vege_name === 39) selected @endif>大根</option>
                                <option value="40" @if($veges->vege_name === 40) selected @endif>長芋</option>
                                <option value="41" @if($veges->vege_name === 41) selected @endif>にんじん</option>
                                <option value="42" @if($veges->vege_name === 42) selected @endif>レンコン</option>
                                </select>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="date_purchase" class="leading-7 text-sm text-gray-600">購入日</label>
                                <input type="date" id="date_purchase" name="date_purchase" value="{{ $veges->date_purchase }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label class="leading-7 text-sm text-gray-600">保存方法</label><br>
                                <input type="radio" name="method" value="0" @if($veges->method === 0) checked @endif>冷凍</input>
                                <input type="radio" name="method" value="1" @if($veges->method === 1) checked @endif>冷蔵</input>
                                <input type="radio" name="method" value="2" @if($veges->method === 2) checked @endif>常温</input>
                            </div>
                            </div>
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="quantity" class="leading-7 text-sm text-gray-600">個数</label>
                                <select name="quantity" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">購入した個数を選択してください</option>
                                <option value="1" @if($veges->vege_name === 1) selected @endif>1</option>
                                <option value="2"@if($veges->vege_name === 2) selected @endif>2</option>
                                <option value="3"@if($veges->vege_name === 3) selected @endif>3</option>
                                <option value="4"@if($veges->vege_name === 4) selected @endif>4</option>
                                <option value="5"@if($veges->vege_name === 5) selected @endif>5</option>
                                <option value="6"@if($veges->vege_name === 6) selected @endif>6</option>
                                <option value="7"@if($veges->vege_name === 7) selected @endif>7</option>
                                <option value="8"@if($veges->vege_name === 8) selected @endif>8</option>
                                <option value="9"@if($veges->vege_name === 9) selected @endif>9</option>
                                <option value="10"@if($veges->vege_name === 10) selected @endif>10</option>
                                <option value="11"@if($veges->vege_name === 11) selected @endif>11</option>
                                <option value="12"@if($veges->vege_name === 12) selected @endif>12</option>
                                <option value="13"@if($veges->vege_name === 13) selected @endif>13</option>
                                <option value="14"@if($veges->vege_name === 14) selected @endif>14</option>
                                <option value="15"@if($veges->vege_name === 15) selected @endif>15</option>
                                <option value="16"@if($veges->vege_name === 16) selected @endif>16</option>
                                <option value="17"@if($veges->vege_name === 17) selected @endif>17</option>
                                <option value="18"@if($veges->vege_name === 18) selected @endif>18</option>
                                <option value="19"@if($veges->vege_name === 19) selected @endif>19</option>
                                <option value="20"@if($veges->vege_name === 20) selected @endif>20</option>
                                <option value="21"@if($veges->vege_name === 21) selected @endif>21</option>
                                <option value="22"@if($veges->vege_name === 22) selected @endif>22</option>
                                <option value="23"@if($veges->vege_name === 23) selected @endif>23</option>
                                <option value="24"@if($veges->vege_name === 24) selected @endif>24</option>
                                <option value="25"@if($veges->vege_name === 25) selected @endif>25</option>
                                <option value="26"@if($veges->vege_name === 26) selected @endif>26</option>
                                <option value="27"@if($veges->vege_name === 27) selected @endif>27</option>
                                <option value="28"@if($veges->vege_name === 28) selected @endif>28</option>
                                <option value="29"@if($veges->vege_name === 29) selected @endif>29</option>
                                <option value="30"@if($veges->vege_name === 30) selected @endif>30</option>
                                <option value="31"@if($veges->vege_name === 31) selected @endif>31</option>
                                <option value="32"@if($veges->vege_name === 32) selected @endif>32</option>
                                <option value="33"@if($veges->vege_name === 33) selected @endif>33</option>
                                <option value="34"@if($veges->vege_name === 34) selected @endif>34</option>
                                <option value="35"@if($veges->vege_name === 35) selected @endif>35</option>
                                <option value="36"@if($veges->vege_name === 36) selected @endif>36</option>
                                <option value="37"@if($veges->vege_name === 37) selected @endif>37</option>
                                <option value="38"@if($veges->vege_name === 38) selected @endif>38</option>
                                <option value="39"@if($veges->vege_name === 39) selected @endif>39</option>
                                <option value="40"@if($veges->vege_name === 40) selected @endif>40</option>
                                <option value="41"@if($veges->vege_name === 41) selected @endif>41</option>
                                <option value="42"@if($veges->vege_name === 42) selected @endif>42</option>
                                <option value="43"@if($veges->vege_name === 43) selected @endif>43</option>
                                <option value="44"@if($veges->vege_name === 44) selected @endif>44</option>
                                <option value="45"@if($veges->vege_name === 45) selected @endif>45</option>
                                <option value="46"@if($veges->vege_name === 46) selected @endif>46</option>
                                <option value="47"@if($veges->vege_name === 47) selected @endif>47</option>
                                <option value="48"@if($veges->vege_name === 48) selected @endif>48</option>
                                <option value="49"@if($veges->vege_name === 49) selected @endif>49</option>
                                <option value="50"@if($veges->vege_name === 50) selected @endif>50</option>
                                </select></div>
                            </div>
                            
                            <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
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