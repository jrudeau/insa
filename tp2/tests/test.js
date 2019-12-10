var isEven = require("../js/IsEven");
var bonjour = require("../js/Bonjour");

var assert = require('chai').assert;

describe('Test Even number', function(){

    it('should return true when the number is even', function() {
        assert.ok(isEven(2));   
    });

    it('should return false when the number is even', function() {
        assert.notOk(isEven(3)); 
    });

    it('should return error when a string is passed as argument', function() {
        assert.ifError(isEven("Bonjour"));
    });

    it('should return error when a string is passed as argument', function() {
        assert.ifError(isEven([1, 2, 3, 4]));
    });

    it('should return true when a negative even number is passed as argument', function() {
        assert.isOk(isEven(-2));
    });

    it('should return false when a float number is passed as argument', function() {
        assert.isNotOk(isEven(3.5));
        assert.isNotOk(isEven(4.5));
    });
});


describe('Test Bonjour function', function(){
    
    it('should return "Bonjour " + user_name string passed as argument', function() {
        assert.equal(bonjour("Jean"), "Bonjour Jean");
    });
    
    it('should return "Bonjour " + user_name string passed as argument', function() {
        assert.equal(bonjour(1), "Bonjour 1");
    });
});