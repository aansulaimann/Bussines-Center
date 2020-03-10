/* ---------------------------------------------------------------------
Jasa
-----------------------------------------------------------------------*/
// for update table jasa
const jasa = document.querySelector("form#formJasa");
document.getElementById("btn-ubah").addEventListener("click", function () {
  jasa.action = "http://localhost/com.project/Bcapp/public/Jasa/ubah";
});

// for delete data Jasa
document.getElementById("btnHapus").addEventListener("click", function () {
  jasa.action = "http://localhost/com.project/Bcapp/public/Jasa/hapus/";
});

// Show Data jasa
function sendValueJasa(kd, nama, lama, hrg) {
  window.opener.document.getElementById("kdJasa").value = kd;
  window.opener.document.getElementById("nmJasa").value = nama;
  window.opener.document.getElementById("lamaJasa").value = lama;
  window.opener.document.getElementById("hrgJasa").value = hrg;
  window.close();
}