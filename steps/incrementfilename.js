const fs = require('fs')
const { exec } = require('child_process')
let content = fs.readdirSync('.')
let incrementFrom = process.argv[2]
if(!incrementFrom || isNaN(parseInt(incrementFrom))) {
	console.log("Please specify a start value")
	return;
}
let filtered = content.filter(f => !isNaN(parseInt(f.split('.')[0])) && parseInt(f.split('.')[0]) >= parseInt(incrementFrom))
let sorted = filtered.sort((f, f2) => parseInt(f.split('.')[0]) - parseInt(f2.split('.')[0]))
for(let i = sorted.length - 1; i >= 0; --i) {
	exec(`mv ${sorted[i]} ${parseInt(sorted[i].split('.')[0])+1}.${sorted[i].split('.')[1]}`)
}
