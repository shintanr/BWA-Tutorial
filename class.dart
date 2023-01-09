void main() {
  RekeningBank rekeningShinta =
      new RekeningBank('shinta', 'bank shin', 1000000);
  rekeningShinta.cekSaldo();
}

class RekeningBank {
  String namaPemilik = 'shinta';
  String namaBank = 'bank shin';
  int saldo = 100000000;

  // constructor
  RekeningBank(this.namaPemilik, this.namaBank, this.saldo);

  cekSaldo() {
    print('saldo saat ini adalah $saldo');
  }

  transfer() {
    print('transfer');
  }

  ambilSaldo() {
    print('ambil saldo');
  }
}
