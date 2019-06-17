function showpwd() {
    switch (document.getElementById("Password").type) {
        case "password":
            document.getElementById("Password").type = "text", $(".showpwd").removeClass("fas fa-eye"), $(".showpwd").addClass("fas fa-eye-slash");
            break;
        case "text":
            document.getElementById("Password").type = "password", $(".showpwd").removeClass("fas fa-eye-slash"), $(".showpwd").addClass("fas fa-eye")
    }
}

function login() {
    var e, s;
    e = $("input[name=Username]").val(), s = $("input[name=Password]").val(), "" == e ? ($("#msguname").show("slow"), document.getElementById("msguname").innerHTML = "Masukkan username !", $("#msguname").delay(3e3).hide("slow")) : "" == s ? ($("#msgpwd").show("slow"), document.getElementById("msgpwd").innerHTML = "Masukkan password !", $("#msgpwd").delay(3e3).hide("slow")) : $.ajax({
        type: "POST",
        url: "http://localhost/alittihad/Auth/proses/",
        data: {
            Username: e,
            Password: s
        },
        statusCode: {
            200: function (data) {
                if (data.lvl == 1) {
                    window.location.href = "http://localhost/alittihad/administrator/dasboard/index/";
                } else if (data.lvl == 2) {
                    window.location.href = "http://localhost/alittihad/siswa/dasboard/index/";
                } else if (data.lvl == 3) {
                    window.location.href = "http://localhost/alittihad/ppdb/dasboard/index/";
                }
            },
            201: function (e) {
                $("#errmsg").show("slow"), document.getElementById("errmsg").innerHTML = e.message, $("#errmsg").delay(3500).hide("slow")
            },
            500: function (e) {
                $("#errmsg").show("slow"), document.getElementById("errmsg").innerHTML = 'Error internal server', $("#errmsg").delay(3500).hide("slow")
            }
        }
    });
}
document.addEventListener("keypress", function onEvent(event) {
    if (event.key === "Enter") {
        login();
    }
});