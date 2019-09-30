var jsonString = '{"set_attributes": {"date" : "@{currentdate}"},"return_to_blocks": ["Welcome Message"}'

var parsedString = jsonString.replace(/@\{(\w+)\}/g, function(match, group) {    
	if (group === 'currentdate') {
		var d = new Date();
		var weekday = new Array(7);
		weekday[0] =  "Sunday";
		weekday[1] = "Monday";
		weekday[2] = "Tuesday";
		weekday[3] = "Wednesday";
		weekday[4] = "Thursday";
		weekday[5] = "Friday";
		weekday[6] = "Saturday";

		var n = weekday[d.getDay()];
		return n;
	} else if (group === 'anotherCommand') {
		return 'anotherValue';
    } //and so on
});

