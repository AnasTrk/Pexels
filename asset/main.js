// var Obj = require('./stuffs');
// console.log(Obj.Tester());
// console.log(Obj.Counter([1, 2, 3, 4]));
var events = require('events');
var util = require('util');
var fs = require('fs');
var Person = function (name) {
    this.name = name;
}
util.inherits(Person, events.EventEmitter);
var james = new Person('james');
var nada = new Person('Nada');
var PPL = [james, nada];
PPL.forEach(person => {
    person.on('speak', (msg) => {
        console.log(person.name + " Said : " + msg);
    });
});
PPL.forEach((per) => {
    per.emit('speak', "AFEEN");
});
console.log('---------------------------------');
james.emit('speak', "Hi");
nada.emit('speak', "Wussp!!");
console.log(fs.readFileSync('R.txt'));