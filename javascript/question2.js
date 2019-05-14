'use strict';

// Complete the beautifulDays function below.
function beautifulDays(i, j, k) {
  

}

function main() {
  var readline = require('readline');
  var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
  });

  rl.on('line', function (line) {
    const ijk = line.split(' ');

    const i = parseInt(ijk[0], 10);

    const j = parseInt(ijk[1], 10);

    const k = parseInt(ijk[2], 10);

    let result = beautifulDays(i, j, k);

    console.log(result + "\n");

    rl.close()
  })
}

main()