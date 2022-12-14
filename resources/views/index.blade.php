<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MAP UI</title>
</head>

<body>
    <header>
        <div class="flex space-between">
            <div class="izanau">DEMO</div>
            <div class="langage">English.日本語.中文</div>
        </div>
    </header>
    <main>
        <div id="open">mapから選択</div>
        <div id="mask" class="hidden"></div>
        <div id="japan_map" class="hidden">
            <div class="map-header">
                <div class="information">Select Location</div>
                <div id="close">×</div>
            </div>
            <div class="guidance"><span class="reverse">/</span>都道府県を選択してください/</div>
            <div class="map">
                <img class="sp" src="../assets/japan-map-sp.png" alt="日本地図">
                <img class="pc" src="../assets/japan-map-pc.png" alt="日本地図">
                <div class="area_btn area1" data-area="1">Hokkaido</div>
                <div class="area1-line"></div>
                <div class="area_btn area2" data-area="2">Tohoku</div>
                <div class="area_btn area3" data-area="3">Kanto</div>
                <div class="area_btn area4" data-area="4">Chubu</div>
                <div class="area_btn area5" data-area="5">Kinki</div>
                <div class="area_btn area6" data-area="6">Shikoku</div>
                <div class="area_btn area7" data-area="7">Chugoku</div>
                <div class="area_btn area8" data-area="8">Kyusyu/Okinawa</div>
            </div>

            <div id="selected-list"></div>


            <div class="area_overlay"></div>
            <div class="pref_area">
                <div class="pref_list" data-list="1">
                    <div class="area">北海道地区 / Hokkaido Area</div>
                    <div class="grid">
                        <div class="prefecture area-color__hokkaido" data-pref-id="1">北海道</div>
                    </div>
                </div>
                <div class="pref_list" data-list="2">
                    <div class="area">東北地区 / Tohoku Area</div>
                    <div class="grid area-color__tohoku">
                        <div class="prefecture" data-pref-id="2">青森県</div>
                        <div class="prefecture" data-pref-id="3">岩手県</div>
                        <div class="prefecture" data-pref-id="4">宮城県</div>
                        <div class="prefecture" data-pref-id="5">秋田県</div>
                        <div class="prefecture" data-pref-id="6">山形県</div>
                        <div class="prefecture" data-pref-id="7">福島県</div>
                    </div>
                </div>

                <div class="pref_list" data-list="3">
                    <div class="area">関東地区 / Kanto Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="8">茨城県</div>
                        <div class="prefecture" data-pref-id="9">栃木県</div>
                        <div class="prefecture" data-pref-id="10">群馬県</div>
                        <div class="prefecture" data-pref-id="11">埼玉県</div>
                        <div class="prefecture" data-pref-id="12">千葉県</div>
                        <div class="prefecture" data-pref-id="13">東京都</div>
                        <div class="prefecture" data-pref-id="14">神奈川県</div>
                    </div>
                </div>

                <div class="pref_list" data-list="4">
                    <div class="area">中部地区 / Chubu Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="15">新潟県</div>
                        <div class="prefecture" data-pref-id="16">富山県</div>
                        <div class="prefecture" data-pref-id="17">石川県</div>
                        <div class="prefecture" data-pref-id="18">福井県</div>
                        <div class="prefecture" data-pref-id="19">山梨県</div>
                        <div class="prefecture" data-pref-id="20">長野県</div>
                        <div class="prefecture" data-pref-id="21">岐阜県</div>
                        <div class="prefecture" data-pref-id="22">静岡県</div>
                        <div class="prefecture" data-pref-id="23">愛知県</div>
                    </div>
                </div>

                <div class="pref_list" data-list="5">
                    <div class="area">近畿地区 / Kinki Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="24">三重県</div>
                        <div class="prefecture" data-pref-id="25">滋賀県</div>
                        <div class="prefecture" data-pref-id="26">京都府</div>
                        <div class="prefecture" data-pref-id="27">大阪府</div>
                        <div class="prefecture" data-pref-id="28">兵庫県</div>
                        <div class="prefecture" data-pref-id="29">奈良県</div>
                        <div class="prefecture" data-pref-id="30">和歌山県</div>
                    </div>
                </div>

                <div class="pref_list" data-list="6">
                    <div class="area">四国地区 / Shikoku Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="36">徳島県</div>
                        <div class="prefecture" data-pref-id="37">香川県</div>
                        <div class="prefecture" data-pref-id="38">愛媛県</div>
                        <div class="prefecture" data-pref-id="39">高知県</div>
                    </div>
                </div>
                <div class="pref_list" data-list="7">
                    <div class="area">中国地区 / Chugoku Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="31">鳥取県</div>
                        <div class="prefecture" data-pref-id="32">島根県</div>
                        <div class="prefecture" data-pref-id="33">岡山県</div>
                        <div class="prefecture" data-pref-id="34">広島県</div>
                        <div class="prefecture" data-pref-id="35">山口県</div>
                    </div>
                </div>

                <div class="pref_list" data-list="8">
                    <div class="area">九州・沖縄地区 / Kyusyu Okinawa Area</div>
                    <div class="grid">
                        <div class="prefecture" data-pref-id="40">福岡県</div>
                        <div class="prefecture" data-pref-id="41">佐賀県</div>
                        <div class="prefecture" data-pref-id="42">長崎県</div>
                        <div class="prefecture" data-pref-id="43">熊本県</div>
                        <div class="prefecture" data-pref-id="44">大分県</div>
                        <div class="prefecture" data-pref-id="45">宮崎県</div>
                        <div class="prefecture" data-pref-id="46">鹿児島県</div>
                        <div class="prefecture" data-pref-id="47">沖縄県</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="../js/index.js"></script>

</html>
