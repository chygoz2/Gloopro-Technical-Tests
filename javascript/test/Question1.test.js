const chai = require('chai');
const assert = chai.assert;
const saveThePrisoner = require('../question1')

describe('Question 1', () => {
  it ('Can get the correct prisoner to save for test case 1', done => {
    let result = saveThePrisoner(5, 2, 1)
    assert.equal(result, 2)
    done()
  })

  it ('Can get the correct prisoner to save for test case 2', done => {
    let result = saveThePrisoner(5, 2, 2)
    assert.equal(result, 3)
    done()
  })
})