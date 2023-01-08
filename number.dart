void main(){
    var angka = 10;
    int angka2 = 20;
    double angka3 = 30.43452;

    print(angka);
    print(angka2);
    print(angka3);

    print(angka.runtimeType);
    print(angka2.toString().runtimeType);

    print(angka3.floor()); // bulatkan ke bawah
    print(angka3.ceil());  // bulatkan ke atas
    print(angka3.round()); // bulatkan ke angka terdekat

    print(angka2.toDouble());
    print(angka3.toInt());

    // menampilkan banyak angka di belakang koma
    print(angka3.toStringAsFixed(3));
    print(angka3.toStringAsPrecision(3));

}