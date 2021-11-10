const fs = require('fs')
if(!process.argv[2] || !fs.existsSync(process.argv[2])) {
	console.error("Unable to find the file")
	process.exit(1)
}
if(!process.argv[3] || isNaN(parseInt(process.argv[3]))) {
	console.error("Error with the new step number")
	process.exit(1)
}
incrementSteps(parseInt(process.argv[3]))




function incrementSteps(newStep) {
	let file = fs.readFileSync(process.argv[2]).toString('utf8')
	let startIndex = file.indexOf('### Step ' + newStep)
	let startOfFile = file.substr(0, startIndex)
	let newStepText = '### Step' + newStep + '\n- \n- \n-\n##### *Answer : ???*\n\n'
	let endOfFile = file.substr(startIndex)
	endOfFile = endOfFile.replaceAll(/[0-9]{1,2}/gi, (match, cap) => {
		return parseInt(match) + 1
	})
	let newFile = startOfFile + newStepText + endOfFile
	fs.writeFileSync(process.argv[2], newFile)
}
