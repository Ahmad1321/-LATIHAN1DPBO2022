#include "TimSepakbola.cpp"
using namespace std;

int main(){
	
	//Menggunakan construct
	data a("Real Madrid", "Spanyol", 1902, 25);
	
	//Print output
	a.output();
	
	cout << endl;
	
	//Menggunakan set
	data b;
	b.settim("Liverpool");
	b.setnegara("England");
	b.settahun(1892);
	b.setjumlah(34);
	
	//Print Output
	b.output();
}
