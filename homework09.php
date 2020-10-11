//URLとControllerやActionを紐づける機能を何といいますか？
Routing

//group化することのメリット
大きなサイトの場合、沢山のページが必要になるのでその際にわかりやすい

//「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerの
bbbというAction に渡すRoutingの設定」を書いてみてください。

Route::group(['prefix' => 'XXX'], function() {
    Route::get('XXX','AAAController@bbb');
});
