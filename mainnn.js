class Manusia {
    constructor(nama, umur, jenisKelamin, status) {
        this.nama = nama;
        this.umur = umur;
        this.jenisKelamin = jenisKelamin;
        this.status = status;
    }

    dataDiri() {
        return `Halo!, Perkenalkan nama saya ${this.nama}.
         Saya seorang ${this.jenisKelamin} berusia ${this.umur}.
          Saat ini saya adalah seorang ${this.status}`;
    }
}

let manusia1 = new Manusia("Dinashty", 17, "Laki-laki", "Pelajar");

console.log(manusia1.dataDiri());