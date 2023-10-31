var words = ["ground", "shower", "endless", "plunger",
"fireworks", "dazzle", "climb", "April",
"subway", "broken", "stew", "shall",
"flowers", "angry", "create", "drooped",
"cluttered", "bursting", "edge", "glasses",
"gently", "crown", "shutters", "corner",
"barely", "able", "present", "clearly",
"really", "overcome", "sketch", "evening",
"again", "finally", "thumbs", "glittery",
"together", "while", "mother", "worth",
"solve", "credit", "steel", "pour",
"anybody", "whisper", "Thursday", "music",
"wears", "thoughts"];

function random() {
    let rand = Math.floor(Math.random() * words.length);
    document.getElementById('words').innerHTML = words[rand];
}
function plus() {
    var right = parseInt(document.getElementById('right').innerHTML);
    console.log(right++);
    document.getElementById('right').innerHTML = right++;
    random();
}
function minus() {
    var wrong = parseInt(document.getElementById('wrong').innerHTML);
    console.log(wrong++);
    document.getElementById('wrong').innerHTML = wrong++;
    random();
}
function reset() {
    document.getElementById('right').innerHTML = 0;
    document.getElementById('wrong').innerHTML = 0;
    random();
}

random();
