<?php

return [
	"golbal" =>	[
		"Download" => "ダウンロード",
		"Game" => "普通のゲーム",
	],
	"help" => [
		"Series" => "Rating",
		"Handicap" => "ハンディキャップ",
		"Sandbagging" => "Sandbagging",
		"Series Table" => "ハンディキャップ表",
		"Introduce" => "ハンディキャップ紹介",
		"Game" => "普通のゲーム",
		"League" => "リーグ",
		"Rule" => "ルール",
		"01Game" => "01ゲーム",
		"Cricket" => "クリケット",
		"CountUp" => "カウントアップ",
		"Hard dart series table" => "ハードダーツRating",
		"Flight" => "フライト",
		"Rating" => "Rating",
		"Darts" => "ダーツ数",
		"Consistency" => "グルーピング精度",
		"Online battle" => "オンライン対戦",
		"Individual league level" => "個人リーグRating",
		"Team league level" => "チームリーグRating",
		"Individual season level" => "個人シーズンRating",
		"Team Season Level" => "チームシーズンRating",
		"Included in series calculation" => "Rating集計範囲に入れ",
		"Not included in series calculation" => "Rating集計範囲に入れない",
		"Example" => "例",
		"Level by no" => ":params 級",
		"Handicap per step" => "一級につきハンディキャップ",
		"Rt difference" => "Rating差",
		"RT" => "Rating",
		"PTS" => "点数",
		"Mark" => "マーク"
	],
	"help-series-introduce" => [
		[
			"title" => "ハードダーツRating表とは",
			"contants" => [
				"四つのゲーム（01ゲーム、クリケット、カウントアップ、グルーピング精度）の点数をもとに程度1-25級に分けて、この1-25級は十のレベル（C， CC， CCC， B， BB ... ）に対応しています。",
				"ハンディキャップがあるので、お互いに程度差があっても楽しく対戦することができます。"
			]
		],
		[
			"title" => "FIDODARTSのRatingは二種類があります",
			"contants" => ["二種類のRating(普通のゲーム、リーグ)は別々に計算されています"],
			"calculations" => [
				[
					"すべての対戦ゲーム（1v1，2v2，3v3，4v4，1v1v1 ... ）",
					"カウントアップシングルス",
					"個人レーティング精度"
				],
				[
					"01ゲームシングルス",
					"01 ゲーム DIDO",
					"クリケットシングルス"
				]
			]
		]
	],
	"help-series-game" => [
		[
			"title" => "　普通のゲーム",
			"contants" => [
				"ols" => [
					[
						"title" => "ゲームの最新30LEGのデータをもとにして「Rating」を計算しています",
						"contants" => ["（10LEG以上のデータがなければAPPにRatingが現れません）"],
						"uls" => [
							[
								"title" => "01ゲーム（OI/DO）& PRO 501（オンライン対戦01ゲームを含めています）",
								"contants" => [
									"最新30LEGのAVGの平均値",
									"この平均値と級数表をもとにしてより精確的なRatingを算出できます",
									"OI/OOモードに別の30LEGのAVGをもとにして平均値を算出しています。"
								],
							],
							[
								"title" => "クリケット（オンライン対戦クリケットを含めています。）",
								"contants" => [
									"最新30LEGのMPRの平均値",
									"この平均値とRating表をもとにしてより精確的なRatingを算出できます"
								]
							],
							[
								"title" => "カウントアップ（オンライン対戦カウントアップを含めています。）",
								"contants" => [
									"最新30LEGの得点の平均値"
								]
							],
							[
								"title" => "グルーピング精度",
								"contants" => [
									"最新30LEGの得点の平均値",
									"この平均値と級数表をもとにしてより精確的なRatingを算出できます"
								]
							]
						]
					],
					[
						"title" => "一レッグのRating",
						"contants" => ["ゲーム終了後、FIDODARTSダーツマシンの結果画面およびアプリの過去結果画面で一レッグのRatingを調べることができます。"],
					]
				]
			]
		]
	],
	"help-series-league" => [
		[
			"title" => "リーグ",
			"contants" => [
				"リーグの中に四種類のRatingがあります。"
			],
			"uls" => [
				[
					"title" => "個人リーグRating",
					"contants" => [
						"四つのゲーム（01 OI/OO、01 OI/DO、CRICKET、COUNT UP）の最新30レッグデータをもとにして計算しています。プレーヤーがリーグを申し込んだ時の各最新30レッグのデータをもとにして、四つの数値の平均値をリーグデフォルトRatingになります。"
					],
					"exs" => [
						[
							"01 OI/OO Rating 17.93",
							"01 OI/DO Rating 11.52",
							"CRICKET Rating 6.11",
							"COUNTUP Rating 4.7",
							"個人リーグRating",
							"（17.93 + 11.52 + 6.11+4.7）/ 4 = <em class='red--text text--lighten-1'>10.06</em>"
						]
					]
				],
				[
					"title" => "チームリーグRating",
					"contants" => [
						"チームのメンバー全員の個人リーグRatingを合計して人数で割って平均値を算出しています。"
					]
				],
				[
					"title" => "個人シーズンRating",
					"contants" => [
						"シーズンでプレーヤーにつき四つのシーズンRatingを持っています（01 OI/OO、01 OI/DO、CRICKET、COUNT UP）。このシーズンRatingは各ゲームのすべてのゲームデータをもとにして算出しています（30レッグに限りません）。"
					]
				],
				[
					"title" => "チームシーズンRating",
					"contants" => [
						"チームのプレーヤー全員の個人シーズンRatingを合計して人数で割って平均値を算出しています。"
					]
				]
			]
		]
	],
	"help-handicap-rule" => [
		[
			"title" => "FIDODARTS ハンディキャップゲーム",
			"ols" => [
				[
					"title" => "実力が上のプレーヤーは毎レーティングに対してハンディキャップを負います",
				],
				[
					"title" => "ハンディキャップゲームはログインしなければプレーできません。それに、少なくとも二人が必要です",
				],
				[
					"title" => "そのうちの一人はRatingがゼロだら、ハンディキャップゲームをプレーできません",
				],
				[
					"title" => "二人以上なら、チームとしてハンディキャップゲームをプレーできます。",
				],
				[
					"title" => "「チームRating」はメンバー全員の個人Ratingを合計して人数で割って平均値を算出する結果です",
				],
				[
					"title" => "多くとも12級のハンディキャップしか負うことができません",
				]
			]
		]
	],
	"help-handicap-01Game" => [
		[
			"title" => "01 ゲーム",
			"contants" => [
				"以下はハンディキャップ表"
			]
		]
	],
	"help-handicap-cricket" => [
		[
			"title" => "クリケット",
			"contants" => [
				"毎Ratingにつき18点のハンディキャップを負っています。それに、多くとも12級のハンディキャップしか負うことができません。",
				"毎Ratingにつき一マークのハンディキャップを負っています。それに、多くとも12級のハンディキャップしか負うことができません。"
			]
		]
	],
	"help-handicap-count-up" => [
		[
			"title" => "カウントアップ",
			"contants" => [
				"毎Ratingにつき18点のハンディキャップを負っています。それに、多くとも12級のハンディキャップしか負うことができません。"
			]
		]
	],
	"help-sandbagging" => [
	]
];