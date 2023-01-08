void main (){

String nama = 'shinta';
perkenalan(nama);

int sisi = 5;
print(volumeKubus(sisi));
}

void perkenalan(String nama){
    print('halo, saya $nama');
}

int volumeKubus(int sisi){
    return sisi * sisi * sisi;
}