// Complete the beautifulDays function below.
let i = 20;
let j = 23;
let k = 6;

function beautifulDays(i, j, k) {
	var days = [];
	while (i <= j) {
		days.push(i++);
	}

	const checkBeautifulDay = days => {
		return days.map(day => {
			let reversedDate = parseFloat(
				day
					.toString()
					.split('')
					.reverse()
					.join('')
			);

			return Number.isInteger((day - reversedDate) / k);
		});
	};

	console.log(checkBeautifulDay(days));
}

// module.exports = beautifulDays;

beautifulDays(i, j, k);
