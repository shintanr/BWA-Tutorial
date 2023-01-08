void main(){
    String nama = 'ShintaFoodSea';
int tahunBerdiri = 2000;
String pemilik = 'Shinta Nurrohmah';
String alamat = 'Jl sudharto, Tembalang, Semarang';
String telepon = '09182746256';
bool statusBuka = true;
List<Map> daftarMakanan = [
    {'nama' : 'Kepiting Rebus', 'harga' : 48000},
    {'nama' : 'Nasi Goreng', 'harga' : 20000},
    {'nama' : 'Udang asam manis', 'harga' : 50000},
    {'nama' : 'Sate Cumi', 'harga' : 30000},
];

List<Map> daftarMinuman = [
    {'nama' : 'Es Jeruk', 'harga' : 5000},
    {'nama' : 'Es Kelapa', 'harga' : 20000},
    {'nama' : 'Es Teh', 'harga' : 50000},
];

Map seaFoodRestaurant = {
    'nama' : nama,
    'tahunBerdiri' : tahunBerdiri,
    'pemilik' : pemilik,
    'alamat' : alamat,
    'telepon' : telepon,
    'statusBuka' : statusBuka,
    'daftarMakanan' : daftarMakanan,
    'daftarMinuman' : daftarMinuman
};

print(seaFoodRestaurant);
}