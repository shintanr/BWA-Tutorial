var name = 'Shinta';    
var year = 2003;
var height = 158;
var interest = ['programming', 'photography', 'astronomy', 'math', 'natural science'];  // list
var contact = {
    'email' : 'betelgeushin@gmail.com',
    'wa' : '098765432123'
};  // map
var image = {
    'tags' : ['photography'],
    'url' : '//path/to/saturn.aviv'
};

// boolean
var isWoman = true;

main(){
    print(name);
    print('nama $name');
    print('nama : ${name}');
    print(interest[3]);
    // jika gini
    print('ketertarikan $name yaitu pada bidang: $interest[0]');    // ini akan menampilkan seluruh yang ada di dalam list
     print('ketertarikan $name yaitu pada bidang: ${interest[0]}'); 

    print('');
    print(image);
    print(contact);

    // to string
    print(image.toString());
    print(contact.toString());

    // using forEach to output the map key-value
    image.forEach((key, value) => print("$key -> $value"));
    print("");
    contact.forEach((kunci, nilai) => print('$kunci ==> $nilai'));
}
