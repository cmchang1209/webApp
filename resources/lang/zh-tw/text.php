<?php

return [
	"golbal" =>	[
		"Download" => "下載"
	],
	"help" => [
		"Series" => "級數",
		"Handicap" => "讓級讓分",
		"Series Table" => "級數表",
		"Introduce" => "級數介紹",
		"Game" => "一般遊戲",
		"League" => "聯賽",
		"Rule" => "規則",
		"01Game" => "01遊戲",
		"Cricket" => "米老鼠",
		"CountUp" => "高分賽",
		"Hard dart series table" => "硬式飛鏢級數表",
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
		"Not included in series calculation" => "不列入級數計算"
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
	]
];