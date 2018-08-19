
		// function proses(){
		// 	var x = document.getElementById("hitung").type;
  //   		document.getElementById("Totalharga").innerHTML = x;
		// }
		// function proses(){
		
		// var benihtext = parseInt(document.getElementById("benihtext").value);
		// var pakantext = parseInt(document.getElementById("pakantext").value);
		// var obattext = parseInt(document.getElementById("obattext").value);
		
		// var totalbenih = 1000000*benihtext;
		// var totalpakan = 390000*pakantext;
		// var totalobat = 25000*obattext;
		
		// var totalbarang = benihtext+pakantext+obattext;
		// var totalharga = totalbenih+totalbenih+totalbenih;

		// document.getElementById("totalbarang").value = totalbarang;
		// document.getElementById("totalharga").value = totalharga;
		
		// }





// Perhitungan 1
	function proses(){
		var wo = document.getElementById('bobotawaltxt').value;
		var wt = document.getElementById('bobotakirtxt').value;
		var d = document.getElementById('jmlikanmatitxt').value;
		var f = document.getElementById('bottxt').value;
		
		
		var a = parseInt(wt) + parseInt(d);
		var b = parseInt(wo);
		var c = parseInt(f);
		var per = 100;
		var hitung = a-b/c*per;
		document.getElementById('Totalharga').value = hitung;
	}



	
// Perhitungan 2
	function hitung(){
		var wo = document.getElementById('ikantxt').value;
		var d = document.getElementById('modaltxt').value;
		var p = document.getElementById('ppajak').value;
		var a = parseInt(wo)
		var b = parseInt(d);
		var hitung = a-b ;
		//var pajak = parseInt(p)
		document.getElementById('Totalkeuntungan').value;
		document.getElementById('Totalkeuntungan').value = hitung;

		if (hitung>=10000)
			{jak = 10*hitung/100;}
			else 
		if (hitung<=10000)
			{jak = 5*hitung/100;}
			else
			{jak = 0*hitung/100;}
			ppajak= jak;
			document.getElementById('ppajak').value=ppajak;

	}

// Keuntungan
	function untung(){
		var beli = document.getElementById('harga_beli').value;
		var jual = document.getElementById('hatga_jual').value;
		var kuran = jual-beli;
		document.getElementById('Keuntungan').value = kuran;

	}

// Login
  function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;       
        if (username != "" && password!="") {
            return true;
        }else{
            alert('Username dan Password harus di isi !');
            return false;
        }
    }