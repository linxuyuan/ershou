function f(x) {  //定义功能函数，把参数数组的元素以闭包体分别封装在数组中并返回
    var a = [];   //定义临时数组
    for (var i = 0; i < x.length; i++) {
        var temp = x[i];  //临时存储数组中每个元素的值
        a.push(function () {  //把数组元素的值封装在闭包中投入到临时数组a中
            alert(temp + '' + x[i]);  //闭包中被封装的参数数组元素值
        });
    }
    return a;
}
function e() {  //定义普通函数
    var a =["a","b","c"];    //调用函数f(),并向其传递一个数组
    for (var i = 0;i<a.length;i++){   //遍历f()返回的数组
        a[i];                        //调用闭包，查看内部封装的数组元素的值
    }
}
e();  //调用函数e()