
// // quick edit
// study result
// 
//function isValidDate(str) {
//    var t = str.match(/^(\d{2})\/(\d{2})\/(\d{4})$/);
//    if (t === null)
//        return false;
//    var d = +t[1], m = +t[2], y = +t[3];
//    //below should be more acurate algorithm
//    if (m >= 1 && m <= 12 && d >= 1 && d <= 31) {
//        return true;
//    }
//    return false;
//}

function roomChange(roomId){
    var name = $("#name" + roomId).val();
    var local = $("#local" + roomId).val();
    var mic = $("#mic" + roomId).val();
    var pj = $("#pj" + roomId).val();
    var person = $("#person" + roomId).val();

    $.ajax({
        url: "../phpExecute/editRooms/popRoomEdit.php?idRoom=" + roomId + "&name=" + name + "&local=" + local + "&mic=" + mic + "&pj=" + pj + "&person=" + person,
        context: document.body
    }).done(function () {
//        alert("Save successfully!");
        window.location.replace("http://localhost:8888/MrBooking/admin/editRoom.php");
    });
}

function roomRemove(roomId){
    $.ajax({
        url: "../phpExecute/editRooms/popRoomRemove.php?idRoom=" + roomId,
        context: document.body
    }).done(function(){
        window.location.replace("http://localhost:8888/MrBooking/admin/removeRoom.php");
    });
}

// university
//function quickUniv(studentId)
//{
//    var addmissionDate = $("#addmissionDate" + studentId).val();
//    var expectedDate = $("#expectedDate"  + studentId).val();
//    var language = $("#languageStudy" + studentId).val();
//    var studyMode = $("#studyMode" + studentId).val();
//    var UStateEdit = $("#UStateEdit" + studentId).val();
//    var univEdit = $("#univEdit" + studentId).val();
//    var facEdit = $("#facEdit" + studentId).val();
//    var StdFieldEdit = $("#StdFieldEdit" + studentId).val();
//    var majEdit = $("#majEdit" + studentId).val();
//    var congrEdit = $("#congrEdit" + studentId).val();
//    
//if (addmissionDate != null && addmissionDate != "")
//    {
//        if (!isValidDate(addmissionDate))
//        {
//            alert("The addmission date is invalid format date.")
//            return;
//        }
//    }
//
//    if (expectedDate != null && expectedDate != "")
//    {
//        if (!isValidDate(expectedDate))
//        {
//            alert("The expected completion date is invalid format date.")
//            return;
//        }
//    }
//    $.ajax({
//        url: "qEditUniv.php?student_id=" + studentId + "&addmissionDate=" + addmissionDate + "&expectedDate=" + expectedDate + "&languageStudy=" + language
//                + "&studyMode=" + studyMode + "&UStateEdit=" + UStateEdit + "&univEdit=" + univEdit + "&facEdit=" + facEdit 
//                + "&StdFieldEdit=" + StdFieldEdit + "&majEdit=" + majEdit + "&congrEdit=" + congrEdit,
//        context: document.body
//    }).done(function () {
//        alert("Save successfully!");
//    });
//}

// Archive
//function quickArch(studentId)
//{
//    var PPNum = $("#PPNum" + studentId).val();
//    var PPType = $("#PPType"  + studentId).val();
//    var PPIss = $("#PPIss" + studentId).val();
//    var PPExp = $("#PPExp" + studentId).val();
//    var PPPl = $("#PPPl" + studentId).val();
//    
//if (PPIss != null && PPIss != "")
//    {
//        if (!isValidDate(PPIss))
//        {
//            alert("The addmission date is invalid format date.")
//            return;
//        }
//    }
//
//    if (PPExp != null && PPExp != "")
//    {
//        if (!isValidDate(PPExp))
//        {
//            alert("The expected completion date is invalid format date.")
//            return;
//        }
//    }
//    $.ajax({
//        url: "qEditArch.php?student_id=" + studentId + "&PPNum=" + PPNum + "&PPType=" + PPType + "&PPIss=" + PPIss
//                + "&PPExp=" + PPExp + "&PPPl=" + PPPl,
//        context: document.body
//    }).done(function () {
//        alert("Save successfully!");
//    });
//}

//Scholarship
//function quickScholar(studentId)
//{
//    var stdCost = $("#stdCost" + studentId).val();
//    var schID = $("#schID"  + studentId).val();
//    var begin = $("#begin" + studentId).val();
//    var effect = $("#effect" + studentId).val();
//    
//    if (begin != null && begin != "")
//    {
//        if (!isValidDate(begin))
//        {
//            alert("The expected completion date is invalid format date.")
//            return;
//        }
//    }
//    $.ajax({
//        url: "qEditScholar.php?student_id=" + studentId + "&stdCost=" + stdCost + "&schID=" + schID + "&begin=" + begin
//                + "&effect=" + effect,
//        context: document.body
//    }).done(function () {
//        alert("Save successfully!");
//    });
//}

//Edit user account
//function saveStaff(staffId)
//{
//    var username = $("#username" + staffId).val();
//    var userType = $("#userType"  + staffId).val();
//    $.ajax({
//        url: "qEditStaff.php?staff_id=" + staffId + "&username=" + username + "&userType=" + userType,
//        context: document.body
//    }).done(function () {
//        alert("Save change successfully!");
//    });
//}
////Edit user account
//function resetPWD(staffId)
//{
//    $.ajax({
//        url: "qResetPWD.php?staff_id=" + staffId,
//        context: document.body
//    }).done(function () {
//        alert("Reset password successfully!");
//    });
//}