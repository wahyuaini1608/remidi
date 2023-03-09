#include <iostream>

using namespace std;

int main()
{
    int menu1;
    int menu2, yn, y, n, totala, totalb, totalc;

    cout << "==========================================" << endl;
    cout << "Nama sekolah ..." << endl;
    cout << "Nama UKS..." << endl;
    cout << "Slogan UKS..." << endl;
    cout << "==========================================" << endl;
    cout << "1. Info daftar obat yang tersedia (gratis)" << endl;
    cout << "2. Layanan obat dengan resep" << endl;
    cout << "==========================================" << endl;
    cout << "Pilih 1 atau 2 ? ";
    cin >> menu1;
    if(menu1 == 1){
    cout << "------------------------------------------" << endl;
    cout << "Berikut daftar obat yang tersedia (gratis)" << endl;
    cout << "------------------------------------------" << endl;
    cout << "> Pharacetamol "<< endl;
    cout << "> Cepalosporin" << endl;
    cout << "> Aminoglikosida" << endl;
    cout << "__________________________________________" << endl;
    cout << "Kembali ke beranda? ";

    }
    else{
    cout << "==========================================" << endl;
    cout << "DAFTAR HARGA OBAT" << endl;
    cout << "==========================================" << endl;
    cout << "1. Cefadroxil   --- Rp. 15.000,-" << endl;
    cout << "2. Azythromicyn --- Rp. 18.000,-" << endl;
    cout << "3. Cefixime     --- Rp. 38.000,-" << endl;
    cout << "==========================================" << endl;
    cout << "Pilih pesanan Obat ? ";
    cin >> menu2;
    cout << "Kartu BPJS untuk diskon ? (ada/tidak) ";
    cin >> yn;
    if(menu2 == 1 && yn == n){
        totala = 15000;
        cout << "Total : Rp. "<<totala<<endl;
    }else{
        totala = 15000-1500;
        cout << "Total : Rp. "<<totala<<endl;
    }
    }
    return 0;
}

