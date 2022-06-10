<?php

return [
	"golbal" =>	[
		"Download" => "下載",
		"Game" => "遊戲",
	],
	"help" => [
		"Series" => "級數",
		"Handicap" => "讓級讓分",
		"Sandbagging" => "爆級制度",
		"RT Table" => "級數表",
		"Introduce" => "級數介紹",
		"Game" => "一般遊戲",
		"League" => "聯賽",
		"Rule" => "規則",
		"01Game" => "01遊戲",
		"Cricket" => "米老鼠",
		"CountUp" => "高分賽",
		"Hard dart RT table" => "硬式飛鏢級數表",
		"Flight" => "級別",
		"Rating" => "級數",
		"Darts" => "鏢數",
		"Consistency" => "密集度",
		"Online battle" => "網路對戰",
		"Individual league level" => "個人聯賽級數",
		"Team league level" => "隊伍聯賽級數",
		"Individual season level" => "個人賽季級數",
		"Team Season Level" => "隊伍賽季級數",
		"Included in series calculation" => "列入級數計算",
		"Not included in series calculation" => "不列入級數計算",
		"Example" => "舉例",
		"Level by no" => ":params 級",
		"Handicap per step" => "每差一級距讓分",
		"Rt difference" => "級數差",
		"RT" => "級數",
		"PTS" => "讓分",
		"Mark" => "讓劃"
	],
	"help-series-introduce" => [
		[
			"title" => "什麼是 FIDODARTS 硬式飛鏢級數表？",
			"contants" => [
				"為了熱愛競技的玩家們，FIDODARTS 根據硬式飛鏢的難易度，分為4種遊戲 (01，米老鼠，高分賽，密集度)定義出1-25級（數字越大，級數越高）， 同時此25級數會對應到10種級別（C， CC， CCC， B， BB ... ），以便玩家能更直覺的了解自己的程度。",
				"玩家可根據雙方級數，進行讓級讓分的比賽，使不同程度的玩家享受一場勝負未卜的戰鬥！"
			]
		],
		[
			"title" => "FIDODARTS 的級數分為兩類",
			"contants" => ["一般遊戲及聯賽兩種，兩種級數分開計算"],
			"calculations" => [
				[
					"所有對戰遊戲（1v1，2v2，3v3，4v4，1v1v1 ... ）",
					"單人高分賽",
					"單人密集度"
				],
				[
					"單人01遊戲",
					"01 遊戲 DIDO",
					"單人米老鼠"
				]
			]
		]
	],
	"help-series-game" => [
		[
			"title" => "一般遊戲",
			"contants" => [
				"ols" => [
					[
						"title" => "根據該遊戲近30場歷史戰績,進行「級數計算」",
						"contants" => ["（10場以上成績，APP才可呈現級數）"],
						"uls" => [
							[
								"title" => "01遊戲（OI/DO）& PRO 501（含網路對戰01遊戲）",
								"contants" => [
									"近30場AVG加總平均",
									"利用總平均AVG，級數表，並依比例方式取得更精細的級數",
									"OI/OO模式下另取30場AVG加總平均"
								],
							],
							[
								"title" => "米老鼠（含網路對戰米老鼠）",
								"contants" => [
									"近30場MPR加總平均",
									"利用總平均MPR，查詢級數表，並依比例方式取得更精細的級數"
								]
							],
							[
								"title" => "高分賽（含網路對戰高分賽）",
								"contants" => [
									"近30場得分加總平均"
								]
							],
							[
								"title" => "密集度",
								"contants" => [
									"近30場密集度平方值加總平均",
									"利用總平均密集度，查詢級數表，並依比例方式取得更精細的級數"
								]
							]
						]
					],
					[
						"title" => "單場遊戲級數",
						"contants" => ["遊戲結束後，FIDODARTS飛鏢機遊戲結算畫面，及App的歷史戰績內可查詢某單場遊戲級數"],
					]
				]
			]
		]
	],
	"help-series-league" => [
		[
			"title" => "聯賽",
			"contants" => [
				"在聯賽中共有四種級數"
			],
			"uls" => [
				[
					"title" => "個人聯賽級數",
					"contants" => [
						"四種遊戲（01 OI/OO、01 OI/DO、CRICKET、COUNT UP）於聯賽中近30場的遊戲數據為依據計算而成。玩家報名該聯賽時，取玩家四種遊戲各近30場的一般遊戲數據，並將這四筆級數平均後，做為起始聯賽級數。若玩家未打滿以上四筆級數則無法進行讓級讓分規則。"
					],
					"exs" => [
						[
							"01 OI/OO 級數 17.93",
							"01 OI/DO 級數 11.52",
							"CRICKET 級數 6.11",
							"COUNTUP 級數 4.7",
							"個人聯賽級數為",
							"（17.93 + 11.52 + 6.11+4.7）/ 4 = <em class='red--text text--lighten-1'>10.06</em>"
						]
					]
				],
				[
					"title" => "隊伍聯賽級數",
					"contants" => [
						"以玩家為單位，將隊伍所有玩家的個人聯賽級數加總後平均。"
					]
				],
				[
					"title" => "個人賽季級數",
					"contants" => [
						"以玩家於該聯賽賽季中的所有遊戲數據（不限30場）為依據計算，每個遊戲有一個獨立的賽季級數。"
					]
				],
				[
					"title" => "隊伍賽季級數",
					"contants" => [
						"以玩家為單位，將該隊伍所有玩家的賽季級數加總後平均。"
					]
				]
			]
		]
	],
	"help-handicap-rule" => [
		[
			"title" => "FIDODARTS 自動讓級讓分",
			"ols" => [
				[
					"title" => "高級分玩家讓低級分玩家固定分數。",
				],
				[
					"title" => "沒登入玩家不進行讓級讓分。",
				],
				[
					"title" => "賽局中，如果有其中一方的級分為零，則不進行自動讓級讓分。",
				],
				[
					"title" => "當隊伍為兩人以上時，讓分標準以「團隊級分」計算。",
				],
				[
					"title" => "「團隊級分」為隊員級分加總除以隊員數量。",
				],
				[
					"title" => "最多讓12級。",
				]
			]
		]
	],
	"help-handicap-01Game" => [
		[
			"title" => "01 遊戲",
			"contants" => [
				"每一級距讓分見下表"
			]
		]
	],
	"help-handicap-cricket" => [
		[
			"title" => "米老鼠",
			"contants" => [
				"每一級距讓18分，最高讓12級。",
				"每一級距讓1劃，最高讓8級。"
			]
		]
	],
	"help-handicap-count-up" => [
		[
			"title" => "高分賽",
			"contants" => [
				"每一級距讓18分，最高讓12級。"
			]
		]
	],
	"help-sandbagging" => [
		[
			"title" => "FIDODARTS 爆級制度",
			"contants" => [
				"ols" => [
					[
						"title" => "有讓級讓分才會有爆級制度，如該場比賽無讓級讓分，則不適用爆級制度。"
					],
					[
						"title" => "僅聯賽、錦標賽、小組循環賽適用爆級制度。",
						"uls" => [
							[
								"title" => "聯賽",
								"contants" => [
									"如果該場聯賽為「盤制」，則以「盤」為單位判定是否爆級。",
									"如果該場聯賽為「局制」，則以「局」為單位判定是否爆級。"
								],
							],
							[
								"title" => "錦標賽",
								"contants" => [
									"錦標賽以雙方對戰的整場比賽(MATCH)為單位判定是否爆級。"
								],
							],
							[
								"title" => "小組循環賽",
								"contants" => [
									"小組循環賽以雙方對戰的整場比賽(MATCH)為單位判定是否爆級，並非以整個小組循環結果判定。"
								],
							]
						]
					],
					[
						"title" => "雙方皆發生爆級的情況，比賽原有成績保留並繼續餘下賽事。"
					],
					[
						"title" => "當隊伍為兩人以上時，爆級標準以「團隊級分」計算。"
					],
					[
						"title" => "爆級門檻由該場賽事的主辦單位規定。例如：該場賽事規定的爆級門檻為 0.2級，即0.21級或以上則為爆級。"
					]
				]
			]
		]
	]
];