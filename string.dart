void main(){
    var nama = 'shinta nurrohmah';
    String shin = "shinta, nur, rohmah";
    var angka = 10;
    String name = 'Shinta';

    // contain untuk mengetahui apakah mengandung string tertentu
    print(nama.contains('s'));
    print(nama.contains('S'));

    // uppercase
    print(name.toUpperCase());
    
    // lowercase
    print(nama.toLowerCase());
   
    // mengubah menjadi string
    print(angka.toString());

    // mengubah menjadi list
    var temp = shin.split(',').toString();
    print(temp);
    print(temp[1]);
    print(shin.split(', ')[1]);

    // for(String t in temp){
    //     print(t);
    // }
    
    // menampilkan substring
    print(nama.substring(7, 10));
    print(nama.substring(7));


    print(nama.length);

    // menghilangkan spasi di belakang dan di belakang
    print(nama.trim());

    // menghilangkan spasi di depan
    print(nama.trimRight());

    // menghilangkan spasi di belakang
    print(nama.trimLeft());

    // menampilkan kode ascii
    print(nama.codeUnitAt(3));

    // menampilkan indeks
    print(nama.indexOf('s'));
    print(nama.indexOf('a'));

    // mengecek awal karakter dengan boolean
    print(nama.startsWith('shinta'));

    // mengecek variabel kosong or not
    print(nama.isEmpty);

}