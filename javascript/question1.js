'use strict';

// Complete the saveThePrisoner function below.
function saveThePrisoner(n, m, s) {
  
}

function main() {
  let currentLine = 1;

  var readline = require('readline');
  var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
  });

  let t;
  rl.on('line', function(line){
    if (currentLine === 1) {
      t = parseInt(line)
    } else {
      let nms = line.split(' ');
  
      let n = parseInt(nms[0], 10);
  
      let m = parseInt(nms[1], 10);
  
      let s = parseInt(nms[2], 10);
  
      let result = saveThePrisoner(n, m, s);
  
      console.log(result + "\n");
    }
    if (currentLine > t) {
      rl.close();
    }
    currentLine++
  })
}

main()