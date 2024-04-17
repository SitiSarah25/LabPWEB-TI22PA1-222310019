document.getElementById("hitung-btn").addEventListener("click", function() {
    var saldo = parseFloat(document.getElementById("saldo").value);
    var bunga = parseFloat(document.getElementById("bunga").value);
    var waktu = parseInt(document.getElementById("waktu").value);
    var output = "<h3>Hasil Perhitungan</h3>";

    for (var i = 1; i <= waktu; i++) {
        saldo += saldo * (bunga / 100); 
        output += "<p>Saldo Bulan " + i + " = Rp. " + saldo.toFixed(0) + "</p>";
    }

    document.getElementById("output-container").innerHTML = output;
});