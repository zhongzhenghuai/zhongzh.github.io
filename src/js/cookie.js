function setCookie(key, value, time) {
    // key 表示 cookie的键
    // value 表示 cookie的值
    // time 表示多少天过期，不传默认回话时效
    if (time) {
        var time1 = new Date()
        time1.setTime(time1.getTime() - 8 * 3600 * 1000 + time * 24 * 3600 * 1000)
        document.cookie = key + '=' + value + ';expires=' + time1
    } else {
        document.cookie = key + '=' + value
    }

}

function removeCookie(key) {
    var str = document.cookie;
    var arr = str.split("; ");
    for (var i = 0; i < arr.length; i++) {
        // 遍历到的每一个元素arr[i] = "key=value"
        // 把这个"key=value"变成[key,value]
        var temp = arr[i].split('=');
        if (temp[0] == key) {
            var time1 = new Date()
            time1.setTime(time1.getTime() - 8 * 3600 * 1000 - 10000)
            document.cookie = key + '=' + temp[1] + ';expires=' + time1+";path=/";
        }
    }
}

function getCookie(key) {
    // key 表示 cookie的键
    var str = document.cookie;
    // 把str变成一个数组，数组的每个元素都是一个“key=value”
    var arr = str.split("; ");
    // 我想获取key对应的值
    for (var i = 0; i < arr.length; i++) {
        // 遍历到的每一个元素arr[i] = "key=value"
        // 把这个"key=value"变成[key,value]
        var temp = arr[i].split('=');
        if (temp[0] == key) {
            return temp[1];
        }
    }

}