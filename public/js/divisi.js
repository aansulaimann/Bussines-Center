/* ---------------------------------------------------------------------
Divisi
-----------------------------------------------------------------------*/
// for update data divisi
const form = document.querySelector("form#formDivisi");
document.getElementById("btnUbah").addEventListener("click", function () {
    form.action = "http://localhost/com.project/Bcapp/public/Divisi/ubah";
    // console.log(form)
});

// for delete data divisi
document.getElementById("href").addEventListener("click", function () {
    form.action = "http://localhost/com.project/Bcapp/public/Divisi/hapus/";
});

// show data Divisi
function sendValue(idDivisi, nama, lantai, noTelp) {
    window.opener.document.getElementById("idDivisi").value = idDivisi;
    window.opener.document.getElementById("nmDivisi").value = nama;
    window.opener.document.getElementById("Lantai").value = lantai;
    window.opener.document.getElementById("noTelp").value = noTelp;
    window.close();
}