//Viewは何をするところでしょうか。簡潔に説明してみてください。
Controllerの指示によってアクセスしてきたユーザーのブラウザに表示するデータを作成するところ

//プログラマーがHTMLを書かずにPHPなどのプログラミング言語やフレームワークを使う必要があるのはどういった理由でしょうか。
ユーザー名などを表示したい場合に、Model経由でデータベースからデータを取得して
それをhtmlファイルに記述して渡す必要があるため。

//応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。
add Action と edit Action を描画するには、それぞれどこのディレクトリに何というbladeファイルを設置すれば良いでしょうか。

 public function add()
  {
      return view('admin.profile.create');
  }
  
 admin/profileディレクトリ配下のcreate.blade.phpというファイルを呼び出すという意味なので
 resources/view/admin/profileディレクトリ配下にcreate.blade.phpファイルを作成する
 
 
 
  public function edit()
  {
      return view('admin.profile.edit');
  }
  
 
 admin/profileディレクトリ配下のedit.blade.phpというファイルを呼び出すという意味なので
 resources/view/admin/profileディレクトリ配下にedit.blade.phpファイルを作成する
 
 
 //【応用】 3. の答えを実際に作成してみましょう。また、作成したbladeファイルにhtmlで記述して装飾してみましょう。
 