lol = raw_input()
result = ""
encryption_key = {
	"a": "!",
	"b": "@",
	"c": "#",
	"d": "$",
	"e": "%",
	"f": "^",
	"g": "&",
	"h": "*",
	"i": "(",
	"j": ")",
	"k": "-",
	"l": "+",
	"m": "=",
	"n": "z",
	"o": "y",
	"p": "x",
	"q": "w",
	"r": "v",
	"s": "u",
	"t": "t",
	"u": "s",
	"v": "r",
	"w": "q",
	"x": "p",
	"y": "o",
	"z": "n",
}


for charact in lol:
	result = result + encryption_key[charact]

print(result)