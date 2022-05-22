"use strict"

// Hàm xử lý nút Clear màn hình
function clearScreen() {
    document.getElementById("result").value = '';
}

// Hàm xóa bớt 1 kí tự
function del() {
    var exp = document.getElementById("result").value;
    if(exp.length > 0) {
        exp = exp.slice(0, exp.length - 1);
    }
    document.getElementById("result").value = exp;
}

// Hiển thị các kí tự người dùng bấm trên button
function display(ch) {
    document.getElementById("result").value += ch;
}

// Solve
function solve() {
    var exp = document.getElementById("result").value;
    if(exp.indexOf("^") == -1) {
        document.getElementById("result").value = eval(exp);
    }
    else {
        var num = exp.split("^");
        if(exp.indexOf("+") == -1 && exp.indexOf("-") == -1 && exp.indexOf("*") == -1 && exp.indexOf("/") == -1) {
            var result = Math.pow(num[0], num[1]);
            document.getElementById("result").value = result;
        }
        else {
            var index = num[0].search("[0-9]$");
            var numPre = num[0].slice(index, num[0].length);
            var resultTemp = Math.pow(numPre, num[1]);
            document.getElementById("result").value = eval(num[0].slice(0, index) + resultTemp);
        }
    }
}