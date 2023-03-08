var span = document.getElementsByTagName('span1');
var div = document.getElementsByTagName('div');
var l = 0;
span[1].onclick = () => {
    l++;
    for (var i of div) {
        if (l == 0) { i.style.left = "0px"; }
        if (l == 1) { i.style.left = "-280px"; }
        if (l == 2) { i.style.left = "-560px"; }
        if (l == 3) { i.style.left = "-820px"; }
        if (l == 4) { i.style.left = "-1100px"; }
        if (l == 5) { i.style.left = "-1380px"; }
        if (l > 5) { l = 5; }
    }
    span[0].onclick = () => {
        l--;
        for (var i of div) {
            if (l == 0) { i.style.left = "0px"; }
            if (l == 1) { i.style.left = "-280px"; }
            if (l == 2) { i.style.left = "-560px"; }
            if (l == 3) { i.style.left = "-820px"; }
            if (l == 4) { i.style.left = "-1100px"; }
            if (l == 5) { i.style.left = "-1380px"; }
            if (l < 0) { l = 0; }
        }
    }
}

var span2 = document.getElementsByTagName('span2');
var div2 = document.getElementsByTagName('div');
var l = 0;
span2[1].onclick = () => {
    l++;
    for (var i of div2) {
        if (l == 0) { i.style.left = "0px"; }
        if (l == 1) { i.style.left = "-280px"; }
        if (l == 2) { i.style.left = "-560px"; }
        if (l == 3) { i.style.left = "-820px"; }
        if (l == 4) { i.style.left = "-1100px"; }
        if (l == 5) { i.style.left = "-1380px"; }
        if (l > 5) { l = 5; }
    }
    span2[0].onclick = () => {
        l--;
        for (var i of div2) {
            if (l == 0) { i.style.left = "0px"; }
            if (l == 1) { i.style.left = "-280px"; }
            if (l == 2) { i.style.left = "-560px"; }
            if (l == 3) { i.style.left = "-820px"; }
            if (l == 4) { i.style.left = "-1100px"; }
            if (l == 5) { i.style.left = "-1380px"; }
            if (l < 0) { l = 0; }
        }
    }
}
var span3 = document.getElementsByTagName('span3');
var div3 = document.getElementsByTagName('div');
var l = 0;
span3[1].onclick = () => {
    l++;
    for (var i of div3) {
        if (l == 0) { i.style.left = "0px"; }
        if (l == 1) { i.style.left = "-280px"; }
        if (l == 2) { i.style.left = "-560px"; }
        if (l == 3) { i.style.left = "-820px"; }
        if (l == 4) { i.style.left = "-1100px"; }
        if (l == 5) { i.style.left = "-1380px"; }
        if (l > 5) { l = 5; }
    }
    span3[0].onclick = () => {
        l--;
        for (var i of div3) {
            if (l == 0) { i.style.left = "0px"; }
            if (l == 1) { i.style.left = "-280px"; }
            if (l == 2) { i.style.left = "-560px"; }
            if (l == 3) { i.style.left = "-820px"; }
            if (l == 4) { i.style.left = "-1100px"; }
            if (l == 5) { i.style.left = "-1380px"; }
            if (l < 0) { l = 0; }
        }
    }
}
