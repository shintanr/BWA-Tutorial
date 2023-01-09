

class Latihan{
    String nama;
    int umur;

    Latihan(this.nama, this.umur); // konstructor

    set setSayHello(String nama){
        this.nama = nama;
        print(nama);
    }

    int get getUmur{
        print(umur);
        return umur;
    }


}

    void main(){
    Latihan latihan = new Latihan('Shinta', 19);
    latihan.getUmur;
    latihan.setSayHello = 'helo shinta';
    latihan.setSayHello = 'helo aku sehinta';
    }