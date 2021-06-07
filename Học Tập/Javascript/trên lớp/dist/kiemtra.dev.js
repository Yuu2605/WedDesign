"use strict";

function validate() {
  var u = document.getElementById("username").value;
  var p1 = document.getElementById("password").value;
  var p2 = document.getElementById("password-repeat").value;

  if (u == "") {
    alert("vui lòng nhập tên!");
    return false;
  }

  if (p1 == "") {
    alert("vui lòng nhập mật khẩu!");
    return false;
  }

  if (p2 == "") {
    alert("vui lòng xác minh mật khẩu!");
    return false;
  }
}

alert("xin hãy điền đúng thôn tin!");