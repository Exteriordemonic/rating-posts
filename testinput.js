function testinput(re, str) {
    const myReg = new RegExp(re, "g");
    if (myReg.test(str)) {
        midstring = " zawiera ";
        return true;
    } else {
        midstring = " nie zawiera ";
        return false;
    }
    console.log(str + midstring + myReg.source);
};