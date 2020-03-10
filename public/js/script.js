/* ---------------------------------------------------------------------
Pesanan
-----------------------------------------------------------------------*/
// Show data pesanan in table after click button tambah
const kdJasa = document.getElementById("kdJasa");
const nmJasa = document.getElementById("nmJasa");
const lamaJasa = document.getElementById("lamaJasa");
const hrgJasa = document.getElementById("hrgJasa");
const hrgPesan = document.getElementById("hrgJual");
const jmlPesan = document.getElementById("jmlJual");
const btnTambah = document.querySelector("button#btntambah");
const tambah = document.getElementById("#buttonTambah");
const tbody = document.querySelector("tbody.tbody");
// console.log(tbody)
btnTambah.addEventListener("click", e => {
  e.preventDefault();
  const hasil = `<td>${kdJasa.value}</td>
                  <td>${nmJasa.value}</td>
                  <td>${lamaJasa.value}</td>
                  <td>${jmlPesan.value}</td>
                  <td>${hrgPesan.value}</td>
                  <td>${jmlPesan.value * hrgPesan.value}</td>`;
  const trBaru = document.createElement("tr");
  trBaru.innerHTML = hasil;
  tbody.appendChild(trBaru);

  // kdJasa.value = ''
  // nmJasa.value = ''
  // lamaJasa.value = ''
  // hrgJasa.value = ''
  // jmlPesan.value = ''
  // hrgPesan.value = ''
});

/* ---------------------------------------------------------------------
cetak nota
-----------------------------------------------------------------------*/
// show data pesan
function sendValuePesan(noSP, tglSp, idDiv, nmDiv, Almt, noTelp, kdjasa, nmjasa, lmjasa, jmljual, hrgjual) {
  window.opener.document.getElementById("noSp").value = noSP;
  window.opener.document.getElementById("tglPesan").value = tglSp;
  window.opener.document.getElementById("idDivisi").value = idDiv;
  window.opener.document.getElementById("nmDivisi").value = nmDiv;
  window.opener.document.getElementById("Alamat").value = Almt;
  window.opener.document.getElementById("noTelp").value = noTelp;
  window.opener.document.getElementById("kdJasa").value = kdjasa;
  window.opener.document.getElementById("nmJasa").value = nmjasa;
  window.opener.document.getElementById("lamaJasa").value = lmjasa;
  window.opener.document.getElementById("jmlJual").value = jmljual;
  window.opener.document.getElementById("hrgJual").value = hrgjual;
  window.opener.document.getElementById("totalBayar").value = jmljual * hrgjual;
  window.close();
}

// show data detil pesan in table cetak nota
tambah.addEventListener("click", () => {
  // const jml = jmlPesan.value * hrgPesan.value
  const hasil = `<td>${kdJasa.value}</td>
                <td>${nmJasa.value}</td>
                <td>${lamaJasa.value}</td>
                <td>${jmlPesan.value}</td>
                <td>${hrgPesan.value}</td>
                <td>${jmlPesan.value * hrgPesan.value}</td>`
  const trBaru = document.createElement("tr")
  trBaru.innerHTML = hasil
  tbody.appendChild(trBaru)
});