<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <div class="contentBlock block">
            <div class="banners">
                <div id="wether">
                    <label style="font-size: 30px">{{ wether }}</label>
                    <img v-bind:src='wether_image'></img>
                    <a id="test" href="https://www.jma.go.jp/jp/yoho/" :target="is_running ? '_blank' : null">詳しい天気予報へ</a>
                </div>
                <div id="contentList" v-cloak>
                    {{ message }}
                </div>
                <div id="app">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-2 col-form-label">Area</label>
                        <div class="col-sm-4">
                            <select class="form-control" v-model="selected_area" v-on:change="_set_area">
                                <option value="">エリアを選択</option>
                                <option v-for="(area, index) in areas" v-bind:value="index">{{area}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center" v-if="selected_prefs.length > 0">
                        <label class="col-sm-2 col-form-label">Prefecture</label>
                        <div class="col-sm-4">
                            <select class="form-control" v-model="selected_pref">
                                <option value="">都道府県を選択</option>
                                <option v-for="(prefs, index) in selected_prefs">{{prefs}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h2>コンテンツ一覧</h2>
                <div id="img_unit">
                    <div class="Photo" v-for="Photo in Photos">
                        <img :src="Photo.path">
                        <div class="inner">
                            <p>{{Photo.caption}}<span>{{Photo.name}}</span></p>
                        </div>
                    </div>
                </div>
                <ul>
                    <div class="imgWrapTop">
                        <div class="imgWrapRec">
                            <li style="float: right;"><a href="<?php echo get_permalink(26); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/home/appList.png"
                                        height="288" width="720" alt="募集要項"></a></li>
                        </div>
                        <div class="imgWrapInt">
                            <li><a href="<?php echo get_permalink(104); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/home/interview.png"
                                        height="303" width="994" alt="社員インタビュー"></a></li>
                        </div>
                        <div class="imgWrapMes">
                            <li style="float: left;"><a href="<?php echo get_permalink(104); ?>"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/home/message.png"
                                        height="333" width="782" alt="採用メッセージ"></a></li>
                        </div>
                    </div>
                    <!--.imgWrapTop-->
                </ul>
            </div>
        </div><!-- /.contentBlock -->
    </div><!-- /.mainContents -->
</div><!-- /.contentsWrap -->

<script>
var data = [{
        "path": "http://localhost:8000/wp-content/themes/mypage/img/img01.jpg",
        "name": "sansaisan",
        "caption": "こっちは貫禄ありすぎ",
        "date": "sansaisan",
        "memo": "こっちは貫禄ありすぎ"
    },
    {
        "path": "http://localhost:8000/wp-content/themes/mypage/img/img02.jpg",
        "name": "yukky_13dream",
        "caption": "年明け富士山",
        "date": "yukky_13dream",
        "memo": "年明け富士山"
    },
    {
        "path": "http://localhost:8000/wp-content/themes/mypage/img/img03.png",
        "name": "maako",
        "caption": "空と大地の境界線って、どのあたり？",
        "date": "maako",
        "memo": "空と大地の境界線って、どのあたり？"
    }
]

new Vue({
    el: '#wether',
    data: {
        wether: "Today's weather forecast",
        wether_info: {},
        //wether_image: this.wether_info.data.forecasts[0].image.url
        wether_image: null,
    },
    mounted: function() {
        var self = this;
        axios
        .get('https://weather.tsukumijima.net/api/forecast?city=400040')
        .then(response => {
            this.wether_info = response;
            this.wether_image = this.wether_info.data.forecasts[0].image.url;
            console.log(this.wether_info)
        })
    },
})
new Vue({
    el: '#test',
    data: {
        is_run: true,
    },
    computed: {
        is_running: function() {
            return false;
        }
    }
})
new Vue({
    el: '#contentList',
    data: {
        message: 'コンテンツ一覧'
    }
});

new Vue({
    el: '#img_unit',
    data: {
        Photos: []
    },
    created: function() {
        var self = this;
        self.Photos = data;
    }
});

new Vue({
    el: '#app',
    data: {
        selected_area: "",
        selected_pref: "",
        selected_prefs: [],
        areas: [
            "北海道・東北",
            "関東",
            "中部",
            "近畿",
            "中国・四国",
            "九州・沖縄"
        ],
        pref: [
            [
                "北海道",
                "青森県",
                "岩手県",
                "宮城県",
                "秋田県",
                "山形県",
                "福島県"
            ],
            [
                "茨城県",
                "栃木県",
                "群馬県",
                "埼玉県",
                "東京都",
                "千葉県",
                "神奈川県"
            ],
            [
                "新潟県",
                "長野県",
                "山梨県",
                "富山県",
                "石川県",
                "福井県",
                "岐阜県",
                "静岡県",
                "愛知県",
            ],
            [
                "滋賀県",
                "京都府",
                "大阪府",
                "奈良県",
                "兵庫県",
                "和歌山県",
                "三重県"
            ],
            [
                "鳥取県",
                "島根県",
                "岡山県",
                "広島県",
                "山口県",
                "徳島県",
                "香川県",
                "愛媛県",
                "高知県"
            ],
            [
                "福岡県",
                "佐賀県",
                "長崎県",
                "熊本県",
                "大分県",
                "宮崎県",
                "鹿児島県",
                "沖縄県"
            ]
        ]
    },
    methods: {
        _set_area: function() {
            this.selected_pref = "";
            this.selected_prefs = this.pref[this.selected_area];
        }
    }
});
</script>

<?php get_footer(); ?>