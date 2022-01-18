function isLucky(n) {
    var half = n.length/2;
    if (!Number.isInteger(half) || half > 3) {
        return false;
    }
    var first = 0;
    var second = 0;

    for(var i = 0; i < half; i++) {
        first += parseInt(n[i]);
    }
    for(var j = half+1; j < n.length; j++) {
        second += parseInt(n[j]);
    }
    if(first != second) {
        return false;
    } else {
        return true;
    }
}
console.log(isLucky("1230"));
console.log(isLucky("239017"));