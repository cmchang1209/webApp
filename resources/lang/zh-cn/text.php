<?php

return [
	"golbal" =>	[
		"Download" => "下载",
		"Game" => "游戏"
	],
	"help" => [
		"Series" => "级数",
		"Handicap" => "让级让分",
		"Series Table" => "级数表",
		"Introduce" => "级数介绍",
		"Game" => "一般游戏",
		"League" => "联赛",
		"Rule" => "规则",
		"01Game" => "01游戏",
		"Cricket" => "米老鼠",
		"CountUp" => "高分赛",
		"Hard dart series table" => "硬式飞镖级数表",
		"Flight" => "级别",
		"Rating" => "级数",
		"Darts" => "镖数",
		"Consistency" => "密集度",
		"Online battle" => "网路对战",
		"Individual league level" => "个人联赛级数",
		"Team league level" => "队伍联赛级数",
		"Individual season level" => "个人赛季级数",
		"Team Season Level" => "队伍赛季级数",
		"Included in series calculation" => "列入级数计算",
		"Not included in series calculation" => "不列入级数计算",
		"Example" => "举例",
		"Level by no" => ":params 级",
		"Handicap per step" => "每差一级距让分",
		"Rt difference" => "级数差",
		"RT" => "级数",
		"PTS" => "让分",
		"Mark" => "让划"
	],
	"help-series-introduce" => [
		[
			"title" => "什么是 FIDODARTS 硬式飞镖级数表？",
			"contants" => [
				"为了热爱竞技的玩家们，FIDODARTS 根据硬式飞镖的难易度，分为4种游戏 (01，米老鼠，高分赛，密集度)定义出1-25级（数字越大，级数越高）， 同时此25级数会对应到10种级别（C， CC， CCC， B， BB ... ），以便玩家能更直觉的了解自己的程度。",
				"玩家可根据双方级数，进行让级让分的比赛，使不同程度的玩家享受一场胜负未卜的战斗！"
			]
		],
		[
			"title" => "FIDODARTS 的级数分为两类",
			"contants" => ["一般游戏及联赛两种，两种级数分开计算"],
			"calculations" => [
				[
					"所有对战游戏（1v1，2v2，3v3，4v4，1v1v1 ... ）",
					"单人高分赛",
					"单人密集度"
				],
				[
					"单人01游戏",
					"01 游戏 DIDO",
					"单人米老鼠"
				]
			]
		]
	],
	"help-series-game" => [
		[
			"title" => "一般游戏",
			"contants" => [
				"ols" => [
					[
						"title" => "根据该游戏近30场历史战绩,进行「级数计算」",
						"contants" => ["（10场以上成绩，APP才可呈现级数）"],
						"uls" => [
							[
								"title" => "01游戏（OI/DO）& PRO 501（含网路对战01游戏）",
								"contants" => [
									"近30场AVG加总平均",
									"利用总平均AVG，级数表，并依比例方式取得更精细的级数",
									"OI/OO模式下另取30场AVG加总平均"
								],
							],
							[
								"title" => "米老鼠（含网路对战米老鼠）",
								"contants" => [
									"近30场MPR加总平均",
									"利用总平均MPR，查询级数表，并依比例方式取得更精细的级数"
								]
							],
							[
								"title" => "高分赛（含网路对战高分赛）",
								"contants" => [
									"近30场得分加总平均"
								]
							],
							[
								"title" => "密集度",
								"contants" => [
									"近30场密集度平方值加总平均",
									"利用总平均密集度，查询级数表，并依比例方式取得更精细的级数"
								]
							]
						]
					],
					[
						"title" => "单场游戏级数",
						"contants" => ["游戏结束后，FIDODARTS飞镖机游戏结算画面，及App的历史战绩内可查询某单场游戏级数"],
					]
				]
			]
		]
	],
	"help-series-league" => [
		[
			"title" => "联赛",
			"contants" => [
				"在联赛中共有四种级数"
			],
			"uls" => [
				[
					"title" => "个人联赛级数",
					"contants" => [
						"四种游戏（01 OI/OO、01 OI/DO、CRICKET、COUNT UP）于联赛中近30场的游戏数据为依据计算而成。玩家报名该联赛时，取玩家四种游戏各近30场的一般游戏数据，并将这四笔级数平均后，做为起始联赛级数。若玩家未打满以上四笔级数则无法进行让级让分规则。"
					],
					"exs" => [
						[
							"01 OI/OO 级数 17.93",
							"01 OI/DO 级数 11.52",
							"CRICKET 级数 6.11",
							"COUNTUP 级数 4.7",
							"个人联赛级数为",
							"（17.93 + 11.52 + 6.11+4.7）/ 4 = <em class='red--text text--lighten-1'>10.06</em>"
						]
					]
				],
				[
					"title" => "队伍联赛级数",
					"contants" => [
						"以玩家为单位，将队伍所有玩家的个人联赛级数加总后平均。"
					]
				],
				[
					"title" => "个人赛季级数",
					"contants" => [
						"以玩家于该联赛赛季中的所有游戏数据（不限30场）为依据计算，每个游戏有一个独立的赛季级数。"
					]
				],
				[
					"title" => "队伍赛季级数",
					"contants" => [
						"以玩家为单位，将该队伍所有玩家的赛季级数加总后平均。"
					]
				]
			]
		]
	],
	"help-handicap-rule" => [
		[
			"title" => "FIDODARTS 自动让级让分",
			"ols" => [
				[
					"title" => "高级分玩家让低级分玩家固定分数。",
				],
				[
					"title" => "没登入玩家不进行让级让分。",
				],
				[
					"title" => "赛局中，如果有其中一方的级分为零，则不进行自动让级让分。",
				],
				[
					"title" => "当队伍为两人以上时，让分标准以「团队级分」计算。 ",
				],
				[
					"title" => "「团队级分」为队员级分加总除以队员数量。 ",
				],
				[
					"title" => "最多让12级。",
				]
			]
		]
	],
	"help-handicap-01Game" => [
		[
			"title" => "01 游戏",
			"contants" => [
				"每一级距让分见下表"
			]
		]
	],
	"help-handicap-cricket" => [
		[
			"title" => "米老鼠",
		]
	]
];