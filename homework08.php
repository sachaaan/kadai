//controllerとRoutingについてわからないことを書きだしてメンターに質問する
クライアントからリクエストをコントローラーが受けとったあと、
モデル経由でデータベースからデータを取得してビューに渡し、動的生成されたHTMLをクライアントに渡す
というこの一連の流れのことをRoutingというのでしょうか？

//controllerの役割について、説明する
MVCモデルの中のControllerであり、クライアントからのリクエストをうけるための、
クライアント、モデル、ビューの橋渡しの役割を担っている。


//controllerとRoutingの役割について、説明する
クライアントからきたリクエストURLに応じて、あらかじめ設定した処理を行う。
このURLと処理を紐づけることをRoutingという。

//artisanを使って、admin/ProfileControllerを作成する


//admin/ProfileControllerに、add,create,edit,upateそれぞれのActionを追加する
