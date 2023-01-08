void main(){

    int i = 1;
    while(i <= 100){
        if(i % 2 == 0){
        print(i);
        }
        i++;
    }

    List daftarMakanan = ['sate', 'rendang', 'rujak'];
    int indeks = 0;
    print('Daftar Makanan');
    while(indeks < daftarMakanan.length){
        print(daftarMakanan[indeks]);
        indeks++;
    }
}