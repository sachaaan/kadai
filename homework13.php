//GETメソッドとPOSTメソッドについて調べ、どのような違いがあるか説明してください。
GETメソッドは指定したリソースの表現を転送するようにリクエストするメソッド
つまり何か情報を検索したり取得するために使うためのメソッド
基本的に読み取り専用な機能に対して使うべき
GETは単純にWebページの表示だけを行うため、サーバ内の情報そのものは変化しません。

POSTメソッドは主に登録処理や更新処理などの、書き込みがありリソースが更新される可能性のある処理に対して使う


//GET/POSTメソッド以外にどのようなメソッドがあるか、またどのように使われるかを説明してください。
PUT リソースの更新、リソースの作成
DELETE リソースの削除
HEAD リソースのヘッダ (メタデータの取得)
