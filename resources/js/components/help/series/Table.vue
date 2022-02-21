<template>
    <div class="help-series-table-page">
        <v-container fluid class="pb-1">
            <div ref="downloadArea" class="mb-3">
                <p class="font-weight-black">FIDODARTS {{ $t('help', 'Hard dart series table') }}</p>
                <v-simple-table class="series-table">
                    <thead>
                        <tr>
                            <th v-for="header in headers" :key="header.name">
                                <p class="mb-0">{{ $t('help', header.name) }}</p>
                                <p class="mb-0">( {{ header.sub }} )</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <template v-for="data in datas">
                            <tr v-for="(values, key) in data.values" :key="'tr-'+data.flight+values[0]" :class="data.class">
                                <td v-if="key === 0" :rowspan="data.values.length" class="fixed">{{ data.flight }}</td>
                                <td v-for="(value, key1) in values" :key="'td-'+data.flight+values[0]+key1">{{ value }}</td>
                            </tr>
                        </template>
                    </tbody>
                </v-simple-table>
            </div>
            <v-row no-gutters>
                <v-col cols="10" offset="1">
                    <v-btn block @click="download">
                        {{ $t('golbal', 'Download') }}
                    </v-btn>
                </v-col>
            </v-row>
        </v-container>
        <div ref="downloadWarp" class="download-warp"></div>
    </div>
</template>
<script>
import html2canvas from 'html2canvas'
export default {
    data() {
        return {
            headers: [
                { name: "Flight", sub: "FLIGHT" },
                { name: "Rating", sub: "RT" },
                { name: "Darts", sub: "DARTS" },
                { name: "OI/DO", sub: "AVG" },
                { name: "OI/OO", sub: "AVG" },
                { name: "Cricket", sub: "MPR" },
                { name: "CountUp", sub: "PTS" },
                { name: "Consistency", sub: "CM" }
            ],
            datas: [{
                flight: 'C',
                class: 'c',
                values: [
                    [1, '70~', '0.00~', '0.00~', '0.00~', '0~', '23~'],
                    [2, '65~69', '21.73~', '20.07~', '0.58~', '169~', '17~']
                ]
            }, {
                flight: 'CC',
                class: 'c',
                values: [
                    [3, '60~64', '23.40~', '22.73~', '0.75~', '191~', '12~'],
                    [4, '57~59', '25.07~', '25.40~', '0.92~', '213~', '10~'],
                    [5, '53~56', '26.73~', '28.07~', '1.10~', '236~', '8~']
                ]
            }, {
                flight: 'CCC',
                class: 'c',
                values: [
                    [6, '50~52', '28.40~', '30.73~', '1.27~', '258~', '6~'],
                    [7, '46~49', '30.07~', '33.39~', '1.45~', '280~', '5.5~'],
                    [8, '44~45', '33.39~', '34.95~', '1.63~', '294~', '5~']
                ]
            }, {
                flight: 'B',
                class: 'b',
                values: [
                    [9, '42~43', '34.95~', '36.66~', '1.81~', '308~', '4.5~'],
                    [10, '40~41', '36.66~', '38.52~', '1.93~', '324~', '4~']
                ]
            }, {
                flight: 'BB',
                class: 'b',
                values: [
                    [11, '38~39', '38.52~', '40.61~', '2.06~', '341~', '3.5~'],
                    [12, '36~37', '40.61~', '42.93~', '2.10~', '361~', '3~'],
                    [13, '34~35', '42.93~', '45.54~', '2.31~', '383~', '2.8~']
                ]
            }, {
                flight: 'BBB',
                class: 'b',
                values: [
                    [14, '32~33', '45.54~', '48.48~', '2.43~', '407~', '2.6~'],
                    [15, '30~31', '48.48~', '51.81~', '2.56~', '435~', '2.4~'],
                    [16, '28~29', '51.81~', '55.65~', '2.68~', '463~', '2.2~']
                ]
            }, {
                flight: 'A',
                class: 'a',
                values: [
                    [17, '26~27', '55.65~', '60.12~', '2.81~', '500~', '2.0~'],
                    [18, '24~25', '60.12~', '65.34~', '3.08~', '544~', '1.9~']
                ]
            }, {
                flight: 'AA',
                class: 'a',
                values: [
                    [19, '22~23', '65.34~', '71.55~', '3.35~', '596~', '1.8~'],
                    [20, '20~21', '71.55~', '79.11~', '3.62~', '658~', '1.7~'],
                    [21, '19', '79.11~', '83.49~', '3.89~', '695~', '1.6~']
                ]
            }, {
                flight: 'AAA',
                class: 'a',
                values: [
                    [22, '18', '83.49~', '88.41~', '4.16~', '736~', '1.5~'],
                    [23, '17', '88.41~', '93.93~', '4.43~', '781~', '1.4~'],
                    [24, '16', '93.93~', '100.20~', '4.70~', '834~', '1.3~']
                ]
            }, {
                flight: 'S',
                class: 's',
                values: [
                    [25, '9~15', '100.20~', '107.37~', '5.00~', '893~', '1.2~']
                ]
            }]
        }
    },
    methods: {
        download() {
            this.setOverlay()
            var div = this.$refs.downloadWarp
            var area = this.$refs.downloadArea
            div.innerHTML = ''
            div.insertAdjacentHTML('beforeend', area.innerHTML)
            var warp = div.querySelector('.v-data-table__wrapper')
            warp.classList.add("auto-height")
            var rect = div.getBoundingClientRect()
            var width = rect.width
            var height = rect.height
            //console.log(width, height)
            //設置 canvas 畫布的寬高 是容器搞度 2倍、爲了是圖片清晰
            /**1.創建畫布
             * 2.設置canvas 大小
             * */
            var canvas = document.createElement('canvas')
            canvas.width = width * 2
            canvas.height = height * 2
            //這是繪畫範圍的大小
            canvas.style.width = width + 'px'
            canvas.style.height = height + 'px'
            //畫布縮小，將圖片放大兩倍
            var context = canvas.getContext("2d")
            context.scale(2, 2)

            html2canvas(div, {
                allowTaint: true,
                taintTest: false,
            }).then((canvas) => {
                var type = 'png'
                var imgData = canvas.toDataURL(type)
                var _fixType = (type) => {
                    type = type.toLowerCase().replace(/jpg/i, 'jpeg')
                    var r = type.match(/png|jpeg|bmp|gif/)[0]
                    return 'image/' + r
                }
                // png 替換 mime type 爲了下載
                imgData = imgData.replace(_fixType(type), 'image/octet-stream')

                // 下載後的問題名
                var filename = `FIDODARTS ${this.$t('help', 'Hard dart series table')}.${type}`
                // download
                div.innerHTML = ''
                this.saveFile(imgData, filename)
            })
        },
        saveFile(data, filename) {
            /**
             * 在本地進行文件保存
             * {String} data     要保存到本地的圖片數據
             * {String} filename 文件名
             */
            //創建一個命名空間。是 a 標籤
            /*var save_link = document.createElementNS('http://www.w3.org/1999/xhtml', 'a')
            save_link.href = data
            save_link.download = filename
            var event = document.createEvent('MouseEvents')
            event.initMouseEvent('click', true, false, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null)
            save_link.dispatchEvent(event)*/
            /*var xhr = new XMLHttpRequest()
            xhr.open('GET', data, true)
            xhr.responseType = 'blob'
            xhr.onload = (e) => {
                console.log(xhr)
                if (xhr.status == 200) {
                    var myBlob = xhr.response
                    var link = document.createElement('a')
                    link.href = window.URL.createObjectURL(myBlob)
                    link.download = "yourname.png"
                    link.click()
                    this.setOverlay()
                }
            }
            xhr.send()*/
            window.open('https://www.google.com', '_blank')
        }
    }
}

</script>
