/* スライダー */
$(function () {
  $(".slider").slick({
    dots: false,
    arrows: false,
    slidesToShow: 1,
    centerMode: true, //要素を中央寄せ
    centerPadding: "0", //両サイドの見えている部分のサイズ
    autoplay: true, //自動再生
    autoplaySpeed: 8000,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          centerMode: false,
        },
      },
    ],
  });
});

/* googlemap */
$(function () {
  // 地図表示用メソッド
  function map_initialize() {
    // 地図の座標を設定
    var latlng = new google.maps.LatLng(35.017197474720376, 135.75643970653772);
    // 地図の設定
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: 18, // 地図の拡大率
      center: latlng, // 地図の中心座標
      scrollwheel: false, // マウスホイールでの拡縮を禁止
    });
    // マーカーの設定
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: {
        url: "http://fujiokaoffice.local/wp-content/themes/fujioka-office-theme/img/pin.png", //マーカー画像URL
        scaledSize: new google.maps.Size(170, 192), //マーカーのサイズを縮小
      },
    });
    // マップをグレースケールにする設定
    var mapStyle = [
      {
        stylers: [
          {
            saturation: -100,
          },
        ],
      },
    ];
    var mapType = new google.maps.StyledMapType(mapStyle);
    map.mapTypes.set("GrayScaleMap", mapType);
    map.setMapTypeId("GrayScaleMap");
  }

  // 地図表示用メソッドの呼び出し
  map_initialize();
});

/* googlemap */
$(function () {
  // 地図表示用メソッド
  function map_initialize() {
    // 地図の座標を設定
    var latlng = new google.maps.LatLng(35.017197474720376, 135.75643970653772);
    // 地図の設定
    var map = new google.maps.Map(document.getElementById("about-map"), {
      zoom: 18, // 地図の拡大率
      center: latlng, // 地図の中心座標
      scrollwheel: false, // マウスホイールでの拡縮を禁止
    });
    // マーカーの設定
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: {
        url: "http://fujiokaoffice.local/wp-content/themes/fujioka-office-theme/img/pin.png", //マーカー画像URL
        scaledSize: new google.maps.Size(170, 192), //マーカーのサイズを縮小
      },
    });
    // マップをグレースケールにする設定
    var mapStyle = [
      {
        stylers: [
          {
            saturation: -100,
          },
        ],
      },
    ];
    var mapType = new google.maps.StyledMapType(mapStyle);
    map.mapTypes.set("GrayScaleMap", mapType);
    map.setMapTypeId("GrayScaleMap");
  }

  // 地図表示用メソッドの呼び出し
  map_initialize();
});
