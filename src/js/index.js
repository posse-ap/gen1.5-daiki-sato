$(function () {
$('.upload__modal--open').on('click', function () {
    $('.upload__modal').fadeIn("1500");
    // モーダルが開いたら、bodyにfixedを付与
    document.body.style.position = 'fixed';
    document.body.style.top = `-${window.scrollY}px`;
    return false;
});
$('.upload__modal--close').on('click', function () {
    $('.upload__modal').fadeOut("1500");
    // モーダルが閉じられた時
    const top = document.body.style.top;
    document.body.style.position = '';
    document.body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    return false;
});
});


/*---------------------------------------------
棒グラフ
----------------------------------------------*/
{
    // よく使うカラーを定義しておく
    const WHITE = "#fff"
    const CHART_COLOR_BLUE_1 = "#0f71bc"
    const CHART_COLOR_BLUE_2= "#3ccfff"



        /**
     * Ajax通信メソッド
     * @param type  : HTTP通信の種類
     * @param url   : リクエスト送信先のURL
     * @param data  : サーバに送信する値
     */
        // $.ajax({
        // // type: "POST",
        // // url: "learning__chart.php",
        // // dataType: "json",
        // }).done(function(data, dataType) {
        // // successのブロック内は、Ajax通信が成功した場合に呼び出される

        // // 結果が0件の場合
        // if(data == null) alert('データが0件でした');

        // // 返ってきたデータの表示
        // var $content = $('#content');
        // for (var i =0; i<data.length; i++) {
        //     $content.append("<tr><td>" + data[i].id + "</td><td>" + data[i].name + "</td><td><a href ='test'>" +  data[i].tel + "</a></td></tr>");
        // }
        // }).fail(function(XMLHttpRequest, textStatus, errorThrown) {
        // // 通常はここでtextStatusやerrorThrownの値を見て処理を切り分けるか、単純に通信に失敗した際の処理を記述します。

        // // this;
        // // thisは他のコールバック関数同様にAJAX通信時のオプションを示します。

        // // エラーメッセージの表示
        // alert('Error : ' + errorThrown);
        // });


        // async function post_chart() {
        //     await $.ajax({
        //         type: "POST",
        //         url: "post_graph_data.php",
        //         dataType: "json",
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //         success: learning_time => {
        //             // if(data == null) alert('データが0件でした');
        //             // document.write(learning_time);
        //             console.log($learning_time);
        //             // 返ってきたデータの表示
        //             // var $content = $('#content');
        //         },
        //         error: () => {
        //             console('error');
        //         }
        //     })
        // }







        /* TODO:データベースからデータを引っ張って来る
        ajaxでphpファイルからデータを送る。
        */

        $.ajax({	
            url:"api/post_graph_data.php", // 通信先のURL
            type:"GET",		// 使用するHTTPメソッド
            // data:$("#form1").serialize(), // 送信するデータ
            dataType:"json", // 応答のデータの種類 
                            // (xml/html/script/json/jsonp/text)

            // 2. doneは、通信に成功した時に実行される
            //  引数のdata1は、通信で取得したデータ
            //  引数のtextStatusは、通信結果のステータス
            //  引数のjqXHRは、XMLHttpRequestオブジェクト
        }).done(function(data) {
            console.log(data);
                    
    
            // 6. failは、通信に失敗した時に実行される
        }).fail(function(jqXHR, textStatus, errorThrown ) {

            // 7. alwaysは、成功/失敗に関わらず実行される
        }).always(function(){

        });
    




    const createStudyTimeChart = () => {
        // 学習時間
        // 2次元配列をDataTableに変更する
        // 参考: https://developers.google.com/chart/interactive/docs/reference#arraytodatatable
        const data = google.visualization.arrayToDataTable([
            // roleについて https://developers.google.com/chart/interactive/docs/roles
            ["Date", "Hour", { role: "style" } ],
            ["", 2, CHART_COLOR_BLUE_1],
            ["2", 8, CHART_COLOR_BLUE_2],
            ["" , 1, CHART_COLOR_BLUE_1],
            ["4", 2, CHART_COLOR_BLUE_2],
            ["" , 3, CHART_COLOR_BLUE_1],
            ["6", 4, CHART_COLOR_BLUE_2],
            ["" , 5, CHART_COLOR_BLUE_1],
            ["8", 6, CHART_COLOR_BLUE_2],
            ["" , 7, CHART_COLOR_BLUE_1],
            ["10", 1, CHART_COLOR_BLUE_2],
            [""  , 2, CHART_COLOR_BLUE_1],
            ["12", 3, CHART_COLOR_BLUE_2],
            [""  , 4, CHART_COLOR_BLUE_1],
            ["14", 7, CHART_COLOR_BLUE_2],
            [""  , 2, CHART_COLOR_BLUE_1],
            ["16", 7, CHART_COLOR_BLUE_2],
            [""  , 4, CHART_COLOR_BLUE_1],
            ["18", 3, CHART_COLOR_BLUE_2],
            [""  , 3.2, CHART_COLOR_BLUE_1],
            ["20", 3.5, CHART_COLOR_BLUE_2],
            [""  , 3.2, CHART_COLOR_BLUE_1],
            ["22", 3.5, CHART_COLOR_BLUE_2],
            [""  , 3.2, CHART_COLOR_BLUE_1],
            ["24", 3.5, CHART_COLOR_BLUE_2],
            [""  , 3.2, CHART_COLOR_BLUE_1],
            ["26", 3.5, CHART_COLOR_BLUE_2],
            [""  , 3.2, CHART_COLOR_BLUE_1],
            ["28", 6.5, CHART_COLOR_BLUE_2],
            ["", 8, CHART_COLOR_BLUE_1],
            ["30", 2, CHART_COLOR_BLUE_2],
        ]);
        // DataViewを作成する
        const view = new google.visualization.DataView(data);

        const pc_options = {
            height: '400', // 高さを指定
            bar: { groupWidth: "50%" }, // バーの太さ
            legend: { position: "none" }, // legendを非表示
            vAxis:{
                format:'0h', // 縦軸のメモリ基準
                gridlines:{
                    color: WHITE // 罫線の色
                }
            }
        };
        // DOMで表示場所を指定
        const pcChart = new google.visualization.ColumnChart(document.getElementById("pc_columnchart_values"));
        // チャートを描写
        pcChart.draw(view, pc_options);

        const sp_options = {
            height: '200', // 高さを指定
            bar: {groupWidth: "50%"}, // バーの太さ
            legend: { position: "none" }, // legendを非表示
            vAxis:{
                format:'0h', // 縦軸のメモリ基準
                gridlines:{
                    color:WHITE // 罫線の色
                }
            }
        };
        // DOMで表示場所を指定
        const spChart = new google.visualization.ColumnChart(document.getElementById("sp_columnchart_values"));
        // チャートを描写
        spChart.draw(view, sp_options);
    }

    const createLanguagesChart = () => {
        // 学習言語
        // 2次元配列をDataTableに変更する
        const data = google.visualization.arrayToDataTable([
            ['Language', 'Hour'],
            ['HTML', 9],
            ['CSS', 2],
            ['JavaScript', 6],
            ['PHP', 2],
            ['Laravel', 7],
            ['SQL', 5],
            ['SHELL', 4],
            ['情報システム基礎知識(その他)', 1],
        ]);

        const options = {
            legend:{
                position:"none", // legendを非表示
            },
            // 中心の空白部分 0~1で指定
            pieHole: 0.5,
            // チャートの部分ごとにカラーを指定
            slices: {
                0: { color: '#2222ff' },
                1: { color: '#3344ff' },
                2: { color: '#4466ff' },
                3: { color: '#5588ff' },
                4: { color: '#6699ff' },
                5: { color: '#77aaff' },
                6: { color: '#88ccff' },
                7: { color: '#99ddff' },
                8: { color: '#aaeeff' },
            },
            // チャートサイズ
            chartArea: {
                width: '100%',
                height: '100%'
            }
        };

        // DOMで表示場所を指定
        const chart = new google.visualization.PieChart(document.getElementById('language_piechart'));
        // チャートを描写
        chart.draw(data, options);
    }

    const createContentsChart = () => {
        // 学習コンテンツ
        const data = google.visualization.arrayToDataTable([
            ['Contents', 'Hour'],
            ['ドットインストール', 9],
            ['N予備校', 4],
            ['POSSE課題', 6],
        ]);

        const options = {
            legend:{
                position:"none",
            },
            // 中心の空白部分 0~1で指定
            pieHole:0.5,
            // チャートの部分ごとにカラーを指定
            slices: {
                0: { color: '#2222ff' },
                1: { color: '#66aaff' },
                2: { color: '#aaddff' },
            },
            // チャートサイズ
            chartArea: {
                width: '100%',
                height: '100%',
            }
        };

        // DOMで表示場所を指定
        const chart = new google.visualization.PieChart(document.getElementById('contents_piechart'));
        // チャートを描写
        chart.draw(data, options);
    }

    const drawChart = () => {
        // 学習時間を表示
        createStudyTimeChart()

        // 学習言語を表示
        createLanguagesChart()

        // 学習コンテンツを表示
        createContentsChart()
    }

    // パッケージのロード
    // current: Google chart の latest versionを表す
    // corechart: chart種類(bar, column, line, area, stepped area, bubble, pie, donut, combo, candlestick, histogram, scatter)
    // 参照: https://developers.google.com/chart/interactive/docs/basic_load_libs
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // resize時に、チャートを作り直し、windowサイズに合わせたチャートをレンダリングする
    // drawChartが発火しすぎないようにthrottoleで0.25秒間の猶予を設けてる
    window.addEventListener('resize', $.throttle(250, drawChart))
}






