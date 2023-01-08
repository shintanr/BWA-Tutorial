void main(){
    int n = 10;
    for(int i = 0; i < n; i++){
        var star = '';
        for(int j = 0; j <=i; j++){
            star = star + '*';
        }
        print(star);
    }

    var m = 5;
    for(int i = 0; i < m; i++){
         var bintang = '';
         for(int j = m; j > i; j--){
            bintang = bintang + '*';
         }
         print(bintang);
    }
}