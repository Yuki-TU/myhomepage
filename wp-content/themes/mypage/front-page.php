<?php get_header(); ?>

<div class="contentsWrap">
    <div class="mainContents">
        <div class="contentBlock block">
            <div class="fixed-bg">
                <?php if( is_home() ): ?>
                <video autoplay loop muted width=100% height="750">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/home/top_video.mp4">
                </video>
                <?php endif; ?>
            </div>
            <div class="banners">
                <div id="weather"> 
                    <div id="selected_place">
                        <div id="message" v-cloak>
                            {{ message }}
                        </div>
                        <div class="form-group row justify-content-center">
                            <label class="col-sm-2 col-form-label">Area</label>
                            <div class="col-sm-4">
                                <select class="form-control" v-model="selected_area" v-on:change="_set_area">
                                    <option value="" disabled>エリアを選択</option>
                                    <option v-for="(area, index) in areas" v-bind:value="index">{{area}}</option>
                                </select>                                
                            </div>
                        </div>
                        <div class="form-group row justify-content-center" v-if="selected_prefs.length > 0">
                            <label class="col-sm-2 col-form-label">Prefecture</label>
                            <div class="col-sm-4">
                                <select class="form-control" v-model="selected_pref" v-on:change="_set_pref">
                                    <option value="">都道府県を選択</option>
                                    <option v-for="(prefs, index) in selected_prefs">{{prefs}}</option>
                                </select>
                            </div>
                        </div>
                        <label style="font-size: 30px">{{ weather }}</label>
                        <img v-bind:src='weather_image' v-show="selected_place" height="70" width=auto alt="天気予報"></img>
                        <a v-show="selected_place" href="https://www.jma.go.jp/jp/yoho/">詳しい天気予報へ</a>
                    </div>
                </div>
                        
                <h2>コンテンツ一覧</h2>
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
                    </div><!--.imgWrapTop-->
                </ul>
            </div><!-- /.banners -->
        </div><!-- /.contentBlock -->
    </div><!-- /.mainContents -->
</div><!-- /.contentsWrap -->

<script>
new Vue({
    el: '#weather',
    data: {
        weather: "Today's weather forecast",
        weather_info: {},
        weather_image: null,
        weather_url: "",
        selected_area: "",
        selected_pref: "",
        selected_prefs: [],
        message: "場所の選択してください。",
        selected_place: false,
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
        ],
        weather_code: [
            {
                "北海道": "016010",
                "青森県": "020010",
                "岩手県": "030010",
                "宮城県": "040010",
                "秋田県": "050010",
                "山形県": "060010",
                "福島県": "070010",
            },
            {
                "茨城県": "080010",
                "栃木県": "090010",
                "群馬県": "100010",
                "埼玉県": "110010",
                "東京都": "130010",
                "千葉県": "120010",
                "神奈川県": "140010",
            },
            {
                "新潟県": "150010",
                "長野県": "200010",
                "山梨県": "190010",
                "富山県": "160010",
                "石川県": "170010",
                "福井県": "180010",
                "岐阜県": "210010",
                "静岡県": "220010",
                "愛知県": "230010",
            },
            {
                "滋賀県": "250010",
                "京都府": "260010",
                "大阪府": "270000",
                "奈良県": "290010",
                "兵庫県": "280010",
                "和歌山県": "300010",
                "三重県": "240010",
            },
            {
                "鳥取県": "310010",
                "島根県": "320010",
                "岡山県": "330010",
                "広島県": "340010",
                "山口県": "350020",
                "徳島県": "360010",
                "香川県": "370000",
                "愛媛県": "380010",
                "高知県": "390010",
            },
            {
                "福岡県": "400010",
                "佐賀県": "410010",
                "長崎県": "420010",
                "熊本県": "430010",
                "大分県": "440010",
                "宮崎県": "450010",
                "鹿児島県": "460010",
                "沖縄県": "471010",
            }
        ]
    },
    methods: {
        _set_area: function() {
            this.selected_prefs = this.pref[this.selected_area];
        },
        _set_pref: function() {
            if(this.selected_pref!="") {
                this.selected_place = true;
                this.weather_url = 'https://weather.tsukumijima.net/api/forecast?city='+this.weather_code[this.selected_area][this.selected_pref];
                this.get_weather_info();
            } else {
                this.selected_place = false;
            }
        },
        get_weather_info: function() {
            var self = this;
            axios
            .get(self.weather_url)
            .then(response => {
                self.weather_info = response;
                self.weather_image = self.weather_info.data.forecasts[0].image.url;
            })
        }
    }
})
</script>

<?php get_footer(); ?>