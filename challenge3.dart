void main(){
    var nilai = 89;

if(nilai > 90 && nilai <= 100){
    print('Sangat baik');
} else if(nilai > 80 && nilai <= 90){
    print('Baik');
} else if(nilai > 70 && nilai <=80){
    print('Cukup');
} else if(nilai > 60 && nilai <=70){
    print('Kurang');
} else if(nilai >= 0 && nilai <= 60) {
    print('sangat kurang');
} else {
    print('Nilai invalid');
}


// ternary operator
print((nilai > 90 && nilai <= 100) ? 'Sangat baik' : (nilai > 80 && nilai <= 90) ? 'Baik' : (nilai > 70 && nilai <= 80) ? 'Cukup' : (nilai > 60 && nilai <=70) ? 'Kurang' : (nilai >= 0 && nilai <= 60) ? 'Sangat kurang' : 'Invalid');

var rate = 'A';
switch(rate){
    case 'A':
    print('Sangat Enak');
    break;
    case 'B':
    print('Enak');
    break;
    case 'C':
    print('Cukup');
    break;
    case 'D':
    print('Kurang');
    break;
    case 'E':
    print('Belajar dulu');
    break;
    default:
    print('invalid');
    break;
}
}