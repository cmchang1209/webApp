<?php

return [
	"golbal" =>	[
		"Download" => "Download",
		"Game" => "Game",
	],
	"help" => [
		"Series" => "Rating",
		"Handicap" => "Handicap",
		"Sandbagging" => "Sandbagging",
		"Series Table" => "Rating Table",
		"Introduce" => "Introduction",
		"Game" => "Game",
		"League" => "League",
		"Rule" => "Rule",
		"01Game" => "01 Games",
		"Cricket" => "Cricket",
		"CountUp" => "CountUp",
		"Hard dart series table" => " Rating Table for Steel Tip Darts",
		"Flight" => "Flight",
		"Rating" => "Rating",
		"Darts" => "Darts",
		"Consistency" => "Co nsistency",
		"Online battle" => "Global Match",
		"Individual league level" => "Personal League Rating",
		"Team league level" => "Team League Rating",
		"Individual season level" => "Personal Season Rating",
		"Team Season Level" => "Team Season Rating",
		"Included in series calculation" => "Included for Rating Calculation",
		"Not included in series calculation" => "Not Included for Rating Calculation",
		"Example" => "For Example",
		"Level by no" => ":params 級",
		"Handicap per step" => "Pts for each unit of Rating Difference",
		"Rt difference" => "Rating Difference",
		"RT" => "Rating",
		"PTS" => "Points",
		"Mark" => "Mark"
	],
	"help-series-introduce" => [
		[
			"title" => "What's the definition of FIDO Rating Sytem for Steel Tip Darts？",
			"contants" => [
				" FIDODARTS defines Rating for 501，Cricket，Countup，Consistency games by 1-25 levels. The higher number means the more skilled，and All of the 25 levels are also mapped to 10 Filghts（C， CC， CCC， B， BB ... ), so the players can recognize his/her skill more intuitively by Flight.",
				"2 Players with differenct skills can compete against each other happily via the handicapped system whuich is based on the Fido Rating system"
			]
		],
		[
			"title" => "FIDO Rating has 2 kinds of Ratings",
			"contants" => ["Regular games(501, Cricket, Countup) Rating, and the League/Tournament Rating"],
			"calculations" => [
				[
					"Regualr Games（1v1，2v2，3v3，4v4，1v1v1 ... ）",
					"Single Countup",
					"Single Consistency"
				],
				[
					"Single  01 Games",
					"01 games DIDO",
					"Single Cricket"
				]
			]
		]
	],
	"help-series-game" => [
		[
			"title" => "Regular Games",
			"contants" => [
				"ols" => [
					[
						"title" => "Rating will be caculated and based on the past 30 matches you played",
						"contants" => ["For new Fido players, at least 10 matches must be played before APP shows your Rating "],
						"uls" => [
							[
								"title" => "01 games（OI/DO）& PRO 501 & Global Match 01 games",
								"contants" => [
									" 30 AVGs of the latest 30 matches will be summed up then averaged",
									" The average of 30 AVGs will be interpolated to get the more precise Rating of 01 games（OI/DO）& PRO 501 & Global Match 01 games",
									" Since OI/OO Rating is seperated to OI/DO Rating, OI/OO Rating will be based on another 30 AVGs of 30 OI/OO matches "
								],
							],
							[
								"title" => "Cricket（ Global Match Cricket included）",
								"contants" => [
									"30 MPRs of the latest 30 matches will be summed up then averaged ",
									" The average of 30 MPRswill be interpolated to get the more precise Rating of Cricket"
								]
							],
							[
								"title" => "CountUp（Glocal Match CountUp included）",
								"contants" => [
									"30 PTS of the latest 30 matches will be summed up then averaged ",
									" The average of 30 MPRs will be interpolated to get the more precise Rating of CountUp"
								]
							],
							[
								"title" => "Consistency",
								"contants" => [
									"30 Consistencys of the latest 30 matches will be squared, summed up, square root, then averaged",
									" The new Consistency will be interpolated to get the more precise Rating of Consistency"
								]
							]
						]
					],
					[
						"title" => "Raitng for one Match",
						"contants" => ["After one Match，You can get your Raitng for this Match by Game Result，or Fido App Hsitory"],
					]
				]
			]
		]
	],
	"help-series-league" => [
		[
			"title" => "League/Tournament",
			"contants" => [
				"There're 4 different Ratings in  League/Tournament"
			],
			"uls" => [
				[
					"title" => "Personal League/Tournament Rating",
					"contants" => [
						"Ratings（01 OI/OO、01 OI/DO、CRICKET、COUNT UP）will be calculated ，
						Personal League/Tournament Rating is calculated by averaging the 4 Ratings(01 OI/OO、01 OI/DO、CRICKET、COUNT UP). If player fail to play enough games to get his Rating for each game, he/she will not be allowed to play handicapped game."
					],
					"exs" => [
						[
							"01 OI/OO Rating 17.93",
							"01 OI/DO Rating 11.52",
							"CRICKET Rating 6.11",
							"COUNTUP Rating 4.7",
							"Personal League/Tournament Rating will be",
							"（17.93 + 11.52 + 6.11+4.7）/ 4 = <em class='red--text text--lighten-1'>10.06</em>"
						]
					]
				],
				[
					"title" => "Team League/Tournament Rating ",
					"contants" => [
						"Team League/Tournament Rating is calculated by averaging all of the team member's League/Tournament Rating"
					]
				],
				[
					"title" => "Personal Season Rating",
					"contants" => [
						"Personal Season Rating is based on all of the matches's performance( not limited to 30 matches). Each game type have a sepertated  Season Rating."
					]
				],
				[
					"title" => "Team Season Rating",
					"contants" => [
						"Team Season Rating is calculated by averaging all member's Personal Season Ratings."
					]
				]
			]
		]
	],
	"help-handicap-rule" => [
		[
			"title" => "FIDO Handicapped game",
			"ols" => [
				[
					"title" => "The higher skilled player will give the lower skilled one  a beter situation to play the game by handicaped mode.",
				],
				[
					"title" => " Handicapped game wiil be under the loginned identity by at least two players",
				],
				[
					"title" => "If either one has no Rating, then there is no way to play game in the handicapped mode.",
				],
				[
					"title" => " The team game can also be played in the handicapped mode",
				],
				[
					"title" => " The team rating is calculated by averaging the team member's ratings",
				],
				[
					"title" => "The limit of handicapped levels is 12 ",
				]
			]
		]
	],
	"help-handicap-01Game" => [
		[
			"title" => "01 Games",
			"contants" => [
				"The look up Table for 01 Games in Handicapped mode"
			]
		]
	],
	"help-handicap-cricket" => [
		[
			"title" => "Cricket",
			"contants" => [
				"1 difference level(RT) for 18 pts，the upper limit of difference levels for 01 Games is 12",
				"1 difference level(RT) for 1 Mark，the upper limit of difference levels for Cricket Games is 8"
			]
		]
	],
	"help-handicap-count-up" => [
		[
			"title" => "CountUp",
			"contants" => [
				"1 difference level(RT) for 18 pts，the upper limit of difference levels for CountUp Games is 12"
			]
		]
	],
	"help-sandbagging" => [
	]
];