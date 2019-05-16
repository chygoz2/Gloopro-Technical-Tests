const chai = require('chai');
const assert = chai.assert;
const beautifulDays = require('../question2')

describe('Question 2', () => {
  it ('Can get the number of beautiful days for test case 1', done => {
    let result = beautifulDays(20, 23, 6)
    assert.equal(result, 2)
    done()
  })
})