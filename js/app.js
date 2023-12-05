jQuery(function(){
  //.nav_toggle()をクリックすると後続の{}内の記述を実行する
  jQuery('.nav_toggle, #mask').on('click', function () {
    //ボタンをクリックしたことで変化させたい要素のクラス名を表示
    //.nav_toggle（ボタン）と.nav（メニューリスト）に、showというクラスを付与する
    jQuery('.nav_toggle, .site-menu, #mask').toggleClass('show');
  });
});