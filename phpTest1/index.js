let val = 'TheQuickBrownFoxJumpsOverTheLazyDog.';
let spaced = val.match(/[A-Z][a-z]+/g).join(' ');
let lowercase = spaced.toLowerCase();
let sentence = lowercase.split(' ');

sentence[0] = sentence[0].charAt(0).toUpperCase() + sentence[0].slice(1);

console.log(sentence.join(' '));