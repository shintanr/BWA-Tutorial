main(){
    var mahasiswa = ['shinta', 'nur', 'rohmah', 20];

    List<String> siswa = ['ran', 'conan', 'mouri'];

    List<String> herbal = ['kunyit', 'temu lawak', 'serai'];


    print(mahasiswa);
    print(herbal[2]);
    print(siswa.length);
    siswa.add('shinta');
    print(siswa.length);
    print(siswa);
    
    List<String> herbal2 = ['kencuur', 'jahe', 'pala'];
    herbal.addAll(herbal2);
    print(herbal);

    List<String> herbalBaru = herbal.reversed.toList();
    print(herbalBaru);

    // Menghapus list
    herbal.clear();
    print(herbal);
    
}