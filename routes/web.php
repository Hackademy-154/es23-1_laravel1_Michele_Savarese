<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Blog di LudoDelta';
    return view('welcome',['title'=> $title]);
});

Route::get('/barzelletta', function () {
    $title = 'Blod di LudoDelta';
    return view('pagina1',['title'=> $title]);
});


Route::get('/i-nostri-giochi', function () {
    $gamelist=[
        [
        'name'=>'Carcassone',
        'gametype'=>'German',
        'players'=>'2 a 8',
        'img'=>'https://res.cloudinary.com/teepublic/image/private/s--wM3586_R--/c_fit,g_north_west,h_920,w_920/co_ffffff,e_outline:41/co_ffffff,e_outline:inner_fill:1/co_bbbbbb,e_outline:3:1000/c_mpad,g_center,h_1260,w_1260/b_rgb:eeeeee/c_limit,f_auto,h_630,q_auto:good:420,w_630/v1682015088/production/designs/43970027_0.jpg'

    ],
    [
        'name'=>'Avalon',
        'gametype'=>'Deduzione',
        'players'=>'5 a 10',
        'img'=>'https://www.goblins.net/files/styles/inline_half/public/resistance-avalon.jpg?itok=yWGq3URP'

    ],
    [
        'name'=>'Magic - The Gathering',
        'gametype'=>'Tgc',
        'players'=>'2 a 6',
        'img'=>'https://m.media-amazon.com/images/I/81dHeQ-w5IL._AC_UF1000,1000_QL80_.jpg'

    ],
    [
        'name'=>'Scotland Yard',
        'gametype'=>'American',
        'players'=>'2 a 6',
        'img'=>'https://steamusercontent-a.akamaihd.net/ugc/529511938020750793/6CBBF9D1DA001CD4EEAEBE0F68215788991634B0/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false'

    ],
];
    return view('game',['games'=>$gamelist]);});
